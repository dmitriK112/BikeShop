<?php

class Database{

    private $host = "localhost";
    private $db = "bike_test";
    private $user = "root";
    private $pass = "";
    private $charset = "utf8";
    public $pdo;


    public function __construct() {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
            //PDO::ERRMODE_EXCEPTION - zachytime vynimku (exception) a tak ziskame error
            //PDO::ERRMODE_WARNING - vyhodi warning (nie je idealne pre produkciu)
            //PDO::ERRMODE_SILENT - nevyhodi nic
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }

    public function __destruct(){
        $this->pdo = null;
    }

    public function getConnection(){
        return $this->pdo;
    }

    public function getAllBikes() {
        $sql = "SELECT * FROM products WHERE type like '%BIKE%'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPopularProducts($limit=3) {
        $sql = 'SELECT * FROM products order by popularity desc limit :limit';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAccessories() {
        $sql = "SELECT * FROM products WHERE type like '%accessories%'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getParts() {
        $sql = "SELECT * FROM products WHERE type like '%Parts%'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

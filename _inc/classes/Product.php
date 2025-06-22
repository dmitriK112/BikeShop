<?php
class Product {
    private $db;
    private $id;
    private $name;
    private $model;
    private $price;
    private $popularity;
    private $description;
    private $type;
    private $brand;
    private $image;

    public function __construct(Database $database){
        $this->db = $database->getConnection();
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($data) {
            //print_r($data);
            $this->id = $data['id'];
            $this->name = $data['name'];
            $this->model = $data['model'];
            $this->price = $data['price'];
            $this->description = $data['description'];
            $this->type = $data['type'];
            $this->brand = $data['brand'];
            $this->image = $data['image'];
            return $data;
        }
        return false;
    }
    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getModel() { return $this->model; }
    public function getPrice() { return $this->price; }
    public function getImg() { return $this->image; }

    public function getGetSizes($product_id) {
        $sql = "SELECT s.size 
            FROM sizes s
            JOIN product_sizes ps ON s.id = ps.size_id
            JOIN products p ON p.id = ps.product_id
            WHERE p.id = :product_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


}


<?php
class User
{
    private $db;

    public function __construct(Database $database)
    {
        $this->db = $database->getConnection();
    }

    public function index()
    {
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        //FETCH_ASSOC - ziskame asociativne pole
        //FETCH_OBJ - ziskame data ako objekt
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    public function create($name, $email, $password, $role) {
        // Skontrolujeme, či už existuje používateľ s rovnakým emailom
        $stmt = $this->db->prepare("SELECT id FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->fetch(PDO::FETCH_ASSOC)) {
            // Užívateľ s týmto emailom existuje
            return false;
        }

        // Zašifrujeme heslo
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $this->db->prepare("
            INSERT INTO users (name, email, password, role) 
            VALUES (:name, :email, :password, :role)
        ");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
        $stmt->bindParam(':role', $role, PDO::PARAM_STR);

        return $stmt->execute();
    }

    public function destroy($id) {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); //PDO::PARAM_INT - nepovinne
        return $stmt->execute();
    }
    public function show($id){
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function edit($id, $name, $email, $password, $role) {
        $stmt = $this->db->prepare("UPDATE users SET 
                 name = :name, email = :email, password = :password, role = :role WHERE id = :id");

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':role', $role, PDO::PARAM_INT);
        return $stmt->execute();
    }
}

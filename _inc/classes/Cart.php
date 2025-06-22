<?php

class Cart {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db->getConnection();
    }

    public function addToCart($userId, $productId, $size, $quantity = 1)
    {
        $sql = "SELECT * FROM cart WHERE product_id = :product_id AND user_id = :user_id and size = :size";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':product_id', $productId, PDO::PARAM_INT);
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':size', $size, PDO::PARAM_STR);
        $stmt->execute();
        $item = $stmt->fetch();

        if ($item) {
            $sql = "UPDATE cart SET quantity = quantity + :quantity WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            $stmt->bindParam(':id', $item['id'], PDO::PARAM_INT);
            $stmt->execute();
        } else {
            $sql = "INSERT INTO cart (user_id, product_id, size, quantity) VALUES (:user_id, :product_id, :size, :quantity)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':user_id', $userId);
            $stmt->bindParam(':product_id', $productId);
            $stmt->bindParam(':size', $size);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->execute();
        }
    }

    public function updateCart($cartId, $quantity)
    {
        $sql = "SELECT * FROM cart WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $cartId);
        $stmt->execute();
        $item = $stmt->fetch();
        if ($item['quantity'] < abs($quantity) && $quantity < 0) {
            //return false;
        }
        elseif ($item['quantity'] == abs($quantity) && $quantity < 0) {
            $this->removeFromCart($item['id']);
        }
        else{
            $sql = "UPDATE cart SET quantity = quantity + :quantity WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            $stmt->bindParam(':id', $cartId, PDO::PARAM_INT);
            $stmt->execute();
        }
    }

    public function removeFromCart($cartId) {
        $sql = "DELETE FROM cart WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $cartId, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function getCartItems($userId) {
        $sql = "SELECT c.*, p.name, p.model, p.price, p.image 
            FROM cart c 
            JOIN products p ON c.product_id = p.id 
            WHERE c.user_id = :user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':user_id', $userId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotal($userId) {
        $sql = "SELECT SUM(c.quantity * p.price) as total 
            FROM cart c 
            JOIN products p ON c.product_id = p.id 
            WHERE c.user_id = :user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':user_id', $userId);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'] !== null ? (float)$result['total'] : 0.0;
    }


}

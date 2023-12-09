<?php
require_once 'models/database.php';
require_once 'models/User.php';

class UserController {
    private $db;
    private $model;

    public function __construct() {
        $this->db = (new Database())->getConnection();
        $this->model = new User($this->db);
    }

    public function listUsers() {
        $stmt = $this->model->read();
        $users = $stmt->fetchAll(PDO::FETCH_OBJ);
        require 'views/user_list.php';
    }
}
?>

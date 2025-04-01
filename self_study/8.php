<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    try {
     if (empty($email) || empty($password)) {
        throw new Exception('Поле обязательное для заполнение');
     }
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         throw new Exception('Формат эмайла');
     }
     if (strlen($password) < 5) {
        throw new Exception('Короткий пароль');
     }
    } catch (Exception $e) {
     print($e->getMessage());
    }
} 
 
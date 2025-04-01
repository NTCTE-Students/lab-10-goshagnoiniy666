<?php 
class ValidationException extends Exception {
    public function __construct($message, $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   try {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new ValidationException('Validation no');
    }
   } catch (ValidationException $e) {
    print $e->getMessage();
    }
} 


?>

<?php 
class DatabaseConnectionException extends Exception {
    public function __construct($message, $code = 0, ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
function connectToDB(){
    $conn = new mysqli('pma.has.bik','stdent','student');
    if ($conn -> connect_error) { 
       throw new DatabaseConnectionException($conn -> connect_error);
    }
    return ('Connect');
}

try {
    print(connectToDB());
} catch (\Exception $e) {
    print($e ->getMessage());
}
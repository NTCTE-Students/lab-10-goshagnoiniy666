<?php 
class FileReadException extends Exception{
    public function __construct($message = "", $code = 0, Throwable $previous = null){
        parent::__construct($message, $code, $previous);
    }
}
try {
    $file = fopen('r.txt', 'r');
    if (empty(($file))) {
        throw new FileReadException("not exist");
    }
    while (($line = fgets($file)) !== false) {
        print("{$line}<br>");
    
    }

} catch (FileReadException $e) {
    print($e -> getMessage());
}
fclose($file);

?>
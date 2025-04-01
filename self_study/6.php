<?php 
class ShopException extends Exception {}
class ProductException extends ShopException {}

try {
    $a=2;

    $b=0;
    if ($b == 0){
        throw new ProductException('o no');
    }
    print($a/$b);
} catch (ProductException $e) {
    print $e->getMessage();
}

?>
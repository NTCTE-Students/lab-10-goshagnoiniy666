<?php 
class ZeroException extends Exception {}
class OneException extends Exception {}

try {
    $a=1;

    $b=0;
    if ($b == 0){
        throw new ZeroException('oh no 0');
    } elseif ($a == 1){
        throw new OneException('oh no 1');
    }
    print($a/$b);
} catch (ZeroException | OneException $e) {
    print($e ->getMessage());
}
<?php
$filename = 'error.log';
function divide( int $a, int $b ) {
    if ( $b == 0 ) {
        throw new Exception("NA 0 DELIT NELZYA \n");
    }
    return $a / $b;
}
try {
    print( divide( 1, 0 ) );
} catch ( Exception $e ) {
    $mess = $e->getMessage();
    file_put_contents($filename, $mess, FILE_APPEND);

}
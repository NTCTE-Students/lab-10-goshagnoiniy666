<?php
function divide( int $a, int $b ) {
    if ( $b == 0 ) {
        throw new Exception('NA 0 DELIT NELZYA');
    }
    return $a / $b;
}
try {
    print( divide( 1, 1 ) );
} catch ( Exception $e ) {
    print($e->getMessage());
}
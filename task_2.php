<?php

$numbers = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];

function removeEvenNumbers( &$arr ) {
    $arr = array_filter( $arr, function ( $num ) {
        return $num % 2 !== 0;
    } );
}

removeEvenNumbers( $numbers );

print_r( $numbers );

?>

<?php

function generatePassword( $length ) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    for ( $i = 0; $i < $length; $i++ ) {
        $randomChar = $chars[rand( 0, strlen( $chars ) - 1 )];
        $password .= $randomChar;
    }

    return $password;
}

$length = 12;
$password = generatePassword( $length );
echo "Generated Password: " . $password;

echo PHP_EOL;

?>

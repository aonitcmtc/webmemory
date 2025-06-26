<?php

function _print_r($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    return $data;
}

function oopsrand() {
    return rand(999,999999);
}

function oopshash($key = "123456", $data = "user:pass") {
    // Generate a SHA-256 hash with the key
    $hashedData = hash_hmac("sha256", $data, $key);

    // echo "Test >>> </br>";
    // echo "Hashed Data: f71815d7697ecd27da648706482b34d96375ab4d98fa39e76e18f85dced84802";
    // echo "</br>";
    // echo "Hashed Data: " . $hashedData;
    return $hashedData;
}

function oopsuserAuth($server) {
    $authHeader = $server['HTTP_AUTHORIZATION'] ?? null;
    return true; //dev Test
    if ($authHeader) {
        // echo "Authorization Header: $authHeader\n</br>";
        
        $expectedToken = 'bmltLWZyb250ZW5kOnppOCpLVzRYdTFnNw=='; // dev test
        // Check Timeout
        // Decode($expectedToken)

        if ($authHeader === "Bearer $expectedToken") {
            // echo "Header validation successful!";
            return true;
        } else {
            // echo "Invalid Authorization Header.";
            return false;
        }
    } else {
        // echo "No Authorization Header provided.";
        return false;
    }
}


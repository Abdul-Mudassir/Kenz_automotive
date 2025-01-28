<?php
$production_URL = 'https://kenzautomotive.com/';
$development_URL = 'http://192.168.0.131/Kenz_Automotive/';




// Determine the environment
if ($_SERVER['SERVER_NAME'] == '192.168.0.131') {
    define('BASE_PATH', $development_URL);
} else {
    define('BASE_PATH', $production_URL);
}

// Now BASE_PATH will be set correctly depending on the environment
?>

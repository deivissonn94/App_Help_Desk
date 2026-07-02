<?php

echo PHP_OS_FAMILY;

if (PHP_OS_FAMILY === 'Windows') {
    define('PASTA_PRIVADA', 'C:/xampp/app_help_desk_privada');
} else {
    define('PASTA_PRIVADA', '/var/www/app_help_desk_privada');
}

?>
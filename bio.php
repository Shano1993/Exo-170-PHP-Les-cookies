<?php

require __DIR__ . '/index.php';

foreach ($_COOKIE as $cookieName => $cookieValue) {
    echo "$cookieName => $cookieValue <br>";
}

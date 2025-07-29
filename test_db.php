<?php
try {
    $db = new PDO('sqlite:database.sqlite');
    echo "Connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

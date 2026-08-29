<?php
require __DIR__ . '/dbconnect.php';

$connection = connectDb();
if ($connection instanceof PDO) {
    echo '<h1>PHP + MySQL setup OK</h1>';
    echo '<p>Database connection successful.</p>';
} else {
    echo '<h1>Database connection failed</h1>';
    echo '<pre>' . htmlspecialchars($connection, ENT_QUOTES, 'UTF-8') . '</pre>';
}

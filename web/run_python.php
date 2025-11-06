<?php
include 'navbar.php';

echo "<h2>Running Python Program...</h2>";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input = escapeshellarg($_POST["user_input"]); // sanitize input
    $output = shell_exec("python3 /var/www/html/python/my_program.py $input 2>&1");
    echo "<pre>$output</pre>";
} else {
    echo "<p>No input provided.</p>";
}
?>
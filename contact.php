<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $full_name = $_POST["full_name"];
    echo "ჯავშანი მიღებულია ", $full_name; 
}
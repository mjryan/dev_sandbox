<?php

// Connect to a database
$conn = mysqli_connect('localhost', 'root', '', 'ajaxtest');

$query = 'SELECT * FROM users';

$result = mysqli_query($conn, $query);

// Fetch Data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);

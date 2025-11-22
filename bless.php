<?php
include 'db.php';

$id = $_GET['id'];

$conn->query("UPDATE books SET status='borrowed' WHERE id=$id");

echo "Book borrowed successfully!";
echo "<br><a href='view_books.php'>Back</a>";
?>

<?php
session_start();
echo "მოგესალმებით" . $_SESSION['email'];
echo "<a href='logout.php'>გამოსვლა</a>";
?>
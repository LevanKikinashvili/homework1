<?php
$username = $_POST['user_name'];

$password = $_POST['user_password'];

$email = $_POST['user_email'];

if(empty($username)) {

    $name_error = 'გთხოვთ შეიყვანოთ სახელი';
} elseif(strlen($username) < 5) {
    $name_error = "სახელი არ შეიძლება იყოს 5ზე ნაკლები";
}
if(empty($password)) {

    $password_error = 'გთხოვთ შეიყვანოთ პაროლი';
} elseif(strlen($password) < 5) {
    $password_error = "პაროლი არ შეიძლება იყოს 5ზე ნაკლები";
}

if(empty($email)) {

    $email_error = 'გთხოვთ შეიყვანოთ მეილი';
} elseif (!preg_match("/^[a-zA-Z ]*$/",$email)) {
    $email_error = "შეყვანილი მეილი უნდა ემთხვეოდეს მეილის ფორმას";
}
include('index.php');


?>
<?php

$conn = mysqli_connect("localhost", "root", "", "login-php");

if (!$conn) {
    echo "Falha na Conexão";
}
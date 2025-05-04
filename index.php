<?php
namespace Baikov\Work12;
use Baikov\Work12\PasswordValidator;
require 'vendor/autoload.php';
$password = readline("Введите пароль: ");
if (PasswordValidator::validate($password)) {
    echo "Пароль валиден.\n";
} else {
    echo "Пароль не соответствует требованиям.\n";
}
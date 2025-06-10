<?php

declare(strict_types=1);

function is_input_empty(string $username, string $password){
    if(empty($username) || empty($password)){
        return true;
    } else {
        return false;
    }
}

function user_doesnt_exists(bool|array $result){
    if(!$result){
        return true;
    } else {
        return false;
    }
}

function is_pwd_wrong(string $password, string $hashedPwd){
    if(!password_hash($password, $hashedPwd)){
        return true;
    } else {
        return false;
    }
}
<?php

declare(strict_types=1);

function user_doesnt_exists(bool|array $result){
    if(!$result){
        return true;
    } else {
        return false;
    }
}
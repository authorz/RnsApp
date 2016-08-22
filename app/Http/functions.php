<?php
namespace App\Http;
/**
 * Created by PhpStorm.
 * User: crazy
 * Date: 16/8/19
 * Time: 11:14
 */

function getPosts(){
    return json_decode(file_get_contents('php://input', true),true);
}
<?php
/**
 * Created by PhpStorm.
 * User: omer
 * Date: 2019-04-12
 * Time: 10:43
 */

use Webuti\SslCheck\Main;

include("vendor/autoload.php");


$check = new Main('webuti.com');


//$check = Webuti\SslCheck('webuti.com');

print_r($check->getRemainingDate());
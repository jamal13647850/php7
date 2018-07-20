<?php
/**
 * Created by PhpStorm.
 * User: Jamal
 * Date: 7/20/2018
 * Time: 9:29 PM
 */

declare(strict_types=1);

//int bool float
function sum(float $a , float $b):float {
    return $a + $b;

}

var_dump(sum(1,2));

//old
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

//new
$username = $_GET['user'] ?? 'nobody';
//or
$username = $_GET['user'] ?? $_POST['user'] ?? 'nobody';

var_dump($username);
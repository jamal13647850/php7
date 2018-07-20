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


$nameList = ["jamal","kamal","ali","behnam","morteza","rasool"];
function cmp($stringA , $stringB){
    /*if($stringA > $stringB) {return 1;}
    if($stringA < $stringB) {return -1;}
    if($stringA == $stringB) {return 0;}*/
    return $stringA <=> $stringB;
}
usort($nameList,'cmp');
var_dump($nameList);



interface Logger{
    public function log(string $msg);
}

class Application{
    private $logger;
    public function getLogger() : Logger{
       return $this->logger;
    }
    public function setLogger(Logger $logger){
        $this->logger = $logger;
    }
}
$app = new Application();
$app->setLogger(new class implements Logger {
    public function log(string $msg){
        var_dump($msg);
    }
});
$app->getLogger()->log("Message");
<?php
/**
 * Created by IntelliJ IDEA.
 * User: aiwenzhang
 * Date: 2018/7/26
 * Time: 11:14
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

//示例1
//mock myfunc, test Model
include(__DIR__ . "/mock/myfunc.php");
include(__DIR__ . "/mock/time.php");
include(__DIR__ . "/service/Model.php");
$s = new \service\Model();
var_dump($s->getTime() == 1100);

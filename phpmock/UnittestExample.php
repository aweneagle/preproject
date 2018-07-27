<?php
/**
 * Created by IntelliJ IDEA.
 * User: aiwenzhang
 * Date: 2018/7/27
 * Time: 20:18
 */

abstract class Mock {
    public function index($num) {
        return $this;
    }

    public function setReturn($return) {
        return $this;
    }

    public function setRefReturn($paramName, $paramValue) {
        return $this;
    }

    public function validateParams($params) {
        return $this;
    }
}

class MockFunc extends  Mock {
    public function __construct($funcname) {
    }
}

class MockClass extends  Mock {
    public function __construct($classname){
    }

    public function Method($method) {
        return $this;
    }
}

include(__DIR__ . "/mock/myfunc.php");
include(__DIR__ . "/mock/Model.php");
include(__DIR__ . "/service/Service.php");

//第0次调用的返回值
$mf = new MockFunc("myfunc");
$mf->index(0)->setReturn("result")->setRefReturn("name", "king")->validateParams(["name" => "awen"]);

$mc = new MockClass("Model");
$mc->index(0)->Method("getTotal")->setReturn("result")->setRefReturn("name", "king")->validateParams(["name" => "awen"]);

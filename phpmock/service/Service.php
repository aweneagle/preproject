<?php
/**
 * Created by IntelliJ IDEA.
 * User: aiwenzhang
 * Date: 2018/7/26
 * Time: 11:24
 */

namespace service;

class Service
{
    public function getTime(Model $b) {
        return $b->getTime();
    }

    public function getNewTime() {
        $b = new Model();
        return $b->getTime();
    }
}

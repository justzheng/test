<?php
/**
 * Created by PhpStorm.
 * User: cyr
 * Date: 2019/2/26
 * Time: 10:29
 */

namespace ztaoyu\test\request;

use ztaoyu\test\ztyGet;

class request
{
    public function test(){
        $a = new ztyGet();
        return $a->getType();
    }
}
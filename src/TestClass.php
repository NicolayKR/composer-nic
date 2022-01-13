<?php

namespace ctrlv\ComposerNic;

class TestClass {

    public static function upperFirst($str) {
        $new_str = mb_strtolower($str);
        $new_str = mb_strtoupper(mb_substr($new_str, 0, 1)) . mb_substr($new_str, 1);
        echo $new_str;
    }

}
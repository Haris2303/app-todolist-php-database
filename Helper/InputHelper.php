<?php

namespace Helper {

    class InputHelper
    {
        public static function input(string $message)
        {
            echo $message;
            return trim(fgets(STDIN));
        }
    }
}

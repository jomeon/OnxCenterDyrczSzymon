<?php

class Pipeline
{
    public static function make(...$function){
        return function($arg) use ($function)
        {
            $result = $arg;
            foreach ($function as $func){
                $result = $func($result);
            }
            return $result;
        };
    }
}
<?php
class Hello{
    //properties
    const BR = "<br />";
    public function sayHello(){
        echo "Hello World!".self::BR;
    }
}
$greetings = new Hello;
$greetings->sayHello();
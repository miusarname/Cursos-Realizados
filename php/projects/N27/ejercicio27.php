<?php 

class oneclass{
    public static function aMethod(){
        echo 'Hello I am a static method';
    }
}

oneclass::aMethod();//Use a method without instantiating with static methods
?>
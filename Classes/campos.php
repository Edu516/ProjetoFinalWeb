<?php

class campos{
    
    public function __construct(object $objeto) {
        print(var_dump($objeto));
        if(isset($objeto)){
            return false;
        }
        if(comunicado::class == $objeto){
            return true;
        }
    }

}

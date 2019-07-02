<?php

class Controller {
    public static function createView($viewName) {
        $nedko = 'shity';
        require_once("./Views/$viewName.php");
        
    }
}

?>
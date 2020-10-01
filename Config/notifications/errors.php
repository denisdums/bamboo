<?php

class ErrorsMessage {

    protected $error;

    public function __construct($error){
    $this->error = $error;
    }

    public function getError() {
        $error = $this->error;
        $error = str_replace('(','[',$error);
        $error = str_replace(')',']',$error);
        return $error;
    }

}


class DisplayError{

    protected $errorMessage;

    public function __construct($errorMessage){
        $this->errorMessage = $errorMessage;
    }

    public function getErrorDisplay() {
        $error = $this->errorMessage;
        $error = addslashes($error);
        $error = str_replace('(','[',$error);
        $error = str_replace(')',']',$error);
        echo "<script>
            console.log('%cBamboo SQL Error','color:green; font-size:8pt;'),
            console.log('".$error."');    
        </script>";
    }

}


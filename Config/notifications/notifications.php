<?php


class SqlConnection{


    public function __construct(){
    }

    public function getSqlConnected() {
        echo "<script>
            console.log('%cBamboo Database Connected !','color:green; font-size:8pt;')
        </script>";
    }

}
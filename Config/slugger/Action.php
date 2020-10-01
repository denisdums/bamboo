<?php

require ('Config/slugger/ActionList.php');

class Action
{
    protected $slug;

    public function __construct($slug) {
        $this->slug = $slug;
    }

    public function getAction() {
        $actions = new ActionList();
        $actions = $actions->getActionLIst();
        $values = false;

        foreach ($actions as $value => $key){
            if ($this->slug === $value){
                $values = true;
                $redirection = $key;
            }
            elseif ($values === false){
                $values = false;
            }
        }

        if ($values === false){
            return include ('App/views/404.php');
        }
        elseif (isset($redirection)){
            return include ("App/$redirection");
        }
    }
}
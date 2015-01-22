<?php

class IndexAction extends Core_ActionAbstract
{
    public function proceed()
    {
        echo 'Hello, world!';
        $this->getView()->disable();
    }
}
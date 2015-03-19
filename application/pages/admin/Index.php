<?php

class Admin_IndexAction extends Core_ActionAbstract
{
    public function init()
    {
        $this->getView()->setLayoutScript('admin.phtml');
    }

    public function proceed()
    {

    }
}
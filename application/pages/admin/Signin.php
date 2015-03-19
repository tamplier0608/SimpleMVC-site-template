<?php

class Admin_SigninAction extends Core_ActionAbstract
{
    public function process()
    {
        $this->getView()->disableLayout();

        if ($this->getRequest()->isPost()) {
            header('Location: /admin/index/');
        }
    }
}
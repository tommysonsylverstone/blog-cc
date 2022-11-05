<?php

namespace Controller\Admin;

class AdminController
{
    public function backoffice()
    {
        require('view/admin/backoffice.view.php');
    }

    public function articleList()
    {
        require('view/admin/articles/list.view.php');
    }

    public function articleAdd()
    {
        require('view/admin/articles/add.view.php');
    }
}

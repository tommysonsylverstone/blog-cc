<?php

namespace Controller\Admin;

use DateTimeImmutable;
use Model\Posts;

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
        if (!empty($_POST)) {
            extract($_POST);
            $date = new DateTimeImmutable();
            $post = new Posts(null, $title, $content, $author, $date->format('Y-m-d H:i:s'), 0);
            var_dump($post);
        }
        require('view/admin/articles/add.view.php');
    }
}

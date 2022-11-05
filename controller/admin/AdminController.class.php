<?php

namespace Controller\Admin;

use DateTimeImmutable;
use Model\Posts;
use Model\PostsManager;

class AdminController
{
    private $pManager;
    public function __construct() {
        $this->pManager = new PostsManager;
    }
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
        $status = "";
        if (!empty($_POST)) {
            extract($_POST);
            $date = new DateTimeImmutable();
            $post = new Posts(null, $title, $content, $author, $date->format('Y-m-d H:i:s'), 0);
            $posting = $this->pManager->add($post);
            if ($posting) {
                $status = "Votre billet a été enregistré";
            }
        }
        require('view/admin/articles/add.view.php');
    }
}

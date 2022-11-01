<?php

namespace Controller\Website;

class WebsiteController
{
    public function home()
    {
        require('view/website/home.view.php');
    }

    public function register()
    {
        require('view/website/register.view.php');
    }
}

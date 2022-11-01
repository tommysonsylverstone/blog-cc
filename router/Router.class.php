<?php

namespace Router;

use Controller\Website\WebsiteController;

class Router
{
    private $websiteController;

    public function __construct()
    {
        $this->websiteController = new WebsiteController;
    }

    /**
     * run
     *
     * @return void
     */
    public function run(): void
    {
        $action = $_GET['action'] ?? '';
        switch ($action) {
            case "register":
                $this->websiteController->register();
                break;
            case "connection":
                $this->websiteController->connection();
                break;
            default:
                $this->websiteController->home();
                break;
        }
    }
}

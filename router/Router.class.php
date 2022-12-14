<?php

namespace Router;

use Controller\Website\WebsiteController;
use Controller\Admin\AdminController;
class Router
{
    private $websiteController;

    public function __construct()
    {
        $this->websiteController = new WebsiteController;
        $this->adminController = new AdminController;
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
            case "disconnect":
                $this->websiteController->disconnect();
                break;
            case "profile":
                $this->websiteController->profile();
                break;
            case "admin":
                $this->adminController->backoffice();
                break;
            default:
                $this->websiteController->home();
                break;
        }
    }
}

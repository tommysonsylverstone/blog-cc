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
                if ($_SESSION['status'] !== "editor") {
                    header('location: index.php');
                } else {
                    $p = $_GET['p'] ?? '';
                    switch ($p) {
                        case "list":
                            $this->adminController->articleList();
                            break;
                        case "add":
                            $this->adminController->articleAdd();
                            break;
                        default:
                            $this->adminController->backoffice();
                            break;
                    }
                }
                break;
            default:
                $this->websiteController->home();
                break;
        }
    }
}

<?php

namespace Router;

use Controller\Website\WebsiteController;

class Router {

    private $websiteController;

    public function __construct() {
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
            default:
                $this->websiteController->home();
                break;
        }
    }
}
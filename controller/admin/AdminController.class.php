<?php

namespace Controller\Admin;

class AdminController {
    public function backoffice() {
        session_start();
        if ($_SESSION['status'] !== "editor") {
            header('location: index.php');
        } else {
            require('view/admin/backoffice.view.php');
        }
    }
}
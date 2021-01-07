<?php
class ManageController
{
    public function Manage()
    {
        var_dump($_SESSION['username']);
       
        if (!isset($_SESSION['username'])) {
            header("Location: ./index.php?controller=home&action=lognInAdmin");
        }
        include FILE_CHUA . '/view/admin/admin.php';
    }
}

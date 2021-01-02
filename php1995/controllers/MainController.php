<?php


class MainController extends Controller
{
    public function actionMain()
    {
        require_once 'config/db.php';
        $this->renderView('', 'pages/main');
    }
}
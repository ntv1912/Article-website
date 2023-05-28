<?php
    require_once "../app/config/config.php";
    require_once ROOT.'/lib/DBConnection.php';
    $controller=isset($_GET['controller'])?$_GET['controller']:'home';
    $action=isset($_GET['action'])?$_GET['action']:'index';
    switch($controller){
        case 'home':
            require_once ROOT.'/app/controllers/ArticleController.php';
            $articleController =new ArticleController();
            break;
    }
    switch($action){
        case'index':
            $articleController->index();
            break;
        case 'delete':
            require_once ROOT.'/app/controllers/ArticleController.php';
            $articleId = isset($_GET['id']) ? $_GET['id'] : '';
            $articleController =new ArticleController();
            $articleController->delete($articleId);
            break;
        
        default:
            echo "không có hoạt động này";
    }
?>
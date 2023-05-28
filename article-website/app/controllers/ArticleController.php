<?php
    require_once ROOT."/app/services/ArticleService.php" ;
    class ArticleController{
        public function index(){
            $articleService= new ArticleService();
            $articles =$articleService->getAllArticle();
            include ROOT.'/app/views/home/index.php';
        }
        public function delete($id) {
            $articleService = new ArticleService();
            $isDeleted = $articleService->deleteArticle($id);
            echo"$id";
            if ($isDeleted) {
                echo "Bài viết đã được xóa thành công.";
            } else {
                echo "Xóa bài viết không thành công.";
                
            }
            ?> <a href=<?=DOMAIN.'/public/index.php';?>><button>Trở lại</button></a>
            <?php
        }
     
        

    }

?>
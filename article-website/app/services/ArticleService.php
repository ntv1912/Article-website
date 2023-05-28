<?php
    require_once ROOT.'/lib/DBConnection.php';
    require_once ROOT.'/app/models/Article.php';
    class ArticleService{
        private $conn;
        
        public function __construct() {
            $dbConnection = new DBConnection();
            $this->conn = $dbConnection->getConnection();
        }
        
        public function getAllArticle(){
            
            $articles =[];
            if($this->conn!=null){
                $sql="SELECT * FROM article";
                $stmt=$this->conn->query($sql);
            
                while ($row = $stmt->fetch()){
                    $article= new Article($row['id'],$row['title'],$row['content'],$row['created']);
                    $articles[]=$article;
                }
            }
            return $articles;
        }


        public function deleteArticle($id) {
            $sql = "DELETE FROM article WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
    
            return $stmt->rowCount() > 0;
        }
        
        
        }
        
?>
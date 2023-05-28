<?php
    class Article {
        private $id;
        private $title;
        private $content;
        private $created_at;


        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getTitle() {
            return $this->title;
        }

        public function setTitle($title) {
            $this->title = $title;
        }

        public function getContent() {
            return $this->content;
        }

        public function setContent($content) {
            $this->content = $content;
        }

        public function getCreatedAt() {
            return $this->created_at;
        }

        public function setCreatedAt($created_at) {
            $this->created_at = $created_at;
        }
        
        public function __construct($id,$title,$content,$created){
            $this->id =$id;
            $this->title=$title;
            $this->content=$content;
            $this->created_at=$created;
        }
    }
        

?>
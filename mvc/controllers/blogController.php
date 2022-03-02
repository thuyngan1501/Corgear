<?php

class blogController extends Controller{
    public function show(){
        /* $blogs = $this->callmodel("BlogDB");
        $blogs = $blogs->getAll(); */

        $limit = 4;
        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
        $start_from = ($page-1) * $limit; 
        $blogs = $this->callmodel("BlogDB");
        $blogs = $blogs->getFourRecord($start_from, $limit);
        $this->callview("blog",["blog"=> $blogs]);
    }
    public function detail($param){
        console_log($param['title']);
        $blogs = $this->callmodel("BlogDB");
        $blogs = $blogs->getById($param['title']);
        console_log($blogs);
        $this->callview("blogDetail",["blog"=> $blogs]);
    }
    /* public function showFourRecord(){
        if( isset($_GET{'page'} ) ) {
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }
    } */
}

?>
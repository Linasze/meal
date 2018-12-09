<?php


class Mains extends Controller {
    public function __construct(){
       
    }

    public function index(){
        

        $this->view('mains/index');
    }

 
    public function add(){
       
           $this->view('mains/add');
    }

 
 
       

}
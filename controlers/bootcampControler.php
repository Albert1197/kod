<?php
class bootcampController {
    public $bootcamp;
    public function __construct(){
        $this->bootcamp = new Bootcamp();
    }

    public function index(){
        //controlo modelos
       $bootcamps =  $this->bootcamp->get_bootcamps();

       include '/views/bootcampView.php';
    }
}

?>
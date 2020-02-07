<?php
  class Pages extends Controller {
    public function __construct(){

    }

    public function index() {
      $data = [ 'title' => 'MVC-Model'];

      $this->view('pages/index', $data);
    }

    public function about() {
      $data = [ 'title' => 'ABOUT US PAGE' ];

      $this->view('pages/about', $data);
    }

  }
?>
<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $data['house'] = $this->model('Catalogue_model')->getAllHouse();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}

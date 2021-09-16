<?php

class Contact extends Controller
{
    public function index()
    {
        $data['title'] = 'Contact Us';
        $this->view('templates/header', $data);
        $this->view('contact/index');
        $this->view('templates/footer');
    }
}

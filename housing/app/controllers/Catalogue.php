<?php

class Catalogue extends Controller
{
    public function index()
    {
        $data['title'] = 'Catalogue';
        $data['house'] = $this->model('Catalogue_model')->getAllHouse();
        $this->view('templates/header', $data);
        $this->view('catalogue/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['title'] = 'Catalogue';
        $data['house'] = $this->model('Catalogue_model')->getHouseID($id);
        $this->view('templates/header', $data);
        $this->view('catalogue/detail', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        if ($this->model('Catalogue_model')->addHouseData($_POST) > 0) {
            Flasher::setFlash('successfully', 'added', 'success');
            header('Location: ' . BASEURL . '/catalogue');
            exit;
        } else {
            Flasher::setFlash('failed', 'to be added', 'warning');
            header('Location: ' . BASEURL . '/catalogue');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Catalogue_model')->deleteHouseData($id) > 0) {
            Flasher::setFlash('successfully', 'removed', 'success');
            header('Location: ' . BASEURL . '/catalogue');
            exit;
        } else {
            Flasher::setFlash('failed', 'to be removed', 'warning');
            header('Location: ' . BASEURL . '/catalogue');
            exit;
        }
    }

    public function getEdit()
    {
        echo json_encode($this->model('Catalogue_model')->getHouseID($_POST['id']));
    }
    public function edit()
    {
        if ($this->model('Catalogue_model')->editHouseData($_POST) > 0) {
            Flasher::setFlash('successfully', 'updated', 'success');
            header('Location: ' . BASEURL . '/catalogue');
            exit;
        } else {
            Flasher::setFlash('failed', 'to be updated', 'warning');
            header('Location: ' . BASEURL . '/catalogue');
            exit;
        }
    }

    public function search()
    {
        $data['title'] = 'Catalogue';
        $data['house'] = $this->model('Catalogue_model')->searchHouseData();
        $this->view('templates/header', $data);
        $this->view('catalogue/index', $data);
        $this->view('templates/footer');
    }
}

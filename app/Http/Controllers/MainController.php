<?php

namespace App\Http\Controllers;

use Core\View;

class MainController
{
    public $model;

    public function __construct(\App\Models\Main $model)
    {
        $this->view = new View();
        $this->model = $model;
    }

    public function index()
    {
        $var = 'var-index';
        return $this->view->setView(
            'main',
            ['var' => $var, 'mar' => 'mar', 'tintiri' => 'tintiri']
        );
    }

    public function other($param, $param2, $param3, $param4 = null)
    {
        echo "Other things...".$param.' '.$param2.' '.$param3.' '.$param4;
    }

    public function simple()
    {
        echo "This is simple method without any params or complications...";
    }

    public function fetch()
    {
        $result = $this->model->findAll();
        var_dump($result);die();
    }

    public function singlefetch()
    {
        $result = $this->model->find(2);
        var_dump($result);die();
    }

    public function create()
    {
        $data = [
            'name' => 'Test without gender',
            'gender' => 1,
            'drugo' => 'drugo'
        ];
        $result = $this->model->create($data);
        var_dump($result);die();
    }

    public function update()
    {
        $data = [
            'name' => 'MashroomS',
            'gender' => 1
        ];
        $result = $this->model->update(2, $data);
        var_dump($result);die();
    }

    public function delete()
    {
        $result = $this->model->delete(2);
        var_dump($result);die();
    }
}

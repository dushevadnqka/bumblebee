<?php

namespace App\Http\Controllers;

use Core\View;

class MainController
{

    public function __construct()
    {
        $this->view = new View();
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
}

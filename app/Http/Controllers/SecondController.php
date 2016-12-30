<?php

namespace App\Http\Controllers;

use App\Services\TestService;

/**
 * Description of SecondController
 *
 * @author dushevadnqka
 */
class SecondController
{
    protected $testService;


    public function __construct(TestService $testService)
    {
        $this->testService = $testService;
    }

    public function index()
    {
        echo 'Second Controller index method';
    }

    public function another()
    {
        echo 'Second Controller another method';
    }

    public function third()
    {
        echo $this->testService->joro();
    }
}

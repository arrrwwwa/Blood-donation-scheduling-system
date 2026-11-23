<?php

class HomeController extends Controller
{
    public function index()
    {
        $name = "Arwa";
        $age = 20;

        $this->view("home/index", [
            'name' => $name,
            'age' => $age
        ]);
    }

}

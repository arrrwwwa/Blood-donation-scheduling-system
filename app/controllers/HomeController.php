<?php

class HomeController extends Controller
{
    public function index()
    {
        $name = "Arwa";
        $age = 19;

        $this->view("home/index", [
            'name' => $name,
            'age' => $age
        ]);
    }

}

<?php

class HomeController extends Controller
{
    public function index()
    {
        $name = "Ali";
        $age = 20;

        $this->view("home/index", [
            'name' => $name,
            'age' => $age
        ]);
    }

}

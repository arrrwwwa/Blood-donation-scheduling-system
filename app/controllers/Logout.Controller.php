<?php

class LogoutController extends Controller
{
    public function index()
    {
        $_SESSION = [];
        session_destroy();

        header('Location: ' . BASE_URL . '/login');
        exit;
    }
}
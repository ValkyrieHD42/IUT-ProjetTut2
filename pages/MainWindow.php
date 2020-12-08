<?php


class MainWindow
{
    /**
     * MainWindow constructor.
     */
    public function __construct()
    {
        include('inc/header.php');
        include('inc/index.php');
        include('inc/footer.php');
    }

    public function Profile()
    {
        require('ProfileWindow.php');
        $pageProfil = new ProfileWindow();
    }

    public function GotoDetails()
    {
        require('ActivityWindow.php');
    }


    public function Connect()
    {

    }

    public function Disconnect()
    {
        //fait dans logout.php

    }
}
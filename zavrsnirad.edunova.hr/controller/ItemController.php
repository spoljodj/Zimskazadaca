<?php

class ItemController extends AutorizacijaController
{
    public function index()
    {
        $this->view->render('privatno' . 
        DIRECTORY_SEPARATOR . 'item' .
        DIRECTORY_SEPARATOR . 'index');
    }
}
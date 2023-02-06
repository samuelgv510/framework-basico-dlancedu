<?php

class loginController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        Session::set('autenticado', true);
        Session::set('level', 'especial');

        Session::set('var1', 'var1');
        Session::set('var2', 'var2');
        $this->redireccionar('login/mostrar');
    }
    public function mostrar()
    {
        echo 'Level: ' . Session::get('level') . '<br>';
        echo 'Var 1: ' . Session::get('var1') . '<br>';
        echo 'Var 2: ' . Session::get('var2') . '<br>';
    }
    public function cerrar()
    {
        Session::destroy();
        //Session::destroy(array('var1','var2'));
        $this->redireccionar('login/mostrar');
    }
}

<?php
namespace App\Http\Controllers\Owner;
use App\Http\Controllers\Controller;

class OwnerController extends Controller {

    public function index()
    {
        return view('owner/top', ['loginFlag' => false]);
    }

    public function getLogin()
    {
        return view('owner/login', ['loginFlag' => false]);
    }

    public function postLogin()
    {
        return view('owner/mytop', ['loginFlag' => true]);
    }

    public function getLogout()
    {
        return redirect('owner/login');
    }

    public function getRegister()
    {
        return view('owner/register', ['loginFlag' => false]);
    }

    public function postRegister()
    {
        return view('owner/mytop', ['loginFlag' => true]);
    }

    public function getSample()
    {
        return view('farmer/sample', ['loginFlag' => false]);
    }

    public function getDialy() {
        return view('owner/dialy', ['loginFlag' => true]);
    }

    public function getMytop() {
        return view('owner/mytop', ['loginFlag' => true]);
    }


}
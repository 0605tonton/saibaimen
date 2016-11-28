<?php
namespace App\Http\Controllers\Owner;
use App\Http\Controllers\Controller;
use Storage;

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
	$files = Storage::files('midori_pic');
        $urls = array();
	foreach($files as $file) {
            $url = Storage::url($file);
            logger($url);
	    array_push($urls, $url);
        }
        return view('owner/mytop')->with(['loginFlag' => true, 'urls' => $urls]);
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
	$files = Storage::files('midori_pic');
        $urls = array();
	foreach($files as $file) {
            $url = Storage::url($file);
            logger($url);
	    array_push($urls, $url);
        }
        return view('owner/mytop')->with(['loginFlag' => true, 'urls' => $urls]);
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

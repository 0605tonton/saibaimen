<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

/*
 * みどりクラウドからのデータ受信処理
 */
Route::post('/api/midori', function (Request $request) {
    Log::info('Showing user profile for user: '.$request);

    $filedir = "/home/saibaimen/laravel/storage/app/midori_dat";
    $picfiledir = "/home/saibaimen/laravel/storage/app/midori_pic";

    $ts = date("YmdHis");
    $filename = $filedir . "post_" . $ts . ".txt";
    $pictfilename = $picfiledir . "pic_" . $ts;
    $writestr = "";

    // POST
    foreach ($_POST as $key => $value) {
        $writestr .= $key . "=" . $value . "\r\n";
    }

    // FILE
    foreach ($_FILES as $name => $item) {
        $tempfile = $item["tmp_name"];
        $upfilename = $item["name"];
            $savefilename = $pictfilename . $upfilename;
        if ($item["error"] == 0) {
            $result = @move_uploaded_file($tempfile, $savefilename);
        }
        if ($result) {
            $writestr .= "file : " . $upfilename . "\r\n";
            $writestr .= "saved to : " . $savefilename . "\r\n";
        }
    }

    $fs = fopen($filename, "w+");
    flock($fs, LOCK_EX);
    fputs($fs, $writestr);
    flock($fs, LOCK_UN);
    fclose($fs);
})->middleware('auth:api');

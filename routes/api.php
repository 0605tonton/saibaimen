<?php

use Illuminate\Http\Request;
use App\MidoriCloud;

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
Route::post('/midori.php', function (Request $request) {
    $filedir = "/home/saibaimen/laravel/storage/app/midori_dat/";
    $picfiledir = "/home/saibaimen/laravel/storage/app/midori_pic/";

    $ts = date("YmdHis");
    $filename = $filedir . "post_" . $ts . ".txt";
    $pictfilename = $picfiledir . "pic_" . $ts;
    $writestr = "";

    // みどりクラウドから受信したデータをデータベースに保存する
    $midoriCloud = new MidoriCloud;
    logger("co:".$request->input("co"));
    logger("sw_ver:".$request->input("sw_ver"));
    logger("watertemp:".$request->input("watertemp"));
    logger("device_id:".$request->input("device_id"));
    logger("temperature:".$request->input("temperature"));
    logger("soil_moisture:".$request->input("soil_moisture"));
    logger("humidity:".$request->input("humidity"));
    logger("illuminance:".$request->input("illuminance"));
    logger("hw_ver:".$request->input("hw_ver"));
    logger("file:".$request->file('photo'));
    logger("saved_to:".$pictfilename . $request->file('photo'));
    $midoriCloud->co = $request->input("co");
    $midoriCloud->sw_ver = $request->input("sw_ver");
    $midoriCloud->watertemp = $request->input("watertemp");
    $midoriCloud->device_id = $request->input("device_id");
    $midoriCloud->temperature = $request->input("temperature");
    $midoriCloud->soil_moisture = $request->input("soil_moisture");
    $midoriCloud->humidity = $request->input("humidity");
    $midoriCloud->illuminance = $request->input("illuminance");
    $midoriCloud->hw_ver = $request->input("hw_ver");
    $midoriCloud->file = $request->file("photo");
    $midoriCloud->saved_to = $pictfilename . $request->file('photo');
    $midoriCloud->save();

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

})->middleware('api');

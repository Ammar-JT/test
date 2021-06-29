<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PagesController extends Controller
{
    public function pdf() {
        $visits = Redis::incr('pdf-visits');
        $publicPath = getcwd();
        $rootPath = substr($publicPath, 0, strpos($publicPath, "\public"));
        $path = $rootPath .'\storage\file.pdf';
        $type = "application/pdf";
        header('Content-Type: '. $type);
        header('Content-Length: '.filesize($path));

        readfile($path);
        die;
     }

     
    public function pdfFromPublicFile(){

        $currentPath = getcwd();
        //dd($currentPath);
        $path = $currentPath . '/file.pdf';
        $type = "application/pdf";
        header('Content-Type: '. $type);
       // header('Content-Disposition: attachment; filename="file.pdf";' );
        header('Content-Length: '.filesize($path));

        readfile($path);
        die;
    }


    public function index(){

        $visits = Redis::get('pdf-visits');
        return view('welcome')->with('visits', $visits);
    }
}

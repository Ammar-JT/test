<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AgainController extends Controller
{
    
    public function simpleQr(){
        $result = QrCode::format('png')->merge( '/public/storage/materials/wall.jpg', .3)->size(250)->color(150,90,10)->generate('Make me a QrCode!');
        
        
        echo $result;
    }

    public function scrollSpy()
    {
        return view('scroll_spy');
    }
}

<?php

namespace App\Http\Controllers;




//endroid qr code library:
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\HttpFoundation\Response;


class PagesController extends Controller
{
    public function index(){

        $visits = Redis::get('pdf-visits');
        return view('welcome')->with('visits', $visits);
    }
    
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


    


    public function tooltip(){
        return view('tooltip');
    }

    public function resizeIndex(){
        return view('resizing');
    }

    public function resizeStore(Request $request){
        $h = 'hoohohos';
        
        if($request->hasFile('blob')){ //$req and hasFile is from laravel, instead of the global variable $_POST['']
            $image = $request->file('blob')->store('public/images');
            return "image uploaded successfully in public/images";
        }
        
    }

    public function imageDroplist(){
        return view('image-droplist');
    }


    public function endroidQr(){
        $writer = new PngWriter();
        

        // Create QR code
        $qrCode = QrCode::create('EHEHHEHHEHE')
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(500)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(33, 200, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        //public directory:
        $publicPath = getcwd();


        $logo = Logo::create($publicPath . '/storage/materials/wall.jpg')
            ->setResizeToWidth(100);

        // Create generic label
        $label = Label::create('McDonalds')
            ->setTextColor(new Color(255, 0, 0));

        $result = $writer->write($qrCode, $logo, $label);


        // Directly output the QR code
        header('Content-Type: '.$result->getMimeType());
        echo $result->getString();
    }

    



}

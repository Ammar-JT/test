<?php

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
    Route::get('/', function(){
        //key: value // string, set that: 
        //Redis::set('friend', 'momo');
        //now see the value: 
        //dd(Redis::get('friend'));
    
        //key: value // list
        //Redis::lpush('frameworks', ['vuejs','laravel','nodejs']);
        //see the value of that list (lrange = list range, put a range or put 0, -1 so you can get all)
        //dd(Redis::lrange('frameworks', 0, -1)); // the list doesn't care if element is duplicated, unlike the set
    
        //key: value // set, the set does care if element is duplicated, unlike the list
        //..so all the values are unique on it: 
        //Redis::sadd('fronted-frameworks', ['angular, vuejs, react']);
        //dd(Redis::smembers('fronted-frameworks'));

        //set a number and incr or decr
            //Redis::set('foo', 1);
            //Redis::incr('foo');
            //dd(Redis::get('foo'));

        //exists?:
            /* 
            if(!Redis::exists('foo')){
                Redis::set('foo', 26);
                Redis::incr('foo');  
            }else{
                Redis::set('foo', 50);
            }
            dd(Redis::get('foo'));
            */

        //del: 
            /*
            if(Redis::exists('foo')){
                Redis::del('foo');
            }
            dd(Redis::get('foo'));
            */

        //flushall: delete everything
            /*
            Redis::set('foo', 50);
            Redis::flushall();
            dd(Redis::get('foo'));
            */

        //i think it called key spaces key:subkey
            /*
            Redis::set('page:views', 50);
            Redis::set('page:name', 'main page');
            Redis::set('page:type', 'html');


            Redis::incr('page:views');

            dd(Redis::get('page:views') . '|' . Redis::get('page:name') . '|' . Redis::get('page:type'));
            */


        //setex: set a value with expiration time:
            /*
            //Redis::setex('foo', 12, '(i will be gone)');
            //dd('value is:' . Redis::get('foo') . ', it will disapeer in:' . Redis::ttl('foo'));

            //to persist the value: 
            Redis::persist('foo');
            dd('value is:' . Redis::get('foo') . ', it will disapeer in:' . Redis::ttl('foo'));
            */

        //dd(time());
        //----------------
        //list: lpush<<push from the left ,, rpush<<push from the right ,,
            //Redis::lpush('people', 'ammar');
            //Redis::lpush('people', 'khaled');
            //Redis::lpush('people', 'ziyad');

        //ranges base on index:
            //dd(Redis::lrange('people', 0,-1));
            //dd(Redis::lrange('people', 1,2));

        //rpush
            //Redis::rpush('people', 'asim');
            //dd(Redis::lrange('people', 0,-1));

        //lpop: delete from left, rpop: delete from right
            //Redis::lpop('people');
            //Redis::rpop('people');
        //dd(Redis::lrange('people', 0,-1));

        //------
        //sorted set, i skipped regular set cuz it's very similar to list
        //.. the only difference is that set has no duplicated elements

        //ok, why i'm using sorted set? cuz i needed to count unique visitors: 

        //zadd: add element to set with its score: 
            //Redis::zadd('users', 123 , 'ammar');
            //Redis::zadd('users', 123 , 'asim');
            //Redis::zadd('users', 222 , 'ziyad');

            //dd(Redis::zscore('users', 'ziyad'));
            //dd(Redis::zrange('users', 0,-1));

        //zadd, but i will use time() as score!
            //$startTime = time();
            //Redis::zadd('users', $startTime , 'ammar');
            //Redis::zadd('users', time() , 'asim');
            //Redis::zadd('users', time() , 'ziyad');

            ////dd(Redis::zscore('users', 'ammar') . '|' . Redis::zscore('users', 'ziyad'));
            ////dd(Redis::ZRANGEBYSCORE('users', $startTime, time()));
            //dd(Redis::zcount('users', $startTime, time()));

        //i will use time() as score, and ip:time() as value

            //Redis::zadd('visits', time() ,  $_SERVER['REMOTE_ADDR'] . ":" . time() . "-" . rand());

            //Redis::save();
    
            // let's convert todays date to time() format
            //$startTime = strtotime("30th august 2021");

            //dd(Redis::ZRANGEBYSCORE('visits', $startTime, time()));
            //dd(Redis::zcount('visits', $startTime, time()));
            //dd(Redis::zrange('visits', 0,-1));













   /*     
    });
*/







Route::get('/simple-qr', [App\Http\Controllers\AgainController::class, 'simpleQr'])->name('simple-qr');

Route::get('/endroid-qr', [App\Http\Controllers\PagesController::class, 'endroidQr'])->name('endroid-qr');

Route::get('/image-droplist', [App\Http\Controllers\PagesController::class, 'imageDroplist'])->name('image-droplist');


Route::get('/resize', [App\Http\Controllers\PagesController::class, 'resizeIndex'])->name('resize.index');
Route::post('/resize', [App\Http\Controllers\PagesController::class, 'resizeStore'])->name('resize.store');


Route::get('/tooltip', [App\Http\Controllers\PagesController::class, 'tooltip'])->name('tooltip');

// the '/' and '/pdf' used redis, it won't work until you run a redis server:
Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');
Route::get('/pdf', [App\Http\Controllers\PagesController::class, 'pdf'])->name('pages.pdf');

//this next route will display a pdf file already exist in public, you can see it through this route: 
Route::get('/public-pdf', [App\Http\Controllers\PagesController::class, 'pdfFromPublicFile'])->name('pages.public-pdf');
//.. or just add in url: /file.pdf


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home.dashboard');


Route::get('/country', function(){
    // Get single country
    $aCountry = country('sa');

    // Get country name                                 
    echo $aCountry->getName();  

    // Get country native name
    echo '<br>' . $aCountry->getNativeName();

    // Get country official name                        
    echo '<br>' . $aCountry->getOfficialName();   

    // Get country ISO 3166-1 alpha2 code
    echo '<br>' . $aCountry->getIsoAlpha2();

    // Get country area                                 
    echo '<br>' . $aCountry->getArea();  

    // Get country borders                         
    echo '<br>';
    foreach ($aCountry->getBorders() as $border){
        echo $border . '|';
    }

    // Get country currencies                           
    echo '<br>';
    foreach ($aCountry->getCurrencies() as $curr){
        foreach($curr as $key=>$val){
            echo $key . ':' . $val . '|';
        }
        
    } 
    // Get country languages          
    echo '<br>';
    foreach ($aCountry->getLanguages() as $lang){
        echo $lang . '|';
    } 

    // Get country emoji                                
    echo '<br>' . $aCountry->getEmoji();  

    // Get country flag                     
    echo '<br>' . $aCountry->getFlag();

    // calling code (the one that i test tried this repo for XD): 
    echo '<br>';
    foreach ($aCountry->getCallingCodes() as $callingCode){
        echo $callingCode . '|';
    } 


    // Get all countries                                
    $countries = countries(); 
    dd(country('kz'));

    dd($countries['gr']);

    
    

    // Get countries with where condition (continent: Oceania)
    //$whereCountries = \Rinvex\Country\CountryLoader::where('geo.continent', ['OC' => 'Oceania']);
});







//----------------------------------------------------
//              why this project?
//----------------------------------------------------
/*
- Just a new project to test some stuff:
    1- a pdf viewer from a private resource
    2- bootstrap admin panel 
    3- redis visitor counter
    4- contries list + country data
    5- tooltip pop up when hover over a div
*/


//----------------------------------------------------
//              pdf viewer
//----------------------------------------------------
/*
- this funtion will display a pdf from a public folder: 
         PagesController@pdfFromPublicFile()

- this one will display a pdf file from a private folder, which is /test/storage/file.pdf
        PagesController@pdf()

*/

//----------------------------------------------------
//              bootstrap admin panel
//----------------------------------------------------
/*
- I will use SB admin 2, which is a very famous bootstrap admin panel
  .. this is it: 

- I can modify it by myself, but I will follow this tutorial cuz it's more convenient: 
    https://www.youtube.com/watch?v=DLU8YF2WrWk&t=13s&ab_channel=TechToolIndia

- make auth.

- I'll use this  default controller for all admin panel functions: 
         homeController

- I'll set up: 
    1- login
    2- register
    3- dashboard layout
    4- dashboard page and home

- done!!

*/




//----------------------------------------------------
//              redis pdf visitors counter
//----------------------------------------------------
/*
- set up redis, and install predis

- count all the visitors to the private pdf

- store values in redis

- display number of visitors in '/'

*/



//----------------------------------------------------
//              contries data (using rinvex/countries repository)
//----------------------------------------------------
/*
- install this: 
    https://github.com/rinvex/countries

- use it in this route in web.php: 
    /country

- enjoy :)

*/

//----------------------------------------------------
//              tooltip
//----------------------------------------------------
/*
- made a div border color changed when hovering over it, also a tooltip displayed in the top corner, 
I will use this feature in some of my project

- obviously used this route for that: 
        'tooltip'

*/






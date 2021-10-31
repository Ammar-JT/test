<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<style>
    /*
        .nav-scroller {
            position: static;
            z-index: 99;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            padding-bottom: 5rem;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .stickyadd{
            position: fixed !important;
            box-shadow: 0 1px 8px 3px rgba(0, 0, 0, 0.05);
            background: rgb(250, 250, 250)
        }

    */
    body {
        position: relative; 
    }

    .navbar{
        -webkit-overflow-scrolling: touch;
        overflow-y: hidden;
        z-index: 99;
    }

    .navbar-collapse{
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    
    }

    
  #section1 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
  #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
  #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
  #section4 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
  #section5 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}

  #section6 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
  #section7 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
  #section8 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
  #section9 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
  #section10 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}
  #section11 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
  #section12 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}


  </style>
</head>
<body data-spy="scroll" data-target="#navbar1" data-offset="200">

    <div class="container">
        <div class="pre-nav text-center">
            <br><br><br><br>
            adsf 
            <br>
            asdfsdf
            <br>
            asdf
            <br>asdfsdf
            <br>
            asdf
            <br><br><br>
        </div>
        <div class="limit"></div>
        <nav id="navbar1" class="navbar navbar-expand navbar-dark bg-primary">
            <div class="navbar-collapse collapse" id="myNavbar">
                <ul class="navbar-nav w-100 justify-content-between">
                    <li class="nav-item">
                        <a class="nav-link " href="#section1">section1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section2">section2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section3">section3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section4">section4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section5">section5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section6">section6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section7">section7</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section8">section8</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section9">section9</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section10">section10</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section11">section11</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section12">section12</a>
                    </li>
                </ul>
            </div>
        </nav>    
    
        <div id="section1" class="container-fluid">
            <h1>Section 1</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section2" class="container-fluid">
            <h1>Section 2</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section3" class="container-fluid">
            <h1>Section 3</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section4" class="container-fluid">
            <h1>Section 4</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section5" class="container-fluid">
            <h1>Section 5</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section6" class="container-fluid">
            <h1>Section 6</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
    
        <div id="section7" class="container-fluid">
            <h1>Section 7</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section8" class="container-fluid">
            <h1>Section 8</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section9" class="container-fluid">
            <h1>Section 9</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section10" class="container-fluid">
            <h1>Section 10</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section11" class="container-fluid">
            <h1>Section 11</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section12" class="container-fluid">
            <h1>Section 12</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
    </div>





<script>
    
    $(document).ready(function(){

        $(window).bind('scroll', function() {
            if($(window).scrollTop() >= $('.limit').offset().top ) {
                console.log('adf');
                $(".navbar").addClass(" fixed-top container px-4");
            }else{
                console.log('adf');
                $(".navbar").removeClass(" fixed-top container px-4");
            }
            $(".active").attr("tabindex",-1).focus();

        });




    });
</script>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <!--
        
        <script src="js/msdropdown/jquery-1.3.2.min.js" type="text/javascript"></script>
        <script src="js/msdropdown/jquery.dd.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="css/msdropdown/dd.css"/>
    -->

</head>
<body>
    <!-- this shit is not useful cuz the image size is fixed -->
    <!--
        <select name="webmenu" id="webmenu">
            <option value="rocks"  data-image="storage/materials/rocks.jpg">Rocks</option>
            <option value="wood"  data-image="storage/materials/wood.jpg">Wood</option>
            <option value="wall"  data-image="storage/materials/wall.jpg">Wall</option>
        </select>
        <script language="javascript">
            $(document).ready(function(e) {
                try {
                    $("body select").msDropDown();
                } catch(e) {
                    alert(e.message);
                }
            });
        </script>
    -->

    <div class="btn-group" style="margin:10px;">    <!-- CURRENCY, BOOTSTRAP DROPDOWN -->
        <!--<a class="btn btn-primary" href="javascript:void(0);">Currency</a>-->                    
        <a class="btn btn-light dropdown-toggle" data-toggle="dropdown" href="#"><img style="max-width: 100px" src="storage/materials/rocks.jpg"> USD <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><img style="max-width: 100px" src="storage/materials/rocks.jpg" />Rocks</li>
            <li><img style="max-width: 100px" src="storage/materials/wall.jpg" />Wall</li>
            <li><img style="max-width: 100px" src="storage/materials/wood.jpg" />Wood</li>
        </ul>
    </div>


    <input type="text" name="material" id="material">


<script>
    /* BOOTSTRAP DROPDOWN MENU - Update selected item text and image */
    $(".dropdown-menu li").click(function () {
    var selText = $(this).text();
    var imgSource = $(this).find('img').attr('src');
    var img = '<img style="max-width: 100px" src="' + imgSource + '"/>';        
    $(this).parents('.btn-group').find('.dropdown-toggle').html(img + ' ' + selText + ' <span class="caret"></span>');
    
    $("#material").val(selText);

    });
    
</script>
</body>
</html>
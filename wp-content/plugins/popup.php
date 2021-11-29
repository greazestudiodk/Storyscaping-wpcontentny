<?php
/**
* Plugin Name: Mit Plugin
* Plugin URI: https://www.storyscaping.dbdesigns.dk/
* Description: Plugin for storyscaping exam.
* Version: 1.0
* Author: Dilon Bune
* Author URI: https://www.storyscaping.dbdesigns.dk/
**/

box();

echo "
    <style>
        #popup{
            display: none;
            z-index: 1000;
            padding: 20px 30px;
            width: 500px;
            height: 260px;
            position: fixed;
            bottom: 0;
            right: 0;
            background: url(https://cdn.tourradar.com/s3/content-pages/656/1200x630/c9Zaa3.jpeg);
            background-size: cover;
        }
        
        .myInput{
            padding: 2px 4px!important;
            width: 220px;
            font-size: 12px;
        }
        
        .mySubmit{
            background: #6E549E!important;
            color: white!important;
            border: none!important;
            width: 220px;
        }.mySubmit:hover{
            background: #474787!important;
            color: white!important;
            border: none!important;
        }

        #dismiss{
            position: absolute;
            top: 20px;
            right: 30px;
            color: #444444;
            text-decoration: none;
            font-size: 24px;
            font-family: Arial;
            transform:rotate(45deg);
        }

        #dismiss:hover{
            -webkit-animation:spin 2s linear infinite;
            -moz-animation:spin 2s linear infinite;
            animation:spin 2s linear infinite;
        }

        @keyframes spin { 
            100% { 
                -webkit-transform: rotate(360deg);
                transform:rotate(360deg); 
            } 
        }
    </style>

    

    <script>
        var box = document.getElementById('popup');
        setTimeout(function () {
            box.style.display = 'block';
        }, 2000);

        function dismiss(){
            var box = document.getElementById('popup');
            box.style.display = 'none';
        }
    </script>
";

function box(){
    echo "
    <div id='popup'>
        <form method='POST'>
            <h5 style='color: #6E549E'>VELKOMMEN TIL VORES OPLEV SAMMEN UNIVERS!</h5>
            <p style:'color: #444444'>Skriv dig op til vores nyhedsbrev og hold dig opdateret på nye oplevelser</p>
            <input class='myInput' name='email' type='email' placeholder='indtast e-mail' />
            <br/ ><br/ >
            <input class='mySubmit' name='submit' type='submit' value='Tilmeld!' />
        </form>
        <a id='dismiss' href='#' onclick='dismiss()'>+</a>
    </div>
    ";
}
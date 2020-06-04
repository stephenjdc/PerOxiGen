<?php

function getHeader($pageTitle) {
    $style = file_get_contents('style.css');
    echo "<!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>$pageTitle</title>
        <style>
        $style
        </style>
    </head>



    <body>  
    ";
}

function getPageContainer() {
    echo "<div class='pageContainer'>
            <div class='headerImageContainer'>
                <img src='media/logo.png'>
            </div>
            <div class='menuContainer'>
                <a href='index' class='menuItem'>Home</a>
                <a href='products' class='menuItem'>Products</a>
                <a href='contact' class='menuItem'>Contact</a>
            </div>
            
            ";
}

function closePageContainer() {
    echo "</div>";
}

function getFooter() {
    echo "<div class='footerContainer'>© 2020 PerOxiGen, Patents Pending</div>";
    echo "</body>
    </html>";
}
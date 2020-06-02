<?php

function getHeader($pageTitle) {
    echo "<!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>$pageTitle</title>
        <link rel=\"stylesheet\" href=\"style.css\" class=\"css\">
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
                <a href='contact' class='menuItem'>Contact</a>
            </div>
            
            ";
}

function closePageContainer() {
    echo "</div>";
}

function getFooter() {
    echo "<div class='footerContainer'>© 2020 Peroxigen, Patents Pending</div>";
    echo "</body>
    </html>";
}
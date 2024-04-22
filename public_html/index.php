<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>BlockStrukture</title>
        <link  href="styles/styleBlock.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="header">HEADER</div>
        <div id="wrapper">
            <div id="sidebarLeft">
                <ul>
                    <li><a href="#">Overview</a></li>
                    <li><a href="#">Product</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div id="sidebarRight">
                <!-- Форма регистрации formReg.html -->
                <div>
                    <iframe src="sideBarRight/formReg.html" width="91%" height=300px frameborder="0" scrolling="yes"> </iframe>
                </div>
                <div>
                    <!-- txt.php -->
                    <iframe src="sideBarRight/txt.php" width="91%" height=10px frameborder="0" scrolling="yes"> </iframe>
                </div>
                 <div>
                    <!-- newTxt.html -->
                    <iframe src="sideBarRight/newTxt.html" width="91%" height=10px frameborder="0" scrolling="yes"> </iframe>
                 </div>
                
            </div>
            <div id="mainText">
                <b>What's an API?</b>
                <p>
                    An API is a set of definitions and protocols for building and integrating application software. It’s sometimes referred to as a contract between an information provider and an information user—establishing the content required from the consumer (the call) and the content required by the producer (the response). For example, the API design for a weather service could specify that the user supply a zip code and that the producer reply with a 2-part answer, the first being the high temperature, and the second being the low. 
                    In other words, if you want to interact with a computer or system to retrieve information or perform a function, an API helps you communicate what you want to that system so it can understand and fulfill the request.
                    You can think of an API as a mediator between the users or clients and the resources or web services they want to get. It’s also a way for an organization to share resources and information while maintaining security, control, and authentication—determining who gets access to what. 
                    Another advantage of an API is that you don’t have to know the specifics of caching—how your resource is retrieved or where it comes from.
                </p>
                <p>
                    Today's date:  
                    <?php
                        echo date('l jS \of F Y h:i:s A');
                    ?>
                </p>
            </div>
        </div>
        <div id="footer">
            <address>Country, City, Street Str. Nr.N</address>
        </div>
    </body>
</html>

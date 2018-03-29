<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #333;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
            	<img class="logo-img" data-home-url="http://www.coretech.com.br/" data-light-url="http://site.coretech.com.br/wp-content/uploads/2017/11/CORENEGATIVO.png" data-dark-url="http://site.coretech.com.br/wp-content/uploads/2017/10/logocoretech-1.png" src="http://coretech.com.br/wp-content/uploads/2017/11/CORENEGATIVO.png" style="position: absolute;"> 
                <h1>Simple PHP App</h1>
                <h2>Congratulations</h2>
                <p>Your PHP application is now running on a container in Amazon ECS.</p>
                <p>The container is running PHP version <?php echo phpversion(); ?>.</p>
                <?php
                        $myfile = fopen("/var/www/my-vol/date", "r") or die("");
                        echo fread($myfile,filesize("/var/www/my-vol/date"));
                        fclose($myfile);
                ?>

            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script> 
    </body>

</html>

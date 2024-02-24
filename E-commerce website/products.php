<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style type="text/css">
                   footer{
    padding: 10px 0;
background-color: #101010;
color:#9d9d9d;
bottom: 0;
width: 100%;
}
        </style>
        <title>Buy Products</title>
    </head>

    <body>
        <?php
        include "header.php";
        ?>

                    <div class= "container">
                        <div class="jumbotron" style="padding-top: 50px">
                            <h1>Welcome to our Lifestyle Store!</h1>
                            <p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.</p>
                        </div>
                        <row class="text-center">
                            <div class="col-md-3 col-sm-12 col-md-offset-5">
                            <img src="camera.jpg" class="img-thumbnail" alt="Cameras">
                            <div class="caption">
                                <p>Nikon DSLR<br>Price: 39500/-<br><a href="cart.html" class="btn btn-info" role="button">Add to cart</a>    
                            </div>
                            </div>
                        </row>
                        <row class="text-center">
                            <div class="col-md-3 col-sm-6 col-md-offset-5">
                            <img src="watch.jpg" class="img-thumbnail" alt="Watches">
                            <div class="caption">
                                <p>Titan watch<br>Price: 12999/-<br><a href="cart.html" class="btn btn-info" role="button">Add to cart</a>
                            </p>
                            </div>
                            </div>
                        </row>
                        <row class="text-center">
                            <div class="col-md-3 col-sm-6 col-md-offset-5">
                            <img src="shirt.jpg" class="img-thumbnail" alt="Shirts">
                            <div class="caption">
                                <p>Louis Phillip Shirt<br>Price: 999/-<br><a href="cart.html" class="btn btn-info" role="button">Add to cart</a>   
                            </div>
                            </div>
                        </row>
                        
                    </div>
            include "footer.php";
    </body>
</html>
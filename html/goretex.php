<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discovery</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="js/bootstrap.min.js"></script>
</head>




<style>
    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }

    .li {
        color: whitesmoke;
    }

    .navbar-brand {
        padding: 0px;
    }

    .navbar-brand>img {
        height: 140%;
        width: auto;
    }

    .navbar-text {
        position: absolute;
        width: 100%;
        left: 0;
        text-align: center;
        margin: auto;
        padding-top: 12px;
    }

    h5 {
        font-family: "Trebuchet MS", Helvetica, sans-serif
    }

    h4 {
        font-family: "Trebuchet MS", Helvetica, sans-serif
    }

    h2 {
        font-family: "Trebuchet MS", Helvetica, sans-serif
    }

    .img-wrapper {
        position: relative;
    }

    h1 {
        color: whitesmoke;
        opacity: 1.0;
    }

    .img-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
        opacity: 0.9;
    }

    .btn-success {
        color: #fff;
        background-color: whitesmoke;
        border-color: black;
    }

    .img-overlay:before {
        content: ' ';
        display: block;
        /* adjust 'height' to position overlay content vertically */
        height: 50%;
    }

    .btn-responsive {
        /* matches 'btn-md' */
        padding: 5px 10px;
        font-size: 30px;
        width: 250px!important;
        position: relative;
        line-height: 1.3333333;
        border-radius: 3px;
        background-color: darkorange;
        color: black;
        opacity: 0.8;
    }

    @media (max-width:760px) {
        /* matches 'btn-xs' */
        .btn-responsive {
            padding: 1px 5px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px;
            background-color: #faebd7;
            opacity: 0.8;
        }
    }

    .container {
        position: fixed;
        top: 250px;
        left: 140x;
    }

    .btn-toolbar2 {
        position: fixed;
        top: 200px;
        left;
        250px;
    }

    img {
        height: 350px;
        max-width: 350px;
    }

    .select {
        top: 200px;
    }
</style>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><img src="img/mountainlogogray.png"></a>
                <h3 class="navbar-text" href="">Discovery</h3>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collap  se-1">
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="checkout.html">Checkout</a></li>
                    <?php
                    if(isset($_SESSION["cart_item"])){
                        $item_total = 0;

                        foreach ($_SESSION["cart_item"] as $item){
                            $product_info = $db_handle-> (Select * from)
                        }


                    <li><a href="equipment.html">Equipment</a></li>
                    <li><a href="tours.html">Tours</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="container-fluid bg-gray">
        <div class="row">
            <div class="col-sm-7">
                <br>
                <br>
                <h2><strong>Footwear</strong></h2>
                <h4>The North Face</h4>
                <h4>Men's Terra Mid GORE-TEX® Walking Boot</h4>
                <img src="img/goretex.jpeg">
            </div>
            <div class="col-sm-5">
                <br>
                <br>
                <br>
                <h4><strong>Buy | Rent</strong></h4>
                <br>
                <h4 style="color:orange"><strong>£110</strong></h4>
                <h5>Product Code:205428</h5>
                <h5>Access ultimate performance with The North Face Terra GORE-TEX® Shoe. The construction employs a lightweight mesh upper and an impact absorbing, two piece midsole. The FlashDry® collar is water resistant and non-absorbent to prevent lingering moisture weighing you down whilst the GORE-TEX® membrane ensures the shoes stay watertight in the worst conditions. Ideal for the tough trails and hill walks. </h5>
                <h3>Size</h3>
                <div class="btn-group">
                    <form action ="checkout.php" method = "post">
                    <button type="button" class="btn btn-warning">7</button>
                    <button type="button" class="btn btn-warning">8</button>
                    <button type="button" class="btn btn-warning">9</button>
                    <button type="button" class="btn btn-warning">10</button>
                    <button type="button" class="btn btn-warning">11</button>
                    <button type="button" class="btn btn-warning">12</button>
                    </form>
                </div>
                <br>
                <br>

                <a href="checkout.html" class="btn btn-info" role="button">Add to Basket</a>

            </div>
        </div>



    </div>



</body>

</html>

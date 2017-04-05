<!DOCTYPE html>
<html lang="en" ng-app="myapp">
    <head>
        <title>Matrimone.com</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet">

        <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

        <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
        <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> 
        <link href="<?php echo base_url() ?>css/footer.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>css/form.css" rel="stylesheet">


        <link rel="icon" href="favicon.jpg" type="image/gif" sizes="16x16">



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>


        <script src="<?php echo base_url() ?>js/angular.js"></script>
        <script>
            var baseurl = "<?php echo base_url(); ?>";
        </script>
        <script src="<?php echo base_url() ?>js/app.js"></script>
    </head>


    <body>


        <!--header starat-->

        <?php echo $header; ?>

        <!--header end-->





        <!--content para-->			
        <style>
            .well3 {
                min-height: 20px;
                padding: 19px;
                margin-bottom: 20px;
                background-color: #fff;
                color: #000;
                height: 280px;
                border: 1px solid #e3e3e3;
                border-radius: 0px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.05);


            </style>

            <article class="container">




                <style>
                    .button2 {
                        color: #FFF;
                        background-color: #7140bc;
                        width:150px;
                        height:40px;

                    }

                    .button2:hover {
                        background-color: #dd3175; 
                        color: white;
                    }	

                </style>

                <!--
       <button id="button2" name="submitButton" align="right" width="200px" class="button2"><b>Register</b></button>
                --> 




            </div>

        </fieldset>

    </form>


    <!--content form end-->

</div>
</div>

</article>




<!--search form start-->
<style>
    .well2 {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 0px;
        background-color: #ed7ebd;
        color: #fff;

        border: 1px solid #e3e3e3;
        border-radius: 0px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.05);


    </style>




    <!--search form end-->


    <!--cities list -->
    <style>
        .well8 {


            background-color: #fff;
            color: #000;




        </style>
        <div class="well8">
            <div class="container">

                <nav class="navbar navbar-custom">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Inbox</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> Edit profile</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $uname?> </a></li>
                                <li><a href="#"><span class="glyphicon  glyphicon-off"></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>


            </div>
        </div>

    </div>
    <!--brides list end-->

    <!--groom list end-->


    <!--city list end-->




    <style>

        hr{ 
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.0em;
            margin-left: auto;
            margin-right: auto;
            color:#f842a8;
            background-color: #f00;
            border-style: inset;
            border-width: 3px;
            border-color:#f0359e;
        }

    </style>




    <style>
        .well4 {


            margin-bottom: 0px;
            background-color: #fff0f5;
            color: #000;




        </style>
        <div class="well4">
            <div class="container">
                <h4><b>Browse Matrimoney profile by</b></h4>

                <div class="wel">
                    <div class="col-md-6">
                        <h5><b>Religion :</b></h5>
                        Hindu : <a href="">Hindu Brides</a> | <a href="">Hindu Grooms</a><br>
                        Muslim : <a href="">Muslim Brides</a> | <a href="">Muslim Grooms</a><br>
                        Christian : <a href="">Christian Brides</a> | <a href="">Christian Grooms</a><br>
                        Buddhist : <a href="">Buddhist Brides</a> | <a href="">Buddhist Grooms</a>

                    </div>

                    <div class="col-md-6">
                        <h5><b>Language :</b></h5>
                        Sinhala : <a href="">Sinhala Brides</a> | <a href="">Sinhala Grooms</a><br>
                        Tamil : <a href="">Tamil Brides</a> | <a href="">Tamil Grooms</a><br>
                        Malay : <a href="">Malay Brides</a> | <a href="">Malay Grooms</a><br>


                        <h5><b>Lives in:</b></h5>
                        <a href="">Sri Lanka</a> | <a href="">UAE</a>
                        <a href="">UK</a> | <a href="">Qatar</a>
                        <a href="">India</a> | <a href="">Saudi Arabia</a> | <a href="">Australia</a><br>


                    </div>


                </div>

            </div>
        </div>
    </div></div>


<br>
<style>
    .well9 {


        margin-bottom: 0px;
        background-color: #fff;
        color: #000;




    </style>
    <div class="well9">
        <div class="container"><br>
            <a href="">About Us</a> | <a href="">Contact Us</a>
            <a href="">Privacy Policy</a> | <a href="">Qatar</a>
            <a href="">Pay Now</a> | <a href="">Post Success Story</a> | <a href="">Terms and Conditions</a>
            | <a href="">Popular Matrimony Search</a> | <a href="">Events</a><br>


        </div>


        <!--footer-->

        <footer class="footer">

            <ul class="social-icon animate pull-right">
                <div class="container">



                    <font color="red"> <b>Follow Us : </b> </font>        <li><a href="#" title="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li> <!-- change the link to social page and edit title-->
                    <li><a href="#" title="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title="google plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            </ul>
    </div>
</footer>




</body>
</html>
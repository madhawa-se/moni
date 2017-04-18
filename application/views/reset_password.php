
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
        <script src="<?php echo base_url() ?>js/resetpass.js?id=4"></script>
    </head>


    <body>



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
                <div class="row">


                    <style>
                        .well8 {
                            min-height: 20px;
                            padding: 19px;
                            margin-bottom: 20px;

                            background-color: rgb(253, 253, 253);
                            border: 1px solid @well-border;
                            border-radius: @border-radius-base;
                            .box-shadow(inset 0 1px 1px rgba(0,0,0,.05));
                            blockquote {
                                border-color: #ddd;
                                border-color: rgba(0,0,0,.15);
                            }
                        }
                        .button2 {
                            color: #FFF;
                            background-color: #7140bc;
                            width: 150px;
                            height: 40px;
                        } 
                    </style>

                    <div class="col-sm-6">
                        <h3 align="center"><b> Reset Password</b> </h3>
                        <div class="well8">


                            <form ng-cloak ng-validate="true" action="<?php echo site_url('reset'); ?>" novalidate="true"  class="form-horizontal" method="post" name="regform" ng-controller="formResetController" ng-submit="submitForm($event, regform.$valid)">

                                <?php echo validation_errors() ?>


                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="textinput" align="left">New Password</label>
                                    <div class="col-md-9">
                                        <input  name="pass1" ng-model="pass1" type="password" placeholder="Password" class="form-control input-md" required/>
                                        <p ng-show="regform.pass1.$error.required && (!regform.pass1.$pristine || submitted)" class="help-danger help">Password is required.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="textinput" align="left">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input  name="pass2" ng-model="registration.user.password" type="password" placeholder="Password" class="form-control input-md" required/>

                                        <p ng-show="regform.pass1.$error.required && (!regform.pass1.$pristine || submitted)" class="help-danger help">Password is required.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="span3">
                                        <br>
                                        <input name="reset" type="submit" value="Reset Password" class="button2" ng-click="submitted = true">
                                    </div>
                                </div>
                                <input type="password" name="confirmPassword" 
                                       ng-model="registration.user.confirmPassword"
                                       required 
                                       compare-to="registration.user.password" />
                        </div>

                        </form>
                    </div>
                </div>


            </div>
        </article>
        <footer class="footer">

            <ul class="social-icon animate pull-right">
                <div class="container">



                    <font color="black"> <b>Follow Us : </b> </font>        <li><a style="background-color: #295396;" href="#" title="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li> <!-- change the link to social page and edit title-->
                    <li><a style="background-color:#1DA1F3;" href="#" title="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a style="background-color:#DF4A32;" href="#" title="google plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </footer>
    </div>



</div>

</body>
</html>

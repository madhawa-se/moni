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
        <link href="<?php echo base_url() ?>css/menu.css" rel="stylesheet">

        <link rel="icon" href="favicon.jpg" type="image/gif" sizes="16x16">



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>


        <script src="<?php echo base_url() ?>js/angular.js"></script>
        <script>
            var baseurl = "<?php echo base_url(); ?>";
        </script>
        <script src="<?php echo base_url() ?>js/app.js"></script>
        <script>
<?php
if (isset($jsondata)) {
    echo "var jsonData=$jsondata";
}
?>
        </script>

        <style>
            .tabs{
                margin: 0;
                padding: 0;
                list-style-type: none;

            }
            .tabs.verticle-tabs li{
                padding: 20px;
                background-color: rgb(255, 255, 255);
                margin-bottom: 10px;
                border-radius: 4px;
                color: #FF9800;
                text-align: center;
            }

            /*   bootstrap overide  */
            .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
                background-color: rgba(233, 30, 99, 0.54);
            }
            /* - bootstrap overide  */
        </style>
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
                                            <li><a href="<?php echo site_url('profile/edit'); ?>"><span class="glyphicon glyphicon-pencil"></span> Edit profile</a></li>
                                            <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>
                                        </ul>
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $uname ?> </a></li>
                                            <li><a href="<?php echo site_url('user/logout') ?>"><span class="glyphicon  glyphicon-off"></span> Logout</a></li>
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
                    <?php if (isset($menu) && $menu == "edit") { ?>
                        <style>
                            .well8 {
                                min-height: 20px;
                                padding: 19px;
                                margin-bottom: 20px;

                                background-color:#fff;
                                border: 1px solid @well-border;
                                border-radius: @border-radius-base;
                                .box-shadow(inset 0 1px 1px rgba(0,0,0,.05));
                                blockquote {
                                    border-color: #ddd;
                                    border-color: rgba(0,0,0,.15);
                                }
                            }

                        </style>


                        <!-- form -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2">
                                    <div>
                                        <ul class="nav nav-pills nav-stacked">
                                            <li class="active"><a  data-toggle="pill" href="#basic">Basic Info</a></li>
                                            <li><a data-toggle="pill" href="#aboutme">About Me</a></li>
                                            <li><a  data-toggle="pill" href="#home">Life Style</a></li>
                                            <li><a  data-toggle="pill" href="#family">Family</a></li>
                                            <li><a  data-toggle="pill" href="#">My Partner</a></li>
                                            <li><a  data-toggle="pill" href="#photos">Photos</a></li>
                                            <li><a  data-toggle="pill" href="#horoscope">Horoscope</a></li>
                                            <li><a  data-toggle="pill" href="#">Alerts</a></li>
                                            <li><a  data-toggle="pill" href="#delete">Delete</a></li>
                                        </ul>




                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <style>
                                                /*mad */
                                                .radio-inline , .checkbox-inline {
                                                    margin-top: 0;
                                                    margin-left: 10px;
                                                }
                                            </style>
                                            <div class="well8">

                                                <div class="tab-content">
                                                    <style>
                                                        .tab-pane h4,  .tab-pane .h4 {
                                                            font-size: 18px;
                                                            border-top: 4px solid rgba(255, 152, 0, 0.48);
                                                            padding: 10px;
                                                            color: black;
                                                            /* border-radius: 5px; */
                                                            /* background-color: rgba(103, 58, 183, 0.34); */
                                                        }
                                                        .tab-pane{
                                                            margin-bottom: 40px;
                                                        }
                                                    </style>
                                                    <div id="basic" class="tab-pane fade in active">
                                                        <form ng-cloak ng-validate="true" action="<?php echo site_url('profile/register'); ?>" novalidate="true"  class="form-horizontal" method="post" name="regform" ng-controller="formController" ng-submit="submitForm($event, regform.$valid)">

                                                            <?php if (isset($update_errors)) echo $update_errors; ?>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" >Profile for</label>
                                                                <div class="col-md-9">
                                                                    <select id="profile" name="profilefor" class="form-control">
                                                                        <option value="">--select--</option>
                                                                        <option value="1">my self</option>
                                                                        <option value="2">friends</option>
                                                                        <option value="3">siblings</option>
                                                                        <option value="3">relatives</option>

                                                                    </select>
                                                                </div>
                                                            </div>




                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="textinput" align="left">Name</label>
                                                                <div class="col-md-9">
                                                                    <input id="name" ng-model="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">
                                                                    <p ng-show="regform.name.$invalid && (!regform.name.$pristine || submitted)" class="help-danger help">You name is required.</p>
                                                                </div>

                                                            </div>



                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="notifymode">Gender</label>
                                                                <div class="col-md-9">
                                                                    <select id="gender" name="gender" class="form-control" ng-model="gender"  ng-options="c.id as c.name  for c in genders track by c.id" required >
                                                                        <option value="">--select--</option>
                                                                        <option value="1">male</option>
                                                                        <option value="2">female</option>
                                                                    </select>
                                                                    <p ng-show="regform.gender.$invalid && (!regform.gender.$pristine || submitted)" class="help-danger help">please select your gender</p>

                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="notifymode">Date of Birth</label>


                                                                <div class="col-md-2">
                                                                    <select name="month" class = "form-control">
                                                                        <option value="01">Jan</option><option value="02">Feb</option><option value="03">Mar</option>
                                                                        <option value="04">Apr</option><option value="05">May</option><option value="06">Jun</option>
                                                                        <option value="07">Jul</option><option value="08">Aug</option><option value="09">Sep</option>
                                                                        <option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <select name="day" class = "form-control" ng-model="day">
                                                                        <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
                                                                        <option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option>
                                                                        <option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
                                                                        <option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option>
                                                                        <option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="21">21</option>
                                                                        <option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option>
                                                                        <option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option>
                                                                        <option value="30">30</option><option value="31">31</option>
                                                                    </select>                        
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <select name="year" class = "form-control">
                                                                        <option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option>
                                                                        <option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option>
                                                                        <option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option>
                                                                        <option value="2013">2013</option>
                                                                    </select>
                                                                </div>

                                                            </div>





                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="threshold">Religion</label>
                                                                <div class="col-md-9">
                                                                    <select id="religion" name="religion"  ng-model="religion_list" class="form-control" ng-options="c.id as c.name  for c in religionList track by c.id" required>
                                                                        <option value="">--select--</option>
                                                                    </select>
                                                                    <p ng-show="regform.religion.$invalid && (regform.religion.$touched || submitted)" class="help-danger help">select your religion</p>
                                                                </div>
                                                            </div>



                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="threshold">Mother Tongue</label>
                                                                <div class="col-md-9">
                                                                    <select id="mothertongue" name="mothertongue" ng-model="lan_list" class="form-control" ng-options="c.id as c.name  for c in lanList track by c.id" required>
                                                                        <option value="">--select--</option>
                                                                    </select>
                                                                    <p ng-show="regform.mothertongue.$invalid && (regform.mothertongue.$touched || submitted)" class="help-danger help">select your language</p>
                                                                </div>
                                                            </div>



                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="textinput">Email</label>
                                                                <div class="col-md-9">
                                                                    <input  name="email" ng-model="email" type="text" placeholder="your email address" class="form-control input-md" required/>
                                                                    <p ng-show="regform.email.$invalid && (!regform.email.$pristine || submitted)" class="help-danger help">You mail is required.</p>

                                                                </div>
                                                            </div>



                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="threshold">Living In</label>
                                                                <div class="col-md-9">
                                                                    <select id="livein" name="livein" class="form-control" ng-model="country_list" ng-change="updateCountry(country_list)"
                                                                            ng-options="c.id as c.name  for c in countryList track by c.id" required>

                                                                        <option data-country_code="00" value="">--select--</option>

                                                                        <!-- <option ng-repeat="country in countryList" data-country_code="{{country.code}}" value="{{country.id}}">{{country.name}}</option>-->

                                                                    </select>
                                                                    <p ng-show="regform.livein.$invalid && (regform.livein.$touched || submitted)" class="help-danger help">country is required.</p>
                                                                </div>
                                                            </div>



                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="textinput">Phone</label>
                                                                <div class="col-md-3">
                                                                    <input id="isd" name="countrycode" ng-model="countrycode" type="text" placeholder="code" class="form-control input-md" required="" readonly="true" value="{{country_list}}">
                                                                </div>


                                                                <div class="col-md-6">
                                                                    <input id="fnumber" name="fnumber" ng-model="fnumber" type="number" placeholder="number" class="form-control input-md" required="">
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <label class="col-md-5 control-label" >Profile Image</label>
                                                                <div class="col-md-7">
                                                                    <div class="profile-img">
                                                                        <img class="img-responsive img-circle" style="max-width:100px" src="<?php echo base_url() ?>images/profile.png"/>
                                                                        </div>
                                                                    </div>
                                                                    <input type="file" value="upload"/>
                                                                </div>


                                                                <div class="span3">
                                                                    <input name="update" type="submit" value="Update" class="button2" ng-click="submitted = true">
                                                                </div>


                                                            </form>
                                                        </div>

                                                        <div id="family" class="tab-pane fade">

                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" >Family Value</label>
                                                                <div class="col-md-9">
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Orthodox
                                                                    </label>
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Traditional
                                                                    </label>
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Moderate
                                                                    </label>
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Liberal
                                                                    </label>
                                                                </div>
                                                            </div>


                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" >Family Type</label>
                                                                <div class="col-md-9">
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Joint family
                                                                    </label>
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Nuclear family
                                                                    </label>

                                                                </div>
                                                            </div>

                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="threshold">Family Status</label>
                                                                <div class="col-md-9">
                                                                    <select id="family_status">
                                                                        <option value="">--select--</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="threshold">Ancestral / Family Origin</label>
                                                                <div class="col-md-9">
                                                                    <select id="family_status">
                                                                        <option value="">--select--</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="threshold">Ethnicity</label>
                                                                <div class="col-md-9">
                                                                    <select id="family_status">
                                                                        <option value="">--select--</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="textinput" align="left">Mother's Occupation</label>
                                                                <div class="col-md-9">
                                                                    <input id="name" ng-model="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">
                                                                </div>

                                                            </div>
                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="textinput" align="left">Father's Occupation</label>
                                                                <div class="col-md-9">
                                                                    <input id="name" ng-model="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">
                                                                </div>

                                                            </div>

                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="textinput" align="left">No. of Brothers</label>
                                                                <div class="col-md-9">
                                                                    <input id="name" ng-model="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">
                                                                </div>

                                                            </div>

                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="textinput" align="left">Brothers Married</label>
                                                                <div class="col-md-9">
                                                                    <input id="name" ng-model="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">
                                                                </div>

                                                            </div>

                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="textinput" align="left">No. of Sisters</label>
                                                                <div class="col-md-9">
                                                                    <input id="name" ng-model="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">
                                                                </div>

                                                            </div>

                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="textinput" align="left">Sisters Married</label>
                                                                <div class="col-md-9">
                                                                    <input id="name" ng-model="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">
                                                                </div>

                                                            </div>
                                                            <div class="span3">
                                                                <input name="update" type="submit" value="Update" class="button2" ng-click="submitted = true">
                                                            </div>
                                                        </div>
                                                        <div id="photos" class="tab-pane fade">
                                                            <p>Did you know that profiles with photos get 20 times more response?
                                                                Add upto 10 photos and see the difference.</p>
                                                            <div>
                                                                <img style="max-width: 100px" src="https://assets.materialup.com/uploads/9b911507-494a-4534-bdfb-81bb68bf6495/512x512.png" class="img-responsive"/>
                                                            </div>
                                                            <button >Upload Images</button>
                                                            <br>
                                                            <small>
                                                                Note that you can add up to 10 photos to your profile. As a free member, you can view only 1 photo posted by members. To view all the photographs the members have posted, you must become a premium member. Click here to PAY NOW.
                                                            </small>
                                                            <div class="span3">
                                                                <input name="update" type="submit" value="Update" class="button2" ng-click="submitted = true">
                                                            </div>
                                                        </div>
                                                        <div id="horoscope" class="tab-pane fade">

                                                            <div>
                                                                <img style="max-width: 100px" src="https://assets.materialup.com/uploads/9b911507-494a-4534-bdfb-81bb68bf6495/512x512.png" class="img-responsive"/>
                                                            </div>
                                                            <button >Upload Horoscope</button>
                                                            <br>
                                                            <div class="span3">
                                                                <input name="update" type="submit" value="Update" class="button2" ng-click="submitted = true">
                                                            </div>
                                                        </div>

                                                        <div id="delete" class="tab-pane fade">
                                                            <p>Hide your profile</p>
                                                            <p>
                                                                Want to take a short break from your life partner search? You can still use all of the site's features, but other members will not be able to see you.
                                                                Yes, I want to hide my profile </p>
                                                            <div class="form-group clearfix">
                                                                <div class="col-md-9">
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Yes, I want to hide my profile
                                                                    </label>

                                                                </div>
                                                            </div>

                                                            <p>Permanently delete your profile</p>
                                                            <p>
                                                                This action is permanent. Profile once deleted cannot be restored.
                                                                Yes, I want to delete my profile
                                                            </p>

                                                            <div class="form-group clearfix">
                                                                <div class="col-md-9">
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Yes, I want to delete my profile
                                                                    </label>

                                                                </div>
                                                            </div>
                                                            <div class="span3">
                                                                <input name="update" type="submit" value="Update" class="button2" ng-click="submitted = true">
                                                            </div>

                                                        </div>

                                                        <div id="aboutme" class="tab-pane fade">

                                                            <h4>Basic Information</h4>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="notifymode">Marital Status</label>
                                                                <div class="col-md-9">
                                                                    <select id="gender" name="gender" class="form-control">
                                                                        <option value="">--select--</option>
                                                                        <option value="1">unmarried</option>
                                                                        <option value="2">female</option>
                                                                    </select>

                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="notifymode">Weight</label>
                                                                <div class="col-md-9">
                                                                    <div class="input-group">
                                                                        <input id="msg" type="number" class="form-control" name="msg" placeholder="weight">
                                                                        <span class="input-group-addon">Kg</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="notifymode">Height</label>
                                                                <div class="col-md-9">
                                                                    <div class="input-group">
                                                                        <input id="msg" type="number" class="form-control" name="msg" placeholder="weight">
                                                                        <span class="input-group-addon">cm</span>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" >Body Type</label>
                                                                <div class="col-md-9">
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Slim
                                                                    </label>
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Athletic
                                                                    </label>
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Average
                                                                    </label>
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Heavy
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" >Complexion</label>
                                                                <div class="col-md-9">
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Very Fair
                                                                    </label>
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Fair
                                                                    </label>
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Wheatish brown
                                                                    </label>
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Dark
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" >Physical Status</label>
                                                                <div class="col-md-9">
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">Normal
                                                                    </label>
                                                                    <label class="radio-inline">
                                                                        <input type="radio" name="optradio">NormalPhysically challenged
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="notifymode">Mother Tongue</label>
                                                                <div class="col-md-9">
                                                                    <select id="gender" name="gender" class="form-control">
                                                                        <option value="">--select--</option>
                                                                        <option value="1">Sinhala</option>
                                                                        <option value="2">English</option>
                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="notifymode">Spoken Languages</label>
                                                                <div class="col-md-9">
                                                                    <select id="gender" name="gender" class="form-control">
                                                                        <option value="">--select--</option>
                                                                        <option value="1">Sinhala</option>
                                                                        <option value="2">English</option>
                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            <h4>
                                                                current background
                                                            </h4>
                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="notifymode">religion</label>
                                                                <div class="col-md-9">
                                                                    <select id="gender" name="gender" class="form-control">
                                                                        <option value="">--select--</option>
                                                                        <option value="1">Buddhism</option>
                                                                        <option value="2">Muslim</option>
                                                                        <option value="3">cathalic</option>
                                                                    </select>

                                                                </div>
                                                            </div>

                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="notifymode">Education Level</label>
                                                                <div class="col-md-9">
                                                                    <select id="gender" name="gender" class="form-control">
                                                                        <option value="0">--- Select ---</option><option value="1">High School</option><option value="2">Trade School</option><option value="3">Diploma</option><option value="4" selected="">Bachelors</option><option value="5">Masters</option><option value="6">Doctorate</option>		
                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="notifymode">Field of Education</label>
                                                                <div class="col-md-9">
                                                                    <select id="gender" name="gender" class="form-control">
                                                                        <option value="0">--- Select ---</option><option value="1" selected="">Arts</option><option value="2">Accountancy</option><option value="3">Architecture</option><option value="4">Business Administration</option><option value="5">Business Management</option><option value="6">Civil</option><option value="7">Commerce</option><option value="8">Computer Science (hardware)</option><option value="9">Computer Science (software)</option><option value="10">Economics</option><option value="11">Education</option><option value="12">Engineering</option><option value="13">Information Technology</option><option value="14">Journalism</option><option value="15">Law</option><option value="16">Library Science</option><option value="17">Mathematics</option><option value="18">Medicine</option><option value="19">Mechanical</option><option value="20">Music</option><option value="21">Nursing/Health Science</option><option value="22">Pharmacy</option><option value="23">Public Administration</option><option value="24">Science</option><option value="9997">Others</option>	
                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="notifymode">Occupation Level</label>
                                                                <div class="col-md-9">
                                                                    <select id="gender" name="gender" class="form-control">
                                                                        <option value="">--select--</option>
                                                                        <option value="1">Buddhism</option>
                                                                        <option value="2">Muslim</option>
                                                                        <option value="3">cathalic</option>
                                                                    </select>

                                                                </div>
                                                            </div>

                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="notifymode">Annual income</label>
                                                                <div class="col-md-9">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">LKR</span>
                                                                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                                        <span class="input-group-addon">.00</span>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <br><br>
                                                            <h4>
                                                                Location
                                                            </h4>
                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="notifymode">Place Of Birth</label>
                                                                <div class="col-md-9">
                                                                    <select id="gender" name="gender" class="form-control">
                                                                        <option value="">--select--</option>
                                                                        <option value="1">Buddhism</option>
                                                                        <option value="2">Muslim</option>
                                                                        <option value="3">cathalic</option>
                                                                    </select>

                                                                </div>
                                                            </div>

                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="notifymode">Country Living in</label>
                                                                <div class="col-md-9">
                                                                    <select id="gender" name="gender" class="form-control">
                                                                        <option value="0">--- Select ---</option>
                                                                        <option value="98">India</option>
                                                                        <option value="222">United States of America</option>
                                                                        <option value="195" selected="">Sri Lanka</option>
                                                                        <option value="162">Pakistan</option>
                                                                        <option value="220">United Arab Emirates</option>
                                                                        <option value="129">Malaysia</option>
                                                                        <option value="221">United Kingdom</option>
                                                                        <option value="13">Australia</option>
                                                                        <option value="185">Saudi Arabia</option>
                                                                        <option value="39">Canada</option>
                                                                        <option value="189">Singapore</option>
                                                                        <option value="114">Kuwait</option>
                                                                        <option value="">-------------------------</option>
                                                                    </select>

                                                                </div>
                                                            </div>

                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="notifymode">District</label>
                                                                <div class="col-md-9">
                                                                    <select id="gender" name="gender" class="form-control">
                                                                        <option value="0">- Select - </option><option value="201">Ampara</option><option value="202">Anuradhapura</option><option value="203">Badulla</option><option value="204">Batticaloa</option><option value="205" selected="">Colombo</option><option value="206">Galle</option><option value="207">Gampaha</option><option value="208">Hambantota</option><option value="209">Jaffna</option><option value="210">Kalutara</option><option value="211">Kandy</option><option value="212">Kegalle</option><option value="213">Kilinochchi</option><option value="214">Kurunegala</option><option value="215">Mannar</option><option value="216">Matale</option><option value="217">Matara</option><option value="218">Monaragala</option><option value="219">Mullaitivu</option><option value="220">Nuwara Eliya</option><option value="221">Polonnaruwa</option><option value="222">Puttalam</option><option value="223">Ratnapura</option><option value="224">Trincomalee</option><option value="225">Vavuniya</option>	
                                                                    </select>

                                                                </div>
                                                            </div>

                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="notifymode">Residing City</label>
                                                                <div class="col-md-9">
                                                                    <input id="msg" type="number" class="form-control" name="msg" placeholder="City">
                                                                </div>
                                                            </div>
                                                            <div class="form-group clearfix">
                                                                <label class="col-md-3 control-label" for="notifymode">Citizenship</label>
                                                                <div class="col-md-9">
                                                                    <select id="gender" name="gender" class="form-control">
                                                                        <option value="0">- Select - </option><option value="1" selected="">Citizen</option><option value="2">Permanent resident</option><option value="3">Work permit</option><option value="4">Student visa</option><option value="5">Temporary visa</option><option value="6">Non-Resident</option>		
                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="span3">
                                                                <input name="update" type="submit" value="Update" class="button2" ng-click="submitted = true">
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- form -->
                            <?php } ?>

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
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

        <link href="css/style.css" rel="stylesheet">
        <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> 
        <link href="<?php echo base_url() ?>css/footer.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>css/form.css" rel="stylesheet">


        <link rel="icon" href="favicon.jpg" type="image/gif" sizes="16x16">
    </head>


    <body>


        <!--header starat-->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <style>
                            .img2{
                                vertical-align: middle;
                                margin-top: -12px;
                            }

                        </style>
                        <img src="<?php echo base_url() ?>images/logo5.png" class="img2">

                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <div class="row">
                            <?php echo validation_errors(); ?>  
                            <?php echo form_open('Home/login'); ?>  
                            <form method="post">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email Address" name="user">
                                        <div class="login-bottom-text checkbox hidden-sm">

                                        </div>
                                    </div>
                                </div>	
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Password" name="pass">
                                        <div class="login-bottom-text hidden-sm"> Forgotten account?  </div>
                                    </div>
                                </div>

                                <style>
                                    .button3 {
                                        color: #FFF;
                                        background-color: #7140bc;
                                        width:100px;
                                        height:30px;
                                        border-radius:2px;

                                    }

                                    .button3:hover {
                                        background-color: #dd3175; 
                                        color: white;
                                    }							


                                </style>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input type="submit" value="login" class="button3">
                                    </div>
                                </div>
                            </form>
                        </div>	
                    </div>
                </div>
            </div>
        </header>


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
                <div class="row">
                    <div class="col-sm-6">
                        <div class="wel">

                            <h3><b>Welcome to newleaf.lk the largest <br> matrimonial in Sri Lanka</b></h3>
                            <p align="justify">SriLankanMatrimony is an exclusive matrimony portal for Sri Lankans  
                                from around the world to find a life partner. SriLankanMatrimony bridges the  
                                between you and your life partner no matter where he or she is. Meet singles
                                from around the world to find a life partner. SriLankanMatrimony bridges the   
                                between you and your life partner no matter where he or she is. Meet singles
                                walks of life and discover the one who will be with you forever.

                            </p>
                        </div>
                        <style>
                            .img3{
                                vertical-align: middle;
                                margin-left: 100px;
                            }

                        </style>
                        <img class="img3" src="<?php echo base_url() ?>/srilanka2.png" align="center">

                    </div>	

                    <!--content para end-->		



                    <!--content form start -->	
                    <br>


                    <style>
                        .well8 {
                            min-height: 20px;
                            padding: 19px;
                            margin-bottom: 20px;

                            background-color:#f2b7cf;
                            border: 1px solid @well-border;
                            border-radius: @border-radius-base;
                            .box-shadow(inset 0 1px 1px rgba(0,0,0,.05));
                            blockquote {
                                border-color: #ddd;
                                border-color: rgba(0,0,0,.15);
                            }
                        }

                    </style>
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 align="center"><b>  An Exclusive Matrimoney Portal for <br>SriLankans around the world</b> </h3>
                            <div class="well8">

                                <?php echo validation_errors(); ?>  
                                <form action="" novalidate="true"  class="form-horizontal" method="post" name="regform" ng-controller="formController" ng-submit="submitForm(true)">



                                    <legend><font color="#de3075" size="6px" >Register Free</font></legend>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" >Profile for</label>
                                        <div class="col-md-9">
                                            <select id="profile" name="profile for" class="form-control">
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
                                            <p ng-show="regform.name.$invalid && !regform.name.$pristine" class="label-danger help">You name is required.</p>
                                        </div>

                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="notifymode">Gender</label>
                                        <div class="col-md-9">
                                            <select id="gender" name="gender" class="form-control" model="gender">
                                                <option value="">--select--</option>
                                                <option value="1">male</option>
                                                <option value="2">female</option>
                                            </select>
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
                                            <select name="day" class = "form-control">
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
                                            <select id="religion" name="religion"  ng-model="religion_list" class="form-control" ng-options="c.id as c.name  for c in religionList track by c.id">
                                                <option value="">--select--</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="threshold">Mother Tongue</label>
                                        <div class="col-md-9">
                                            <select id="mothertongue" name="mothertongue" class="form-control">
                                                <option value="">--select--</option>
                                                <option value="1">Sinhala</option>
                                                <option value="2">Tamil</option>
                                                <option value="1">English</option>
                                                <option value="2">Others</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="textinput">Email</label>
                                        <div class="col-md-9">
                                            <input  name="email" model="email" type="text" placeholder="your email address" class="form-control input-md" required/>
                                             <p ng-show="regform.email.$invalid && !regform.email.$pristine" class="label-danger help">You mail is required.</p>

                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="threshold">Living In</label>
                                        <div class="col-md-9">
                                            <select id="livein" name="livein" class="form-control" ng-model="country_list" ng-change="updateCountry()"
                                                    ng-options="c.id as c.name  for c in countryList track by c.id" required>

                                                <option data-country_code="00" value="">--select--</option>

                                                <!-- <option ng-repeat="country in countryList" data-country_code="{{country.code}}" value="{{country.id}}">{{country.name}}</option>-->

                                            </select>
                                            <p ng-show="regform.livein.$invalid && (regform.livein.$touched || regform.livein.$submitted)" class="label-danger help">country is required.</p>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="textinput">Phone</label>
                                        <div class="col-md-3">
                                            <input id="isd" name="countrycode" ng-model="countrycode" type="text" placeholder="code" class="form-control input-md" required="" readonly="true">
                                        </div>


                                        <div class="col-md-6">
                                            <input id="fnumber" name="fnumber" type="text" placeholder="number" class="form-control input-md" required="">
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="textinput">Password</label>
                                        <div class="col-md-9">
                                            <input id="password" name="password" type="password" placeholder="placeholder" class="form-control input-md" required="">
                                        </div>

                                    </div>


                                    <div class="span3">
                                        <label><input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>
                                        <input type="submit" value="Sign up" class="button2">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



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


    <div class="well2" >
        <div class="container">
            <form class="form-inline" role="form">

                <h1>Find the one who completes you </h1>

                <div class="form-group">
                    <label for="name">Looking For</label><br>
                    <div class="radio radio-info radio-inline">
                        <input type="radio" size="12" id="inlineRadio1" value="1" name="groom" checked="">
                        <label for="inlineRadio1"> Groom </label>
                    </div>
                    <div class="radio radio-inline">
                        <input type="radio" id="inlineRadio2" value="2" name="bride">
                        <label for="inlineRadio2"> Bride </label>
                    </div>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;

                <div class="form-group">
                    <label for="name">Age</label><br>
                    <select name="from" class = "form-control">
                        <option value="1">21</option><option value="2">22</option><option value="23">3</option><option value="4">24</option>
                        <option value="5">25</option><option value="6">26</option><option value="7">27</option><option value="8">28</option>
                        <option value="9">29</option><option value="10">30</option><option value="11">31</option><option value="12">32</option>
                        <option value="13">33</option><option value="14">34</option><option value="15">35</option><option value="16">36</option>
                        <option value="17">37</option><option value="18">38</option><option value="19">39</option><option value="21">40</option>
                        <option value="22">41</option><option value="23">42</option><option value="24">43</option><option value="25">44</option>
                        <option value="26">45</option><option value="27">46</option><option value="28">47</option><option value="29">48</option>
                        <option value="30">49</option><option value="31">50</option>
                    </select>    

                </div>

                <div class="form-group">
                    <label for="name"></label><br>to

                    <select name="to" class = "form-control" width="100px">
                        <option value="1">21</option><option value="2">22</option><option value="23">3</option><option value="4">24</option>
                        <option value="5">25</option><option value="6">26</option><option value="7">27</option><option value="8">28</option>
                        <option value="9">29</option><option value="10">30</option><option value="11">31</option><option value="12">32</option>
                        <option value="13">33</option><option value="14">34</option><option value="15">35</option><option value="16">36</option>
                        <option value="17">37</option><option value="18">38</option><option value="19">39</option><option value="21">40</option>
                        <option value="22">41</option><option value="23">42</option><option value="24">43</option><option value="25">44</option>
                        <option value="26">45</option><option value="27">46</option><option value="28">47</option><option value="29">48</option>
                        <option value="30">49</option><option value="31">50</option>
                    </select>  &nbsp;&nbsp;&nbsp;&nbsp;
                </div>



                <div class="form-group">
                    <label for="name">Religion</label><br>
                    <select id="religion" name="religion" class="form-control">
                        <option value="">  &nbsp; &nbsp;&nbsp;&nbsp; --select-- &nbsp; &nbsp;&nbsp;&nbsp; </option>
                        <option value="1">Hindu</option>
                        <option value="2">Christian</option>
                        <option value="1">Muslim</option>
                        <option value="2">Buddism</option>
                    </select>
                </div>

                <div class="form-group">

                    <label for="email">Mother Tongue</label><br>
                    <select id="mothertongue" name="mothertongue" class="form-control">
                        <option value="">  &nbsp; &nbsp;&nbsp;&nbsp; --select-- &nbsp; &nbsp;&nbsp;&nbsp; </option>
                        <option value="1">Sinhala</option>
                        <option value="2">Tamil</option>
                        <option value="1">English</option>
                        <option value="2">Others</option>
                    </select>
                </div>
                <div class="form-group">

                    <label for="pwd">Country Living In</label><br>
                    <select id="livein" name="livein" class="form-control">
                        <option value="">  &nbsp; &nbsp;&nbsp;&nbsp; --select-- &nbsp; &nbsp;&nbsp;&nbsp; </option>
                        <option value="1">Srilanka</option>
                        <option value="2">India</option>
                        <option value="3">Colombo</option>
                        <option value="4">Jaffna</option>
                    </select>
                </div>
                &nbsp;&nbsp;&nbsp;
                <div class="form-group">
                    <label></label><br>

                    <style>
                        .button4 {
                            color: #FFF;
                            background-color: #7140bc;
                            width:100px;
                            height:40px;

                        }

                        .button4:hover {
                            background-color: #dd3175; 
                            color: white;
                        }	

                    </style>



                    <button type="submit" class="button4">Search</button>
            </form>
        </div>
    </div>
</div>

<!--search form end-->


<!--cities list -->
<style>
    .well8 {


        background-color: #fff;
        color: #000;




    </style>
    <div class="well8">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <h1><b>District</b></h1>
                    <div class="col-md-4">

                        <a href="">Colombo</a><br>
                        <a href="">Jaffna</a><br>
                        <a href="">Galle</a><br>
                        <a href="">Ampara</a><br>
                        <a href="">Matale</a><br>
                        <a href="">Badulla</a><br>
                        <a href="">Batticaloa</a><br>
                        <a href="">Hambantota</a><br>
                        <a href="">Kalutara</a><br>
                        <a href="">Kegalle</a><br>
                        <a href="">Trincomale</a>

                    </div>


                    <div class="col-md-4" >

                        <a href="">Killinochi</a><br>
                        <a href="">Kurunagala</a><br>
                        <a href="">Mannar</a><br>

                        <a href="">Moneragala</a><br>
                        <a href="">Mulaitivu</a><br>
                        <a href="">Nuwara Eliya</a><br>
                        <a href="">Polonnaruwa</a><br>
                        <a href="">Puttalam</a><br>
                        <a href="">Ratnapura</a><br>
                        <a href="">Vavuniya</a><br>

                        <a href="">Anuradhapura</a></li>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-7">


                        <h2><b>Featured Profiles in<font color="red"> Colombo</font> District</b></h2>
                        <div class="col-md-6">


                            <!--groom list --> 
                            <style>
                                .button5{
                                    color: #FFF;
                                    background-color: #dd3175;
                                    width:100%;
                                    height:40px;

                                }

                                .button5:hover {
                                    background-color: #7140bc; 
                                    color: white;
                                }	

                            </style>



                            <h4><b><button class="button5" >Groom</button></b></h4>

                            <div class="col-md-6">	  
                                <img src="<?php echo base_url() ?>images/1.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100"> 
                                <div class="caption">

                                    <p><b>Bride</b>  0778956625<br>21, india<br> hgfsdkjgffshddhs<br>dfjhsdjhds</p>
                                </div>
                            </div>	

                            <div class="col-md-6">	  
                                <img src="<?php echo base_url() ?>images/1.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100"> 
                                <div class="caption">
                                    <p><b>Bride</b>  0778956625<br>21, india<br> hgfsdkjgffshddhs<br>dfjhsdjhds</p>
                                </div>
                            </div>	

                            <div class="col-md-6">	  
                                <img src="<?php echo base_url() ?>images/1.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100"> 
                                <div class="caption">
                                    <p><b>Bride</b>  0778956625<br>21, india<br> hgfsdkjgffshddhs<br>dfjhsdjhds</p>
                                </div>
                            </div>	

                            <div class="col-md-6">	  
                                <img src="<?php echo base_url() ?>images/1.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100"> 
                                <div class="caption">
                                    <p><b>Bride</b>  0778956625<br>21, india<br> hgfsdkjgffshddhs<br>dfjhsdjhds</p>
                                </div>
                            </div>		

                        </div>







                        <!--brides list -->

                        <div class="col-md-6">

                            <h4><b> <button class="button5" >Brides</button></b></h4>

                            <div class="col-md-6">	  
                                <img src="<?php echo base_url() ?>images/1.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100"> 
                                <div class="caption">
                                    <p><b>Bride</b>  0778956625<br>21, india<br> hgfsdkjgffshddhs<br>dfjhsdjhds</p>
                                </div>
                            </div>	

                            <div class="col-md-6">	  
                                <img src="<?php echo base_url() ?>images/1.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100"> 
                                <div class="caption">
                                    <p><b>Bride</b>  0778956625<br>21, india<br> hgfsdkjgffshddhs<br>dfjhsdjhds</p>
                                </div>
                            </div>	

                            <div class="col-md-6">	  
                                <img src="<?php echo base_url() ?>images/1.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100"> 
                                <div class="caption">
                                    <p><b>Bride</b>  0778956625<br>21, india<br> hgfsdkjgffshddhs<br>dfjhsdjhds</p>
                                </div>
                            </div>	

                            <div class="col-md-6">	  
                                <img src="<?php echo base_url() ?>images/1.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100"> 
                                <div class="caption">
                                    <p><b>Bride</b>  0778956625<br>21, india<br> hgfsdkjgffshddhs<br>dfjhsdjhds</p>
                                </div>
                            </div>		

                        </div>
                    </div>

                    <bR><bR>





                </div>
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


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


<script src="<?php echo base_url() ?>js/angular.js"></script>

<script src="<?php echo base_url() ?>js/app.js"></script>

</body>
</html>
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

                            <form method="post" action="<?php echo site_url('home/register'); ?>">
                                <?php if (isset($login_errors)) echo $login_errors; ?>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email Address" name="user">
                                        <div class="login-bottom-text checkbox hidden-sm">

                                        </div>
                                    </div>
                                </div>	
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="pass">
                                        <div class="login-bottom-text hidden-sm"> <a style="color:white" href="<?php echo site_url("Reset")?>">Forgotten account?</a> </div>
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
                                        <input type="submit" name="login" value="login" class="button3">
                                    </div>
                                </div>
                            </form>
                        </div>	
                    </div>
                </div>
            </div>
        </header>


        <!--header end-->
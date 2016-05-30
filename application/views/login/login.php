<!DOCTYPE HTML>
<html>
<head>
    <title>Login Page | AIWA BLOG</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/c_login/css/custom.css" />
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="<?php echo base_url();?>/c_login/js/loginjs.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">           
            <!--FORM LOGIN-->
            <div id="login" class="col-md-12 col-lg-12 col-sm-12 col-xs-12">                
                <form class="form" method="POST" action = "<?php echo base_url();?>login/login">
                    <span class="title"><p class="fa fa-cloud-upload"></p> Login</span>    
                    <div class="user form-group">                       
                        <label>User Login</label>
                        <div>
                            <span id = "error"><p class="fa fa-times"></p> Please Fill In Red-Field</span>  
                        </div>     
                        <input id ="user" type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="pass form-group">
                        <input id="pass" type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button id="submit" name="btn_submit" type="submit" class="btn btn-primary bott log"><b>Sign In</b></button>                     
                </form>
            </div>            
            <!--END FORM LOGIN-->
        </div>
    </div>
</body>
</html>

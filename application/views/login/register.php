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
            <!--FORM REG-->
            <div id="reg" class="col-md-12 col-lg-12 col-sm-12 col-xs-12">                
                <form class="form" method="POST" action = "">
                    <span class="title" ><p class="fa fa-cloud-download"></p> Register</span>    
                    <div class="userreg form-group">                       
                        <label>User Registration</label>
                        <div>
                            <span id = "error"><p class="fa fa-times"></p> Please Fill In Red-Field</span>  
                        </div>  
                        <input id ="userreg" type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="passreg form-group">
                        <input id="passreg" type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="emailreg form-group">
                        <input id="emailreg" type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="nichreg form-group">
                        <input id="nichreg" type="text" class="form-control" name="nich" placeholder="Nich Name">
                    </div>
                    <button id="submitreg" type="submit" class="btn btn-primary bott"><b>Sign Up</b></button>                     
                </form>
            </div>
            <!--END FORM REG-->           
        </div>
    </div>
</body>
</html>

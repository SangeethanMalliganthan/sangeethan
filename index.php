<!DOCTYPE html>
<html>
	<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Cross Site Request Forgery Protection</title>
        <style>
            body{
                background-image:url("https://warnerwave.xyz/image/154020-full_hd-wallpaper-4k-dark-blue-lines-grid-lines-backgrounds-pattern.jpg");
            }
        </style>
	</head>
	<body  >


		<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                
                    <div class="float">
                        <form class="form" action="result.php" method="post">

                            <div class="form-group" >
                                <label for="username" class="text-white"><b>Username:  </b></label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white"><b>Password :</b></label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="Login" class="btn btn-info btn-md" value="Login" colour="red">
                            </div>


                        </form>
                    </div>
                
            </div>
        </div>
    </div>
	</body> 
</html>




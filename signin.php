<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Sign in</title>

    <style>
        .body {
            overflow-x : hidden;
        }

        #box 
        {
            /* display: flex */
            margin-top : 225px;
            margin-left : 500px;
        } 

        .title
        {
            text-align : center;
            margin-bottom : 1em;
        }
    </style>

  </head>
  <body class="body">
 		<div class="container col-lg-12" id="box">
 			<div class="row">
 				<div class="col-lg-4">
 					<h2 class="title">Sign in Form</h2>
 					<form action="registration.php" method="post">

 						<div class="form-group">
 							<label>Username</label>
 							<input type="text" name="user" class="form-control">
 						</div>
 						<div class="form-group">
 							<label>Password</label>
 							<input type="Password" name="password" class="form-control">
 						</div>
 						<button type="submit" class="btn" > <a href="./login.php">Sign in</a></button>
 						
 					</form>

 				</div>
 			</div>
 		</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
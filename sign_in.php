<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Student Portal-Sign In</title>
</head>
<body>


     <div class="container d-flex justify-content-center align-items-center min-vh-100">


       <div class="row border rounded-5 p-3 bg-white shadow box-area">
       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background:  #2EC7E6;">
           <div class="featured-image mb-3">
            <img src="22870759_6665174.jpg" class="img-fluid" style="width: 250px;">
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Sign In</small>
       </div> 
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2>Sign In</h2>
                     <p>Sign In into your student portal</p>
                </div>

               
                
                <form  method="post" action="register.php">
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Index Number" required name="iNumber">
                </div>

                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="password" name="password">
                </div>
             
                <div class="input-group mb-3">
                <input type="submit" class="btn btn-lg btn-primary w-100 fs-6" value="Sign In" name="signIn">

                </form>
           
                
                <div class="row">
                    <small>Don't have an account?<a href="index.php"> Sign Up</a></small>
                </div>
          </div>
       </div> 

      </div>
    </div>

</body>
</html>
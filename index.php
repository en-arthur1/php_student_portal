<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Student Portal-Sign Up</title>
</head>
<body>
     <div class="container d-flex justify-content-center align-items-center min-vh-100">

       <div class="row border rounded-5 p-3 bg-white shadow box-area">
       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #2EC7E6;">
           <div class="featured-image mb-3">
            <img src="40478719_8848698.jpg" class="img-fluid" style="width: 250px;">
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 610;">Create your account</p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Sign Up</small>
       </div> 
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2>Sign Up</h2>
                     <p>Sign Up into your Student Portal</p>
                </div>

                <form method="post" action="register.php">

                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="First Name" required name='fName'>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Last Name" required name="lName">
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" required name="eAddress">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Index Number" required name="iNumber">
                </div>

                <div class="input-group mb-3">
                    <input type="tel" class="form-control form-control-lg bg-light fs-6" placeholder="Phone number" required name="pNumber">
                </div>

                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required name="password">
                </div>

                <input type="submit" class=" btn btn-lg btn-primary w-100 fs-6" value="Sign Up" name="signUp">

</form>
              
                <div class="row">
                    <small>Already have account?<a href="sign_in.php"> Sign In</a></small>
                </div>
          </div>
       </div> 

      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
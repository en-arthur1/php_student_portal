<?php
session_start();
include('connect.php');

if (!isset($_SESSION['index_number'])) {
    header("Location: sign_in.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>

</head>
<body>
<input type="checkbox" id="sidebar-toggle">
    <div class="d-flex">
        <nav id="sidebar" class="bg-light">
            <div class="position-sticky">

            <!--Sidebar menus-->
                <div class="list-group list-group-flush mx-3 mt-4">
                    <a href="#home" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="bi bi-house-fill me-3"></i><span>Home</span>
                    </a>
                    <a href="#courses" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="bi bi-book me-3"></i><span>Courses</span>
                    </a>
                    <a href="logout.php" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="bi bi-box-arrow-right me-3"></i><span>Logout</span>
                    </a>
                </div>
            </div>
        </nav>

       
        <div id="content" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <label for="sidebar-toggle" class="btn btn-info sidebar-toggle-label">
                        <i class="bi bi-list"></i>
                    </label>
                    <a class="navbar-brand ms-3" href="#">Student Portal</a>
                </div>
            </nav>

            <div id="home" class="content-section container-fluid mt-3">
                
                    <h5>Hello 👋
                    <?php
                    $indexNumber = $_SESSION['index_number'];
                    $query = mysqli_query($conn, "SELECT * FROM student_portal WHERE index_number='$indexNumber'");
                    
                    if ($query) {
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo $row['firstname'] . ' ' . $row['lastname'];
                        }
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                    ?> 
                    </h5>
                    <h2>Welcome to Your Dashboard</h2>
                    
                </div>

                <div id="courses" class="content-section">
                    <h2 class="mb-4">My Courses</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      
        <div class="col">
            <div class="card h-100 course-card">
                <div class="card-body">
                    <h5 class="card-title">PHP</h5>
                    <p class="card-text">CS101</p>
                    <div class="progress course-progress mb-3">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between course-stats">
                        <span>75% Complete</span>
                        <a href="#" class="text-decoration-none">View Course</a>
                    </div>
                </div>
            </div>
        </div>

    
        <div class="col">
            <div class="card h-100 course-card">
                <div class="card-body">
                    <h5 class="card-title">Web Tech</h5>
                    <p class="card-text">WD200</p>
                    <div class="progress course-progress mb-3">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between course-stats">
                        <span>40% Complete</span>
                        <a href="#" class="text-decoration-none">View Course</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 course-card">
                <div class="card-body">
                    <h5 class="card-title">Software Engineering</h5>
                    <p class="card-text">CS250</p>
                    <div class="progress course-progress mb-3">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between course-stats">
                        <span>60% Complete</span>
                        <a href="#" class="text-decoration-none">View Course</a>
                    </div>
                </div>
            </div>
        </div>


        
        <div class="col">
            <div class="card h-100 course-card">
                <div class="card-body">
                    <h5 class="card-title">Hardware Technology</h5>
                    <p class="card-text">CS250</p>
                    <div class="progress course-progress mb-3">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between course-stats">
                        <span>40% Complete</span>
                        <a href="#" class="text-decoration-none">View Course</a>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col">
            <div class="card h-100 course-card">
                <div class="card-body">
                    <h5 class="card-title">Software Engineering</h5>
                    <p class="card-text">CS250</p>
                    <div class="progress course-progress mb-3">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between course-stats">
                        <span>60% Complete</span>
                        <a href="#" class="text-decoration-none">View Course</a>
                    </div>
                </div>
            </div>
        </div>
                </div>

               
            </div>
        </div>
    </div>
</body>
</html>
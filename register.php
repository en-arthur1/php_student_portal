<?php
include 'connect.php';

if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['eAddress'];
    $indexNumber = $_POST['iNumber'];
    $phoneNumber = $_POST['pNumber'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkEmail = "SELECT * FROM student_portal WHERE email='$email'";
    $result = $conn->query($checkEmail);
    if ($result->num_rows > 0) {
        echo "Email already exists";
    } else {
        $insertQuery = "INSERT INTO student_portal (firstname, lastname, index_number, email, phone, password)
                        VALUES ('$firstName', '$lastName', '$indexNumber', '$email', '$phoneNumber', '$password')";

        if ($conn->query($insertQuery) === TRUE) {
            echo "Registration successful!";
            header("Location: sign_in.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['signIn'])) {
    $indexNumber = $_POST['iNumber'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM student_portal WHERE index_number = '$indexNumber' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['index_number'] = $row['index_number'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Incorrect Index number or Password";
    }
}
?>

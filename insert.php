<?php //include ("bpms/db_connect.php");
?>
<?php

// include "bpms/db_connect.php";

// 	if(isset($_POST['add'])){
// 		$firstname = $_POST['first_name'];
// 		$lastname = $_POST['last_name'];
//         $age = $_POST['age'];
// 		$email = $_POST['email'];
// 		$phone = $_POST['phone'];
// 		$gender = $_POST['gender'];
// 		$date = $_POST['issue_date'];


// 		$sql = "INSERT INTO customer (first_name, last_name, age, email, phone, gender, issue_date, created_on) VALUES ('$firstname', '$lastname', '$age', '$email', '$phone', '$gender','$date' NOW())";
// 		if($conn->query($sql)){
// 			$_SESSION['success'] = 'Customer added successfully';
// 		}
// 		else{
// 			$_SESSION['error'] = $conn->error;
// 		}

// 	}
// 	else{
// 		// $_SESSION['error'] = 'Fill up add form first';
// 	}

// 	header('location: index.php');
?>

<?php
include_once 'bpms/db_connect.php';

if (isset($_POST['add'])) {
    $event_type = $_POST['event_type'];
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $hotel = $_POST['hotel'];
    $transport = $_POST['transport'];

    // $date = $_POST['issue_date'];

    $sql = "INSERT INTO customer (event_type, first_name, last_name, age, email, country, phone, gender, hotel, transport, created_on) VALUES ('$event_type','$firstname', '$lastname', '$age', '$email', '$country', '$phone', '$gender','$hotel','$transport' NOW())";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
    } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
header('location: index.php');
?>
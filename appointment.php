<?php
$department=$_POST['department'];
$doctor_name=$_POST['doctor_name'];
$patient_name=$_POST['patient_name'];
$number=$_POST['number'];
$date=$_POST['date'] ;

//Database Connectivity


$dbhost = 'localhost:3325';
$dbuser = 'root';
$dbpass = 'Rohit@123';
$dbname = 'user-verification';

$conn = mysqli_connect($dbhost, $dbuser,$dbpass, $dbname);

if($conn->connect_error ) {
  die('Connection failed : ' .$conn->connect_error);
} else{
  $stmt=$conn->prepare("insert into appointment(department, doctor_name, patient_name, number, date)
  values(?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss",$department, $doctor_name, $patient_name,$number,$date);
  $stmt->execute();
  // echo "<center>"."<h2>"."Dear"." "."$patient_name"." "."Your Appointment is Booked on"." "."$date"."!";
  echo <<<identifier
  <!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
      <!-- Bootstrap css -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
  
      <link rel="stylesheet" href="style.css">
      <title>Thank You for Booking</title>
  </head>
  
  <body>
  
      <div class="container">
          <div class="row">
              <div class="col-md-6 offset-md-4 form-div login">


              <center><h2>Dear {$patient_name}, Thank You for using e-Clinic Portal Service.
               Your Appointment is Booked on {$date}! </h2></center>


              </div>
              </div>
              </div>
          
          
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
          </body>
          
          </html>  
  identifier;
  $stmt->close();
  $conn->close();
  exit(0);
}

?>

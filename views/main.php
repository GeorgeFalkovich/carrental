<?php
//$servername = "remotemysql.com";
//$username = "OGq6TQKiQJ";
//$password = "oSm7ERMYya";
//$dbname = "OGq6TQKiQJ";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//$sql = "SELECT company_id, company_name FROM car_company;";
//$result = $conn->query($sql);
//$car_companies = [];
//
//// Fill array fith car company name from databse
//if ($result->num_rows > 0) {
//  // Output data for each row
//  while ($row = $result->fetch_assoc()) {
//     $car_companies[$row['company_id']] = $row['company_name'];
//  }
//};
//
//// Create options html string with car companies to show on select form
//$options = '<option value="" disabled selected style="display:none;">Choose car company</option>';
//
//for ($i = 1; $i < sizeof($car_companies)+1; $i++) {
//   $company_id = array_search($car_companies[$i], $car_companies);
//   $options .= '<option value="'.$company_id.'" name="Nissan">'.$car_companies[$i].'</option>';
//};
//?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Courgette&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Lora&display=swap"
      rel="stylesheet"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>Tyco Motors</title>
  </head>
  <body>

  <?php require('navbar.php'); ?>

  <?php require('main_section.php'); ?>

  <?php require('last_section.php'); ?>



    <!-- on scrolling effect -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  <script src="assets/js/script_js.js"></script>

  </body>
</html>

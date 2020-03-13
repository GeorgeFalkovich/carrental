
<?php
$servername = "shareddb-r.hosting.stackcp.net";
$username = "carrental-3132333222";
$dbname = "carrental-3132333222";
$password = "cjpc8g4q2a";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$company_id = $_GET['company_id'];
$sql = "SELECT model_id, model_name FROM car_model WHERE company_id = $company_id;";
$result = $conn->query($sql);
$car_models = [];


// Fill array fith car company name from databse
if ($result->num_rows > 0) {
  // Output data for each row
  while ($row = $result->fetch_assoc()) {
    $car_models[$row['model_id']] = $row['model_name'];
  }
};

echo json_encode($car_models);

?>


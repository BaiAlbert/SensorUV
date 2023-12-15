<?php
/*
  Rui Santos
  Complete project details at https://RandomNerdTutorials.com/esp32-esp8266-mysql-database-php/
  
  Permission is hereby granted, free of charge, to any person obtaining a copy
  of this software and associated documentation files.
  
  The above copyright notice and this permission notice shall be included in all
  copies or substantial portions of the Software.
*/

$servername = "localhost";

// REPLACE with your Database name
$dbname = "id21514049_esp32";
// REPLACE with Database user
$username = "id21514049_baialbert";
// REPLACE with Database user password
$password = "Al140906+";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT id, sensor, location, value1, value2, value3, reading_time FROM SensorData ORDER BY id DESC";
    
echo '
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Ultravioleta</title>
    <link rel="stylesheet" href="bootstrap2.min.css">
</head>
    
<body>
<center>
<br>

<div class="card bg-dark mb-3" style="width: 50%; border:1px solid black">
  <div class="card-header"><b><b>Datos obtenidos por el sensor ML8511</b></b></div>
  <div class="card-body">
    <table style="width=device-width; border:1px solid black" class="table table-hover" cellspacing="5" cellpadding="5">
    <thead>
      <tr class="table-primary">
        <td>ID</td> 
        <td>Sensor</td> 
        <!-- <td>Lugar</td>  -->
        <td>Indice UV</td> 
        <!-- <td>Intensidad UV</td> -->
        <td>Hora de la medición</td> 
      </tr>
      </thead>
    </div>
</div>

</center>
</body>
';
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_id = $row["id"];
        $row_sensor = $row["sensor"];
        $row_location = $row["location"];
        $row_value1 = $row["value1"];
        $row_value2 = $row["value2"]; 
        $row_value3 = $row["value3"]; 
        $row_reading_time = $row["reading_time"];
        // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time - 1 hours"));
      
        // Uncomment to set timezone to + 4 hours (you can change 4 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time + 4 hours"));
        
        echo '
        <tbody>
            <tr class="table-secondary"> 
                <td>' . $row_id . '</td> 
                <td>' . $row_sensor . '</td> 
                <!-- <td>' . $row_location . '</td>  -->
                <td>' . $row_value1 . '</td> 
                <!-- <td>' . $row_value2 . '</td> -->
                <td>' . $row_reading_time . '</td> 
            </tr>
        </tbody>
        </html>';
    }
    $result->free();
}

$conn->close();
?>
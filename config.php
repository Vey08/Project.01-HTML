<?php
// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "article";

//1st func
function TitleID($conn, $id) {
  $sql = "SELECT judul FROM article WHERE id=" . $id;
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    return $row["judul"];
  } else {
    return "0 results";
  }
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$judul1 = TitleID($conn, 1);
$judul2 = TitleID($conn, 2);
$judul3 = TitleID($conn, 3);


//2nd func
function DeskripsiID($conn, $id) {
    $sql = "SELECT isi FROM article WHERE id=" . $id;
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row["isi"];
    } else {
      return "0 results";
    }
  }
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Call functions with different IDs
  $isi1 = DeskripsiID($conn, 1);
  $isi2 = DeskripsiID($conn, 2);
  $isi3 = DeskripsiID($conn, 3);

//3rd func
function LinkID($conn, $id) {
    $sql = "SELECT link FROM article WHERE id=" . $id;
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row["link"];
    } else {
      return "0 results";
    }
  }
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Call functions with different IDs
  $link1 = LinkID($conn, 1);
  $link2 = LinkID($conn, 2);
  $link3 = LinkID($conn, 3);

$conn->close();
?>
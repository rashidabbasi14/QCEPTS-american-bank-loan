<?php include 'db.php';

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

$sql = "CREATE TABLE IF NOT EXISTS contact_form (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(30),
    phone VARCHAR(50) NOT NULL,
    description VARCHAR(50),
    website VARCHAR(255),
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === FALSE) {
    die("Couldn't create/find table: " . $conn->error);
}

$website = 'americansbusinessloan.com';
$stmt = $conn->prepare("INSERT INTO contact_form (name, email, phone, description, website) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['description'], $website);
$stmt->execute();

if($stmt->error){
    http_response_code(400);
    die($stmt->error);
}else{
    redirect('/thankyou.html');
}

$stmt->close();
$conn->close();
?>
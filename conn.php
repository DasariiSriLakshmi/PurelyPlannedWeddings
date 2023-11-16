
<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "wedding";
    
    // get values form input text and number

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $description = $_POST['description'];
  
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO events(name,email,number,address,description) VALUES ('$name','$email','$number','$address','$description')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result>0)
    {
        echo 'Slot Booked Successfully';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
}

?>


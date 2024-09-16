<?php
require_once "db_config.php";
global $db_pl_con;
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $qunatity = $_POST['qunatity'];
    $cake_fav = $_POST['cake_fav'];
    $any_customization = $_POST['any_customization'];
    $delivery_date = date('d-m-y', strtotime($_POST['delivery_date']));
    $timeing = $_POST['timeing'];
    $venue = $_POST['venue'];
    $payment_by = $_POST['payment_by'];
    $pincode = $_POST['pin_code'];
  

    $sql = "INSERT INTO imsa
    (`name`, `age`,
     `email`, `phone_no`,
      `qunatity`, `cake_fav`, `any_customization`, 
      `delivery_date`, `timeing`, `venue`, `payment_by`, 
      `pin_code`) VALUES 
      ('$name','$age',
      '$email','$phone_no',
      '$qunatity','$cake_fav','$any_customization',
      '$delivery_date','$timeing','$venue','$payment_by','$pincode')";

      echo $sql;
             if (mysqli_query($GLOBALS['db_pl_con'], $sql)) {
            header("location: index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
}else{
        echo "Name, Class and Marks cannot be empty!";
    }

?>
<?php
include_once 'database.php';
$sucess = "";

if(isset($_POST['kaydet']))
{  
    $ad = $_POST['ad'];
    $soyad  = $_POST['soyad'];
    $sehir  = $_POST['sehir'];
    $email      = $_POST['email'];
     
    $sql        = "INSERT INTO calisan (ad,soyad,sehir,email)
    VALUES ('$ad','$soyad','$sehir','$email')";

    if (mysqli_query($conn, $sql))
    {
        $sucess = "Insert has been successfully.!"; 
    }
    else
    {
 echo "Error: " . $sql . "
    " . mysqli_error($conn);
 }
 mysqli_close($conn);
}
?>
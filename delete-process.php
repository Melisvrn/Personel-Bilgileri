<?php
    include_once 'database.php';
    $sql = " DELETE FROM calisan WHERE id='" . $_GET["id"] . "'";
    if (mysqli_query($conn, $sql))
    {
        $delete = "Başarıyla silindi.";
        header('Location:retrieve.php');
        
    }
        else
    {
        $delete = "Kayıt silinirken hata oluştu " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
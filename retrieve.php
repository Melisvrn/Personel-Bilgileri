<?php
    include_once 'database.php';
    $update = '';
    $delete = '';
    $result = mysqli_query($conn, "SELECT * FROM calisan");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geri Al</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- kütüphaneler -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!--  bootstrap kütüphaneleri -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


</head>
<body>
<br>
<br>
    <div class="container">
        <div class="container-fluid">
        <h5 class="text-center text-success" id="güncelle"><?= $güncelle ;?></h5>
        <h5 class="text-center text-success" id="sil"><?= $sil ;?></h5>
            <table id="tableHorizontalWrapper" class="table table-striped table-bordered table-sm text-center" cellspacing="0"width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ad</th>
                        <th>Soyad</th>
                        <th>Sehir Name</th>
                        <th>Email</th>
                        <th>Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                <?php
                while($row = mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['ad'];?></td>
                    <td><?= $row['soyad'];?></td>
                    <td><?= $row['sehir'];?></td>
                    <td><?= $row['email'];?></td>
                    <td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Düzenle</a></td>
                    <td><a href="delete-process.php?id=<?php echo $row["id"]; ?>" onClick="return confirm('Silmek istedigine emin misin?')">Sil</a></td>
                    </tr>
                <?php
                }
                
                mysqli_close($conn);
                ?>
                </tbody>
            </table>
        </div>
    </div>

    
    <script>
        $(document).ready(function()
        {
            setTimeout(function()
            {
                $('#güncelle').hide();
            },3000);
        });

        $(document).ready(function()
        {
            setTimeout(function()
            {
                $('#sil').hide();
            },3000);
        });
-
   
    $(document).ready(function ()
    {
        $('#tableHorizontalWrapper').DataTable(
        {
        "scrollX": true
        });

        $('.dataTables_length').addClass('bs-select');
    });
    </script>
</body>
</html>
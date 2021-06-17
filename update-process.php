<?php
    include_once 'database.php';
    $city_name  = mysqli_query($conn, "SELECT DISTINCT sehir FROM calisan");
    $update = '';
    if(count($_POST)>0)
    {
        mysqli_query($conn,"UPDATE calisan set ad='" . $_POST['ad'] . "', soyad='" . $_POST['soyad'] . "', sehir='" . $_POST['sehir'] . "' ,email='" . $_POST['email'] . "' WHERE id='" . $_GET['id'] . "'");
        $update = "Basarıyla Güncellendi!";
    }
        $edite = mysqli_query($conn,"SELECT * FROM calisan WHERE id='" . $_GET['id'] . "'");
        $row= mysqli_fetch_array($edite);
?>

<html>
<head>
<title>Calisan verilerini güncelle</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
</head>

<body>

<style>
.form-control, .btn,.container {
    border-radius: 1px;
}   
</style>

<br>
<br>
<br>
    <div class="container"> 
        <div class="shadow p-3 mb-5 bg-white rounded"><!-- Gölge -->
            <h3 class="mt33">PHP Ekle</h3>
            <a href="retrieve.php">Listeye geri Dön</a>
            <br>
            <br>
            <h5 class="text-center text-success" id="güncelle"><?= $güncelle ;?></h5>
            <form class="mt33" action="" method = "post"><!--form -->
                <!-- ad -->
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Ad *</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="ad" name="ad" value="<?=$row['ad']; ?>" required>
                    </div>
                </div>

                  <!-- Soyad-->
                  <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">soyad *</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="soyad" name="soyad" value="<?= $row['soyad']; ?>" required>
                    </div>
                </div>

                <!-- Sehir  -->
                <div class="form-group row">
                    <label for="rootCause" class="control-label col-sm-3">Sehir *</label>
                    <div class="col-sm-9">
                        <select class="custom-select" id="sehir" name="sehir" aria-label="sehir" required>
                            <?php foreach($sehir as $rows):?>
                                <option value="<?php echo $rows['sehir']; ?>"<?php if($row['sehir'] == $rows['sehir']) echo 'selected="selected"'; ?>><?php echo $rows['sehir']; ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>

                  <!-- Email -->
                  <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Email *</label>
                    <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" name="email" value="<?= $row['email']; ?>" required>
                    </div>
                </div>

               
                
                <div class="text-success text-center d-none" id="msg_div">
                    <h4 id="res_message">Basarıyla eklendi.</h4>
                </div>

                
                <div class="form-group row">
                    <div class="offset-sm-3 col-sm-9 pull-right">
                        <button type="submit"id="submit" name="submit" class="btn btn-primary">Güncelle</button>
                    </div>
                </div>
            </form>
        </div>
           
    <script>
        $(document).ready(function()
        {
            setTimeout(function()
            {
                $('#güncelle').hide();
            },3000);
        });
// ---------------------------------------------------
    // function data table
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
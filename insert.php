<?php
    include_once 'process.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP EKLE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Library -->
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
            <h3 class="mt33">PHP EKLE </h3>
            <h5 class="text-center text-success" id="message"><?= $sucess ;?></h5>
            <br>
            <form class="mt33" action="insert.php" method = "post"><!--form -->
          
                <!-- Ad -->
                <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Ad *</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="ad" name="ad" placeholder="Ad" required>
                    </div>
                </div>

                  <!-- Soyad-->
                  <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Soyad*</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="soyad" name="soyad" placeholder="Soyad" required>
                    </div>
                </div>

                <!-- Sehir -->
                <div class="form-group row">
                    <label for="rootCause" class="control-label col-sm-3">Sehir *</label>
                    <div class="col-sm-9">
                        <select class="custom-select" id="sehir" name="sehir" aria-label="sehir" required>
                            <option value="">Lütfen sehir seçiniz</option>
                            <option value="Bursa">Bursa</option>
                            <option value="İstanbul">İstanbul</option>
                            <option value="Ankara">Ankara</option>
                        </select>
                    </div>
                </div>

                  <!-- Email -->
                  <div class="form-group row">
                    <label for="description" class="control-label col-sm-3">Email *</label>
                    <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" name="email" placeholder=" email" required>
                    </div>
                </div>

               
                
                <div class="text-success text-center d-none" id="msg_div">
                    <h4 id="res_message">Basarıyla eklendi.</h4>
                </div>

                <!--Veri ekleme butonu -->
                <div class="form-group row">
                    <div class="offset-sm-3 col-sm-9 pull-right">
                        <button type="submit"id="kaydet" name="kaydet" class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function()
        {
            setTimeout(function()
            {
                $('#message').hide();
            },3000);
        });
    </script>

</body>
</html>

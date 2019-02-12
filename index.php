
<?php include ('functions.php')?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
<form action="functions.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Ваше имя</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ваше имя">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Ваш Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Ваш телефон</label>
        <input type="number" class="form-control" name="tel" id="exampleInputPassword1" placeholder="8 (912) 345-67-89">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Ваш вопрос</label>
        <input type="text" class="form-control" name="vopr" id="exampleInputPassword1" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<?php


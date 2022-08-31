<?php
$name = $_GET["name"] ?? '';
$email = $_GET["email"] ?? '';
$age = $_GET["age"] ?? '';


$correct_email = (strpos($email, '@')&& strpos($email, '.') === 1) ? true :false;
$correct_name = strlen($name) > 3 ? true : false;
$correct_age = is_numeric($age);
$correct_data = ($correct_email && $correct_name && $correct_age )  ? true : false;
$access = "";
if($correct_data) $access = "Accesso riuscito" ;
if(!$correct_data) $access = "Accesso negato" ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
   <div class="container my-5">

   <form>
    <label class="form-label" for="name">Name</label>
    <input class="form-control w-50 mb-2" type="text" id="name" name="name">
    <label class="form-label" for="email">Email</label>
    <input class="form-control w-50 mb-2" type="text" id="email" name="email">
    <label class="form-label" for="age">Age</label>
    <input class="form-control w-50 mb-3" type="text" id="age" name="age">
    <input type="submit">
    </form>
     
    <?php if($name !== "" || $email !== "" || $age !== "") { ?>
     <h1><?= $access  ?></h1> 
     <?php }?>
     
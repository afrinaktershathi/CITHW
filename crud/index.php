<?php

session_start();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Post</title>
    <link href="index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>





    <!--navbar starts-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <a class="navbar-nav me-auto mb-2 mb-lg-0" href="#">Post sys</a>
    
    
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Add post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">All post</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>


<!--navbar ends-->

<!--card starts-->

<div class="card col-lg-4 mx-auto mt-5">
    <div class="card-header">
        add post
    </div>
  <div class="card-body">
  <div class="mb-3">


    <form action="./controller/storepost.php" method="post">
  <input value="<?=$_SESSION['title']??""?>" name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
  <?=$_SESSION['errors']['title']??""?>
</div>

<div class="mb-3"> 
  <textarea name="detail"class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Post details"><?=$_SESSION['detail']??""?></textarea>
  <?=$_SESSION['errors']['detail']??""?>
    </div>
    <button class="btn btn-primary w-100" id="button1">submit</button>
</form>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php
session_destroy();

?>

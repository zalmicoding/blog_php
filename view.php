<?php
include "logic.php";


?>




<!doctype html>
<html lang="en">
  <head>
    <title>blog site</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

  <div class="container mt-5">
       
     <?php 
            foreach($querry as $q){?>
                <div class="bg-dark p-5 rounded-lg text-white text-center">
                    <h1><?php echo $q['title'];?> </h1>

                    <a href="edit.php?id=<?php echo $q['id'];?> " class="btn btn-light btn-sm">Edit</a>
                    <form  method="POST">
                        <input type="text" hidden name="id" value="<?php echo $q['id'];?>">
                         <button class="btn btn-danger btn-sm ml-2" name="delete">delete</button>
                    </form>
                </div>
                <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?> </p>

         <?php   }?>
     
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
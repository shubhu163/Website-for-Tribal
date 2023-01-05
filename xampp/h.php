<?php  session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class = "container">
      <div class = "row">
       <div class="col-md-12">
        <?php 
         if(isset($_SESSION['status']))
         {
          echo "<h4>".$_SESSION['status']."</h4>";
          unset($_SESSION['status']);
         }
 

        ?>


                 <div class="card mt-4">
           <div class="card-header">

             <h4>Insertion of Data </h4>
            </div>
           <div class="card-body">
            <form action="code2.php" method="POST">
               <div class="form-group mb-3">
                <label for="">Scheme</label>
                 <input type="text" name="Scheme" class="form-control" placeholder="Enter Scheme ">
                </div>
               <div class="form-group mb-3">
                <label for="">Category</label>
                 <input type="text" name="Category" class="form-control" placeholder="Enter Category ">
                </div>
                 <div class="form-group mb-3">
                  <label for="">Age limit </label>
                  <input type="text" name="Agelimit" class="form-control" placeholder="Enter Age ">
                </div>
                <div class="form-group mb-3">
                  <label for="">Gender</label>
                <input type="text" name="Gender" class="form-control" placeholder="Enter  Gender">
                </div>
                 <div class ="form-group mb-3">
                 <button type="submit" name="insert_data" class="btn btn-primary">SAVE DATA</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  </body>
</html>
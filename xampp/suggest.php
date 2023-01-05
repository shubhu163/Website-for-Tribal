<?php  session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   <body style="background-color:#26734d;">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Suggestion </title>
  </head>
  <body>
    <div class = "container" >
      <div class = "row">
       <div class="col-md-12">
        <?php 
         if(isset($_SESSION['status']))
         {
          echo "<h4>".$_SESSION['status']."</h4>";
          unset($_SESSION['status']);
         }
 

        ?>


                 <div class="card " style="margin-top: 37vh;  ">
           <div class="card-header">

             <h4>नवीन प्रस्ताव  </h4>
            </div>
           <div class="card-body">
            <form action="code3.php" method="POST">
               <div class="form-group mb-3">
                <label for="">तुम्हाला आम्हाला काही सूचना द्यायच्या असतील तर  </label>
                 <input type="text" name="suggest" class="form-control" placeholder="इकडे लिहा ">
                </div>
                 <div class ="form-group mb-3">
                 <button type="submit" name="insert_data" class="btn btn-primary">सेंड </button>
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
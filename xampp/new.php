<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Insertion of Data</title>
</head>
<body>
<body style="background-color:#26734d;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4> योजना शोध  </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="POST">
                                
                                <div class="input-group mb-3">
                                        <label class="col-md-3 control-label">Select Gender</label>
                                        <div class="col-1g-4">
                                               <select name ="Gender" class="form-control">
                                                <option>Select</option>
                                                    <option values ="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                     <option value="All">All</option>
                                                 </select>
                                             </div>
                                         </div>
                                  <div class="input-group mb-3">
                                        <label class="col-md-3 control-label">Select Age range</label>
                                        <div class="col-1g-4">
                                               <select name ="Agelimit" class="form-control">
                                                <option>Select</option>
                                                    <option values ="Above 60">Above 60</option>
                                                    <option value="30-60">30-60</option>
                                                     <option value="18-30">18-30</option>
                                                     <option value="Below 18">Below 18</option>
                                                 </select>
                                             </div>
                                         </div>
                                     <div class="input-group mb-3">
                                        <label class="col-md-3 control-label">Select Category</label>
                                        <div class="col-1g-4">
                                            <select name ="Category" class="form-control">
                                                <option>Select</option>
                                                    <option values ="Education">Education</option>
                                                    <option value="Employment">Employment</option>
                                                     <option value="Health">Health</option>
                                                 </select>
                                             </div>
                                         </div>
                                           <div class ="form-group mb-3">
                                             <button type="submit" name="submit" class="btn btn-primary">Search</button>
                                             </div>
                                    
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Scheme:-</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                error_reporting(0);
                                    include("db.php");
                                   // $con = mysqli_connect("localhost","root","","phpfiles");

                                       if (!isset($_POST [ 'submit' ])){

                                           
                                           
                                    }

                                    else{
                                    $Scheme = $_POST [ 'Scheme'];
                                            $Category = $_POST[ 'Category'];
                                            $Agelimit = $_POST[ 'Agelimit'];
                                            $Gender = $_POST[ 'Gender'];
                                             
                                            

                                            if ($Gender != "" || $Agelimit != "" || $Category != "" ){
                                                 $query = "SELECT * FROM dataentry WHERE   Gender = '$Gender' OR Agelimit = '$Agelimit' OR Category = '$Category'";

                                                $data = mysqli_query($con, $query) or die('error' );
                                                if (mysqli_num_rows($data) > 0){
                                                  while($row = mysqli_fetch_assoc($data)){
                                                     $Scheme = $row['Scheme'];
                                                     $Category = $row['Category'];
                                                     $Agelimit = $row['Agelimit'];
                                                     $Gender = $row['Gender'];
                                                     
                                                     ?>
                                
                                                     <tr>
                                                     <td><?php echo $Scheme;?></td>
                                                     </tr>
                                                     <?php
                                                    }
                                                }
                                                else{
                                                    ?>
                                                    <tr>
                                                   <td>Search not found</td>
                                                   </tr>
                                                   <?php
                                                }
                                            }     
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

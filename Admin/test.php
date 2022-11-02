<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <form action="test.php" method="post">
        <select class="form-select" aria-label="Default select example" id="state" name="state">
            <option selected>Open this select menu</option>
            <option value="TN">Tamilnadu</option>
            <option value="KL">Kerala</option>
            <option value="OT">Other</option>
        </select>
    
        <select class="form-select" aria-label="Default select example" id="city" name="city">
          <option selected>Open this select menu</option>
          <option value="TRI">Trichy</option>
          <option value="TIR">Tiruvandram</option>
          <option value="OTT">Other</option>
        </select>

        <button name="show" value="show" class="btn btn-outline-info">Submit</button>

    </form>

    <div class="container">
        
        <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $state = $_POST['state'];
            $city = $_POST['city'];
            
            $servername = "localhost";
            $username = "localhost";
            $password = "";
            $dbname = "test";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname); ?>

            <table class="table table-hover">
              <thead class="table-dark"> 
                <th>#</th>
                <th> Name </th>
                <th> Age </th>
                <th> State </th>
                <th> District </th>
                <th> City </th>
              </thead>
              <tbody> <?php

                $result = $conn->query("SELECT * FROM new WHERE state='$state' and dis='$city'") or die(mysqli_error($conn));
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) :
                    ?>
                  
                  <tr>
                  <th><?php  echo $row['id'] ?></th>
                  <td><?php  echo $row['name'] ?></td>
                  <td><?php  echo $row['age'] ?></td>
                  <td><?php  echo $row['state'] ?></td>
                  <td><?php  echo $row['dis'] ?></td>
                  <td><?php  echo $row['city'] ?></td>
                  </tr>
                  <?php 
                        endwhile;
                      } 
                        else { ?>
                  <tr class="tabel-danger"><td> <?php echo "No Data Found "?> </td> </tr>
                  <?php } }?>              
                </tbody>
          </table>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
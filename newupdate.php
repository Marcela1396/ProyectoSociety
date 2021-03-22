<html>
    <head>
        <?php include('encabezado.html'); ?> 
        <title> Edit member of our Society  </title>
    </head>

    <body>
            <h1> Edit member of our Society  </h1>
            <?php 
                $id = $_POST['txtId'];
                $name = $_POST['txtName'];
                
            $conn = mysqli_connect("localhost", "marce", "12345678", "db_society");
            if($conn->query("UPDATE person SET namePerson ='$name' WHERE idPerson = '$id'")){   
            ?>
                <div class="container">
                    <div class="card" >
                        <div class="card-header">
                        <b> Result </b>
                        </div>
                        <div class="card-body">
                            <p class="card-text"> Person updated </p>
                            <a href="list.php" class="btn btn-success"> Back  </a> 
                        </div>
                    </div>
                </div>
            <?php  
            }
            else{
            ?>
                <div class="container">
                    <div class="card" >
                        <div class="card-header">
                        <b> Result </b>
                        </div>
                        <div class="card-body">
                            <p class="card-text"> Opps! Something wrong happened </p>
                            <a href="list.php" class="btn btn-success"> Back  </a> 
                        </div>
                    </div>
                </div>
            <?php
            }
                $conn->close();
            ?>
            <br>
    </body>
<html>
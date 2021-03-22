<html>
    <head>
        <?php include('encabezado.html'); ?> 
        <title> Edit member of our Society  </title>
    </head>

    <body>
        <h1> Edit member of our Society  </h1>
        <?php
            $id = $_GET["id_person"];
            $conn = mysqli_connect("localhost", "marce", "12345678", "db_society");
			$sql = "SELECT * FROM person WHERE idPerson = '$id'"; 
            $resultado = $conn->query($sql);
            $row = $resultado->fetch_array();
        ?>

        <br>
        <div class="container">
            <form method="POST" action="newupdate.php">
                <input type="hidden" name="txtId" id="txtId" class="form-control" value="<?php echo $row['idPerson'] ?>"> <br>
                <div class="mb-3">
                    <label for="txtId" class="form-label">ID</label>
                    <div class="col-sm-12">
                        <input type="text" name="txtId" id="txtId" class="form-control" value="<?php echo $row['idPerson'] ?>" disabled> <br>
                    </div>
                </div> 

                <div class="mb-3">
                    <label for="txtName" class="form-label">Name</label>
                       <div class="col-sm-12">
                           <input type="text" name="txtName" id="txtName" class="form-control" value="<?php echo $row['namePerson'] ?>"  required> <br>
                       </div>
                </div>  
                <div align="center"> 
                    <input type="submit" class="btn btn-primary" value="Send"> 
                    <a href="list.php" class="btn btn-success"> Back  </a> 
                </div>
            </form>
            <br>
        </div>

        <?php
            $conn->close();
        ?>
    </body>
</html>
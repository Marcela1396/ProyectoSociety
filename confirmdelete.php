<html>
    <head>
        <title> Delete a member of our Society </title>
        <?php include('encabezado.html'); ?> 
    </head>
    <body>
        <h1> Delete a member of our Society </h1>
        <br>
        <?php
            $id = $_GET["txtId"];
            $conn = mysqli_connect("localhost", "marce", "12345678", "db_society");

        if($conn->query("DELETE FROM person WHERE idPerson='$id'")){
        ?>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                    <b> Result </b>
                    </div>
                    <div class="card-body">
                        <p class="card-text"> Person Deleted </p>
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
</html>
<html>
    <head>
        <title> New member of Marcela's Society</title>
        <?php include('encabezado.html'); ?> 
    </head>
    <body>
        <h1> New member of Marcela's Society </h1>
        <?php 
        
            $idperson = $_POST['txtId'];
            $nameperson = $_POST['txtName'];
            $conn = new mysqli("localhost", "marce", "12345678", "db_society");
            $mysqli_query($conn, "insert into person (idPerson,namePerson) values('idperson','nameperson')");
            
        ?>
        <br>

        <a href="index.html"> Back </a>

    </body>
</html>
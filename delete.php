<html>
    <head>
        <title> Delete a member of our Society </title>
        <?php include('encabezado.html'); ?> 
    </head>
    <body>
        <h1> Delete a member of our Society </h1>
        <br>
        <?php
            $id = $_GET["id_person"];
        ?>
        <div class="container">
            <div class="card" >
                <div class="card-header">
                <b> Delete Member </b>
                </div>
                <div class="card-body">
                    <p class="card-text">Do you want to delete the member identified by id <?php echo $id ?>  ? </p>
                    <?php
                        echo "<a class='btn btn-danger' href='confirmdelete.php?txtId=" . $id . "'> Yes </a> &nbsp; &nbsp";
                        echo "<a href='list.php' class='btn btn-success'> No </a>"; 
                    ?>
                </div>
            </div>
        </div>
   
<html>
    <head>
        <?php include('encabezado.html'); ?> 
        <title> New member of our Society </title>
    </head>
    <body>
        <h1> New member of our Society  </h1>
        <br>
        <div class="container">
            <form method="POST" action="newresult.php">
                <div class="mb-3">
                    <label for="txtId" class="form-label">ID</label>
                    <div class="col-sm-12">
                        <input type="text" name="txtId" id="txtId" class="form-control"  required> <br>
                    </div>
                </div> 

                <div class="mb-3">
                    <label for="txtName" class="form-label">Name</label>
                    <div class="col-sm-12">
                        <input type="text" name="txtName" id="txtName" class="form-control"  required> <br>
                    </div>
                </div>  
                <div align="center"> 
                    <input type="submit" class="btn btn-primary" value="Send"> 
                    <a href="list.php" class="btn btn-success"> Back  </a> 
                </div>
                
            </form>
            <br>
        </div>
 
    </body>
</html>

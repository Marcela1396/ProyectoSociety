<html>
    <head>
        <?php include('encabezado.html'); ?> 
        <title> New member of our Society </title>
    </head>
    <body>
        <h1> New member od our Society  </h1>
        <br>
        <div class="container">
            <form method="POST" action="newresult.php">
                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <div class="col-sm-12">
                        <input type="text" name="txtId" class="form-control" id="id" required> <br>
                    </div>
                </div> 

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <div class="col-sm-12">
                        <input type="text" name="txtName" class="form-control" id="name" required> <br>
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

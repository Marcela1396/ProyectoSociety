<html>
	<head>
		<?php include('encabezado.html'); ?> 
		<title> List of members of Marcela's Society</title>
	</head>
	<body>
		<h1> List of members of our Society </h1>
		<br>
		<div class="container">
			<table class="table">
				<thead>
					<tr class="table-warning">
						<td scope="col"><b> ID </b> </td>
						<td scope="col"><b> NAME </b> </td>
						<td scope="col"><b> <a class='btn btn-primary' href="new.php"> New Member </a>  </b> </td>
					</tr>
				</thead>
				<?php
					$conn = new mysqli("localhost", "marce", "12345678", "db_society");
					$result = $conn->query("SELECT * FROM person");
					while ($row = $result->fetch_assoc()){
						echo "<tr>";
						echo "<td> ". $row["idPerson"] . "</td>";
						echo "<td> ". $row["namePerson"] . "</td>";
						echo "<td> <a class='btn btn-warning' href='edit.php?id_person=". $row["idPerson"] ."'> Edit</a> 
						&nbsp; <a class='btn btn-danger' href='delete.php?id_person=". $row["idPerson"] ."'> Delete</a></td>";
						echo "</tr>";
						echo "</tr>";
					}
					$conn->close();
				?>
			</table>
		</div>
		
		<div align="center"> <a href="index.php" class="btn btn-success"> Back  </a> </div>		
	</body>

</html>
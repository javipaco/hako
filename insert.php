<?php
		
		$enlace = new mysqli("localhost", "root", "", "hako");
					 
							if ($enlace->connect_error) {
								 die("La conexion falló: " . $enlace->connect_error);
							}
							 
							if (!$enlace) {
								echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
								echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
								echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
								exit;
							}
							
							$email = $_REQUEST['email'];
							$password = $_REQUEST['password'];
							$celular = $_REQUEST['celular'];
							
							
							$id=0;
							$sql="SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
		
							$result = $enlace->query($sql);
							
							if ($result->num_rows == 1) {
									while($row = $result->fetch_assoc()) {
										$id=$row["id"];
										 $_SESSION['saldo']=$row["saldo"];
									  }
							 
							}
							else{
									$_SESSION['saldo']="";
									
							}
							 $saldo = $_SESSION['saldo'] ;
?>							
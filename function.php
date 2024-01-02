<?php

						if(isset($_POST['submit'])){

							$name=$_POST['name'];
							$phone=$_POST['phone'];

							$res= mysqli_query($mysqli,"INSERT into table03 values('','$name','$phone')");

							if($result)
							{
								echo"sucess";

							}
							else{
								echo"failed";
							}



						}

						?>
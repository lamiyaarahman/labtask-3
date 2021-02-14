<html>
	   <head>
            <title> </title>
       </head>
	   
	          <body>
	                <?php
			$Name="";
			$err_Name="";
			$Password="";
			$err_Password="";
			$Gender="";
			$err_Gender="";
			$Hobbies="";
			$err_Hobbies="";
			$Profession="";
			$err_Profession="";
			$Bio="";
			$err_Bio="";
			if ($_SERVER["REQUEST_METHOD"] == "POST")
   {

      if (empty($_POST["name"]))
      {
  		$err_Name = "Name is required";
  	}
     else if(strlen($_POST["name"])<5)
  	 {
  	  $err_Name="Enter valid name";
  	 }
  	 else
     {
  		 $Name=$_POST["Name"];
  	 }
  	     if (empty($_POST["Password"]))
      {
  		$err_Passwprd = "password is required";
  	   }
     else if(strlen($_POST["Password"])<8)
  	 {
  	  $err_Password="password must be Atleast 8 charecter";
  	 }
  	 else
     {
  		 $Password=$_POST["Password"];
  	 }
  	  if (empty($_POST["Gender"]))
      {
      $err_Gender = "Gender is required";
      } else
       {
       $Gender =$_POST["Gender"];
      }

  	  if (empty($_POST["Hobbies"]))
       {
      $err_Hobbies = "select hobbies";
      } else
       {
       $Hobbies =$_POST["Hobbies"];
      }
  	  if (empty($_POST["Profession"])) {
      $err_Profession = "select profession";
      } else
       {
       $Profession =$_POST["Profession"];
      }
       if(empty($_POST["Bio"])){
					$err_Bio="Enter a text ";
				}
				
				else{
					$bio=$_POST["Bio"];
				}
				
    


   }		?>

		
		<form action="" method="post">
			<table>
				<tr>
					<td rowspan="2"><span>User access </span></td>
					<td>:<input type="text" placeholder="Username" name="Name" value="<?php echo $Name?>"<span><?php echo $err_Name
					?></span></td>

				</tr>
				<tr>
					<td>:<input type="Password" placeholder="Password" name="Password" value="<?php echo $Password?>"<span><?php echo $err_Password
					?></span></td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" value="Male" name="Gender" >Male<input type="radio" value="Female" name="Gender" >Female  <br><span><?php echo $err_Gender
					?></span></td>
				</tr>
				<tr>
					<td><span>Hobbies</span> </td>
					<td>:<input type="checkbox" value="Movies" name="Hobbies[]">Movies
					     <input type="checkbox" value="Music" name="Hobbies[]">Music
						 <input type="checkbox" value="Games" name="Hobbies[]">Games<br>

						 <span> <?php echo $err_Hobbies?> </span>
				    </td>
				</tr>
				<tr>
					<td><span>Profession </span></td>
					<td>:
						<select name="Profession">
							<option>Teaching</option>
							<option>Business</option>
							<option>Service</option>
						</select> <span><?php echo $err_Profession
					?></span>
					</td>
				</tr>
				<tr>
					<td><span>Bio </span></td>
					<td>:<textarea name="Bio"></textarea></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit"></td>
				</tr>

			</table>


		</form>
	</body>
</html>
<html>
       <head></head>
      
	  <body>
	        <?php
			
			
				echo"Name:".$_POST["Name"]."<br>";
			
				echo"Password:".$_POST["Password"]."<br>";
			
				echo"Gender:".$_POST["Gender"]."<br>";
			
				echo"Profession:".$_POST["Profession"]."<br>";

				
				$var = $_POST["Hobbies"];
				for($i=0;$i<count($var);$i++)
					echo $var[$i]."<br>";
				
				echo"Bio:".$_POST["Bio"];
				?>
			
	  </body>

</html>


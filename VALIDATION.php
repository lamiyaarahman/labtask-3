<html>
     <head></head>
	 <body>
	 <form action="Submitted.php" method ="get">
	       <table>
		          <tr>
				   <td rowspan ="2"><span>User Access Info</span></td>
				   <td>:<input type="text" placeholder ="Username" name ="name"></td>
				  </tr>
		    
				  <tr> 
				    <!--<td><span>Password</span></td>-->
					<td>:<input type="password" placeholder ="Password" name ="pass"></td>
				  </tr>
				  
				  <tr>
				  <td><span>Gender</span></td>
				  <td>:<input type ="radio" value ="Male" name="Gender">Male<input type ="radio" value="Female" name="Gender">Female</td>
				  </tr>
				  
				  <tr>
				  <td><span>Hobbies</span></td>
				  <td>:<input type= "checkbox">Movies<input type="checkbox">Music<input type ="checkbox">Games<td>
				  </tr>
				  
		 
				
				  
				  
		  <tr> 
		      <td><span>Profession</span></td>
			  <td>:
		        <select name ="Profession">
	              <option>Teaching</option>
				  <option>Business</option>
				  <option>Service</option>
	            </select>
				</td>
          </tr>
		
		  	     <tr>
                        <td><span>Bio</span></td>
                        <td>:<textarea name ="Bio"></textarea></td>
						
						
				</tr>		
						<tr>
						    <td align ="center" colspan="2"><input type="Submit" value="Submit"></td>
			            </tr>
			
		  </table>
		  
		 
	 </form>
	        
	  
	 </body>


</html>

<html>
       <head></head>
      
	  <body>
	        <?php
			
			$name="";
			$err_name="";
			$password="";
			$err_password="";
			if ($_SERVER['REQUEST_METHOD']=="POST")
			{
				//if(isset($_POST["submit"])){
					if(empty ($_POST["name"])){
						$err_name="*User Required";
				
			}
			else if (strlen($_POST["name"])<6){
				$err_name="*Username should be at least 6 character";
			
			}
			else{
				$name=$_POST["name"];
			}
			if (empty($_POST["pass"])){
				$err_password="*Password Required";
			}
			else{
				$password=$_POST["pass"];
			}
			
			//     
			    /*echo "Name:" .$_POST["name"]."<br>";
				echo "Password:".$_POST["pass"]."<br>";
				echo "Gender:".$_POST["Gender"]."<br>";
				echo "Profession:".$_POST["Profession"]."<br>";
				echo "Bio:".$_POST["Bio"]."<br>";
				$var=$_POST["hobbies"];
				for($i=0;$i<count($var);$i++)
				{
					echo $var[$i]."<br>"
			     
				}*/
		}
			?>
	  
	  </body>

</html>

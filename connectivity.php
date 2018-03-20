 <?php 
/*define('DB_HOST', 'localhost');

define('DB_NAME', 'surabhi'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
$ID = $_POST['user']; 

$Password = $_POST['pass']; 


 function SignIn() { session_start();   //starting the session for user profile page 
 	if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text
 	 { $query = mysql_query("SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); $row = mysql_fetch_array($query) or die(mysql_error()); 

 	 if(!empty($row['userName']) AND !empty($row['pass'])) 


 	 	{ $_SESSION['userName'] = $row['pass']; 


 	 echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; }


 	 	 else { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; } } } 


 	 	 if(isset($_POST['submit'])) { SignIn(); }


*/

     $user_name = filter_input(INPUT_POST,'user_name');
	  $password = filter_input(INPUT_POST,'password');
	  if (!empty ($user_name))
	  {
		if (!empty ($password))
		{
         $host="localhost";
         $dbuser_name="root";
         $dbpassword="";
         $dbname="test";
		 $conn=new mysqli($host,$dbuser_name,$dbpassword,$dbname);
		 if(mysqli_connectivity_error())
		 {
			 die('Connectivity Error('.mysqli_connectivity_error().')'.mysqli_connectivity_error());
		} 
		else
		{
			$sql= "INSERT INTO log_in:(Username, password) values('$user_name','$password')";
			if($conn -> query($sql))
			{
				echo"New record successfully";
			}
			else{
				echo "Error:".$sql."<br>".$conn->error;
			}
			$conn->close();
		}
		}
        else
		{
          echo"Password should not be empty";
          die();
        }
      }
	    else
		{
          echo"Username should not be empty";
          die();
        }
  	  
 	 	  ?>
		 
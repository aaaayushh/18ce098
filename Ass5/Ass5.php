<?php
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'test1');

if(!$conn)
{
echo "Error in connection";
}
else
{
	if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if (isset($_POST["FirstName"]) && isset($_POST["LastName"]) && isset($_POST["CountryCode"])&& isset($_POST["ContactNo"]) && isset($_POST["CompanyName"]) && isset($_POST["CountryName"]) ){
			$FirsttName = $_POST['FirsttName'];
 			$LastName = $_POST['LastName'];
 			$CountryCode = $_POST['CountryCode'];
 			$ContactNo = $_POST['ContactNo'];
            $CompanyName = $_POST['CompanyName'];
            $CountryName = $_POST['CountryName'];

  			
			if($FirstName!=' ' && $LastName!=' ' && $CountryCode!=' ' && $ContactNo!=' ' && $CompanyName!=' ' && $CountryName!=' '){
			    $sql="INSERT INTO test1(FirsttName,LastName,CountryCode,ContactNo,CompanyName,CountryName) values ('$FirstName','$LastName','$CountryCode','$ContactNo','$CompanyName','$CountryName')";
				$result=mysqli_query($conn,$sql);
				die;

				if(!$result){
					echo "<script>alert('Record inserted');document.location='assign5.php'</script>";
				}
			}
		}
		else
			echo"value not set";
	}
}
?>
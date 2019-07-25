<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>


<?php		
			$con = mysqli_connect("localhost","root","","medicineshow");

			// Check connection
			if (mysqli_connect_errno())
			{
				echo "Failed Failed Failed to connect to MySQL: " . mysqli_connect_error();
			}


			// Write query
			 
			$strSQL = "SELECT id, title FROM productions";
			 
			// Execute the query.

			echo "<SELECT name='selShows'>";
			 
			$query = mysqli_query($con, $strSQL);
			while($result = mysqli_fetch_array($query))
			{
				echo "<option value='".$result['id']."'>".$result['title']."</option>";
				
			//	echo $result['id']." = ".$result['title'];

			  
			}
			echo "</SELECT>";
			// Close the connection
			mysqli_close($con);
?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>
<?php
        include('dbcon.php');
       if(isset($_POST['submit']))
	   {
	   
            $name=$_POST['e1'];
            $email=$_POST['e2'];
            $mobile=$_POST['e3'];
            $password=$_POST['e4'];
            
   $query = mysqli_query($cn,"insert into usertable(fname,semail,smobile,spass)values('$name','$email','$mobile','$password')");
	if($query === TRUE)
	{
		echo "<script>alert('Account Created Sucessfully!');window.location.href='../kajal_task/index.php';</script>" ;
	}
	else
	{
	echo "<script>alert('Error: Try Again!');window.location.href='../kajal_task/index.php';</script>" ;
    
    }
	   }
        ?>
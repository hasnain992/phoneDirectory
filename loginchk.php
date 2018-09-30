<?php
session_start();

//$email=$_SESSION['ademail'];

	$check=0;
	

		
		$db=mysqli_connect('localhost','root','','registration');
		
		
		if(isset($_POST['login']))
		{
				$username=$_POST['username'];
				$password=md5($_POST['password_1']);
				//$password=md5($password);
			
				$sql="select * from users";
				$row=mysqli_query($db,$sql);
			
		}

		
		
		
		
        foreach($row as $record){
        	

                if($username==$record['username'] && $password==$record['password'])
                {
                	
                		$_SESSION['username']=$username;
                    	header("location:phonebook/index.php");

                    $check=3;         
                }
                
               
        }

    

    	if($check!=3){

        	header("location:login.php?status=loginfailed");
             
    	}
	


?>
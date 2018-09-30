<?php
$name="";
$phone="";
$errors=array();

          //connect to database
$db=mysqli_connect('localhost','root','','registration');
        //when register buton is clicked
if(isset($_POST['add'])){
    /*
      if(empty($name))
            {
                $name_error="<br> *name field is empty";
                $chk=1;
            }
            else if(!preg_match("/^[A-Za-z\s]{3,25}$/",$name))
            {
                $name_error="<br> *invalid name";
                $chk=1;
            }
            
            if(empty($email))
            {
                $email_error="<br> *email field is empty";
                $chk=1;
            }
            else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
            {
                $email_error="<br> *invalid email";
                $chk=1;
            }

            if(!preg_match("/^[0-9]{3,14}$/",$contact) && !empty($contact))
            {
                $contact_error="<br> *inavalid contact number";
                $chk=1;
            }
    */
    $name=$_POST['name'];
    $number=$_POST['number'];
    
    if(empty($name)){
        array_push($errors,"name is required");
    }
    if(empty($number)){
        array_push($errors,"name is required");
    }
   
             //if there is no error, save data to database 
    if(count($errors)==0){
        
        $sql="INSERT INTO users (name,numbner)VALUES ('$name', '$number')";
        mysqli_query($db,$sql);
        echo "User Registered Successfully";
    }
}
?>
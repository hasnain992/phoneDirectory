<?php require 'db.php';
require 'header.php' ; 

$message='';
if(isset($_POST['name'])&& isset ($_POST['number'])){
    $name=$_POST['name'];
    $number=$_POST['number'];
    $sql="INSERT INTO people(name,number,username)VALUES(:name,:number,:username)";
    $statement=$connection->prepare($sql);
    if($statement->execute([':name'=>$name,':number'=>$number,':username'=>$_SESSION['username']])){
        $message='Data inserted successfully';
    }
}
?>

   <div class="container">
   <div class ="card mt-5">
   <div class="card-header">
   <h2>Create a Contact</h2>
   </div>
   <div class="card-body">
   <?php if(!empty($message)):?>
       <div class="alert alert-success">
       <?php echo $message ;?>
       </div>
<?php endif;?>
   <form method ="post">
   <div class="form-group">
   <label for="name">Name</label>
   <input type ="text" name="name" id ="name"class="form-control">
   </div>
   <div class="form-group">
   <label for="number">Phone Number</label>
   <input type ="number" name="number" id ="number"class="form-control">
   </div>
   <div class="form-group">
   <button type ="submit" class ="btn btn-info">Create a Contact</button>
   </div>
    <?php require 'footer.php'; ?>
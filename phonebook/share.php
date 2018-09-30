<?php require 'db.php';
$id=$_GET['id'];
$sql='SELECT * FROM people WHERE id=:id';
$statement=$connection->prepare($sql);
$statement->execute([':id'=> $id]);
$person=$statement->fetch(PDO::FETCH_OBJ);

$sql1='SELECT * FROM users';
$statement=$connection->prepare($sql1);
$statement->execute();
$allpeople=$statement->fetchAll(PDO::FETCH_ASSOC);


if(isset($_POST['name'])&& isset ($_POST['number'])){
    $name=$_POST['name'];
    $number=$_POST['number'];
    $sql='UPDATE people SET name=:name, number=:number WHERE id=:id';
    $statement=$connection->prepare($sql);
    if($statement->execute([':name'=>$name,':number'=>$number,':id'=>$id])){
     header("Location:index.php");
    }
}
?>
<?php require 'header.php' ; 

?>
   <div class="container">
   <div class ="card mt-5">
   <div class="card-header">
   <h2>Share contact </h2>
   </div>
   <div class="card-body">
   <?php if(!empty($message)):?>
       <div class="alert alert-success">
       <?php echo $message ;?>
       </div>
<?php endif;?>
   <form method ="post">
   <div class="form-group col-md-4">
      <label for="inputState">Shared User</label>
      <select id="inputState" class="form-control" required>
         <?php foreach($allpeople as $persons){?>
            <option><?php echo $persons['username'];?></option>
         <?php } ?>
        
      </select>
    </div>
  
   <div class="form-group">
   <button type ="submit" class ="btn btn-info">Share</button>
   </div>
    <?php require 'footer.php'; ?>
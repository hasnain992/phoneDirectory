
<?php require 'header.php' ; 

    require 'db.php';
    $sql="SELECT * FROM people WHERE username=:username";
    $statement=$connection->prepare($sql);
    $statement->execute([':username'=>$_SESSION['username']]);
    $people=$statement->fetchAll(PDO::FETCH_OBJ);
    ?>
    
    <div class="container">
    <div class "card mt-5">
    <div class="card-header">
    <h2>All People</h2>
    </div>
    <div class="card_body">
    <table class="table table-bordered">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Action</th>
    </tr>
    <?php foreach($people as $person):?>
    <tr>
       <td><?=$person->id;?></td>
       <td><?=$person->name;?></td>
       <td><?=$person->number;?></td>
       <td>
       <a href="edit.php?id=<?=$person->id?>" class="btn btn-info">Edit</a>
       <a onclick="return confirm('Are you sure to delete this contact?')"href="delete.php?id=<?=$person->id?>" class='btn btn-danger'>Delete</a>
       <a href="share.php?id=<?=$person->id?>" class="btn btn-info">Share</a>
       </td>
    </tr>
    <?php endforeach;?>
    </table>
    </div>
    <?php require 'footer.php' ; ?>

   
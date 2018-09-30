<!Doctype html>
<?php include('Dirserver.php');?>
<html>
    <head> 
        <title>User Register </title>
        <link href="style.css" rel="stylesheet" type="text/css" >
        <style type="text/css">
        *{
    margin:0px;
    padding:0px;
}
body{
    font-size: 120%;
    background:#F8F8FF;
    
}
.header{
    margin:50px auto 0px;
    color: white;
    text-align: center;
    border-bottom:none;
    border-radius:10px 10px 0px 0px;
    border: 1px solid #80C4DE;
    background-color: #5F9EA0;
    text-align:center;
    top: 0px;
    width: 30%;
    padding: 20px;
}
form{
        width:30%;
        margin:0px auto;
        padding: 20px;
        border:1px solid #B0C4DE;
        background:white;
        border-radius:0px 0px 10px 10px;

    }
    .input-group{
        margin:10px 0px 10px 0px;
    }
    .input-group label{
        display:block;
        text-align:left;
        margin:3px;
    }
    .input-group input{
        height:30px;
        width:93%;
        padding:5px 10px;
        font-size:16px;
        border-radius:5px;
        border:1px solid gray;
    }
    .btn{
        padding:10px;
        font-size:15px;
        color:white;
        background:#5F9EA0;
        border:none;
        border-radius:5px;
    }
        </style>
        
        
</head>
<body>
  <div class ="header">
      <h2>Phone directory</h2>
  </div>
      <form method ="post"action ="directory.php" >  
        <div class="input-group">
            <label>Name</label>
            <input type="text" name="name" >
        </div>      
         
        <div class="input-group">
            <label>Phone No</label>
            <input type="number" name="phone" >
        </div> 
       
        <div class="input-group">
            <button type="submit" name="Add" class="btn">Add </button>
        </div>
        <p>
            Not yet account? <a href="directory.php">Sign up</a>  
     </form>
     
</div>

</body>
</html>
<?php  

session_start();  
 if(isset($_POST["sub"]))  
 {  
      $_SESSION["name"] = $_POST["name"];  
      $_SESSION['last_login_timestamp'] = time();  
      header("location:index.php");       
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="jquery.js"></script>  
           <style>  
                #box  
                {  
                     width:600px;  
                     background:#663046;  
                     color:white;  
                     margin:0 auto;  
                     padding:10px;  
                     text-align:center;  
                }  
           </style>  
      </head>  
      <body>  
           <div id="box">  
                <h2>Login</h2>  
                <form method="post">  
                     <input type="text" name="name" id="name" placeholder="Enter Username" class="form-control" /><br />  
                     <input type="password" name="pass" id="pass" placeholder="Enter Pass" class="form-control" /><br />  
                     <input type="submit" name="sub" id="sub" class="btn btn-info" value="Submit" />  
                </form>  
                <br /><br />  
           </div>  
      </body>  
 </html>
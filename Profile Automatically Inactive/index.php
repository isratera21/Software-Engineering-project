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
                     background:sepia;  
                     color:white;  
                     margin:0 auto;  
                     padding:10px;  
                     text-align:center;  
                }  
           </style>  
      </head>  
      <body>  
      <?php  
      session_start();  
      if(isset($_SESSION["name"]))  
      {  
           if((time() - $_SESSION['last_login_timestamp']) > 1200)   
           {  
                header("location:logout.php");  
           }  
           else  
           {  
                $_SESSION['last_login_timestamp'] = time();  
                echo "<h1 align='center'>".$_SESSION["name"]."</h1>";  
                echo '<h1 align="center">'.$_SESSION['last_login_timestamp'].'</h1>';       //this can be changed
                echo "<p align='center'><a href='logout.php'>Logout</a></p>";  
           }  
      }  
      else  
      {  
           header('location:login.php');  
      }  
      ?>  
      </body>  
 </html>  
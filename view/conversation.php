<?php
require_once('../controller/cookie_check.php');
?>
<html>
  <head></head>
  <style>
    *{
      margin: 0px;
      padding: 0px;
    }
    
    body{
      background: #9b9181;
    }
    .container{
      background: Lavender;
      width: 1300px;
      margin: 0 auto;
      padding-top: 1px;
      padding-bottom: 5px;
    }
    .comment, .reply{
      margin-top: 5px;
      padding: 10px;
      border-bottom: 1px Mocassin;
    }
    .reply{
      border: 1px solid #ccc;
    }
    p{
      margin-top: 5px;
      margin-bottom: 5px;
    }
    form{
      margin: 10px;
    }
    form h3{
      margin-bottom: 5px;
    }
    form input, form textarea{
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }
    form button.submit, button{
      background: #fff9d8;
      color: black;
      border: none;
      cursor: pointer;
      padding: 10px 20px;
      width: 100%;
    }
    button.reply{
      background: cyan;
    }
  </style>
  <body>
    <div class="container">
      <?php
      require_once('../model/db.php');
      $conn = getConnection();
      $data1s = mysqli_query($conn, "SELECT * FROM tb_data1 WHERE reply_id = 0"); 
      foreach($data1s as $data1) {
        require 'comment.php';
      }
      ?>
      
      <form action = "../controller/conversation_controller.php" method = "post">
        <h3 id = "title">Leave a Comment</h3>
        <input type="hidden" name="reply_id" id="reply_id">
        <input type="text" name="name" placeholder="Your name">
        <textarea name="comment" placeholder="Your comment"></textarea>
        <button class = "submit" type="submit" name="submit">Submit</button>
      </form>
    </div>

    <script>
      function reply(id, name){
        title = document.getElementById('title');
        title.innerHTML = "Reply to " + name;
        document.getElementById('reply_id').value = id;
      }
    </script>
  </body>
</html>
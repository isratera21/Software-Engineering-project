<?php
require_once('../controller/cookie_check.php');
?>
<div class="reply">
  <h4><?php echo $data1['name']; ?></h4>
  <p><?php echo $data1['date']; ?></p>
  <p><?php echo $data1['comment']; ?></p>
  <?php $reply_id = $data1['id']; ?>
  <button class="reply" onclick = "reply(<?php echo $reply_id; ?>, '<?php echo $data1['name']; ?>');">Reply</button>
  <?php
  unset($data1s);
  $data1s = mysqli_query($conn, "SELECT * FROM tb_data1 WHERE reply_id = $reply_id");
  if(mysqli_num_rows($data1s) > 0) {
    foreach($data1s as $data1){
      require 'reply.php';
    }
  }
  ?>
</div>
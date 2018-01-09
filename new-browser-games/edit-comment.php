<?php
        include 'include/mainheader.php';
        include '../browser-games/dbh.php';
        include 'include/comment.php';
?>
<head>
        <title>God Wars new browser based game -GameHup</title>
</head>

<div class="comc">
  <ul class="toplog">
  <li class="comnum">0 Comments</li>
  <li class="sitename">GameHup Top & Free browser games</li>
<ul class="undertop">
  <li class="share">Share</li>
  <li class="like">Like</li>
</ul>
  <?php
  $cid = $_POST['cid'];
  $username = $_POST['username'];
  $date = $_POST['date'];
  $message = $_POST['message'];

  echo "
  <form class='formcon' action='".editcomments($conn)."' method='POST'>
  <input type='hidden' name='cid' value='".$cid."'>
  <input type='hidden' name='username' value='".$username."'>
  <input type='hidden' name='date' value='".$date."'>
  <div class='procon'>
  <img src='../profile_image/avatar.png' alt='profile image' class='proimg'>
  <textarea name='message' rows='8' cols='80' class='textarea'>".  $message."</textarea><br />
  </div><div class='comc'>
  <button name='submitcom' type='submit' class='combutton'>Edit</button>
  </div>
</form>

";


?>

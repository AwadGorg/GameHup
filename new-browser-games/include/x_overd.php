<?php
include '../browser-games/dbh.php';
function setcomments($conn){
if (isset($_POST['submitcom'])) {
$cid = $_POST['cid'];
$username = $_POST['username'];
$date = $_POST['date'];
$message = $_POST['message'];
$sql = "INSERT INTO x_overd (cid,date,message,username)
 VALUES ('$cid','$date','$message','$username')";
 $result = $conn->query($sql);
}
}

function getcomments($conn){
  $sql = "SELECT * FROM x_overd" ;
  $result = $conn->query($sql);
  while ($row = $result->fetch_assoc()) {
    $id = $row['username'];
    $userssql = "SELECT username, id FROM users WHERE id = '$id' ";
    $usersresult = $conn->query($userssql);
    if ($usersrow = $usersresult->fetch_assoc()) {
      echo "<div class='comment-box'>";
                    echo "<div class='procon'>";
                    echo " <img src='../profile_image/avatar.png' alt='profile image' class='proimg'>";
                    echo "<span class='commusername'>";
                    echo $usersrow['username']."<br /><br />";
                    echo "</span>";
                    echo $row['date']."<br /><br />";
      echo "<p class='comments'>";
                    echo nl2br($row['message']);
                    echo "</p>";
                    echo "<div class='p'>";
                    if (isset($_SESSION['id'])) {
                      if ($_SESSION['id'] == $usersrow['id']) {
                        echo "
                        <button class='editbtn_dis'>edit .
                        </button>

                        ";
                          echo "<form method='POST' action='".editcomments($conn)."' class='editform'>
                            <input type='hidden' name='cid' value='".$row['cid']."'>
                            <input type='hidden' name='username' value='".$row['username']."'>
                            <input type='hidden' name='date' value='".$row['date']."'>
                            <input type='hidden' name='message' value='".$row['message']."'><br />
                            <textarea name='new_msg' rows='4' cols='50'>
                            ".$row['message']."</textarea><br />
                            <button class='editbtn' type='submit' name='edit_com'>edit .
                            </button>
                          </form>
                          <form method='POST' action='".deletecomment($conn)."' class='deleteform'>
                            <input type='hidden' name='cid' value='".$row['cid']."'>
                          <button class='deletebtn' name='deletecom'>Delete
                          </button>
                          </form>
                          ";
                      }else {
                        echo "
                        <button class='replay_button' type='button'>Replay .
                        </button>
                         <form method='POST' action='".replay_comment($conn)."' class='replay_form'>
                        <input type='hidden' name='cid'>
                        <input type='hidden' name='username' value='".$_SESSION['id']."'>
                        <input type='hidden' name='date'>
                        <textarea rows='4' cols='60' name='message'>
                            </textarea><br />
                        <button class='editbtn' type='submit' name='replay_com'>Replay .
                        </button>
                          </form>";
                      }
                    }

                    echo "</div>";
                    echo "</div>";

      echo "</div>";
    }

  }

}
function editcomments($conn){
  if (isset($_POST['edit_com'])) {
  $cid = $_POST['cid'];
  $username = $_POST['username'];
  $date = $_POST['date'];
  $message = $_POST['new_msg'];
  $sql = "UPDATE x_overd SET message = '$message' WHERE cid = '$cid' ";
   $result = $conn->query($sql);
if (isset($_POST['new_msg'])) {
  echo "<script>alert('your message has been edit successfully please refresh your browser to see the changes')</script>";
}
 }
}

function replay_comment($conn){
  if (isset($_POST['replay_com'])) {
    $cid = $_POST['cid'];
    $username = $_POST['username'];
    $message = $_POST['message'];
    $date = $_POST['date'];
    $sql = "INSERT INTO x_overd (cid,date,message,username)
     VALUES ('$cid','$date','$message','$username')";
     $result = $conn->query($sql);
  }
  $get_sql = "SELECT message FROM x_overd" ;
  $get_result = $conn->query($get_sql);
}
function deletecomment($conn){
  if (isset($_POST['deletecom'])) {
  $cid = $_POST['cid'];
  $sql = "DELETE FROM x_overd WHERE cid = '$cid' ";
   $result = $conn->query($sql);
}
}

<?php
include '../browser-games/dbh.php';
function setcomments($conn){
if (isset($_POST['submitcom'])) {
$cid = $_POST['cid'];
$username = $_POST['username'];
$date = $_POST['date'];
$message = $_POST['message'];
$sql = "INSERT INTO dragon_awaken (cid,date,message,username)
 VALUES ('$cid','$date','$message','$username')";
 $result = $conn->query($sql);
}
}
function getcomments($conn){
  $sql = "SELECT * FROM dragon_awaken" ;
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
                          echo "<form method='POST' action='edit-comment.php' class='editform'>
                            <input type='hidden' name='cid' value='".$row['cid']."'>
                            <input type='hidden' name='username' value='".$row['username']."'>
                            <input type='hidden' name='date' value='".$row['date']."'>
                            <input type='hidden' name='message' value='".$row['message']."'>
                          <button class='editbtn'>edit .
                          </button>
                          </form>
                          <form method='POST' action='".deletecomment($conn)."' class='deleteform'>
                            <input type='hidden' name='cid' value='".$row['cid']."'>
                          <button class='deletebtn' name='deletecom'>Delete
                          </button>
                          </form>
                          ";
                      }
                    }

                    echo "</div>";
                    echo "</div>";

      echo "</div>";
    }
  }

}
function editcomments($conn){
if (isset($_POST['submitcom'])) {
$cid = $_POST['cid'];
$username = $_POST['username'];
$date = $_POST['date'];
$message = $_POST['message'];
$sql = "UPDATE dragon_awaken SET message = '$message' WHERE cid = '$cid' ";
 $result = $conn->query($sql);
 header("Location: dragon-awaken");
 exit();
}
}
function deletecomment($conn){
  if (isset($_POST['deletecom'])) {
  $cid = $_POST['cid'];
  $sql = "DELETE FROM dragon_awaken WHERE cid = '$cid' ";
   $result = $conn->query($sql);
}
}

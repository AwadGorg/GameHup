<?php


			$conn = mysqli_connect( "localhost" , "root" , "" , "gamehup" );

			$puplish = mysqli_connect("localhost","root","","gamehup");

$comment = mysqli_connect("localhost","root","","gamehup");
mysql_select_db('gamehup');
if (!$conn) {
die("Sorry but we are experiencing conntection problems." .mysqli_connect_error());
}

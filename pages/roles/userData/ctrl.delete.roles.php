<?php
require '../../../includes/conn.php';

$id = $_GET['roles_id'];


$delete_users = mysqli_query($conn, "DELETE FROM tbl_roles WHERE roles_id = '$id'");

header( "location: ../list.user.php");

?>
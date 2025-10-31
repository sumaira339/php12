<?php
$host="localhost";
$username="root";
$pass="";
$dbname="project";
$connect=mysqli_connect($host,$username,$pass,$dbname);
if(!$connect){
    echo "erorr";

}else{
    echo "connected";
}

$id = $_GET['id'];
$sql="DELETE FROM `product` WHERE Id = $id";
mysqli_query($connect,$sql);

header("location:table-bootstrap.php");
?>
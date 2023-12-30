<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$feedback = $_POST['feedback'];
echo "$name"."<br/>";
echo "$email"."<br/>";
echo "$number"."<br/>";
echo "$feedback"."<br/>";
$conn = mysqli_connect("localhost","root","","feedback");
$sql = "INSERT INTO data VALUES('$name','$email','$number','$feedback')";
if(mysqli_query($conn,$sql))
{
    echo"Database established";
}
else
{
    echo"failed".mysqli_error($conn);
}
mysqli_close($conn);


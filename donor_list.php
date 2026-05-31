<?php include 'includes/db.php';
$r=$conn->query("SELECT * FROM donors");
while($row=$r->fetch_assoc()){
echo $row['name'].' - '.$row['blood_group'].'<br>';
}
?>
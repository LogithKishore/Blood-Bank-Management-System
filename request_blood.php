<?php include 'includes/db.php';
if($_POST){
$name=$_POST['name']; $bg=$_POST['blood_group'];
$conn->query("INSERT INTO requests(name,blood_group) VALUES('$name','$bg')");
echo 'Request Submitted';
}
?>
<form method='post'>
<input name='name' placeholder='Name'>
<input name='blood_group' placeholder='Blood Group'>
<button>Request</button>
</form>
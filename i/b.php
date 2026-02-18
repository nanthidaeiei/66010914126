<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>นันธิดา ไชยนรา (แพม)</title>
</head>

<body>

<h1>งาน i -- นันธิดา ไชยนรา (แพม)</h1>

<form method="post" action="" enctype="multipart/form-data">
    ชื่อจังหวัด <input type="text" name="pname" autofocus required><br>
    รูปภาพ <input type="file" name="pimage" autofocus required><br>
    
    ภาค
    <select name="rid"
<?php
include_once("connectdb.php");
$sql = "SELECT * FROM regions";
$rs3 = mysqli_query($conn, $sql3);
while ($data3 = mysqli_fetch_array($rs3)){
?>
		<option value="<?php echo $data3['r_id'] ; ?>"><?php echo $data3['r_name']
?></option>
 <?php } ?>
    </select>
    <br>
    

    <button type="submit" name="Submit">บันทึก</button>
</form><br><br>

<?php 
if(isset($_POST['Submit'])) {
    include_once("connectdb.php");
	
    $pname = $_POST['pname'];
	$ext = pathinfo($_FILES['pimage']['name'], PATHINFO_EXTENION);
	$rid = $_POST['rid'];
	
    $sql2 = "INSERT INTO 'provinces' VALUE (NULL, '{$pname}', '{$ext}', '{$rid}')"; 
    mysqli_query($conn, $sql2) or die ("เพิ่มข้อมูลไม่ได้");
   
}
?>

<?php
include_once("connectdb.php");
$sql = "SELECT * FROM regions";
$rs = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($rs))
?>

<table border="1">
    <tr>
        <th>รหัสภาค</th>
        <th>ชื่อภาค</th>
        <th>ลบ</th>
    </tr>
<?php
while ($data = mysqli_fetch_array($rs)){
?>
    <tr>
       <td><?php echo $data['r_id']; ?> </td>
        <td><?php echo $data['r_name']; ?> </td>
        <td width="80" align="center"><a href="delete_region.php?id=<?php echo $data['r_id']; ?>" onClick="return confirm('ยืนยันการลบ?');"><img src="imges/delete.jpg" width="20"></a></td>
    </tr>
<?php } ?>
</table>

<?php
mysqli_close($conn); 
?>
</body>
</html>
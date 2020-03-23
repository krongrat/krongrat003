<?php
if(isset($_POST['submit'])){
  require_once 'db.php'; 
  $empno = $_POST['empno'];
  $ename = $_POST['ename'];
  $username = $_POST['username'];
  $password = MD5($_POST['password']);
  $sql = "INSERT INTO emp (EMPNO, ENAME, USERNAME, PASSWORD) 
  VALUES (?,?,?,?)";
  $statement = $connection->prepare($sql);
  if ($statement->execute([$empno, $ename, $username, $password]));
  echo 'ลงทะเบียนเสร็จเรียบร้อย';
}
?>
<?php require 'header.php'; ?>
<center><h1>สร้างบัญชีใหม่</h1><center>
<form name="register" action="" method="post">
<div>
  <input type="text" class="" name="empno" placeholder="รหัสพนักงาน" required>
</div>
<div>
  <input type="text" name="ename" placeholder="ชื่อ" required>
</div>
<div>
  <input type="text" name="username" placeholder="อีเมลล์" required>
</div>
<div>
  <input type="password" name="password" placeholder="รหัสผ่าน" required>
</div>
<div>
  <input type="submit" name="submit" value="สมัคร">
</div>
</form>
<?php require 'footer.php'; ?>

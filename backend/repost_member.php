 <?php
include("head.php");
include("conf/mariadb.php");
?>
<br>
<br>
<br>
<br>



<div class="container">
<h3><img src="img/ru1.png" width="50" height="50">ร้านค้าวิสาหกิจชุมชนบ้านพวนผ้ามัดหมี่</h3>
	<h3>รายงานข้อมูลสมาชิก  <button type="button" class="btn btn-light" onclick="print();" id="hid"> 
    
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
  <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
  <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  </svg> พิมพ์</button></h3>
  <br>

<table  class="table" cellspacing="0" width="100%">
  <thead>
    <tr>
      
      <th scope="col">รหัสสมาชิก</th>
      <th scope="col">ชื่อสมาชิก</th>
      <th scope="col">เบอร์โทร</th>
      <th scope="col">ที่อยู่</th>
      <th scope="col">E-mail</th>
      <th scope="col">วันที่เป็นสมาชิก</th>
    </tr>
  </thead>

  <tbody id="tbody1">
    <?php
    $sql="SELECT * FROM `member` WHERE 1 ";

    if($_GET["date_s"] !="" && $_GET["date_e"] !=""){
        $sql.=" AND (m_datetime>='".$_GET["date_s"]."' AND m_datetime<='".$_GET["date_e"]."')";    
    }
    $que=mysqli_query($con,$sql);
    while($re=mysqli_fetch_assoc($que)){

    ?>
    <tr>
      
      <td><?php echo $re["m_id"];?></td>
      <td><?php echo $re["m_fullname"];?></td>
      <td><?php echo $re["m_phone"];?></td>
      <td><?php echo $re["address"];?></td>
      <td><?php echo $re["m_email"];?></td>
      <td><?php echo $re["m_datetime"];?></td>
    </tr>

<?php }?>
  </tbody> 

</table>

 </div>



<?php
include("foot.php");
?>
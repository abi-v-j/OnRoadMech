<?php
include("../Assets/Connection/Connection.php");
include("Head.php");

$id='';
$dis='';
if(isset($_POST['sub']))
{
	$district=$_POST['txtname'];
	$id=$_POST['txt_id'];
	
	if($id=='')
	{

	echo  $insqry="insert into tbl_specification(specification_name)values('".$district."')";
		if($conn->query($insqry))
		{
		   echo "<script>
				 alert('inserted');
				 window.location = 'Specification.php';
				 </script>";
		}
	}
	else
	{
		$upqry="update tbl_specification set specification_name='".$district."' where specification_id='".$_GET['eid']."'";
		if($conn->query($upqry))
		{
			?>
            <script>
			alert("updated");
			window.location="Specification.php";
			</script>
            <?php
		}
	}
	
}


if(isset($_GET['did']))
{
$delqry="delete from tbl_specification where specification_id= '".$_GET['did']."'";
if($conn->query($delqry))
{
	?>
	<script>
	alert('deleted');
	window.location ='Specification.php';
	</script>
    <?php
}
}
$disname='';
$disid='';
if(isset($_GET['eid']))
{
	$sel2="select * from tbl_specification where specification_id='".$_GET['eid']."'";
	$result=$conn->query($sel2);
	$data=$result->fetch_assoc();
	$disname=$data['specification_name'];
	$disid=$data['specification_id'];
}

?>

	







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<a href="HomePage.php">Home</a>
<form action="" method="post">
<h1 align="center">Specification</h1>
  <table border="1" align="center">
    <tr>
      <td >Specification Name</td>
      <td><label for="txt_dist"></label>
      
 <input type="text" name="txtname" id="txtname" value="<?php echo $disname; ?>"/>
 <input type="hidden" name="txt_id" value="<?php echo $disid; ?>"/>
 </td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="sub" id="sub" value="submit" />
        <input type="reset" name="clr" id="clr" value="clear" />
      </div></td>
    </tr>
  </table>
  <br />
  <table width="359" border="1" align="center">
  <tr>
    <td width="63">SI N0</td>
    <td width="156">Specification Name</td>
    <td width="118">Action</td>
  </tr>
  <?php
  $i=0;
  $selry="select * from tbl_specification";
  $data = $conn -> query($selry);
  while($row = $data -> fetch_assoc())
  {
	  $i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['specification_name']; ?></td>
    <td><a href="Specification.php?did=<?php echo $row ['specification_id'];?>">DELETE</a>
    <a href="Specification.php?eid=<?php echo $row ['specification_id'];?>">Edit</a></td>
  </tr>
<?php
  }
  ?>
</table>
</form>
</body>
</html>
<?php
include("Foot.php");
?>
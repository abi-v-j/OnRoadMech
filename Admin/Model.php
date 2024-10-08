<?php
include("../Assets/Connection/Connection.php");
include("Head.php");


if(isset($_POST['btn_submit']))
{
	$model=$_POST['txt_name'];
	$insqry="insert into tbl_model(model_name) values('".$model."')";
	if($conn->query($insqry))
	{
		?>
        <script>
        alert('inserted');
		window.location="Model.php";
        </script>
        <?php
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1 align="center">MODEL</h1>
<form id="form1" name="form1" method="post" action="">
  <table  border="1" align="center">
    <tr>
      <td>Name</td>
      <td><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
include("Foot.php");
?>
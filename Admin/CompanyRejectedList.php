<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
if(isset($_GET["ch"]))
	{
		
	$up = "update tbl_company set company_status='1' where company_id='".$_GET["ch"]."'" ;
	
	if($conn->query($up))
	{
		?>
		<script>
		window.location='companyRejectedList.php';
        </script>
		<?php
	}
	else
	{
			
						?>
							<script>
                            alert('Failed');
                            window.location='companyRejectedList.php';
                            </script>
						<?php
				
		
	}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>company Rejected List</title>
</head>

<body>
<div id="tab">
<h1 align="center">Rejected List</h1>
<table border="1" align="center" cellpadding="5">
    <tr align="center">
      <th>Si.no</th> 
      <th>Name</th>
       <th>Contact</th>
        <th>Email</th>
         <th>Address</th>
          <th>Photo</th>
           <th>Proof</th>
      
       <th>District</th>
        <th>Place</th> 
      <th colspan="2"><div align="center">Action</div></th>
                                

         
     
    </tr>
<?php
$i=0;

$selqry = "select * from tbl_company s inner join tbl_location l on s.company_location=l.location_id inner join tbl_place p on p.place_id=l.place_id inner join tbl_district d on d.district_id=p.district_id where company_status='2'"; 
$result=$conn->query($selqry);
while($row = $result->fetch_assoc())
{
	$i++;
?>
		<tr align="center">
        	<td>
            <?php echo $i;?>
            </td>
            <td>
            <?php echo $row["company_name"];?>
            </td>     
              <td>
            <?php echo $row["company_contact"];?>
            </td>     
              <td>
            <?php echo $row["company_email"];?>
            </td>     
              <td>
            <?php echo $row["company_address"];?>
            </td>     
              <td><img src="../Assets/File/company/<?php echo $row["company_logo"];?>" width="50" height="50" />
            
            </td>      
             <td>
           <img src="../Assets/File/company/<?php echo $row["company_proof"];?>" width="50" height="50" />
            </td>       
            <td>
            <?php echo $row["district_name"];?>
            </td> 
             <td>
            <?php echo $row["place_name"];?>
            </td>  
              <td>
            <?php echo $row["location_name"];?>
            </td>
            <td align="center">
             <a href="companyRejectedList.php?ch=<?php echo $row["company_id"];?>">Accept</a>
             </td>
            </tr>
        <?php
}

?>    
</table>
</div>
</body>
<?php
include("Foot.php");
?>
</html>

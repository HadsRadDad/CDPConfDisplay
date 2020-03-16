<?php 
include "config.php";
?>

<html>
 <head>
<link rel="http://localhost/icon.ico" href="icon.ico">
 <script>
document.getElementById("dnt").innerHTML = Date();
</script>

 <title>Current Contacts</title>
 <link href="style.css" rel="stylesheet" type="text/css">
<style>
table {
	border-collapse: collapse;
	width: 98vw;
	position: relative;
	top: 2vh;
	font-size: 1.5vw;
}

th {
	background-color: lightgray;
}

.delete {
	position: relative;
	top: 2vh;
	left: 88.25vw;
	font-size: 1.5vw;
	font-weight: bold;
	border-radius: 5px;
	background-color: lightgray;
}

.export {
	position: relative;
	top: 1vh; 
	font-size: 1.5vw;
	font-weight: bold;
	border-radius: 5px;
	background-color: lightgray;
}

a {
	position: relative;
	top: 1vh;
	font-size: 2vw;
	left: 82.5vw;
	font-weight: bold;
}

</style>
 </head>
 <body>
 <div class="container">
 
  <form action='download.php' method='post'>
  <input type='submit' class="export" value='Export' name='Export'>
  <a href="mailto:?Subject=Contacts&body=Please add name and date of conference." target="_top">Send Mail</a>
   <table border="1">
    <tr>
     <th>First Name</th>
     <th>Last Name</th>
     <th>E-Mail</th>
	 <th>Agency</th>
	 <th>State</th>
	 <th>Training/Manager</th>
	 <th>Supervisor/Commander</th>
     <th>LE</th>
	 <th>FS</th>
	 <th>HC</th>
	 <th>EMS</th>
	 <th>EM</th>
	 <th>PH</th>
	 <th>GA</th>
	 <th>HM</th>
	 <th>PSC</th>
	 <th>SS</th>
	 <th>EDU</th>
	 <th>IT</th>
	 <th>CCV</th>
	 <th>TRANS</th>
	 <th>SS</th>
	 <th>AG</th>
	 <th>PW</th>
	 <th>OTHER</th>
	
	 
    </tr>
    <?php 
     $query = "SELECT * FROM contacts";
     $result = $con->query($query);

     while($row = mysqli_fetch_array($result)){
      $firstname = $row['firstname'];
      $lastname = $row['lastname'];
      $email = $row['email'];
	  $state = $row['state'];
	  $tm = $row['TrainingManager'];
	  $sc = $row['Supervisor/Commander'];
	  $law = $row['LAW'];
	  $fire = $row['FIRE'];
	  $hc = $row['HC'];
	  $ems = $row['EMS'];
	  $em = $row['EM'];
	  $ph = $row['PH'];
	  $ga = $row['GA'];
	  $hm = $row['HM'];
	  $psc = $row['PSC'];
	  $ss = $row['SS'];
	  $edu = $row['EDU'];
	  $it = $row['IT'];
	  $ccv = $row['CCV'];
	  $trans = $row['TRANS'];
	  $sr = $row['SR'];
	  $ag = $row['AG'];
	  $pw = $row['PW'];
	  $other = $row['OTHER'];
	  $agency = $row['Agency'];
      $contact_arr[] = array($firstname,$lastname,$email,$agency,$state,$tm,$sc,$law,$fire,$hc,$ems,$em,$ph,$ga,$hm,$psc,$ss,$edu,$it,$ccv,$trans,$sr,$ag,$pw,$other);
   ?>
      <tr>
       <td><?php echo $firstname; ?></td>
       <td><?php echo $lastname; ?></td>
       <td><?php echo $email; ?></td>
	   <td><?php echo $agency; ?></td>
	   <td><?php echo $state; ?></td>
	   <td><?php echo $tm; ?></td>
	   <td><?php echo $sc; ?></td>
       <td><?php echo $law; ?></td>
	   <td><?php echo $fire; ?></td>
	   <td><?php echo $hc; ?></td>
	   <td><?php echo $ems; ?></td>
	   <td><?php echo $em; ?></td>
	   <td><?php echo $ph; ?></td>
	   <td><?php echo $ga; ?></td>
	   <td><?php echo $hm; ?></td>
	   <td><?php echo $psc; ?></td>
	   <td><?php echo $ss; ?></td>
	   <td><?php echo $edu; ?></td>
	   <td><?php echo $it; ?></td>
	   <td><?php echo $ccv; ?></td>
	   <td><?php echo $trans; ?></td>
	   <td><?php echo $sr; ?></td>
	   <td><?php echo $ag; ?></td>
	   <td><?php echo $pw; ?></td>
	   <td><?php echo $other; ?></td>
	  </tr>


   <?php

    }
   ?>
   </table>

   <textarea name='contact_data' style="display:none;">
First Name,Last Name,E-Mail,Agency,State,Training/Manager,Supervisor/CommanderLAW,FIRE,HC,EMS,EM,PH,GA,HM,PSC,SS,EDU,IT,CCV,TRANS,SR,AG,PW,OTHER
<?php foreach($contact_arr as $contacts)
	{ $final = implode(',', $contacts) . "\r\n";
	echo $final;
}



?>

</textarea>

</form>
  <form action='delete.php' method='post'>
  <input type='submit' class="delete" value='Delete Data'> 
  </form>
</div>
 </body>
</html>


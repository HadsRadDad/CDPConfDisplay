<?php
	
header("Content-Type: application/csv");\
  header("Content-Disposition: attachment;Filename=contacts.csv");


echo  $_POST['contact_data'];




?>

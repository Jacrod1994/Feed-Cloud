<?php
#Connect on 'localhost' for user 'jacob'
#with password 'Overlord94' to darabase 'site_db'
$dbc = mysqli_connect
	('localhost','jacob','Overlord94','site_db')
	OR die
	(mysqli_connect_error());
	
# set encoding to match php script encoding
mysqli_set_charset($dbc,'utf8');
	?>
<?php 
	header("Refresh: 5;  url=index.html"); 
	$db = pg_connect("host=192.168.101.250 port=5432 dbname=qwer user=postgres password=1"); 
	$query = "INSERT INTO dc_db.all_mod_system (id_mod, status_mod) VALUES('$_POST[name]', 'offline');";
	$result = pg_query($query);
	echo 'Вы будете перенаправлены на другую страницу через 5 секунд... ';
?> 
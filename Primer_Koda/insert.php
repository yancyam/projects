<?php 
	header("Refresh: 5;  url=index.html"); 
	$db = pg_connect("host=192.168.101.250 port=5432 dbname=qwer user=postgres password=1");  
	$query = "UPDATE dc_db.mod_rs_settings SET port_serv='$_POST[port]', ip_db='$_POST[ip_db]', name_db='$_POST[name]', user_db='$_POST[user]', pass='$_POST[pass]' WHERE id_set='1'";  
	$result = pg_query($query);
	echo 'Вы будете перенаправлены на другую страницу через 5 секунд... ';
?> 
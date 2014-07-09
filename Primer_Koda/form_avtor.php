<?php 
	header("Refresh: 5;  url=index.html"); 
	$db = pg_connect("host=192.168.101.250 port=5432 dbname=qwer user=postgres password=1"); 
	$query = "SELECT * FROM dc_db.users";
	$result = pg_query($query);
	while($row = pg_fetch_row($result)){
		$Arr[]=$row[1];
		$Arrr[]=$row[2];
	}

	for($i = 0; $i < count($Arr); $i++){
		if('$Arrr[$i]'==$POST['name']){
			echo 'OKKK';}
		}
		echo 'Вы будете перенаправлены на другую страницу через 5 секунд... ';
?> 
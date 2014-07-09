<?php

$db = pg_connect("host=192.168.101.250 port=5432 dbname=qwer user=postgres password=1");

echo '<style>';   
echo '.lier { background: url(disp.jpg) no-repeat; background-size: 100%; }'; 
echo '.solidblockmenu { margin : 0; padding : 0; float : left; font : bold 12px Arial;';
echo 'width : 100%; border : 1px solid #113523; border-width : 1px 0;';
echo 'background : black url(blockdefault.jpg) repeat-x center center;}';
echo '.solidblockmenu li {display : inline;}';
echo '.solidblockmenu li a {float : left; color : #C9EDDB;';
echo 'padding : 9px 10px; text-decoration : none; border-right : 1px solid #24714A;}';
echo '.solidblockmenu li a:visited {color : #C9EDDB;}';
echo '.solidblockmenu li a:hover, .solidblockmenu li .current {color : #B5E6CD;';
echo 'background : transparent url(blockactive.jpg) repeat-x center center;}';
echo '</style>'; 
echo '<ul class="lier">';
echo '<h2>List of all module</h2>'; 
echo '<ul class="solidblockmenu">'; 
echo '<li><a href="index.html">Back</a></li>';
echo '</ul>';
echo '<Br>';
echo '<Br>';

echo "<tbody>";
 $result = pg_query("SELECT * FROM dc_db.all_mod_system"); 
	while($row = pg_fetch_row($result)){
		$Arr[]=$row[0];
		$Arrr[]=$row[1];
	} 

	$rows = count($Arr);
	$cols= 2;
echo '<table border="1" style="font-size: 25px;">';
echo "<thead><tr><th>module</th><th>Status</th></tr></thead>";
	for ($tr=1; $tr<=$rows; $tr++){
		echo "\t<tr>\n";
		for ($td=1;$td<=$cols;$td++){
			if ($td==1){
				echo "\t<td>".$Arr[$tr-1]."</td>\n";
			}else{
				echo "\t<td>".$Arrr[$tr-1]."</td>\n";
			}
		}
	}		
echo "</table>";
echo "</tbody>";
echo "</ul>";
pg_close($db);

?>
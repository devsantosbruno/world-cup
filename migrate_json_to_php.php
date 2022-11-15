<?PHP

$guessid = date('ymdhis');
$pdn = "mysql:database=bolao;host=localhost";
$username = 'Rafael';
$password = 'p@ssw0rdR@f@&l';
try {
	$db = new PDO($pdn, $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->exec("USE bolao");
	// $db->exec("CREATE TABLE guess (guess_id varchar(40),
	// 								player_name varchar(100), 
	// 								o1 varchar(100), 
	// 								o2 varchar(100), 
	// 								o3 varchar(100), 
	// 								o4 varchar(100), 
	// 								o5 varchar(100), 
	// 								o6 varchar(100), 
	// 								o7 varchar(100), 
	// 								o8 varchar(100), 
	// 								o9 varchar(100), 
	// 								o10 varchar(100), 
	// 								o11 varchar(100), 
	// 								o12 varchar(100), 
	// 								o13 varchar(100), 
	// 								o14 varchar(100), 
	// 								o15 varchar(100), 
	// 								o16 varchar(100), 
	// 								q1 varchar(100), 
	// 								q2 varchar(100), 
	// 								q3 varchar(100), 
	// 								q4 varchar(100), 
	// 								q5 varchar(100), 
	// 								q6 varchar(100), 
	// 								q7 varchar(100), 
	// 								q8 varchar(100), 
	// 								s1 varchar(100), 
	// 								s2 varchar(100), 
	// 								s3 varchar(100), 
	// 								s4 varchar(100), 
	// 								f1 varchar(100), 
	// 								f2 varchar(100), 
	// 								c1 varchar(100)
	// 								)");
	// $db->exec("CREATE TABLE cart (cart_id varchar(40),session_id varchar(64),product_id varchar(40),product_name varchar(100),product_price float)");
	// $cursor = $db->prepare("INSERT INTO guess (guess_id,
	// 											player_name, 
	// 											o1, 
	// 											o2, 
	// 											o3, 
	// 											o4, 
	// 											o5, 
	// 											o6, 
	// 											o7, 
	// 											o8, 
	// 											o9, 
	// 											o10, 
	// 											o11, 
	// 											o12, 
	// 											o13, 
	// 											o14, 
	// 											o15, 
	// 											o16, 
	// 											q1, 
	// 											q2, 
	// 											q3, 
	// 											q4, 
	// 											q5, 
	// 											q6, 
	// 											q7, 
	// 											q8, 
	// 											s1, 
	// 											s2, 
	// 											s3, 
	// 											s4, 
	// 											f1, 
	// 											f2, 
	// 											c1
	// 											)
	// 						VALUES ('" . $guessid . "',
	// 								'Rafael',
	// 								'Brasil',
	// 								'Argentina',
	// 								'Brasil',
	// 								'Argentina',
	// 								'Brasil',
	// 								'Argentina',
	// 								'Brasil',
	// 								'Argentina',
	// 								'Brasil',
	// 								'Argentina',
	// 								'Brasil',
	// 								'Brasil',
	// 								'Argentina',
	// 								'Argentina',
	// 								'Brasil',
	// 								'Argentina',
	// 								'Brasil',
	// 								'Argentina',
	// 								'Brasil',
	// 								'Brasil',
	// 								'Argentina',
	// 								'Argentina',
	// 								'Brasil',
	// 								'Brasil',
	// 								'Argentina',
	// 								'Brasil',
	// 								'Brasil',
	// 								'Brasil',
	// 								'Brasil',
	// 								'Argentina',
	// 								'Brasil'
	// 								);");
	// foreach ($data as $item) {
	$cursor->execute();
	// }
	print "Data Migrated!";
} catch (Exception $e) {
	print "fail:" . $e->getMessage();
}

<?php 
// mang

	$arr1 = array("Zent", "php", 1);

	$arr2 =["zent", "php"];

	// var_dump($arr1);
	// print_r($arr2);

	for ($i=0; $i < count($arr1); $i++) { 
		echo $arr1[$i] . "<br>";
	}

	foreach ($arr1 as $k => $v) {
		echo $k . '-' . $v . "<br>";
	}

	$user=['HaNoi'];

	$user['username']='hung';
	$user['email']='hungleip9@gmail.com';
	$user['phone']='0898562269';

$user1 = [
		'username' => 'hung1',
		'email' => 'hungleip9@gmail.com',
		'phone' => '0898562269'
	];

$user2 = [
		'username' => 'hung2',
		'email' => 'hungleip9@gmail.com',
		'phone' => '0898562269'
	];

$user3 = [
		'username' => 'hung3',
		'email' => 'hungleip9@gmail.com',
		'phone' => '0898562269'
	];

$users=[];

$users[]=$user1;
$users[]=$user2;
$users[]=$user3;

print_r($users[2]['username'].'<br>');
	
	for($i = 0; $i<count($users); $i++){
		echo "-----" . "<br>";
		foreach ($users[$i] as $key => $value) {
			echo $value . "<br>";
		}
	}
	foreach ($users as $key => $user) {
		echo 'username : ' . $user['username'] . "<br>";
		echo 'email : ' . $user['email'] . "<br>";
		echo 'phone : ' . $user['phone'] . "<br>";
		echo "<br>";
	}
	// echo "Dia Chi ". $user[0] . "<br>";
	// echo "Ten " . $user['username'] . "<br>";
 ?>
<?php
require_once "Includes/DataBase.php"; 

if ($_POST ['send'] ) {
	if ( !$_POST ['g-recaptcha-response'])
		exit('Заполните капчу');
	var_dump($_POST);
}


$date=$_POST;
if(isset($date['send'])){

	$errors=array();
	if(trim($date['surname']=='  ')){
		$errors[] = 'Фамилия'; 
	}
	if(trim($date['name'] == '  ')){
		$errors[] = 'Имя';
	}
	if(trim($date['patronymic'] == '  ')){
		$errors[] = 'Отчество';
	}
	if(trim($date['number'] == '')){
		$errors[] = 'Номер телефона';
	}
	if(empty($errors)){
		echo "Ваши данные отправились";
		if(isset($date['send'])){
				
$user=R::dispense('data');
            $user->surname=$date['surname'];
            $user->name=$date['name'];
            $user->patronymic=$date['patronymic'];
            $user->number=$date['number'];
            if($date['date']);
            $user->date=$date['date'];
            if($date['email']);
            $user->email=$date['email'];
            if($date['range'])
            $user->range=$date['range'];
            R::store($user);
            $email="dima.kazanskiy1999@gmail.com";
            $subject="Отправитель: {$date['surname']} {$date['name']} {$date['patronymic']}.";
            $header="From: {$date['email']}.";
            $message="Номер отправителя{$date['number']} и его файл: {$date['file']}";
            $mail=mail($email, $subject, $message, $header);
            echo ". Успех!";
				die();

			}
	}

	else{

		echo '<div style ="color: red;">' .array_shift($errors). '</div><hr>';
	}
}



?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/est1.css">
<title>Chat</title>
</head>
<body id="fund45" >
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Chat";
//Cria conexão

$conexao=new mysqli($servername,$username,$password,$dbname);

//verifica conexão

if($conexao->connect_error){
	die("VOCÊ FALHOU!");
}

	$mensa1 =$_POST['mensa'];
	
	if(empty($mensa1)){
		die();
	}
	else{
	$inserir = mysqli_query($conexao, "INSERT INTO Mensagens(Hist,DataM) VALUES ('$mensa1',CURRENT_TIMESTAMP())");
	}
	$consultar = mysqli_query($conexao,"SELECT Hist
										FROM  Mensagens
										ORDER BY Cod_mensa desc;
							");

	while($conv = mysqli_fetch_array($consultar)){
	echo"<div id='mea'><label id='est' >".$conv['Hist']."</label></div><br>";
	}
	$j=0;

header("refresh:2;url=codviw.php");

?>
</body>
</html>
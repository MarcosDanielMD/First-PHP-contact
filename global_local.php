<html>
<head>
	<title>echo / print</title>
	<meta charset="utf-8">
</head>
<body>

<?php
	
	$nomePublico = "Ruth Cardoso"; // variável global

	//================================================
	/*		Passando parametro para uma funcao		*/
	//================================================
	function passandoParametros($nome)
	{
	
		$mensagem = "(Passando parametros) boa noite ";
		echo $mensagem . $nome;
	}

	passandoParametros($nomePublico);

	echo "<br><br>";
	//====================================================================
	/*		Funcao que nao recebe parametro	(acessa global com erro)   	*/
	//====================================================================

	function semPassarParametros1()
	{
		$mensagem = "(Sem parametros 1) boa noite ";
		echo $mensagem . $nomePublico;
		//não consegue acessar a variável global "$nomePublico"
	}

	semPassarParametros1(); // rodando a funcao "semPassarParametros1"

	echo "<br><br>";
	//====================================================================
	/*		Funcao que nao recebe parametro	(acessa global sem erro)   	*/
	//====================================================================

	function semPassarParametros2()
	{
		$mensagem = "boa noite ";
		echo "(Sem parametros 2) " . $mensagem . $GLOBALS['nomePublico'];
		/* 
		 No PHP voce so consegue acessar a variável (ou variaveis) 
		 global (globais) através do "$GLOBALS" com o nome dentro 
		 de colchetes
		*/
	}

	semPassarParametros2(); // rodando a funcao "semPassarParametros2"
?>


<?php 
echo "<br><br>";
echo "<a href='index.php'>voltar</a>"
?>
</body>
</html>
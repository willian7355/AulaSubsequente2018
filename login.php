<?php
	$login = filter_input(INPUT_POST, 'login');
	$senha = filter_input(INPUT_POST, 'senha');
	$login1 = "rafael";
	$senha1 = "123";
	
	if($login == $login1) {
		echo "Usuário igual - ";
		if ($senha == $senha1){
			echo "Senha igual";
		}else{
			echo "Senha diferente";
		}
	}else{
		echo "Usuário diferente";
	}
?>
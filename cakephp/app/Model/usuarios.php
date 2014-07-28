<?php

class Usuario extends AppModel{

	public $name = 'Usuario';
	string $usuario;
	string $senha;

}

	public function verificarSenhaUsuario($usuario, $senha){

    
	$sql = "SELECT * FROM usuarios WHERE usuario = $usuario AND senha = $senha";
	$res = $this->query($sql);

	return $res;
}

?>
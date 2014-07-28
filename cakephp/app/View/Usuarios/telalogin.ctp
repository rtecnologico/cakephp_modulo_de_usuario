<h1>Entre com o seu Login e Senha</h1>

<?php
	echo $this->Form->create('Usuario',array('action' => 'logar')),
		 $this->Form->input('usuario'),
		 $this->Form->input('senha',array('type' => 'password')),
		 $this->Form->end('LOGAR');


?>
</br>
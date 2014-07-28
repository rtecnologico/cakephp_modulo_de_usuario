<h1>Editar Usuarios</h1>

<?php
	echo $this->Form->create('Usuario',array('action' => 'editar')),
		 $this->Form->input('id',array('type' => 'hidden')),
		 $this->Form->input('nome'),
		 $this->Form->input('usuario'),
		 $this->Form->input('senha'),
		 $this->Form->end('ATUALIZAR');


?>
</br>

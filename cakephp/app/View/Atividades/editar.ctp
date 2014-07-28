<h1>Editar Atividades</h1>

<?php
	echo $this->Form->create('Atividade',array('action' => 'editar')),
		 $this->Form->input('id',array('type' => 'hidden')),
		 $this->Form->input('data'),
		 $this->Form->input('titulo'),
		 $this->Form->input('descricao'),
		 $this->Form->end('ATUALIZAR');


?>
</br>

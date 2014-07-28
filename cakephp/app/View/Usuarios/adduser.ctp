<h1>Adicionarar Usuarios</h1>

<?php
	echo $this->Form->create('Usuario',array('action' => 'adduser')),
	
		 $this->Form->input('nome'),
		 $this->Form->input('usuario'),
		 $this->Form->input('senha'),
		 $this->Form->end('ADICIONAR');


?>
</br>

			</br>
<?=$this->Html->Link('Listar usuarios',array('controller'=>'usuarios','action' => 'index'));?>
		
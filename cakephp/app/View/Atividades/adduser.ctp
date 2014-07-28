<h1>Adicionarar Atividades</h1>

<?php
	echo $this->Form->create('Atividade',array('action' => 'editar')),
	
		 $this->Form->input('data'),
		 $this->Form->input('titulo'),
		 $this->Form->input('descricao'),
		 $this->Form->end('ADICIONAR');


?>
</br>

			</br>
<?=$this->Html->Link('Listar Atividades',array('controller'=>'atividades','action' => 'index'));?>
		
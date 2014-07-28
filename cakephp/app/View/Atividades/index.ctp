<h1>Atividades</h1>
<table>
	<tr>
	<td>Data</td>
	<td>Titulo</td>
	<td>Descrição</td>
	<td>Criado</td>
	<td>Modificado</td>
	</tr>
	
	<?php 
		//echo $atividades[0]['Atividade']['data']; 
		//exit; 
		
		for($i=0; $i < count($atividades); $i++){
			echo '<tr>';
			echo '<td>'.$atividades[$i]['Atividade']['data'].'</td>';
			echo '<td>'.$atividades[$i]['Atividade']['titulo'].'</td>';
			echo '<td>'.$atividades[$i]['Atividade']['descricao'].'</td>';
			echo '<td>'.$atividades[$i]['Atividade']['created'].'</td>';
			echo '<td>'.$atividades[$i]['Atividade']['modified'].'</td>';
			echo '<td>'.$this->Html->Link('Editar',array('controller'=>'atividades','action' => 'editar',$atividades[$i]['Atividade']['id'])).'</td>';
			echo '<td>'.$this->Html->Link('Deletar',array('controller'=>'atividades','action' => 'deletar',$atividades[$i]['Atividade']['id'])).'</td>';
			echo '</tr>';
		}
	?>	
	

</table>
</br>
<?=$this->Html->Link('Adicionar Atividades',array('controller'=>'atividades','action' => 'adduser'));?>

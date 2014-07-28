<?php

class AtividadesController extends AppController{

	public $name = 'Atividades';
//	public $scaffold;
	

	
	
public function index(){
	    
		$atividades = $this->Atividade->find('all');
		//var_dump($atividades);
		$this->set(compact('atividades'));
	
	
	}
	
	public function adduser(){
		if($this->data){
			if($this->Atividade->save($this->data)){
				$this->Session->setFlash['Atividade adicionado.'];
			$this->data = array();
			$this->redirect(array('controller' => 'atividades','action' => 'index'));
			}
		
		}
	
	}
	
	public function editar($id = null){
	    
		if($this->data){
			if($this->Atividade->save($this->data))
				$this->Session->setFlash['Atividade editado.'];
				$this->redirect(array('controller' => 'atividades','action' => 'index'));
		}else{
		
		$this->data = $this->Atividade ->read(null,$id);
		
		}
	
	
	}
	
		public function deletar($id = null){
	    
		if($id){
			if($this->Atividade->delete($id))
				$this->Session->setFlash['Atividade excluida.'];
				$this->redirect(array('controller' => 'atividades','action' => 'index'));
	
		
		}
	
	
	}
	
}


?>
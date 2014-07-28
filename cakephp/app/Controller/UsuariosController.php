<?php

class UsuariosController extends AppController{

	public $name = 'Usuarios';
	public $scaffold;
	
	
	

/* public function index(){
	    
		$Usuarios = $this->Usuario->find('all');
		//var_dump($Usuarios);
		$this->set(compact('Usuarios'));
	
	
	}
	
	public function adduser(){
		if($this->data){
			if($this->Usuario->save($this->data)){
				$this->Session->setFlash['Usuario adicionado.'];
			$this->data = array();
			$this->redirect(array('controller' => 'Usuarios','action' => 'index'));
			}
		
		}
	
	}
	
	public function editar($id = null){
	    
		if($this->data){
			if($this->Usuario->save($this->data))
				$this->Session->setFlash['Usuario editado.'];
				$this->redirect(array('controller' => 'Usuarios','action' => 'index'));
		}else{
		
		$this->data = $this->Usuario ->read(null,$id);
		
		}
	
	
	}
	
		public function deletar($id = null){
	    
		if($id){
			if($this->Usuario->delete($id))
				$this->Session->setFlash['Usuario excluida.'];
				$this->redirect(array('controller' => 'Usuarios','action' => 'index'));
	
		
		}
	
	
	}
	*/
}


?>
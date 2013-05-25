<?php

class HallazgosController extends AppController {

    public $helpers = array('Html', 'Form');
    public $uses = array('Hallazgo', 'Empresa');



public function index() {
        $this->set('hallazgos', $this->Hallazgo->find('all'));
    }



 public function ver($id = null) {
        if (!$id) {
            throw new NotFoundException(__('id invalido'));
        }

                //$this->Hallazgo->contain();
                $this->Hallazgo->recursive = 1;
        $hallazgo = $this->Hallazgo->find('first', array(
        'conditions' => array('idHallazgo' => $id)
    ));
        if (!$hallazgo) {
            throw new NotFoundException(__('Hallazgo no encontrado'));
        }

        $this->set('hallazgo', $hallazgo);

        


    }



public function registrar($id = null) {

$empresa =  $this->Empresa->find('first', array(
        'conditions' => array('idEmpresa' => $id)
    ));

                 $this->set('empresa', $empresa);

        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Hallazgo->create();

                $this->request->data['Hallazgo']['idEmpresa'] = $id;
                $this->request->data['Hallazgo']['fecha'] = date('Y-m-d');
                 

            if ($this->Hallazgo->save($this->request->data)) { //
                $this->Session->setFlash('Los datos de Hallazgo han sido registrados');

                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Imposible Registrar hallazgo.');
                
            }
        }
    }




public function editar($id = null) {
    if (!$id) {
        throw new NotFoundException(__('id Hallazgo no valido'));
    }

    $hallazgo = $this->Hallazgo->find('first', array(
        'conditions' => array('idHallazgo' => $id)
    ));

    $empresa =  $this->Empresa->find('first', array(
        'conditions' => array('idEmpresa' => $hallazgo['Hallazgo']['idEmpresa'])
    ));

    $this->set('empresa', $empresa);

    if (!$hallazgo) {
        throw new NotFoundException(__('Hallazgo no encontrado'));
    }

    if ($this->request->is('post') || $this->request->is('put')) {

    	//mail('numcomx@gmail.com', 'cambios', 'lol');

        $this->Hallazgo->id = $id;

        if ($this->Hallazgo->save($this->request->data)) {
            $this->Session->setFlash('Los datos de Hallazgo han sido actualizados.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Imposible actualizar datos.');
        }
    }

    if (!$this->request->data) {
        $this->request->data = $hallazgo;
        //mail('numcomx@gmail.com', 'cambios', 'lol2');
    }
}



public function eliminar($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Hallazgo->delete($id)) {
        $this->Session->setFlash('El Hallazgo acaba de ser eliminado del sistema');
        $this->redirect(array('action' => 'index'));
    }
}




}

?>
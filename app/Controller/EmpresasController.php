<?php

class EmpresasController extends AppController {

    public $helpers = array('Html', 'Form');
    //public $uses = array('Hallazgo', 'Empresa');



public function index() {
        $this->set('empresas', $this->Empresa->find('all'));
    }



 public function ver($id = null) {
        if (!$id) {
            throw new NotFoundException(__('id invalido'));
        }

                //$this->Empresa->contain();
                $this->Empresa->recursive = 0;
        $empresa= $this->Empresa->find('first', array(
        'conditions' => array('idEmpresa' => $id)
    ));
        if (!$empresa) {
            throw new NotFoundException(__('Empresa no encontrada'));
        }

        $this->set('empresa', $empresa);

        


    }



public function registrar() {
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Empresa->create();


            if ($this->Empresa->save($this->request->data)) {
                $this->Session->setFlash('Los datos de la empresa han sido registrados');

                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Imposible Registrar Empresa.');
            }
        }
    }




public function editar($id = null) {
    if (!$id) {
        throw new NotFoundException(__('id empresa no valido'));
    }

    $empresa = $this->Empresa->find('first', array(
        'conditions' => array('idEmpresa' => $id)
    ));

    if (!$empresa) {
        throw new NotFoundException(__('empresa no encontrada'));
    }

    if ($this->request->is('post') || $this->request->is('put')) {

    	//mail('numcomx@gmail.com', 'cambios', 'lol');

        $this->Empresa->id = $id;

        if ($this->Empresa->save($this->request->data)) {
            $this->Session->setFlash('Los datos de la empresa han sido actualizados.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Imposible actualizar datos.');
        }
    }

    if (!$this->request->data) {
        $this->request->data = $empresa;
        //mail('numcomx@gmail.com', 'cambios', 'lol2');
    }
}



public function eliminar($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Empresa->delete($id)) {
        $this->Session->setFlash('La empresa acaba de ser eliminado del sistema');
        $this->redirect(array('action' => 'index'));
    }
}




}

?>
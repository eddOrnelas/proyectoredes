<?php
class Empresa extends AppModel {

	 public $primaryKey = 'idEmpresa';



//Rule duplicates

	 public function limitDuplicates($check) {
        // $check will have value: array('promotion_code' => 'some-value')
        // $limit will have value: 25
        $existing_count = $this->find('count', array(
            'conditions' => $check,
            'recursive' => -1
        ));

//mail('numcomx@gmail.com', "Debug[Modelo Alumno]", "entro duplo: ".$existing_count);

        return $existing_count <= 0;
    }


public $hasMany = array(
        'Hallazgo' => array(
            'className'     => 'Hallazgo',
            'foreignKey'    => 'idEmpresa'
        )
    );



}

?>
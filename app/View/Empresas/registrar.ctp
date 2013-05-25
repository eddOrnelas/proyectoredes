
<h1>Preregistrar Empresa</h1>

<div class="row">

<?php
echo $this->Form->create('Empresa');

echo $this->Form->input('nombreEmpresa', array('div' => 'span12', 'class' => 'span5'));
echo $this->Form->input('direccion', array('div' => 'span4', 'class' => 'span4'));
echo $this->Form->input('telefonoOficina', array('div' => 'span4', 'class' => 'span4'));
echo $this->Form->input('emailEmpresa', array('div' => 'span4', 'class' => 'span4'));
echo $this->Form->input('nombreContacto', array('div' => 'span4', 'class' => 'span4'));

echo $this->Form->input('telefonoContacto', array('div' => 'span6', 'class' => 'span6'));
echo $this->Form->input('telefono2Contacto', array('div' => 'span6', 'class' => 'span6'));

echo $this->Form->input('emailContacto', array('div' => 'span6', 'class' => 'span6'));

$options = array(
    'label' => 'Registrar Empresa',
    'div' => array(
        'class' => 'span4',
    )
);
echo $this->Form->end($options);

//echo $this->Form->end('Pre Registrar Alumno', array('div' => 'span6', 'class' => 'span6'));


?>

</div>
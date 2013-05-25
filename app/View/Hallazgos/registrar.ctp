
<h1>Registrar Hallazgos</h1>

<h2>Empresa</h2>
<div class="row">

<div class="span6" ><b>Nombre Empresa:</b> <?php echo $empresa['Empresa']['nombreEmpresa']; ?></div>
<div class="span6" ><b>Direccion:</b> <?php echo $empresa['Empresa']['direccion']; ?></div>
<div class="span6" ><b>Telefono Oficina:</b> <?php echo $empresa['Empresa']['telefonoOficina']; ?></div>
<div class="span6" ><b>Email Empresa:</b> <?php echo $empresa['Empresa']['emailEmpresa']; ?></div>

</div>


<h2>Datos Hallazgo</h2>

<div class="row">

<?php
echo $this->Form->create('Hallazgo');

echo $this->Form->input('AnchoBandaDC', array('div' => 'span12', 'label' => '1.	¿Cuál es el ancho de banda en el Distribuidor principal? ', 'class' => 'span5'));
echo $this->Form->input('AnchoBandaDB', array('div' => 'span12', 'label' => '2. ¿Cuál es el ancho de banda en el Conexión cruzada intermedia? ' ,'class' => 'span5'));
echo $this->Form->input('AnchoBandaDA', array('div' => 'span12', 'label' => '3. ¿Cuál es el ancho de banda en el Conexión cruzada horizontal? ' ,'class' => 'span5'));
echo $this->Form->input('nDBenDC', array('div' => 'span12', 'label' => '4. ¿En el Distribuidor principal cuantos Distribuidores intermedios tiene? ', 'class' => 'span5'));
echo $this->Form->input('nDAennDB', array('div' => 'span12', 'label' => '7. ¿En el Distribuidor intermedio cuantos Distribuidores horizontales tiene' ,'class' => 'span5'));

echo $this->Form->input('NPuntosCONSOLIDACIONenDA', array('div' => 'span12', 'label' => '8. ¿Cuántos puntos de consolidación tiene el Distribuidor intermedio ?',  'class' => 'span5'));


$options = array(
    'label' => 'Registrar Hallazgo',
    'div' => array(
        'class' => 'span4',
    )
);
echo $this->Form->end($options);

//echo $this->Form->end('Pre Registrar Alumno', array('div' => 'span6', 'class' => 'span6'));




?>

</div>


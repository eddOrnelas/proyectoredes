<h1>Empresas</h1>
<p><?php echo $this->Html->link('[ Registrar Empresa ]', array('action' => 'registrar')); ?></p>
<table class="table table-hover">
    <tr>
        <th>Id</th>
        <th>Nombre Empresa</th>
        <th>Telefono</th>
        <th>Correo</th>

        <th>Acciones</th>     
    </tr>

<!-- Here's where we loop through our $grupos array, printing out post info -->



    <?php foreach ($empresas as $empresa): ?>
    <tr>
        <td><?php echo $empresa['Empresa']['idEmpresa']; ?></td>
        <td><?php echo $empresa['Empresa']['nombreEmpresa']; ?></td>
        <td><?php echo $empresa['Empresa']['telefonoOficina']; ?></td>
        
        <td><?php echo $empresa['Empresa']['emailEmpresa']; ?></td>
       
        <td>

            <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
            Operaciones
            <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">

                <li>
            <?php echo $this->Html->link("Ver Datos", array('action' => 'ver', $empresa['Empresa']['idEmpresa'])); ?>
                </li>
                <li>
            <?php echo $this->Html->link('Editar', array('action' => 'editar', $empresa['Empresa']['idEmpresa'])); ?>
                </li>

                <li>
            <?php echo $this->Html->link('Registrar Hallazgo', array('controller' => 'hallazgos' ,'action' => 'registrar', $empresa['Empresa']['idEmpresa'])); ?>
                </li>

                <li class="btn-danger" >
            <?php echo $this->Form->postLink(
                'Eliminar',
                array('action' => 'eliminar', $empresa['Empresa']['idEmpresa']),
                array('confirm' => 'Estas seguro de eliminar esta Empresa?'));
            ?>
            </li>
            </ul>
            

        </div>

        </td>
        
    </tr>
    <?php endforeach; ?>

</table>
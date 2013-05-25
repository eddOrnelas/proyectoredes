<h1>Hallazgos</h1>

<table class="table table-hover">
    <tr>
        <th># Hallazgo</th>
        <th>Nombre Empresa</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Fecha</th>
        <th>Acciones</th>     
    </tr>

<!-- Here's where we loop through our $grupos array, printing out post info -->



    <?php foreach ($hallazgos as $hallazgo): ?>
    <tr>
        <td><?php echo $hallazgo['Hallazgo']['idHallazgo']; ?></td>
        <td><?php echo $hallazgo['Empresa']['nombreEmpresa']; ?></td>
        <td><?php echo $hallazgo['Empresa']['telefonoOficina']; ?></td>
        
        <td><?php echo $hallazgo['Empresa']['emailEmpresa']; ?></td>
         <td><?php echo $hallazgo['Hallazgo']['fecha']; ?></td>
        <td>

            <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
            Operaciones
            <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">

                <li>
            <?php echo $this->Html->link("Ver Datos", array('action' => 'ver', $hallazgo['Hallazgo']['idHallazgo'])); ?>
                </li>
                <li>
            <?php echo $this->Html->link('Editar', array('action' => 'editar', $hallazgo['Hallazgo']['idHallazgo'])); ?>
                </li>

                

                <li class="btn-danger" >
            <?php echo $this->Form->postLink(
                'Eliminar',
                array('action' => 'eliminar', $hallazgo['Hallazgo']['idHallazgo']),
                array('confirm' => 'Estas seguro de eliminar este Hallazgo?'));
            ?>
            </li>
            </ul>
            

        </div>

        </td>
        
    </tr>
    <?php endforeach; ?>

</table>


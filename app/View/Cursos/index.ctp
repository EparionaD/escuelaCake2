<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos</title>
</head>
<body>
    <h1>Lista de Cursos</h1>
    <table>
        <tr>
            <th><?php echo $this->Paginator->sort('id') ?></th>
            <th><?php echo $this->Paginator->sort('nombre') ?></th>
            <th><?php echo $this->Paginator->sort('descripcion') ?></th>
            <th><?php echo $this->Paginator->sort('Profesor') ?></th>
        </tr>
        <?php
            foreach($cursos as $value){
                $nprofesor = $value['Teacher']['nombre'];
                ?>
                <tr>
                    <td><?php echo $value['Curso']['id'] ?></td>
                    <td><?php echo $value['Curso']['nombre'] ?></td>
                    <td><?php echo $value['Curso']['descripcion'] ?></td>
                    <td><?php
                        echo $this->Html->link($nprofesor, array('controller'=>'teachers','action'=>'editar',$value['Teacher']['id']))
                    ?></td>
                </tr>
            <?php
            }
        ?>
    </table>
</body>
</html>
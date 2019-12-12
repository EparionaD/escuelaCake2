<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo Cake2</h1>
    <div>
        <?php echo $this->Html->link('Agregar estudiantes', array('action' => 'agregar')); ?>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Acciones</th>
        </tr>
        <?php
            foreach($estudiantes as $valor){
                ?>
                <tr>
                    <th> <?= $valor['Student']['id']."<br>"; ?></th>
                    <th> <?= $valor['Student']['nombre']."<br>"; ?></th>
                    <th> <?= $valor['Student']['apellido']."<br>"; ?></th>
                    <th>
                        <?php echo $this->Html->link('Editar', array('action' => 'editar',$valor['Student']['id'])); ?>
                        <?php echo $this->Form->postLink('Eliminar', array('action' => 'borrar', $valor['Student']['id']), array('confirm'=> 'Realmente lo vas a borrar?')); ?>
                    </th>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>
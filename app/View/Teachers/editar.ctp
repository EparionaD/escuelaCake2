<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar estudiantes</h1>
    <?php
        echo $this->Form->create('Teacher');
        echo $this->Form->input('id',array('type'=>'hidden'));
        echo $this->Form->input('nombre');
        echo $this->Form->input('apellido');
        echo $this->Form->input('cv');
        echo $this->Form->end('Guardar cambios');
    ?>
</body>
</html>
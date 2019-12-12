<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Página para agregar estudiantes</h1>
    <?php 
        echo $this->Form->create('Student');
        echo $this->Form->input('nombre');
        echo $this->Form->input('apellido');
        echo $this->Form->end('Guardar estudiante');
    ?>
</body>
</html>
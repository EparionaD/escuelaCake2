<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar cursos</title>
</head>
<body>
    <h1>Agregar curso</h1>
    <?php
        echo $this->Form->create('Curso');
        echo $this->Form->input('nombre');
        echo $this->Form->input('descripcion');
        echo $this->Form->input('teacher_id');
        echo $this->Form->end('Guardar curso');
    ?>
</body>
</html>
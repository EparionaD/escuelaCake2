<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profesores</title>
</head>
<body>
    <h1>Lista de docentes</h1>
    <table>
        <tr>
            <th><?php echo $this->Paginator->sort('id') ?></th>
            <th><?php echo $this->Paginator->sort('nombre') ?></th>
            <th><?php echo $this->Paginator->sort('apellido') ?></th>
            <th><?php echo $this->Paginator->sort('cv') ?></th>
        </tr>
        <?php
            foreach($Profesores as $value){
                ?>
                <tr>
                    <td><?php echo $value['Teacher']['id'] ?></td>
                    <td><?php echo $value['Teacher']['nombre'] ?></td>
                    <td><?php echo $value['Teacher']['apellido'] ?></td>
                    <td><?php echo $value['Teacher']['cv'] ?></td>
                </tr>
            <?php
            }
        ?>
    </table>
</body>
</html>
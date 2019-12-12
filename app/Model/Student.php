<?php
    /* Tabla db se debe de escribir en plural y minisculas en el modelo en singular y la primera letra en mayusculas */
    class Student extends AppModel{
        public $validate = array(
            'nombre'=> array('rule'=>'notBlank'),
            'apellido'=> array('rule'=>'notBlank')
        );
        public $hasAndBelongsToMany = array(
            'Curso' => array(
                'className' => 'Curso',
                'joinTable' => 'students_cursos',
                'foreignKey' => 'student_id',
                'associationForeignKey' => 'curso_id',
            )
        );
    }
?>
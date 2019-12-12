<?php
    class Teacher extends AppModel{
        public $displayField = 'nombre';
        public $hasMany = array(
            'Curso' => array(
                'className' => 'Curso',
                'foreignKey' => 'teacher_id',
                'dependent' => 'true',
            )
        );
    }
?>
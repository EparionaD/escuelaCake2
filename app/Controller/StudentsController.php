<?php
    class StudentsController extends AppController {
        public $helpers = array('Html','Form');
        public $components = array('Session');

        public function index(){
            $this->set('estudiantes', $this->Student->find('all'));
        }
        public function agregar(){
            if($this->request->is('post')){
                if($this->Student->save($this->request->data)){
                    $this->Session->setFlash('Estudiante guardado');
                    $this->redirect(array('action'=>'index'));
                }
            }
        }
        public function editar($id){
            $this->Student->id=$id;
            if($this->request->is('get')){
                $this->request->data=$this->Student->read();
            }else if($this->Student->save($this->request->data)){
                $nombre = $this->request->data['Student']['nombre'];
                $this->Session->setFlash('Estudiante '.$nombre.' editado');
                $this->redirect(array('action'=>'index'));
            }
        }
        public function borrar($id){
            if($this->request->is('get')){
                echo 'No es por get';
            }else if($this->Student->delete($id)){
                $this->Session->setFlash('Estudiante borrado');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
?>
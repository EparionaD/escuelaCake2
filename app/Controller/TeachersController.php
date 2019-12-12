<?php
    class TeachersController extends AppController{
        public function index(){
            $this->Teacher->recursive=0;
            $this->set('Profesores',$this->Paginate());
        }
        public function agregarProfesor(){
            if($this->request->is('post')){
                if($this->Teacher->save($this->request->data)){
                    $this->Session->setFlash('Docente guardado');
                    $this->redirect(array('action'=>'index'));
                }
            }
        }
        public function editar($id){
            $this->Teacher->id=$id;
            if($this->request->is('get')){
                $this->request->data=$this->Teacher->read();
            }else if($this->Teacher->save($this->request->data)){
                $nombre = $this->request->data['Teacher']['nombre'];
                $this->Session->setFlash('Profesor '.$nombre.' editado');
                $this->redirect(array('controller'=>'cursos','action'=>'index'));
            }
        }
    }
?>
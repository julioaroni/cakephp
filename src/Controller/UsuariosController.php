<?php
namespace App\Controller;

class UsuariosController extends AuthController{
    
    public function initialize(){
        parent::initialize();
        $this->loadModel('Roles');
    }
//        public function beforeFilter(Event $event){
//        parent::beforeFilter($event);
//    //        $this->Auth->allow(['index', 'view', 'display']);
//
//        //        
//               $usuario = $this->Auth->user();
//               
//                if($usuario->rol->id != '1'){
//                   $this->Flash->success('Acceso solo al administrador');
//                 $this->redirect(['controller' => 'usuarios', 'action'=>'index']);
//                }
//       
//       }

      
    public function index() {
        $query = $this->Usuarios->find('all')->contain(['Roles']);
        $this->set('usuarios', $query);

    }
    
    public function registrar() {
        $usuario = $this->Usuarios->newEntity();
        if($this->request->is('post')){
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if( $this->Usuarios->save($usuario) ) {
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            } else {
                $this->Flash->error('Error al momento de guardar el registro');
            }
        }
        $this->set('usuario', $usuario);
        
        $query = $this->Roles->find('list');
        $this->set('roles', $query);
    }
    
    public function editar($id = null) {
        $usuario = $this->Usuarios->get($id);
        if($this->request->is('put')){ // or post <form>
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if( $this->Usuarios->save($usuario) ) {
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            } else {
                $this->Flash->error('Error al momento de guardar el registro');
            }
        }
        $this->set('usuario', $usuario);
        
        $query = $this->Roles->find('list');
        $this->set('roles', $query);
    }
    
    public function eliminar($id = null) {
        $usuario = $this->Usuarios->get($id);
        if( $this->Usuarios->delete($usuario) ) {
            $this->Flash->success('Registro eliminado correctamente');
        } else {
            $this->Flash->error('Error al momento de eliminar el registro');
        }
        $this->redirect(['action'=>'index']);
    }
    
      public function login(){
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                
                // Obtener los menus por rol de la BD
                
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Usuario y/o clave inválido');
        }
                $this->viewBuilder()->layout('public');
    }
   
     public function logout(){
          $this->viewBuilder()->layout('public');
        return $this->redirect($this->Auth->logout());
    }
    
}
?>

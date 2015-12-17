<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Palavra Controller
 *
 * @property \App\Model\Table\PalavraTable $Palavra */
class PalavraController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        
        $lista =  $this->Palavra->find('all')->contain(['Aluno', 'Idioma']);

        $this->set('palavra', $this->paginate($lista));

        $this->set('_serialize', ['palavra']);
    }

    /**
     * View method
     *
     * @param string|null $id Palavra id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $palavra = $this->Palavra->get($id, [
            'contain' => []
        ]);
        $this->set('palavra', $palavra);
        $this->set('_serialize', ['palavra']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $palavra = $this->Palavra->newEntity();
        if ($this->request->is('post')) {
            $palavra = $this->Palavra->patchEntity($palavra, $this->request->data);
            $user = $this->Auth->user();
            
            $palavra->id_aluno = $user['id_aluno'];
            $palavra->id_turma = 1;

            if ($this->Palavra->save($palavra)) {
                $this->Flash->success(__('The palavra has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The palavra could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('palavra'));
        $this->set('_serialize', ['palavra']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Palavra id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $palavra = $this->Palavra->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $palavra = $this->Palavra->patchEntity($palavra, $this->request->data);
            if ($this->Palavra->save($palavra)) {
                $this->Flash->success(__('The palavra has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The palavra could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('palavra'));
        $this->set('_serialize', ['palavra']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Palavra id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $palavra = $this->Palavra->get($id);
        if ($this->Palavra->delete($palavra)) {
            $this->Flash->success(__('The palavra has been deleted.'));
        } else {
            $this->Flash->error(__('The palavra could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    function beforeFilter(\Cake\Event\Event $event)
    {
        $this->Auth->allow(['index', 'add']);
    }    

    public function isAuthorized($user = null)
    {
        return true;
    }

}

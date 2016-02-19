<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Glossario Controller
 *
 * @property \App\Model\Table\GlossarioTable $Glossario
 */
class GlossarioController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
              'contain' => ['Palavra1.Idioma', 'Palavra2' => ['Idioma2']]
            , 'sortWhitelist'=>['Idioma.descricao', 'Idioma2.descricao', 'Palavra1.texto', 'Palavra2.texto']
        ];

        $this->set('glossario', $this->paginate($this->Glossario));
        $this->set('_serialize', ['glossario']);
    }

    /**
     * View method
     *
     * @param string|null $id Glossario id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $glossario = $this->Glossario->get($id, [
            'contain' => []
        ]);
        $this->set('glossario', $glossario);
        $this->set('_serialize', ['glossario']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $glossario = $this->Glossario->newEntity();
        if ($this->request->is('post')) {
            $glossario = $this->Glossario->patchEntity($glossario, $this->request->data);
            if ($this->Glossario->save($glossario)) {
                $this->Flash->success(__('The glossario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The glossario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('glossario'));
        $this->set('_serialize', ['glossario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Glossario id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $glossario = $this->Glossario->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $glossario = $this->Glossario->patchEntity($glossario, $this->request->data);
            if ($this->Glossario->save($glossario)) {
                $this->Flash->success(__('The glossario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The glossario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('glossario'));
        $this->set('_serialize', ['glossario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Glossario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $glossario = $this->Glossario->get($id);
        if ($this->Glossario->delete($glossario)) {
            $this->Flash->success(__('The glossario has been deleted.'));
        } else {
            $this->Flash->error(__('The glossario could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user = null)
    {
        if(isset($user['role'])){
            return true;
        }
    }       
}

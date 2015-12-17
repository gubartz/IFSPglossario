<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Idioma Controller
 *
 * @property \App\Model\Table\IdiomaTable $Idioma */
class IdiomaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('idioma', $this->paginate($this->Idioma));
        $this->set('_serialize', ['idioma']);
    }

    /**
     * View method
     *
     * @param string|null $id Idioma id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $idioma = $this->Idioma->get($id, [
            'contain' => []
        ]);
        $this->set('idioma', $idioma);
        $this->set('_serialize', ['idioma']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $idioma = $this->Idioma->newEntity();
        if ($this->request->is('post')) {
            $idioma = $this->Idioma->patchEntity($idioma, $this->request->data);
            if ($this->Idioma->save($idioma)) {
                $this->Flash->success(__('The idioma has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The idioma could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('idioma'));
        $this->set('_serialize', ['idioma']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Idioma id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $idioma = $this->Idioma->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $idioma = $this->Idioma->patchEntity($idioma, $this->request->data);
            if ($this->Idioma->save($idioma)) {
                $this->Flash->success(__('The idioma has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The idioma could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('idioma'));
        $this->set('_serialize', ['idioma']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Idioma id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $idioma = $this->Idioma->get($id);
        if ($this->Idioma->delete($idioma)) {
            $this->Flash->success(__('The idioma has been deleted.'));
        } else {
            $this->Flash->error(__('The idioma could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

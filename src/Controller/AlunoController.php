<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aluno Controller
 *
 * @property \App\Model\Table\AlunoTable $Aluno
 */
class AlunoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $aluno = $this->paginate($this->Aluno);

        $this->set(compact('aluno'));
        $this->set('_serialize', ['aluno']);
    }

    /**
     * View method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aluno = $this->Aluno->get($id, [
            'contain' => ['Turma', 'Palavra']
        ]);

        $this->set('aluno', $aluno);
        $this->set('_serialize', ['aluno']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aluno = $this->Aluno->newEntity();
        if ($this->request->is('post')) {
            $aluno = $this->Aluno->patchEntity($aluno, $this->request->data);
            if ($this->Aluno->save($aluno)) {
                $this->Flash->success(__('The aluno has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aluno could not be saved. Please, try again.'));
            }
        }
        $turma = $this->Aluno->Turma->find('list', ['limit' => 200]);
        $this->set(compact('aluno', 'turma'));
        $this->set('_serialize', ['aluno']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aluno = $this->Aluno->get($id, [
            'contain' => ['Turma']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aluno = $this->Aluno->patchEntity($aluno, $this->request->data);
            if ($this->Aluno->save($aluno)) {
                $this->Flash->success(__('The aluno has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aluno could not be saved. Please, try again.'));
            }
        }

        $turma = $this->Aluno->Turma->find('list', [ 'keyField' => 'id_turma'
                                                   , 'valueField' => 'id_turma']);


        $this->set(compact('aluno', 'turma'));
        $this->set('_serialize', ['aluno']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aluno = $this->Aluno->get($id);
        if ($this->Aluno->delete($aluno)) {
            $this->Flash->success(__('The aluno has been deleted.'));
        } else {
            $this->Flash->error(__('The aluno could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AlunoTurma Controller
 *
 * @property \App\Model\Table\AlunoTurmaTable $AlunoTurma */
class AlunoTurmaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('alunoTurma', $this->paginate($this->AlunoTurma));
        $this->set('_serialize', ['alunoTurma']);
    }

    /**
     * View method
     *
     * @param string|null $id Aluno Turma id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alunoTurma = $this->AlunoTurma->get($id, [
            'contain' => []
        ]);
        $this->set('alunoTurma', $alunoTurma);
        $this->set('_serialize', ['alunoTurma']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alunoTurma = $this->AlunoTurma->newEntity();
        if ($this->request->is('post')) {
            $alunoTurma = $this->AlunoTurma->patchEntity($alunoTurma, $this->request->data);
            if ($this->AlunoTurma->save($alunoTurma)) {
                $this->Flash->success(__('The aluno turma has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aluno turma could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('alunoTurma'));
        $this->set('_serialize', ['alunoTurma']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aluno Turma id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alunoTurma = $this->AlunoTurma->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alunoTurma = $this->AlunoTurma->patchEntity($alunoTurma, $this->request->data);
            if ($this->AlunoTurma->save($alunoTurma)) {
                $this->Flash->success(__('The aluno turma has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aluno turma could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('alunoTurma'));
        $this->set('_serialize', ['alunoTurma']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aluno Turma id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alunoTurma = $this->AlunoTurma->get($id);
        if ($this->AlunoTurma->delete($alunoTurma)) {
            $this->Flash->success(__('The aluno turma has been deleted.'));
        } else {
            $this->Flash->error(__('The aluno turma could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

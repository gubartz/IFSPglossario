<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Professor Controller
 *
 * @property \App\Model\Table\ProfessorTable $Professor
 */
class ProfessorController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('professor', $this->paginate($this->Professor));
        $this->set('_serialize', ['professor']);
    }

    /**
     * View method
     *
     * @param string|null $id Professor id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $professor = $this->Professor->get($id, [
            'contain' => []
        ]);
        $this->set('professor', $professor);
        $this->set('_serialize', ['professor']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $professor = $this->Professor->newEntity();
        if ($this->request->is('post')) {
            $professor = $this->Professor->patchEntity($professor, $this->request->data);
            if ($this->Professor->save($professor)) {
                $this->Flash->success(__('The professor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The professor could not be saved. Please, try again.'));
            }
        }
        $list  = TableRegistry::get('Usuario')->find('list');
        $this->set('id_usuario', $list);
                
        $this->set(compact('professor'));
        $this->set('_serialize', ['professor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Professor id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $professor = $this->Professor->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $professor = $this->Professor->patchEntity($professor, $this->request->data);
            if ($this->Professor->save($professor)) {
                $this->Flash->success(__('The professor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The professor could not be saved. Please, try again.'));
            }
        }
        $list  = TableRegistry::get('Usuario')->find('list');
        $this->set('usuarioList', $list);

        $this->set(compact('professor'));
        $this->set('_serialize', ['professor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Professor id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $professor = $this->Professor->get($id);
        if ($this->Professor->delete($professor)) {
            $this->Flash->success(__('The professor has been deleted.'));
        } else {
            $this->Flash->error(__('The professor could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

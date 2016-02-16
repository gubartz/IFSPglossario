<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Turma Controller
 *
 * @property \App\Model\Table\TurmaTable $Turma */
class TurmaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
              'contain' => ['Disciplina', 'Professor']
            , 'sortWhitelist'=>['Disciplina.sigla', 'Professor.nome']
        ];

        $this->set('turma', $this->paginate($this->Turma));
        $this->set('_serialize', ['turma']);
    }

    /**
     * View method
     *
     * @param string|null $id Turma id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $turma = $this->Turma->get($id, [
            'contain' => ['Aluno']
        ]);
        $this->set('turma', $turma);
        $this->set('_serialize', ['turma']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $turma = $this->Turma->newEntity();
        if ($this->request->is('post')) {
            $turma = $this->Turma->patchEntity($turma, $this->request->data);
            if ($this->Turma->save($turma)) {
                $this->Flash->success(__('The turma has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The turma could not be saved. Please, try again.'));
            }
        }
        $aluno = $this->Turma->Aluno->find('list', ['limit' => 200]);

        $disciplinas  = TableRegistry::get('Disciplina')->find('list', ['keyField' => 'id_disciplina', 'valueField' => 'sigla']);
        $this->set('disciplinas', $disciplinas);

        $professores  = TableRegistry::get('Professor')->find('list', ['keyField' => 'id_professor', 'valueField' => 'nome']);
        $this->set('professores', $professores);        

        $alunos  = TableRegistry::get('Aluno')->find('list', ['keyField' => 'id_aluno', 'valueField' => 'nome']);
        $this->set('alunos', $alunos);     

        $semestres = array(1=> 1, 2 => 2);
        $anos      = array_combine(range(date('Y'), date('Y') + 5), range(date('Y'), date('Y') + 5));

        $this->set('semestres', $semestres);
        $this->set('anos', $anos);

        $this->set(compact('turma', 'aluno'));
        $this->set('_serialize', ['turma']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Turma id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $turma = $this->Turma->get($id, [
            'contain' => ['Aluno', 'Professor', 'Disciplina']
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $turma = $this->Turma->patchEntity($turma, $this->request->data);
            if ($this->Turma->save($turma)) {
                $this->Flash->success(__('The turma has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The turma could not be saved. Please, try again.'));
            }
        }
        $disciplina = $this->Turma->Disciplina->find('list', [ 'keyField' => 'id_disciplina'
                                                              , 'valueField' => 'sigla'

            ]);

        $aluno = $this->Turma->Aluno->find('list', [ 'keyField' => 'id_aluno'
                                                   , 'valueField' => 'nome'

            ]);
        $professor = $this->Turma->Professor->find('list', [ 'keyField' => 'id_professor'
                                                           , 'valueField' => 'nome'

            ]);

        $this->set(compact('turma', 'aluno', 'professor', 'disciplina'));
        $this->set('_serialize', ['turma']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Turma id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $turma = $this->Turma->get($id);
        if ($this->Turma->delete($turma)) {
            $this->Flash->success(__('The turma has been deleted.'));
        } else {
            $this->Flash->error(__('The turma could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

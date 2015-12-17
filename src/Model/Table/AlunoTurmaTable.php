<?php
namespace App\Model\Table;

use App\Model\Entity\AlunoTurma;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AlunoTurma Model
 *
 */
class AlunoTurmaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('aluno_turma');
        $this->displayField('id_aluno');
        $this->primaryKey(['id_aluno', 'id_turma']);

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id_aluno', 'valid', ['rule' => 'numeric'])            ->allowEmpty('id_aluno', 'create');
        $validator
            ->add('id_turma', 'valid', ['rule' => 'numeric'])            ->allowEmpty('id_turma', 'create');
        return $validator;
    }
}

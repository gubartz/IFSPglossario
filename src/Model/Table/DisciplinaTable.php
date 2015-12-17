<?php
namespace App\Model\Table;

use App\Model\Entity\Disciplina;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Disciplina Model
 *
 */
class DisciplinaTable extends Table
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

        $this->table('disciplina');
        $this->displayField('id_disciplina');
        $this->primaryKey('id_disciplina');

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
            ->add('id_disciplina', 'valid', ['rule' => 'numeric'])            ->allowEmpty('id_disciplina', 'create');
        $validator
            ->requirePresence('sigla', 'create')            ->notEmpty('sigla');
        $validator
            ->requirePresence('descricao', 'create')            ->notEmpty('descricao');
        $validator
            ->add('id_curso', 'valid', ['rule' => 'numeric'])            ->requirePresence('id_curso', 'create')            ->notEmpty('id_curso');
        return $validator;
    }
}

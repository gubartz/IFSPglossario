<?php
namespace App\Model\Table;

use App\Model\Entity\Curso;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Curso Model
 *
 */
class CursoTable extends Table
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

        $this->table('curso');
        $this->displayField('id_curso');
        $this->primaryKey('id_curso');

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
            ->add('id_curso', 'valid', ['rule' => 'numeric'])            ->allowEmpty('id_curso', 'create');
        $validator
            ->requirePresence('descricao', 'create')            ->notEmpty('descricao');
        return $validator;
    }
}

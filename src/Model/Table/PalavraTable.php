<?php
namespace App\Model\Table;

use App\Model\Entity\Palavra;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Palavra Model
 *
 */
class PalavraTable extends Table
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

        $this->table('palavra');
        $this->displayField('id_palavra');
        $this->primaryKey('id_palavra');

        $this->belongsTo('Aluno', ['foreignKey' => 'id_aluno']);

        $this->belongsTo('Idioma', ['foreignKey' => 'id_idioma']);

        //fix para pegar o Idioma no Join com Glossario e Palavra
        $this->belongsTo('Idioma2', ['foreignKey' => 'id_idioma', 'className' => 'Idioma']);
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
            ->add('id_palavra', 'valid', ['rule' => 'numeric'])            ->allowEmpty('id_palavra', 'create');
        $validator
            ->requirePresence('texto', 'create')            ->notEmpty('texto');
        $validator
            ->add('id_idioma', 'valid', ['rule' => 'numeric'])            ->requirePresence('id_idioma', 'create')            ->notEmpty('id_idioma');
        $validator
            ->add('id_aluno', 'valid', ['rule' => 'numeric'])            ->requirePresence('id_aluno', 'create')            ->notEmpty('id_aluno');
        $validator
            ->add('id_turma', 'valid', ['rule' => 'numeric'])            ->requirePresence('id_turma', 'create')            ->notEmpty('id_turma');
        $validator
            ->add('data_cadastro', 'valid', ['rule' => 'datetime'])            ->allowEmpty('data_cadastro');
        return $validator;
    }
}

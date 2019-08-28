<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alcaldias Model
 *
 * @method \App\Model\Entity\Alcaldia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Alcaldia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Alcaldia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alcaldia|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alcaldia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alcaldia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Alcaldia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alcaldia findOrCreate($search, callable $callback = null, $options = [])
 */
class AlcaldiasTable extends Table
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

        $this->setTable('alcaldias');
        $this->setDisplayField('id_alcaldias');
        $this->setPrimaryKey('id_alcaldias');
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
            ->integer('id_alcaldias')
            ->allowEmptyString('id_alcaldias', null, 'create');

        $validator
            ->scalar('alcaldia')
            ->maxLength('alcaldia', 45)
            ->requirePresence('alcaldia', 'create')
            ->notEmptyString('alcaldia');

        return $validator;
    }
}

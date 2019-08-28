<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ParlamentoJuvenil Model
 *
 * @method \App\Model\Entity\ParlamentoJuvenil get($primaryKey, $options = [])
 * @method \App\Model\Entity\ParlamentoJuvenil newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ParlamentoJuvenil[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ParlamentoJuvenil|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ParlamentoJuvenil saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ParlamentoJuvenil patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ParlamentoJuvenil[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ParlamentoJuvenil findOrCreate($search, callable $callback = null, $options = [])
 */
class ParlamentoJuvenilTable extends Table
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

        $this->setTable('parlamento_juvenil');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 145)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellido_paterno')
            ->maxLength('apellido_paterno', 145)
            ->requirePresence('apellido_paterno', 'create')
            ->notEmptyString('apellido_paterno');

        $validator
            ->scalar('apellido_materno')
            ->maxLength('apellido_materno', 145)
            ->requirePresence('apellido_materno', 'create')
            ->notEmptyString('apellido_materno');

        $validator
            ->integer('edad')
            ->requirePresence('edad', 'create')
            ->notEmptyString('edad');

        $validator
            ->boolean('residente')
            ->allowEmptyString('residente');

        $validator
            ->boolean('originario')
            ->allowEmptyString('originario');

        $validator
            ->scalar('alcaldia')
            ->maxLength('alcaldia', 145)
            ->requirePresence('alcaldia', 'create')
            ->notEmptyString('alcaldia');

        $validator
            ->scalar('correo_electronico')
            ->maxLength('correo_electronico', 145)
            ->allowEmptyString('correo_electronico');

        $validator
            ->scalar('numero_telefonico')
            ->maxLength('numero_telefonico', 145)
            ->allowEmptyString('numero_telefonico');

        $validator
            ->boolean('sociedad_civil')
            ->allowEmptyString('sociedad_civil');

        $validator
            ->scalar('cual_sociedad')
            ->maxLength('cual_sociedad', 145)
            ->allowEmptyString('cual_sociedad');

        $validator
            ->boolean('estudiante')
            ->allowEmptyString('estudiante');

        $validator
            ->boolean('secundaria')
            ->allowEmptyString('secundaria');

        $validator
            ->boolean('medio_superior')
            ->allowEmptyString('medio_superior');

        $validator
            ->boolean('superior')
            ->allowEmptyString('superior');

        $validator
            ->scalar('institucion')
            ->maxLength('institucion', 145)
            ->allowEmptyString('institucion');

        $validator
            ->scalar('motivos')
            ->allowEmptyString('motivos');

        $validator
            ->boolean('ejercicios')
            ->allowEmptyString('ejercicios');

        $validator
            ->scalar('ejer_cuales')
            ->maxLength('ejer_cuales', 145)
            ->allowEmptyString('ejer_cuales');

        $validator
            ->scalar('gp1')
            ->maxLength('gp1', 145)
            ->allowEmptyString('gp1');

        $validator
            ->scalar('gp2')
            ->maxLength('gp2', 145)
            ->allowEmptyString('gp2');

        $validator
            ->scalar('gp3')
            ->maxLength('gp3', 145)
            ->allowEmptyString('gp3');

        $validator
            ->scalar('com1')
            ->maxLength('com1', 145)
            ->allowEmptyString('com1');

        $validator
            ->scalar('com2')
            ->maxLength('com2', 145)
            ->allowEmptyString('com2');

        $validator
            ->scalar('com3')
            ->maxLength('com3', 145)
            ->allowEmptyString('com3');

        $validator
            ->boolean('discapacidad')
            ->allowEmptyString('discapacidad');

        $validator
            ->scalar('dis_cual')
            ->maxLength('dis_cual', 145)
            ->allowEmptyString('dis_cual');

        return $validator;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MeritoJuvenil Model
 *
 * @method \App\Model\Entity\MeritoJuvenil get($primaryKey, $options = [])
 * @method \App\Model\Entity\MeritoJuvenil newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MeritoJuvenil[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MeritoJuvenil|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MeritoJuvenil saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MeritoJuvenil patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MeritoJuvenil[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MeritoJuvenil findOrCreate($search, callable $callback = null, $options = [])
 */
class MeritoJuvenilTable extends Table
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

        $this->setTable('merito_juvenil');
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
            ->boolean('individual')
            ->allowEmptyString('individual');

        $validator
            ->boolean('colectiva')
            ->allowEmptyString('colectiva');

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 250)
            ->requirePresence('nombres', 'create')
            ->notEmptyString('nombres');

        $validator
            ->scalar('apellido_paterno')
            ->maxLength('apellido_paterno', 150)
            ->requirePresence('apellido_paterno', 'create')
            ->notEmptyString('apellido_paterno');

        $validator
            ->scalar('apellido_materno')
            ->maxLength('apellido_materno', 45)
            ->requirePresence('apellido_materno', 'create')
            ->notEmptyString('apellido_materno');

        $validator
            ->integer('edad')
            ->requirePresence('edad', 'create')
            ->notEmptyString('edad');

        $validator
            ->date('fecha_nacimiento')
            ->requirePresence('fecha_nacimiento', 'create')
            ->notEmptyDate('fecha_nacimiento');

        $validator
            ->boolean('residente')
            ->requirePresence('residente', 'create')
            ->notEmptyString('residente');

        $validator
            ->boolean('originario')
            ->requirePresence('originario', 'create')
            ->notEmptyString('originario');

        $validator
            ->scalar('alcaldia')
            ->maxLength('alcaldia', 150)
            ->requirePresence('alcaldia', 'create')
            ->notEmptyString('alcaldia');

        $validator
            ->scalar('colonia')
            ->maxLength('colonia', 150)
            ->requirePresence('colonia', 'create')
            ->notEmptyString('colonia');

        $validator
            ->scalar('calle')
            ->maxLength('calle', 150)
            ->requirePresence('calle', 'create')
            ->notEmptyString('calle');

        $validator
            ->scalar('codigo_postal')
            ->maxLength('codigo_postal', 45)
            ->requirePresence('codigo_postal', 'create')
            ->notEmptyString('codigo_postal');

        $validator
            ->scalar('telefono_casa')
            ->maxLength('telefono_casa', 45)
            ->allowEmptyString('telefono_casa');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 45)
            ->allowEmptyString('celular');

        $validator
            ->scalar('otro')
            ->maxLength('otro', 45)
            ->allowEmptyString('otro');

        $validator
            ->scalar('correo_electronico')
            ->maxLength('correo_electronico', 150)
            ->requirePresence('correo_electronico', 'create')
            ->notEmptyString('correo_electronico');

        $validator
            ->boolean('option1')
            ->allowEmptyString('option1');

        $validator
            ->boolean('option2')
            ->allowEmptyString('option2');

        $validator
            ->boolean('option3')
            ->allowEmptyString('option3');

        $validator
            ->boolean('option4')
            ->allowEmptyString('option4');

        $validator
            ->boolean('option5')
            ->allowEmptyString('option5');

        $validator
            ->boolean('option6')
            ->allowEmptyString('option6');

        $validator
            ->boolean('option7')
            ->allowEmptyString('option7');

        $validator
            ->boolean('option8')
            ->allowEmptyString('option8');

        $validator
            ->boolean('doc1')
            ->allowEmptyString('doc1');

        $validator
            ->boolean('doc2')
            ->allowEmptyString('doc2');

        $validator
            ->boolean('doc3')
            ->allowEmptyString('doc3');

        $validator
            ->boolean('doc4')
            ->allowEmptyString('doc4');

        $validator
            ->boolean('doc5')
            ->allowEmptyString('doc5');

        $validator
            ->boolean('doc6')
            ->allowEmptyString('doc6');

        $validator
            ->boolean('doc7')
            ->allowEmptyString('doc7');

        $validator
            ->boolean('doc8')
            ->allowEmptyString('doc8');

        return $validator;
    }
}

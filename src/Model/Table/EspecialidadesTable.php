<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Especialidades Model
 *
 * @method \App\Model\Entity\Especialidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Especialidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Especialidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Especialidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Especialidade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Especialidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Especialidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Especialidade findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EspecialidadesTable extends Table
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

        $this->setTable('especialidades');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

//        $this->addBehavior('Timestamp');

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'photo' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'photo_dir', // defaults to `dir`
                    'size' => 'photo_size', // defaults to `size`
                    'type' => 'photo_type', // defaults to `type`
                ],
            ],
        ]);
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('especialidade')
            ->maxLength('especialidade', 100)
            ->allowEmptyString('especialidade');

        $validator
                   ->allowEmptyString('photo');


        return $validator;
    }
}

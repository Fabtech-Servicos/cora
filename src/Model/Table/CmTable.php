<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cm Model
 *
 * @method \App\Model\Entity\Cm get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cm newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cm|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cm saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cm[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cm findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CmTable extends Table
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

        $this->setTable('cm');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->scalar('missao')
            ->allowEmptyString('missao');

        $validator
            ->scalar('visao')
            ->allowEmptyString('visao');

        $validator
            ->scalar('valor')
            ->allowEmptyString('valor');

        $validator
            ->scalar('politica')
            ->allowEmptyString('politica');

        $validator
            ->scalar('sobre')
            ->allowEmptyString('sobre');

        $validator
            ->allowEmptyString('photo');



        return $validator;
    }
}

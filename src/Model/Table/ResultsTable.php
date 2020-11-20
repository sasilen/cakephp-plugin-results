<?php
declare(strict_types=1);

namespace Sasilen\Results\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Results Model
 *
 * @property \Results\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \Results\Model\Entity\Result newEmptyEntity()
 * @method \Results\Model\Entity\Result newEntity(array $data, array $options = [])
 * @method \Results\Model\Entity\Result[] newEntities(array $data, array $options = [])
 * @method \Results\Model\Entity\Result get($primaryKey, $options = [])
 * @method \Results\Model\Entity\Result findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \Results\Model\Entity\Result patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Results\Model\Entity\Result[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \Results\Model\Entity\Result|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Results\Model\Entity\Result saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Results\Model\Entity\Result[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \Results\Model\Entity\Result[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \Results\Model\Entity\Result[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \Results\Model\Entity\Result[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ResultsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('results');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'className' => 'Results.Users',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->notEmptyString('id');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('firstname')
            ->maxLength('firstname', 255)
            ->requirePresence('firstname', 'create')
            ->notEmptyString('firstname');

        $validator
            ->scalar('surname')
            ->maxLength('surname', 255)
            ->requirePresence('surname', 'create')
            ->notEmptyString('surname');

        $validator
            ->scalar('club')
            ->maxLength('club', 255)
            ->requirePresence('club', 'create')
            ->notEmptyString('club');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('race')
            ->maxLength('race', 255)
            ->allowEmptyString('race');

        $validator
            ->scalar('league')
            ->maxLength('league', 255)
            ->allowEmptyString('league');

        $validator
            ->numeric('distance')
            ->allowEmptyString('distance');

        $validator
            ->time('time')
            ->allowEmptyTime('time');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 1)
            ->allowEmptyString('gender');

        $validator
            ->date('birthdate')
            ->allowEmptyDate('birthdate');

        $validator
            ->integer('agegroup')
            ->allowEmptyString('agegroup');

        $validator
            ->integer('ranking')
            ->allowEmptyString('ranking');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}

<?php
namespace Results\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Results Model
 *
 * @property \Results\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \Results\Model\Entity\Result get($primaryKey, $options = [])
 * @method \Results\Model\Entity\Result newEntity($data = null, array $options = [])
 * @method \Results\Model\Entity\Result[] newEntities(array $data, array $options = [])
 * @method \Results\Model\Entity\Result|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Results\Model\Entity\Result patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Results\Model\Entity\Result[] patchEntities($entities, array $data, array $options = [])
 * @method \Results\Model\Entity\Result findOrCreate($search, callable $callback = null, $options = [])
 */
class ResultsTable extends Table
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

        $this->setTable('results');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'className' => 'Results.Users'
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('firstname')
            ->maxLength('firstname', 255)
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname');

        $validator
            ->scalar('surname')
            ->maxLength('surname', 255)
            ->requirePresence('surname', 'create')
            ->notEmpty('surname');

        $validator
            ->scalar('club')
            ->maxLength('club', 255)
            ->requirePresence('club', 'create')
            ->notEmpty('club');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('race')
            ->maxLength('race', 255)
            ->allowEmpty('race');

        $validator
            ->scalar('league')
            ->maxLength('league', 255)
            ->allowEmpty('league');

        $validator
            ->numeric('distance')
            ->allowEmpty('distance');

        $validator
            ->time('time')
            ->allowEmpty('time');

        $validator
            ->date('date')
            ->allowEmpty('date');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 1)
            ->allowEmpty('gender');

        $validator
            ->date('birthdate')
            ->allowEmpty('birthdate');

        $validator
            ->integer('agegroup')
            ->allowEmpty('agegroup');

        $validator
            ->integer('ranking')
            ->allowEmpty('ranking');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
//        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}

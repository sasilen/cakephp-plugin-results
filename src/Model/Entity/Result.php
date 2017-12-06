<?php
namespace Results\Model\Entity;

use Cake\ORM\Entity;

/**
 * Result Entity
 *
 * @property int $id
 * @property string $name
 * @property string $firstname
 * @property string $surname
 * @property string $club
 * @property string $email
 * @property string $race
 * @property string $league
 * @property float $distance
 * @property \Cake\I18n\FrozenTime $time
 * @property \Cake\I18n\FrozenDate $date
 * @property string $gender
 * @property \Cake\I18n\FrozenDate $birthdate
 * @property int $agegroup
 * @property int $ranking
 * @property string $user_id
 *
 * @property \Results\Model\Entity\User $user
 */
class Result extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'firstname' => true,
        'surname' => true,
        'club' => true,
        'email' => true,
        'race' => true,
        'league' => true,
        'distance' => true,
        'time' => true,
        'date' => true,
        'gender' => true,
        'birthdate' => true,
        'agegroup' => true,
        'ranking' => true,
        'user_id' => true,
        'user' => true
    ];
}

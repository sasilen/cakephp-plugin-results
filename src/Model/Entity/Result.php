<?php
declare(strict_types=1);

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
 * @property string|null $email
 * @property string|null $race
 * @property string|null $league
 * @property float|null $distance
 * @property \Cake\I18n\FrozenTime|null $time
 * @property \Cake\I18n\FrozenDate|null $date
 * @property string|null $gender
 * @property \Cake\I18n\FrozenDate|null $birthdate
 * @property int|null $agegroup
 * @property int|null $ranking
 * @property string|null $user_id
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
        'id' => true,
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
        'user' => true,
    ];
}

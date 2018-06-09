<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property int $school_id
 * @property string $name
 * @property string $username
 * @property string $email
 * @property string $password
 *
 * @property \App\Model\Entity\School $school
 * @property \App\Model\Entity\Score[] $scores
 * @property \App\Model\Entity\Trophy[] $trophies
 */
class User extends Entity
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
        'school_id' => true,
        'name' => true,
        'username' => true,
        'email' => true,
        'password' => true,
        'school' => true,
        'scores' => true,
        'trophies' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    /**
     * _setPassword Set password
     * @param string $value
     */
    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
}

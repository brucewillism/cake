<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $role
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $id_users
 *
 * @property \App\Model\Entity\Article[] $articles
 * @property \App\Model\Entity\Produto[] $produto
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
        'username' => true,
        'password' => true,
        'role' => true,
        'created' => true,
        'modified' => true,
        'id_users' => true,
        'articles' => true,
        'produto' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
    protected function _setPassword($password)
    {
    return (new DefaultPasswordHasher)->hash($password);
    }
}

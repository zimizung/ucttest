<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property int $role_id
 * @property int|null $security_question_id
 * @property string|null $security_question_answer
 * @property \Cake\I18n\FrozenDate|null $last_login
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $created_by
 * @property int|null $modified_by
 * @property bool $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 * @property string $reset_password_yn
 * @property \Cake\I18n\FrozenTime|null $passwordexpired
 * @property string $passwordexpiredyn
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\SecurityQuestion $security_question
 * @property \App\Model\Entity\Organisation[] $organisations
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
        'email' => true,
        'role_id' => true,
        'security_question_id' => true,
        'security_question_answer' => true,
        'last_login' => true,
        'created' => true,
        'modified' => true,
        'created_by' => true,
        'modified_by' => true,
        'deleted' => true,
        'deleted_date' => true,
        'reset_password_yn' => true,
        'passwordexpired' => true,
        'passwordexpiredyn' => true,
        'role' => true,
        'security_question' => true,
        'organisations' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}

<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'username' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'role_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'security_question_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'security_question_answer' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'last_login' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modified_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'deleted' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'deleted_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'reset_password_yn' => ['type' => 'string', 'length' => 1, 'fixed' => true, 'null' => false, 'default' => 'N', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'passwordexpired' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => '2020-10-22 13:49:36', 'comment' => '', 'precision' => null],
        'passwordexpiredyn' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => 'N', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_user_roles' => ['type' => 'index', 'columns' => ['role_id'], 'length' => []],
            'fk_users_users_c' => ['type' => 'index', 'columns' => ['created_by'], 'length' => []],
            'fk_users_users_m' => ['type' => 'index', 'columns' => ['modified_by'], 'length' => []],
            'fk_users_security_question' => ['type' => 'index', 'columns' => ['security_question_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'u_email' => ['type' => 'unique', 'columns' => ['email'], 'length' => []],
            'fk_user_roles' => ['type' => 'foreign', 'columns' => ['role_id'], 'references' => ['roles', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_users_security_question' => ['type' => 'foreign', 'columns' => ['security_question_id'], 'references' => ['security_questions', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_users_users_c' => ['type' => 'foreign', 'columns' => ['created_by'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_users_users_m' => ['type' => 'foreign', 'columns' => ['modified_by'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'role_id' => 1,
                'security_question_id' => 1,
                'security_question_answer' => 'Lorem ipsum dolor sit amet',
                'last_login' => '2021-10-07',
                'created' => '2021-10-07 06:35:54',
                'modified' => '2021-10-07 06:35:54',
                'created_by' => 1,
                'modified_by' => 1,
                'deleted' => 1,
                'deleted_date' => '2021-10-07 06:35:54',
                'reset_password_yn' => 'L',
                'passwordexpired' => '2021-10-07 06:35:54',
                'passwordexpiredyn' => 'L',
            ],
        ];
        parent::init();
    }
}

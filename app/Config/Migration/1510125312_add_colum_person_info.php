<?php
class AddColumPersonInfo extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'add_colum_person_info';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
            'create_field' => array(
                'customers' => array(
                    'birthday' => array(
                        'type' => 'datetime',
                        'null'    => true,
                        'default' => null
                    ),
                    'number' => array(
                        'type' => 'text',
                        'null'    => true,
                        'default' => null
                    ),
                    'mobile_phone1' => array(
                        'type' => 'text',
                        'null'    => true,
                        'default' => null
                    ),
                    'mobile_phone2' => array(
                        'type' => 'text',
                        'null'    => true,
                        'default' => null
                    ),
                    'mobile_phone3' => array(
                        'type' => 'text',
                        'null'    => true,
                        'default' => null
                    ),
                    'home_phone1' => array(
                        'type' => 'text',
                        'null'    => true,
                        'default' => null
                    ),
                    'home_phone2' => array(
                        'type' => 'text',
                        'null'    => true,
                        'default' => null
                    ),
                    'home_phone3' => array(
                        'type' => 'text',
                        'null'    => true,
                        'default' => null
                    ),
                    'email' => array(
                        'type' => 'text',
                        'null'    => true,
                        'default' => null
                    )
                )
            )
		),
		'down' => array(
            'drop_field' => array(
                'birthday',
                'number',
                'mobile_phone1',
                'mobile_phone2',
                'mobile_phone3',
                'home_phone1',
                'home_phone2',
                'home_phone3',
                'email'
            ),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		return true;
	}
}

<?php
class Customers extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'customers';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
            'create_table' => array(
                'customers' => array(
                    'id' => array(
                        'type'    =>'integer',
                        'null'    => false,
                        'default' => null,
                        'length'  => 11,
                        'key'     => 'primary'
                    ),
                    'last_name' => array(
                        'type'    =>'text',
                        'null'    => true,
                        'default' => null
                    ),
                    'first_name' => array(
                        'type'    =>'text',
                        'null'    => true,
                        'default' => null
                    ),
                    'last_name_kana' => array(
                        'type'    =>'text',
                        'null'    => true,
                        'default' => null
                    ),
                    'first_name_kana' => array(
                        'type'    =>'text',
                        'null'    => true,
                        'default' => null
                    ),
                    'gender' => array(
                        'type'    =>'integer',
                        'null'    => true,
                        'default' => null
                    ),
                )
            )

    ),
		'down' => array(
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

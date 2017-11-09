<?php
class AddColumCategory extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'add_colum_category_';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
            'create_field' => array(
                'customers' => array(
                    'customer_category_id' => array(
                        'type' => 'integer',
                        'null'    => true,
                        'default' => null
                    )
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

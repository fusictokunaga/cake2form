<?php
class CreateCustomerCategories extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'create_customer_categories';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
            'create_table' => array(
                'customer_categories' => array(
                    'id' => array(
                        'type'    =>'integer',
                        'null'    => false,
                        'default' => null,
                        'length'  => 11,
                        'key'     => 'primary'
                    ),
                    'name' => array(
                        'type'    =>'text',
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
        $CustomerCategory = ClassRegistry::init('CustomerCategory');
        if ($direction === 'up') {
            // add 2 records to statues table
            $data[0]['CustomerCategory']['id'] = '1';
            $data[0]['CustomerCategory']['name'] = '初回申込';
            $data[1]['CustomerCategory']['id'] = '2';
            $data[1]['CustomerCategory']['name'] = '2回目申込';
            $data[2]['CustomerCategory']['id'] = '3';
            $data[2]['CustomerCategory']['name'] = '3回以上申込';
            $CustomerCategory->create();
            if ($CustomerCategory->saveAll($data)) {
                $this->callback->out('statuses table has been initialized');
            }
        } elseif ($direction === 'down') {
            // do more work here
        }
        return true;
	}
}

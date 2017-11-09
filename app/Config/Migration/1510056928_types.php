<?php
class Types extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'types';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
            'create_table' => array(
                'types' => array(
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
        $Type = ClassRegistry::init('Type');
        if ($direction === 'up') {
            // add 2 records to statues table
            $data[0]['Type']['id'] = '1';
            $data[0]['Type']['name'] = '男';
            $data[1]['Type']['id'] = '2';
            $data[1]['Type']['name'] = '女';
            $Type->create();
            if ($Type->saveAll($data)) {
                $this->callback->out('statuses table has been initialized');
            }
        } elseif ($direction === 'down') {
            // do more work here
        }
        return true;
	}
}

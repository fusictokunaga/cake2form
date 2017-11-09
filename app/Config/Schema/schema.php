<?php 
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $customer_categories = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

	public $customers = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'last_name' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'first_name' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'last_name_kana' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'first_name_kana' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'birthday' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'number' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'mobile_phone1' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'mobile_phone2' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'mobile_phone3' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'home_phone1' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'home_phone2' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'home_phone3' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'email' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

	public $schema_migrations = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'class' => array('type' => 'string', 'null' => false, 'default' => null),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

	public $types = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

}

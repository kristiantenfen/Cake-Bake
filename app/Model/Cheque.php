<?php
App::uses('AppModel', 'Model');
/**
 * Cheque Model
 *
 */
class Cheque extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'data_vencimento';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'valor' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'data_vencimento' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}

<?php
/**
 * Base class for object representations of database rows
 *
 * @package Caldera_Forms Modified by QuantumCloud
 * @author    Josh Pollock <Josh@CalderaWP.com>
 * @license   GPL-2.0+
 * @link
 * @copyright 2016 CalderaWP LLC
 */
abstract class Qcformbuilder_Forms_Entry_Object extends Qcformbuilder_Forms_Object {


	/**
	 * @inheritdoc
	 */
	protected function get_prefix(){
		return 'entry';
	}

}

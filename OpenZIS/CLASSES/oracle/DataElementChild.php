<?php

/**
 * Zend_Db_Table based simpe ORM for the data_element_child table
 * Autogenerated by db.php:
 *   timestamp: Sat, 13 Nov 10 15:24:19 -0500
 *   database:  openzis
 *   host:      192.168.1.22
 * 
 * @version $Id$
 */
class DataElementChild extends Zend_Db_Table
{
    /**
     * Table name
     * 
     * @var string
     */
#    protected $_schema = 'OPENZIS';
	protected $_name = 'DATA_ELEMENT_CHILD';

    /**
     * Primary key field
     * 
     * @var string
     */
    protected $_primary = 'data_element_child_id';

    /**
     * List of columns
     * 
     * @var array
     */
    protected $_cols = array(
		'data_element_child_id'=>'data_element_child_id', 
		'parent_element_id'=>'parent_element_id', 
		'child_element_id'=>'child_element_id'
	
    );
}
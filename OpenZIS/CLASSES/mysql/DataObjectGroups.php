<?php

class DataObjectGroups extends Zend_Db_Table
{
    protected $_schema = DBSCHEMA;
    protected $_name = 'data_object_group';
    protected $_primary = 'group_id';
    protected $_cols = array(
	'group_id'=>'group_id', 
	'group_desc'=>'group_desc', 
	'version_id'=>'version_id'
    );
}
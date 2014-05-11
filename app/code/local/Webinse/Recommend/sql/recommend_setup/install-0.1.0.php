<?php

$installer = $this;
$tableName = $installer->getTable("recommend/resource_table");

$installer->startSetup();

$table = $installer->getConnection()
        ->newTable($tableName)
        ->addColumn('recommend_id', Varien_Db_Ddl_Table::TYPE_INTEGER, NULL, array(
        'identity' => true,
        'nullable' => false,
        'primary' => true
        ))
    ->addColumn('entity_id', Varien_Db_Ddl_Table::TYPE_INTEGER, NULL, array(
        'nullable' => false
        ))
    ->addColumn('sort_order', Varien_Db_Ddl_Table::TYPE_INTEGER, NULL, array(
        'nullable' => false
        ));

$installer->getConnection()->createTable($table);
$installer->endSetup();
<?php

class DataTable extends CActiveRecord 
{
  protected tableId;
  
  public function tableName() {
    return "{{data_table}}".$this->tableId;
  }
  
  public function __construct($config=[], $tableId) {
    $this->tableId = $tableId;
    parent::__construct($config);
  }
}

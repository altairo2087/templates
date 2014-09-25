<?php

class DataTable extends CActiveRecord 
{
  // общие свойства всех DATA_TABLE таблиц
}

// таблица 43
class DataTable43 extends DataTable {
  
  protected static $tableId;
  
  public static function setTableId($id) {
    self::$tableId = $id;
  }
  
  public static function tableName() {
    return "{{data".self::_tableId."}}";
  }
}

class DataTableFactory
{
  public function getDataModel($id) {
    return new "DataTable".$id;
  }
}


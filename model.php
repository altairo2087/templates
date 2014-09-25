<?php

class DataTable extends CActiveRecord 
{
  // здесь идентификатор таблицы данных
  protected tableId;
  
  // переопределяем конструктор, 
  // добавляя установку идентификатора таблицы данных
  public function __construct($config=[], $tableId) {
    $this->tableId = $tableId;
    parent::__construct($config);
  }
  
  // переопределяем функцию, которая возвращает имя таблицы данных
  public function tableName() {
    return "{{data_table}}".$this->tableId;
  }
}

$table = new DataTable(array(), 43);
echo $table->tableName(); // cb_data43

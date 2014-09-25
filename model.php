<?php

class DataTable extends CActiveRecord 
{
  // здесь идентификатор таблицы данных
  protected $_tableId;
  
  // переопределяем конструктор AR, 
  // добавляем установку идентификатора таблицы данных
  public function __construct($tableId, $config=[]) {
    if (!$tableId)
      throw CException(500, "Неверный идентификатор таблицы");
    
    $this->_tableId = $tableId;
    // родной конструктор AR
    parent::__construct($config);
  }
  
  // переопределяем функцию, которая возвращает имя таблицы данных
  public function tableName() {
    return "{{data}}".$this->_tableId;
  }
}

$table = new DataTable(43);
echo $table->tableName(); // cb_data43

<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 22.04.2018
 * Time: 13:41
 */
class DataBaseOperations extends DataBaseConnect
{
    private function get_columns($table){
        $con = $this->_connection;
        $query = $con->query("SELECT * FROM " . $table);
        $total_col = $query->columnCount();
        for ($col = 0; $col < $total_col; $col++) {
            $meta = $query->getColumnMeta($col);
            $columns[] = $meta['name'];
        }
        return $columns;
    }
    private function prepare_set($table){
        $columns = $this->get_columns($table);
        $set = " SET ";
        for ($col = 1; $col < count($columns); $col++){
            $set .=$columns[$col]."=:".$columns[$col];
            if($col != count($columns)-1) {
                $set .= ", ";
            }
        }
        return $set;
    }
    public  function get_count_record($table){
        $query = $this->_connection->prepare("SELECT count(*) as total FROM ".$table);
        $query -> execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
    public function get_record($table, $id)
    {
        $query = $this->_connection->prepare("SELECT * FROM " . $table . " WHERE id=" . $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (isset($result)) {
            return $result;
        } else {
            return $id;
        }

    }
    public function create ($table, $data){
        $query = $this->_connection->prepare("INSERT INTO ".$this->$table.$this->prepare_set($this->$table));
        $query -> execute($data);
    }
    public function read ($table){
        $query = $this->_connection->prepare("SELECT * FROM ".$this->$table.";");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $result=print_data::print_table($this->$table,$this->get_columns($this->$table),$result);
        return $result;
    }

}
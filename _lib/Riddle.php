<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 12.06.2018
 * Time: 19:04
 */

class Riddle
{
    private $riddle_id;
    private $riddle_record;
    private $db_connect;

    public function __construct(DataBaseOperations $db_connect)
    {
        $this -> db_connect = $db_connect;
        $this ->drawRiddle();
        $this->getRiddleRecord();
    }

    private function drawRiddle(){
        $this->riddle_id = rand(1,$this->db_connect->get_count_record('riddles'));
    }

    private function getRiddleRecord(){
        $this->riddle_record=$this->db_connect->get_record('riddles', $this->riddle_id);
    }

    public function getRiddle(){
        return $this->riddle_record['riddle'];
    }

    public function getAnswer(){
        return $this->riddle_record['answer'];
    }

}
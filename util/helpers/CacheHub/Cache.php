<?php

class Cache{

    private String $timeStamp;
    private String $invalidateTime;
    private $data;

    public function setTimeStamp($timeStamp){
        $this->timeStamp = $timeStamp;
    }

    public function getTimeStamp(){
        return $this->timeStamp;
    }

    public function setInvalidateTime($time){
        $this->invalidateTime = $time;
    }

    public function getInvalidateTime(){
        return $this->invalidateTime;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getData(){
        return $this->data;

    }

    public function __toString()
    {
        return '{
            "timeStamp": "'.$this->timeStamp .'",
            "invalidateTime": "'. $this->invalidateTime .'",
            "data": '. $this->data .'
        }';
    }
}
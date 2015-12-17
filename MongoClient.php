<?php

/**
 * Created by IntelliJ IDEA.
 * User: Fabi
 * Date: 16.12.2015
 * Time: 18:51
 */
class MongoClient
{
public function __construct ($server="mongodb://localhost:27017" , array $options = array("connect" => true), array $driver_options ) {

}
public  function close ($connection) {

}
    public function connect() {

}
    public function dropDB($db) {

    }
    public function __get($dbName) {

    }
    public static function getConnections() {

    }
    public function getHosts() {

    }
    public function getReadPreference() {

    }
    public function getWriteConcern() {

    }
    public function killCursor($server_hash,$id) {

    }
    public function listDBs() {

    }
    public function selectCollection($db,$collection) {

    }
    public function selectDB($name) {

    }
    public function setReadPreference($read_preference,$tags=null) {

    }
    public function setWriteConcern($w,$wtimeout=null) {

}
    public function __toString() {
        return "MongoClient";
    }

}
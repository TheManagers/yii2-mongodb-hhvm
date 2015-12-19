<?php

/**
 * Created by IntelliJ IDEA.
 * User: Fabi
 * Date: 16.12.2015
 * Time: 18:51
 */
use MongoDB\Client;

class MongoClient extends Client
{
    public function __construct($server = "mongodb://localhost:27017", array $options = array("connect" => true))
    {
        parent::__construct($server,$options);

    }

    public function getConnections()
    {
        return $this->__debugInfo()["manager"]->getServers();

    }

    public function getHosts()
    {

    }

    public function getReadPreference()
    {

    }

    public function getWriteConcern()
    {

    }

    public function killCursor($server_hash, $id)
    {

    }

    public function listDBs()
    {

    }

    public function selectCollection($db, $collection)
    {

    }

    public function selectDB($name)
    {
        return $this->selectDatabase($name);

    }

    public function setReadPreference($read_preference, $tags = null)
    {

    }

    public function setWriteConcern($w, $wtimeout = null)
    {

    }

    public function __toString()
    {
        return "MongoClient";
    }

}
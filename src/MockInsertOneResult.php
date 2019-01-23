<?php

namespace Helmich\MongoMock;

use MongoDB\InsertOneResult;

class MockInsertOneResult extends InsertOneResult
{
    private $insertedId;
    private $isAcknowledged;

    /** @noinspection PhpMissingParentConstructorInspection */
    public function __construct($insertedId, $isAcknowledged=true)
    {
        $this->insertedId = $insertedId;
        $this->acknowledged = $isAcknowledged;
    }

    public function getInsertedCount()
    {
        return 1;
    }

    public function getInsertedId()
    {
        return $this->insertedId;
    }

    public function isAcknowledged()
    {
        return $this->acknowledged;
    }

}
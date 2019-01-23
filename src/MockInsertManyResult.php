<?php

namespace Helmich\MongoMock;

use MongoDB\InsertManyResult;

class MockInsertManyResult extends InsertManyResult
{
    private $insertedIds;
    private $isAcknowledged;

    /**
     * @param array $insertedIds
     * @param bool $isAcknowledged
     */
    public function __construct(array $insertedIds, $isAcknowledged=true)
    {
        $this->insertedIds = $insertedIds;
        $this->acknowledged = $isAcknowledged;
    }

    public function getInsertedCount()
    {
        return count($this->insertedIds);
    }

    public function getInsertedIds()
    {
        return $this->insertedIds;
    }

    public function isAcknowledged()
    {
        return $this->acknowledged;
    }

}
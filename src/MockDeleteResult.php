<?php

namespace Helmich\MongoMock;

use MongoDB\DeleteResult;
use MongoDB\Driver\WriteResult;
use MongoDB\Exception\BadMethodCallException;

class MockDeleteResult extends DeleteResult
{

    protected $isAcknowledged;
    protected $deletedCount;

    public function __construct(bool $isAcknowledged, int $deletedCount)
    {
        $this->isAcknowledged = $isAcknowledged;
        $this->deletedCount = $deletedCount;
    }

    public function getDeletedCount()
    {
        if ($this->isAcknowledged) {
            return $this->deletedCount;
        }

        throw BadMethodCallException::unacknowledgedWriteResultAccess(__METHOD__);
    }

    public function isAcknowledged()
    {
        return $this->isAcknowledged;
    }

}
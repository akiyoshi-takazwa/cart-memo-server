<?php

namespace Packages\Domain\UserRate;

class UserRate
{
    /**
     * @var string
     */
    private $userId;

    /**
     * @var int
     */
    private $rateId;

    /**
     * @param string $userId
     * @param int $rateId
     */
    public function __construct(string $userId, int $rateId)
    {
        $this->userId = $userId;
        $this->rateId = $rateId;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'user_id' => $this->userId,
            'rate_id' => $this->rateId,
        ];
    }
}

<?php

namespace Packages\Domain\Rate;

class Rate
{
    /**
     * @var int
     */
    private $rate;

    /**
     * @param int $rate
     */
    public function __construct(int $rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'rate' => $this->rate,
        ];
    }
}

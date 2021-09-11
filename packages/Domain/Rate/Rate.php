<?php

namespace Packages\Domain\Rate;

class Rate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * @param float $rate
     */
    public function __construct(float $rate)
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

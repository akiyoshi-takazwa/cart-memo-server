<?php

namespace Packages\Domain\CubicCentimeter;

use Illuminate\Support\Collection;

interface CubicCentimeterRepositoryInterface
{
    /**
     * Get All
     * @return Collection
     */
    public function getNameAll();
}

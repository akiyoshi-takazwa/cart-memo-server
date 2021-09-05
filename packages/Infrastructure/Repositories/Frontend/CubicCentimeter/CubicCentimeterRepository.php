<?php

namespace Packages\Infrastructure\Repositories\Frontend\CubicCentimeter;


use Illuminate\Support\Collection;
use Packages\Domain\CubicCentimeter\CubicCentimeterRepositoryInterface;
use Packages\Infrastructure\EloquentModels\CubicCentimeter;

class CubicCentimeterRepository implements CubicCentimeterRepositoryInterface
{
    /**
     * @return Collection
     */
    public function getNameAll(): Collection
    {
        return CubicCentimeter::all()->pluck('name');
    }
}

<?php

namespace Packages\Infrastructure\Repositories\Frontend\Course;


use Illuminate\Support\Collection;
use Packages\Domain\Course\CourseRepositoryInterface;
use Packages\Infrastructure\EloquentModels\Course;

class CourseRepository implements CourseRepositoryInterface
{
    /**
     * @return Collection
     */
    public function getNameAll(): Collection
    {
        return Course::all()->pluck('name');
    }
}

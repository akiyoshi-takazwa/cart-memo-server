<?php

namespace Packages\Domain\Course;

use Illuminate\Support\Collection;

interface CourseRepositoryInterface
{
    /**
     * Get All
     * @return Collection
     */
    public function getAll();
}

<?php

namespace Packages\Domain\Memo;

interface MemoRepositoryInterface
{
    /**
     * create user.
     *
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * Get Memo of login user.
     *
     * @param string $userId
     * @return mixed
     */
    public function getTodayMemoOfAuth(string $userId);
}

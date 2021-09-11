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

    /**
     * Get Memo of login user by calender or cc or course.
     *
     * @param array $attributes
     * @param string $userId
     * @return mixed
     */
    public function searchMemoByLog(array $attributes, string $userId);
}

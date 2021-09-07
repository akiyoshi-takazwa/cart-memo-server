<?php

namespace Packages\Infrastructure\Repositories\Frontend\Memo;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Packages\Domain\Memo\Memo;
use Packages\Domain\Memo\MemoRepositoryInterface;
use Packages\Infrastructure\EloquentModels\Memo as MemoModel;
use Packages\Infrastructure\EloquentModels\UserProfile;

class MemoRepository implements MemoRepositoryInterface
{
    /**
     * @param array $attributes
     * @return MemoModel
     */
    public function create(array $attributes): MemoModel
    {
        $userProfile = new MemoModel($attributes);

        $userProfile->save();

        return MemoModel::find($attributes['id']);
    }

    /**
     * Get Memo of login user.
     *
     * @param string $userId
     * @return Collection
     */
    public function getTodayMemoOfAuth(string $userId) :Collection
    {
        return MemoModel::where('user_id', $userId)
            ->where('play_date', Carbon::now()->format('Y-m-d'))
            ->get();
    }
}

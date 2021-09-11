<?php

namespace Packages\Infrastructure\Repositories\Frontend\Memo;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Packages\Domain\Memo\MemoRepositoryInterface;
use Packages\Infrastructure\EloquentModels\Memo as MemoModel;

class MemoRepository implements MemoRepositoryInterface
{
    /**
     * @param array $attributes
     * @return MemoModel
     */
    public function create(array $attributes): MemoModel
    {
        $memo = new MemoModel($attributes);

        $memo->save();

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
            ->with(['courses', 'cubicCentimeters'])
            ->get();
    }

    /**
     * @param array $attributes
     * @param string $userId
     * @return Collection
     */
    public function searchMemoByLog(array $attributes, string $userId) :Collection
    {
        return MemoModel::where('user_id', $userId)
            ->where('play_date', $attributes['calendar'])
            ->where('cc_id', (int)$attributes['cc_id'])
            ->where('course_id', (int)$attributes['course_id'])
            ->with(['courses', 'cubicCentimeters'])
            ->get();
    }
}

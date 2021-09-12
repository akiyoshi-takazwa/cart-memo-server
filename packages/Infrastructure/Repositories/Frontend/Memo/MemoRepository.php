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
        $q = MemoModel::where('user_id', $userId)
            ->with(['courses', 'cubicCentimeters'])
            ->where('play_date', $attributes['calendar']);

        if((int)$attributes['cc_id'] !== 0){
            $q->where('cc_id', $attributes['cc_id']);
        }
        if((int)$attributes['course_id'] !== 0){
            $q->where('course_id', $attributes['course_id']);
        }

        return $q->get();
    }



    /**
     * @param array $attributes
     * @param string $userId
     * @return Collection
     */
    public function getMemosByAnalyzer(array $attributes, string $userId) :Collection
    {
        return MemoModel::where('user_id', $userId)
            ->with(['courses', 'cubicCentimeters'])
            ->whereBetween('play_date', [$attributes['start_date'], $attributes['end_date']])
            ->where('cc_id', $attributes['cc_id'])
            ->where('course_id', $attributes['course_id'])
            ->get();
    }
}

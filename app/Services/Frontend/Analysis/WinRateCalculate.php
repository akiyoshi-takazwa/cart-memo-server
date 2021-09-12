<?php


namespace App\Services\Frontend\Analysis;

use Illuminate\Support\Facades\Auth;
use Packages\Domain\Memo\MemoRepositoryInterface;

class WinRateCalculate
{
    /**
     * @var MemoRepositoryInterface
     */
    private $memoRepositoryInterface;

    public function __construct()
    {
        $this->memoRepositoryInterface = app(MemoRepositoryInterface::class);
    }

    /**
     * @param array $attributes
     * @return array
     */
    public function execute(array $attributes) :array
    {
        $memos = $this->memoRepositoryInterface
            ->getMemosByAnalyzer($attributes, Auth::id());

        $average = round($memos->avg('rank'), 2);

        $ranks = $memos->pluck('rank');
        $count = $ranks->count();
        $countBy = $ranks->countBy();

        $first = isset($countBy[1]) ? round($countBy[1]/$count * 100, 2) : '-';
        $second = isset($countBy[2]) ? round($countBy[2]/$count * 100, 2) : '-';
        $third = isset($countBy[3]) ? round($countBy[3]/$count * 100, 2) : '-';
        $fourth = isset($countBy[4]) ? round($countBy[4]/$count * 100, 2) : '-';
        $fifth = isset($countBy[5]) ? round($countBy[5]/$count * 100, 2) : '-';
        $sixth = isset($countBy[6]) ? round($countBy[6]/$count * 100, 2) : '-';
        $seventh = isset($countBy[7]) ? round($countBy[7]/$count * 100, 2) : '-';
        $eighth = isset($countBy[8]) ? round($countBy[8]/$count * 100, 2) : '-';
        $ninth = isset($countBy[9]) ? round($countBy[9]/$count * 100, 2) : '-';
        $tenth = isset($countBy[10]) ? round($countBy[10]/$count * 100, 2) : '-';
        $eleventh = isset($countBy[11]) ? round($countBy[11]/$count * 100, 2) : '-';
        $twelfth = isset($countBy[12]) ? round($countBy[12]/$count * 100, 2) : '-';

        return [
            'average'  => $average,
            'first'    => $first,
            'second'   => $second,
            'third'    => $third,
            'fourth'   => $fourth,
            'fifth'    => $fifth,
            'sixth'    => $sixth,
            'seventh'  => $seventh,
            'eighth'   => $eighth,
            'ninth'    => $ninth,
            'tenth'    => $tenth,
            'eleventh' => $eleventh,
            'twelfth'  => $twelfth,
        ];
    }
}

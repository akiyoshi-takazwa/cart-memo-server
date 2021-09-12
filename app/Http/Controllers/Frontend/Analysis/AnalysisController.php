<?php

namespace App\Http\Controllers\Frontend\Analysis;

use App\Http\Controllers\Controller;
use App\Services\Frontend\Analysis\WinRateCalculate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Packages\Domain\Course\CourseRepositoryInterface;
use Packages\Domain\CubicCentimeter\CubicCentimeterRepositoryInterface;
use Packages\Domain\Memo\MemoRepositoryInterface;
use Packages\Domain\Rank\Rank;

class AnalysisController extends Controller
{
    /**
     * @var CubicCentimeterRepositoryInterface
     */
    private $cubicCentimeterRepositoryInterface;
    /**
     * @var CourseRepositoryInterface
     */
    private $courseRepositoryInterface;

    /**
     * RegisteredUserController constructor.
     */
    public function __construct()
    {
        $this->cubicCentimeterRepositoryInterface = app(CubicCentimeterRepositoryInterface::class);
        $this->courseRepositoryInterface = app(CourseRepositoryInterface::class);
    }

    /**
     * @return view
     */
    public function index(Request $request)
    {
        $analyses = null;
        if($request->has('start_date') || $request->has('end_date') ||
            $request->has('course_id') || $request->has('cc_id'))
        {
            $request->validate([
                'start_date' => 'required|date|date_format:Y-m-d',
                'end_date'   => 'required|date|date_format:Y-m-d|after_or_equal:start_date',
                'course_id'  => 'required|integer|',
                'cc_id'      => 'required|integer|',
            ]);

            $searchArray = [
                'start_date' => $request->input('start_date'),
                'end_date'   => $request->input('end_date'),
                'course_id'  => $request->input('course_id'),
                'cc_id'      => $request->input('cc_id'),
            ];

            $analyses = app(WinRateCalculate::class)
                ->execute($searchArray);
        }

        $cubicCentimeters = $this->cubicCentimeterRepositoryInterface
            ->getAll();
        $courses = $this->courseRepositoryInterface
            ->getAll();
        $ranks = Rank::getRankAll();

        return view('frontend.analysis.index')
            ->with([
                'cubicCentimeters' => $cubicCentimeters,
                'courses'          => $courses,
                'ranks'            => $ranks,
                'analyses'         => $analyses,
            ]);
    }
}

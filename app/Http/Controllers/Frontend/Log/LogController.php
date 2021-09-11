<?php

namespace App\Http\Controllers\Frontend\Log;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Log\GetSearchLogRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Packages\Domain\Course\CourseRepositoryInterface;
use Packages\Domain\CubicCentimeter\CubicCentimeterRepositoryInterface;
use Packages\Domain\Memo\MemoRepositoryInterface;
use Packages\Domain\Rank\Rank;
use Packages\Domain\Rate\RateRepositoryInterface;

class LogController extends Controller
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
     * @var MemoRepositoryInterface
     */
    private $memoRepositoryInterface;

    /**
     * RegisteredUserController constructor.
     */
    public function __construct()
    {
        $this->cubicCentimeterRepositoryInterface = app(CubicCentimeterRepositoryInterface::class);
        $this->courseRepositoryInterface = app(CourseRepositoryInterface::class);
        $this->memoRepositoryInterface = app(MemoRepositoryInterface::class);
    }

    /**
     * @param Request $request
     * @return view
     */
    public function index(Request $request)
    {
        $memos = null;

        if($request->has('calendar') || $request->has('course_id') || $request->has('cc_id')){
            $request->validate([
                'calendar'  => 'nullable|date|date_format:Y-m-d',
                'course_id' => 'nullable|integer|exists:courses,id',
                'cc_id'     => 'nullable|integer|exists:cubic_centimeters,id',
            ]);

            $requestArray = [
                'calendar'  => $request->input('calendar'),
                'course_id' => $request->input('course_id'),
                'cc_id'     => $request->input('cc_id'),
            ];

            $memos = $this->memoRepositoryInterface
                ->searchMemoByLog($requestArray, Auth::id());
        }
        $cubicCentimeters = $this->cubicCentimeterRepositoryInterface
            ->getAll();
        $courses = $this->courseRepositoryInterface
            ->getAll();
        $ranks = Rank::getRankAll();

        return view('frontend.log.index')
            ->with([
                'cubicCentimeters' => $cubicCentimeters,
                'courses'          => $courses,
                'ranks'            => $ranks,
                'memos'            => $memos
            ]);
    }
}

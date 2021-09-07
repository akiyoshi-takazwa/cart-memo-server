<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Packages\Domain\Course\CourseRepositoryInterface;
use Packages\Domain\CubicCentimeter\CubicCentimeterRepositoryInterface;
use Packages\Domain\Memo\MemoRepositoryInterface;
use Packages\Domain\Rank\Rank;

class HomeController extends Controller
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

    public function __invoke()
    {
        $user = Auth::user();

        $cubicCentimeters = $this->cubicCentimeterRepositoryInterface
            ->getAll();

        $courses = $this->courseRepositoryInterface
            ->getAll();

        $ranks = Rank::getRankAll();

        $memos = $this->memoRepositoryInterface
            ->getTodayMemoOfAuth(Auth::id());

        return view('frontend.home.dashboard')
            ->with([
                'user'             => $user,
                'cubicCentimeters' => $cubicCentimeters,
                'courses'          => $courses,
                'ranks'            => $ranks,
                'memos'            => $memos,
            ]);
    }
}

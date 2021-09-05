<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Packages\Domain\Course\CourseRepositoryInterface;
use Packages\Domain\CubicCentimeter\CubicCentimeterRepositoryInterface;
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
     * RegisteredUserController constructor.
     */
    public function __construct()
    {
        $this->cubicCentimeterRepositoryInterface = app(CubicCentimeterRepositoryInterface::class);
        $this->courseRepositoryInterface = app(CourseRepositoryInterface::class);
    }

    public function __invoke()
    {
        $user = Auth::user();

        $cubicCentimeters = $this->cubicCentimeterRepositoryInterface
            ->getNameAll();

        $courses = $this->courseRepositoryInterface
            ->getNameAll();

        $ranks = Rank::getRankAll();

        return view('frontend.home.dashboard')
            ->with([
                'user'             => $user,
                'cubicCentimeters' => $cubicCentimeters,
                'courses'          => $courses,
                'ranks'            => $ranks,
            ]);
    }
}

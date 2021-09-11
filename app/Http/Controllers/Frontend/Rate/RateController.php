<?php

namespace App\Http\Controllers\Frontend\Rate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Memo\StoreMemoRequest;
use App\Http\Requests\Frontend\Rate\StoreRateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Packages\Domain\Rate\RateRepositoryInterface;
use Packages\UseCases\Frontend\Memo\StoreMemoAction;
use Packages\UseCases\Frontend\Rate\StoreRateAction;

class RateController extends Controller
{
    /**
     * @var StoreRateAction
     */
    private $storeRateAction;
    /**
     * @var RateRepositoryInterface
     */
    private $rateRepositoryInterface;

    public function __construct()
    {
        $this->storeRateAction = app(StoreRateAction::class);
        $this->rateRepositoryInterface = app(RateRepositoryInterface::class);
    }

    public function index()
    {
        $latestRate = $this->rateRepositoryInterface
            ->getLatestRateByUser(Auth::id());

        return view('frontend.rate.rate')
            ->with([
                'latestRate' => $latestRate,
            ]);
    }

    /**
     * @param StoreRateRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRateRequest $request) :RedirectResponse
    {
        $this->storeRateAction
            ->execute($request->validated());

        return redirect()->route('user.rate');
    }
}

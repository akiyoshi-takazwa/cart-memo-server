<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\StoreUserRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Packages\Domain\User\UserRepositoryInterface;
use Packages\UseCases\Frontend\User\StoreAction;

class RegisteredUserController extends Controller
{
    /**
     * @var StoreAction
     */
    private $storeAction;

    /**
     * RegisteredUserController constructor.
     */
    public function __construct()
    {
        $this->storeAction = app(StoreAction::class);
    }

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('frontend.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  StoreUserRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(StoreUserRequest $request)
    {
        $user = $this->storeAction
            ->create($request->validated());

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

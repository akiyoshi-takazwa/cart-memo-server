<?php

namespace App\Http\Controllers\Frontend\Memo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Memo\StoreMemoRequest;
use Illuminate\Http\Request;
use Packages\UseCases\Frontend\Memo\StoreMemoAction;

class MemoController extends Controller
{
    /**
     * @var StoreMemoAction
     */
    private $storeMemoAction;

    public function __construct()
    {
        $this->storeMemoAction = app(StoreMemoAction::class);
    }

    public function store(StoreMemoRequest $request)
    {
        $this->storeMemoAction
            ->store($request->validated());

        return redirect()->back();
    }
}

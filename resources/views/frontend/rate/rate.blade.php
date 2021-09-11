@extends ('frontend.layouts.app')
@section('title')レート@endsection
@section('content')
    <div class="flex items-center min-h-screen bg-white dark:bg-gray-900">
        <div class="container mx-auto">
            <div class="mx-auto my-10 mt-5">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">最終更新レート：{{ $latestRate->rate }}</h1>
                </div>
                <div class="max-w-md mx-auto mb-24">
                    <div class="m-7">
                        <form method="POST" action="{{ route('user.rate') }}">
                            @csrf
                            <div class="mb-6">
                                @error('rate')
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                                    <div class="font-bold">{{ $message }}</div>
                                </div>
                                @enderror
                                <input type="number" maxlength="5" name="rate" placeholder="99999" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                            </div>
                            <div class="mb-6">
                                <button type="submit" class="font-bold w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">更新</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="antialiased sans-serif bg-gray-200 h-auto">
                    <div class="container mx-auto py-6 px-4">
                        <h1 class="text-center text-3xl py-4 border-b text-gray-600 dark:text-gray-400">レート推移</h1>
                        グラフ予定
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

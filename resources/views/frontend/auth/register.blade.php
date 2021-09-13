@extends('frontend.layouts.app')

@section('content')
    <div class="flex items-center min-h-screen bg-white dark:bg-gray-900">
        <div class="container mx-auto">
            <div class="max-w-md mx-auto my-10">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Cart Memo Register</h1>
                </div>
                <div class="m-7">
                    <p class="text-sm text-center text-gray-600">ログインは
                        <a href="/" class="text-indigo-700 focus:outline-none focus:underline focus:text-indigo-500 dark:focus:border-indigo-800">
                            こちら
                        </a>
                    </p>
                    <form method="POST" action="{{ route('user.register') }}">
                        @csrf
                        <div class="mb-6">
                            @error('username')
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                                <div class="font-bold">{{ $message }}</div>
                            </div>
                            @enderror
                            <label for="text" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">ユーザーID</label>
                            <input type="text" name="username" placeholder="username" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        </div>
                        <div class="mb-6">
                            @error('password')
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                                <div class="font-bold">{{ $message }}</div>
                            </div>
                            @enderror
                            <div class="flex justify-between mb-2">
                                <label for="password" class="text-sm text-gray-600 dark:text-gray-400">パスワード</label>
                            </div>
                            <input type="password" name="password" placeholder="Password" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        </div>
                        <div class="mb-6">
                            @error('password_confirmation')
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                                <div class="font-bold">{{ $message }}</div>
                            </div>
                            @enderror
                            <div class="flex justify-between mb-2">
                                <label for="password" class="text-sm text-gray-600 dark:text-gray-400">パスワード(確認)</label>
                            </div>
                            <input type="password" name="password_confirmation" placeholder="Password" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        </div>
                        <div class="mb-6">
                            <button type="submit" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">登録</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

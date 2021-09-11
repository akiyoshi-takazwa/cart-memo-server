@extends ('frontend.layouts.app')
@section('title')トップページ@endsection
@section('content')
    <div class="flex items-center min-h-screen bg-white dark:bg-gray-900">
        <div class="container mx-auto">
            <div class="mx-auto my-10 mt-20">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">最終更新レート：{{ $latestRate->rate }}</h1>
                </div>
                <div class="max-w-md mx-auto mb-24">
                    <div class="m-7">
                        <form method="POST" action="{{ route('user.memo.store') }}">
                            @csrf
                            <div class="mb-6">
                                @error('cc')
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                                    <div class="font-bold">{{ $message }}</div>
                                </div>
                                @enderror
                                <label for="text" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">CC選択</label>
                                <select name='cc_id' class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    @foreach( $cubicCentimeters as $cubicCentimeter )
                                    <option value="{{ $cubicCentimeter->id }}">{{ $cubicCentimeter->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-6">
                                @error('course')
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                                    <div class="font-bold">{{ $message }}</div>
                                </div>
                                @enderror
                                <label for="text" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">コース選択</label>
                                <select name='course_id' class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    @foreach( $courses as $course )
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-6">
                                @error('rank')
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                                    <div class="font-bold">{{ $message }}</div>
                                </div>
                                @enderror
                                <label for="text" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">順位選択</label>
                                <select name='rank' class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    @foreach( $ranks as $rank )
                                        <option>{{ $rank }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-6">
                                <button type="submit" class="font-bold w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">登録</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="antialiased sans-serif bg-gray-200 h-auto">
                    <div class="container mx-auto py-6 px-4">
                        <h1 class="text-center text-3xl py-4 border-b text-gray-600 dark:text-gray-400">本日の履歴</h1>
                        <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative"
                             style="height: 405px;">
                            <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
                                <thead>
                                <tr class="d-flex">
                                    <th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
                                        コース
                                    </th>
                                    <th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
                                        CC
                                    </th>
                                    <th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
                                        順位
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $memos as $memo)
                                    <tr>
                                        <td class="border-dashed border-t border-gray-200">
                                            <p class="text-gray-700 px-6 py-3 items-center text-center">{{ $memo->courses->name }}</p>
                                        </td>
                                        <td class="border-dashed border-t border-gray-200">
                                            <p class="text-gray-700 px-6 py-3 items-center text-center">{{ $memo->cubicCentimeters->name }}</p>
                                        </td>
                                        <td class="border-dashed border-t border-gray-200 text-center">
                                            <p class="text-gray-700 px-6 py-3 items-center">{{ $memo->rank }}</p>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

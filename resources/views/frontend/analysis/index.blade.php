@extends ('frontend.layouts.app')
@section('title')トップページ@endsection
@section('content')
    <div class="flex min-h-screen bg-white dark:bg-gray-900">
        <div class="container mx-auto">
            <form method="GET" class="flex mt-20 items-center" action="{{ route('user.analysis') }}">
                @csrf
                <div class="mb-6 mr-5">
                    @error('start_date')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                        <div class="font-bold">{{ $message }}</div>
                    </div>
                    @enderror
                    <label for="text" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">開始日選択</label>
                    <input value="{{ now()->format('Y-m-d') }}" name="start_date" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" max="9999-12-31">
                </div>
                <div class="mb-6 mr-5">
                    @error('end_date')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                        <div class="font-bold">{{ $message }}</div>
                    </div>
                    @enderror
                    <label for="text" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">終了日選択</label>
                    <input value="{{ now()->format('Y-m-d') }}" name="end_date" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" max="9999-12-31">
                </div>
                <div class="mb-6 mr-5">
                    @error('cc')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                        <div class="font-bold">{{ $message }}</div>
                    </div>
                    @enderror
                    <label for="text" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">CC選択</label>
                    <select name='cc_id' class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="0">選択なし</option>
                        @foreach( $cubicCentimeters as $cubicCentimeter )
                            <option value="{{ $cubicCentimeter->id }}">{{ $cubicCentimeter->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6 mr-5">
                    @error('course')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                        <div class="font-bold">{{ $message }}</div>
                    </div>
                    @enderror
                    <label for="text" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">コース選択</label>
                    <select name='course_id' class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="0">選択なし</option>
                        @foreach( $courses as $course )
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6 items-center">
                    <label for="text" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">　</label>
                    <button type="submit" class="font-bold w-full px-3 py-3 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">絞り込み</button>
                </div>
            </form>
            @if( isset($analyses))
                <p>平均順位 : {{ $analyses['average'] }} 位</p>
                <table class="table-auto">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">Rank</th>
                        <th class="px-4 py-2">Win Rate</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="border px-4 py-2">1位</td>
                        <td class="border px-4 py-2">{{ $analyses['first'] }} %</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border px-4 py-2">2位</td>
                        <td class="border px-4 py-2">{{ $analyses['second'] }} %</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">3位</td>
                        <td class="border px-4 py-2">{{ $analyses['third'] }} %</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border px-4 py-2">4位</td>
                        <td class="border px-4 py-2">{{ $analyses['fourth'] }} %</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">5位</td>
                        <td class="border px-4 py-2">{{ $analyses['fifth'] }} %</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border px-4 py-2">6位</td>
                        <td class="border px-4 py-2">{{ $analyses['sixth'] }} %</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">7位</td>
                        <td class="border px-4 py-2">{{ $analyses['seventh'] }} %</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border px-4 py-2">8位</td>
                        <td class="border px-4 py-2">{{ $analyses['eighth'] }} %</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">9位</td>
                        <td class="border px-4 py-2">{{ $analyses['ninth'] }} %</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border px-4 py-2">10位</td>
                        <td class="border px-4 py-2">{{ $analyses['tenth'] }} %</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">11位</td>
                        <td class="border px-4 py-2">{{ $analyses['eleventh'] }} %</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border px-4 py-2">12位</td>
                        <td class="border px-4 py-2">{{ $analyses['twelfth'] }} %</td>
                    </tr>
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection

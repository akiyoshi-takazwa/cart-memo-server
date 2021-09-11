<nav class="bg-indigo-500 flex items-center justify-between flex-wrap bg-teal p-6">
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-lg lg:flex-grow text-right pr-5">
            <a href="/top" class="text-white block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-gray-900 mx-2">
                順位登録
            </a>
            <span class="text-white lg:inline-block">|</span>
            <a href="/rates" class="text-white block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-gray-900 mx-2">
                レート登録・更新
            </a>
            <span class="text-white lg:inline-block">|</span>
            <a href="/logs" class="text-white block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-gray-900 mx-2">
                履歴
            </a>
            <span class="text-white lg:inline-block">|</span>
            <a href="/analysis" class="text-white block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-gray-900 mx-2">
                勝率分析
            </a>
        </div>
        <div>
            <form method="get" action="{{ route('user.logout') }}">
                <button type="submit"
                   class="inline-block text-sm px-4 py-2 leading-none border rounded
               text-white border-white hover:border-transparent hover:text-gray-700 hover:bg-white mt-4 lg:mt-0">
                    ログアウト
                </button>
            </form>
        </div>
    </div>
</nav>


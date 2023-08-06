<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            イベント登録
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                @if ($errors->any())
                    <div class="mx-auto grid max-w-screen-md text-red-700 px-4 py-3" role="alert">
                        {{-- エラーの表示 --}}
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>※{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="mx-auto grid max-w-screen-md gap-4 sm:grid-cols-3" method="POST" action="{{ route('event.store') }}">
                    @csrf

                    <div>
                        <label for="date" class="mt-1 mb-1 inline-block text-sm text-white sm:text-base">日程</label>                   
                        <input type="date" id="date" name="date" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">                      
                    </div>

                    <div>
                        <label for="time" class="mt-1 mb-1 inline-block text-sm text-white sm:text-base">時間</label>
                        <input type="text" id="time" name="time" placeholder="20:30-21:30" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                    </div>

                    <div>
                        <label for="category" class="mt-1 mb-1 inline-block text-sm text-white sm:text-base">カテゴリ</label>
                        <select class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" id="category" name="category">

                            <option value="交流会">交流会</option>
                            <option value="勉強会">勉強会</option>
                            <option value="転職勉強会">転職勉強会</option>
                            <option value="副業勉強会">副業勉強会</option>
                            <option value="その他">その他</option>

                        </select>
                    </div>

                    <div>
                        <label for="title" class="mt-1 mb-1 inline-block text-sm text-white sm:text-base">タイトル</label>
                        <input type="text" id ="title" name="title" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                    </div>

                    <div>
                        <label for="content" class="mt-1 mb-1 inline-block text-sm text-white sm:text-base">内容</label>
                        <textarea id="content" name="content"  class="w-full h-10 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"></textarea>
                    </div>

                    <div>
                        <label for="guest" class="mt-1 mb-1 inline-block text-sm text-white sm:text-base">登壇者</label>
                        <input type="text" id ="guest" name="guest" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                    </div>

                    <div class="flex items-center justify-between sm:col-span-2">
                        <button type="submit" class="inline-block rounded-lg px-8 py-3 text-center text-sm font-semibold text-white outline-none transition duration-100 hover:bg-indigo-600 focus-visible:ring md:text-baserounded-md ring-1 ring-black ring-opacity-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600">登録</button>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

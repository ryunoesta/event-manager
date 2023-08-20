<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            イベント登録
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
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

                <form class="mx-auto max-w-screen-lg" method="POST" action="{{ route('event.store') }}">
                    @csrf

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-10">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-5">
                                イベント基本情報
                            </h2>
                            <div class="grid gap-7 sm:grid-cols-3">
                                <div>
                                    <x-create-label for="date" class="block font-medium text-sm text-gray-700 dark:text-gray-300">日程</x-create-x-create-label>                   
                                    <input type="date" id="date" name="date" class="w-full rounded bg-gray-50 px-3 py-2 text-gray-800 ring-indigo-300 transition duration-100 focus:ring">                      
                                </div>

                                <div>
                                    <x-create-label for="time" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">時間</x-create-label>
                                    <input type="text" id="time" name="time" placeholder="20:30-21:30" class="w-full rounded bg-gray-50 px-3 py-2 text-gray-800 ring-indigo-300 transition duration-100 focus:ring">
                                </div>

                                <div>
                                    <x-create-label for="category" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">カテゴリ</x-create-label>
                                    <select class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" id="category" name="category">

                                        <option value="交流会">交流会</option>
                                        <option value="勉強会">勉強会</option>
                                        <option value="転職勉強会">転職勉強会</option>
                                        <option value="副業勉強会">副業勉強会</option>
                                        <option value="その他">その他</option>

                                    </select>
                                </div>

                                <div>
                                    <x-create-label for="title" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">タイトル</x-create-label>
                                    <input type="text" id ="title" name="title" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>

                                <div>
                                    <x-create-label for="content" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">内容</x-create-label>
                                    <textarea id="content" name="content"  class="w-full h-10 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"></textarea>
                                </div>

                                <div>
                                    <x-create-label for="content_details" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">内容詳細</x-create-label>
                                    <textarea id="content_details" name="content_details"  class="w-full h-10 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"></textarea>
                                </div>

                                <div>
                                    <x-create-label for="guest" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">登壇者</x-create-label>
                                    <input type="text" id ="guest" name="guest" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>

                                <div>
                                    <x-create-label for="target" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">参加対象</x-create-label>
                                    <input type="text" id ="target" name="target" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>

                                <div>
                                    <x-create-label for="zoom_url" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">zoomリンク</x-create-label>
                                    <input type="text" id ="zoom_url" name="zoom_url" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>

                                <div>
                                    <x-create-label for="public" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">一般公開</x-create-label>
                                    <input type="checkbox" id ="public" name="public" class="w-8 h-8 mt-1 ml-3 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-10">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-5">
                                司会者
                            </h2>
                            <div class="grid gap-7 sm:grid-cols-2">
                                <div>
                                    <x-create-label for="host" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">司会者</x-create-label>
                                    <select class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" id="category" name="category">
                                        <option value="田中">田中</option>
                                        <option value="佐藤">佐藤</option>
                                        <option value="山田">伊藤</option>
                                        <option value="鈴木">鈴木</option>
                                        <option value="平田">平田</option>
                                    </select>
                                </div>                          
                                <div>
                                    <x-create-label for="host_check" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">司会者確認</x-create-label>
                                    <input type="checkbox" id ="host_check" name="host_check" class="w-8 h-8 rounded border bg-gray-50 mt-1 ml-3 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>
                                <div>
                                    <x-create-label for="assistant" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">司会者補佐</x-create-label>
                                    <select class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" id="category" name="category">
                                        <option value="田中">田中</option>
                                        <option value="佐藤">佐藤</option>
                                        <option value="山田">伊藤</option>
                                        <option value="鈴木">鈴木</option>
                                        <option value="平田">平田</option>
                                    </select>
                                </div>
                                <div>
                                    <x-create-label for="assistant_check" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">司会者補佐確認</x-create-label>
                                    <input type="checkbox" id ="assistant_check" name="assistant_check" class="w-8 h-8 mt-1 ml-3 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-10">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-5">
                                振り返り
                            </h2>
                            <div class="grid gap-7 sm:grid-cols-2">
                                <div>
                                    <x-create-label for="review" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">振り返りシート</x-create-label>
                                    <textarea id="review" name="review"  class="w-full h-10 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"></textarea>
                                </div>
                                <div>
                                    <x-create-label for="participants" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">参加者数</x-create-label>
                                    <input type="text" id ="participants" name="participants" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>
                                <div>
                                    <x-create-label for="camera_on" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">画面オン人数</x-create-label>
                                    <input type="text" id ="camera_on" name="camera_on" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>
                                <div>
                                    <x-create-label for="questionnaires" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">アンケート回答者数</x-create-label>
                                    <input type="text" id ="questionnaires" name="questionnaires" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-10">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-5">
                                告知文
                            </h2>
                            <div class="grid gap-7 sm:grid-cols-1">
                                <div>
                                    <x-create-label for="announcement_responsible" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">告知文担当</x-create-label>
                                    <select class="w-1/3 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" id="category" name="category">
                                        <option value="田中">田中</option>
                                        <option value="佐藤">佐藤</option>
                                        <option value="山田">伊藤</option>
                                        <option value="鈴木">鈴木</option>
                                        <option value="平田">平田</option>
                                    </select>
                                </div>
                                <div>
                                    <x-create-label for="announcement" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">告知文</x-create-label>
                                    <textarea id="announcement" name="announcement" placeholder="告知文" class="w-full h-10 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"></textarea>
                                </div>
                                <div>
                                    <x-create-label for="announcement_sending" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">告知文送信予約済</x-create-label>
                                    <input type="checkbox" id ="announcement_sending" name="announcement_sending" class="w-8 h-8 mt-1 ml-3 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-10">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-5">
                                アーカイブ動画
                            </h2>
                            <div class="grid gap-7 sm:grid-cols-1">
                                <div>
                                    <x-create-label for="archive" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">アーカイブ配信</x-create-label>
                                    <input type="checkbox" id ="archive" name="announcement_sending" class="w-8 h-8 mt-1 ml-3 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>
                                <div>                 
                                    <x-create-label for="archive" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">アーカイブリンク</x-create-label>
                                    <input type="text" id ="archive_url" name="archive_url" placeholder="https://www.youtube.com" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>
                                <div>
                                    <x-create-label for="archive_sending" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">アーカイブ配信済</x-create-label>
                                    <input type="checkbox" id ="archive_sending" name="archive_sending" class="w-8 h-8 mt-1 ml-3 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-10">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-5">
                                サムネイル
                            </h2>
                            <div class="grid gap-7 sm:grid-cols-1">
                                <div>
                                    <x-create-label for="thumbnail_material" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">サムネ素材</x-create-label>
                                    <input type="text" id ="thumbnail_material" name="thumbnail_material" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>
                                <div>
                                    <x-create-label for="thumbnail" class="mt-1 mb-1 inline-block text-sm dark:text-white sm:text-base">サムネイル</x-create-label>
                                    <input type="text" id ="thumbnail" name="thumbnail" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <x-primary-button type="submit" class="ml-5">登録</x-primary-button>
                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

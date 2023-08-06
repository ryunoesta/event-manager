<x-app-layout>
    <x-slot name="header" class="flex">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-10">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{ route('event.create') }}">
                <button class="rounded-md ring-1 ring-black ring-opacity-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 px-4 py-2 block">イベント登録</button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                @if ($events->isNotEmpty())
                    <ul>
                        <table class="table-auto">
                            <thead>
                                <tr>
                                    <th class="px-3 py-2">日程</th>
                                    <th class="px-1 text-center">カテゴリ</th>
                                    <th class="px-4 py-2">タイトル</th>
                                    <th class="px-4 py-2">内容</th>
                                    <th class="px-4 py-2 text-center">登壇者</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                <tr>                        
                                    <td class="border px-3 py-2">
                                        {{ $event->date }} <br> 
                                        {{ $event->time,11 }}
                                    </td>
                                    <td class="border px-1 text-center">{{ $event->category }}</td>
                                    <td class="border px-2 py-2">{{ $event->title }}</td>
                                    <td class="border px-4 py-2">{{ $event->content }}</td>   
                                    <td class="border px-4 py-2 text-center">{{ $event->guest }}</td>   
                                </tr>
                                @endforeach
                                </tr>
                            </tbody>
                            </table>
                    </ul>
                @else
                    <p>イベントがありません</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

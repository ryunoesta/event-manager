<x-app-layout>
    <x-slot name="header" class="flex">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-10">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{ route('event.create') }}">
                <x-primary-button class="ml-4">イベント登録</x-primary-button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">

        <div>
        @if (session('message'))
                <div class="max-w-6xl mx-auto py-6 mb-12 sm:px-6 lg:px-8 text-center text-sm text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400 sm:rounded-lg" role="alert">
                    {{ session('message') }}
                </div>
        @endif
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 text-gray-900 dark:text-gray-100">
                @if ($events->isNotEmpty())
                    <ul>
                        <table class="w-full table-fix text-xs text-left text-gray-900 dark:text-gray-100">
                            <thead>
                                <tr>
                                    <th class="px-1 py-1">日程</th>
                                    <th class="px-1 py-1">カテゴリ</th>
                                    <th class="px-1 py-1">タイトル</th>
                                    <th class="px-1 py-1">内容</th>
                                    <th class="px-1 py-1">登壇者</th>
                                    <th class="px-1 py-1">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                <tr>                        
                                    <td class="px-1 py-1 border dark:border-none">
                                        {{ $event->date }} <br> 
                                        {{ $event->time,11 }}
                                    </td>
                                    <td class="px-1 py-1 border dark:border-none">{{ $event->category }}</td>
                                    <td class="px-1 py-1 border font-semibold dark:border-none">{{ $event->title }}</td>
                                    <td class="px-1 py-1 border dark:border-none">{{ $event->content }}</td>   
                                    <td class="px-1 py-1 border dark:border-none">{{ $event->guest }}</td>  
                                    <td class="px-1 py-1 border dark:border-none">
                                        <a  href="{{ route('event.edit', ['id' => $event->id]) }}"
                                        role="button">
                                            <x-secondary-button class="mt-3 mb-3">編集</x-secondary-button>
                                        </a>
                                        <form method="post" action="{{ route('event.destroy', ['id' => $event->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button type="submit" class="mb-3">
                                                削除
                                            </x-danger-button>
                                        </form>
                                    </td> 
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

        @if ($events->hasPages())
            <div class="mt-10 mx-auto max-w-lg">
                {{ $events->links('vendor.pagination.tailwind2') }}
            </div>
        @endif

    </div>
</x-app-layout>

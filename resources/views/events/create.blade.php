<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            イベント追加
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ route('dashboard') }}">
                    @csrf

                    <div class="form-group-sm clearfix">
                        <label for="formGroupExampleInput2" class="mt-3 mb-0">日程</label>
                        <div class="product-info width-control">
                            <input type="text" name="time" class="content-half-width form-control-sm d-inline">
                        </div>
                    </div>

                    <div class="form-group-sm clearfix">
                        <label for="formGroupExampleInput2" class="mt-3 mb-0">タイトル</label>
                        <div class="product-info width-control">
                            <input type="text" name="title" class="content-half-width form-control-sm d-inline">
                        </div>
                    </div>

                    <div class="form-group-sm clearfix">
                        <label for="formGroupExampleInput2" class="mt-3 mb-0">内容</label>
                        <div class="product-info width-control">
                            <textarea name="description" class="content-width form-control-sm"></textarea>
                        </div>
                    </div>

                    <div class="form-group-sm clearfix">
                        <label for="formGroupExampleInput2" class="mt-3 mb-0">イベントカテゴリー</label>

                        <div class="product-info width-control">
                            <select class="content-half-width form-control-sm d-inline" id="changeSelect" name="category_id" onchange="entryChange2();">

                                <option value="">未選択</option>
                            
                            </select>
                        </dov>
                    </div>

                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-primary w-50">追加</button>
                        <p class="mt-5">
                            <a href="#" class="text-primary d-inline">商品一覧</a>
                        </p>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

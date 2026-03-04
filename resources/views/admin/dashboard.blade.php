<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold text-amber-500 mb-4">歡迎進入管理後台！</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                        <a href="{{ route('admin.users.index') }}" class="p-6 bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl shadow-sm hover:shadow-md transition-all group">
                            <div class="text-3xl mb-4">👥</div>
                            <h4 class="text-xl font-bold mb-2 group-hover:text-indigo-500">使用者管理</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">檢視、新增、編輯或刪除系統內的使用者帳號。</p>
                        </a>

                        <div class="p-6 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl opacity-50">
                            <div class="text-3xl mb-4">📊</div>
                            <h4 class="text-xl font-bold mb-2">系統數據 (開發中)</h4>
                            <p class="text-sm text-gray-500">此功能尚未開放。</p>
                        </div>

                        <div class="p-6 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl opacity-50">
                            <div class="text-3xl mb-4">⚙️</div>
                            <h4 class="text-xl font-bold mb-2">系統設定 (開發中)</h4>
                            <p class="text-sm text-gray-500">此功能尚未開放。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 grid gap-4 md:grid-cols-2">
            <div class="col-span-2 justify-end hidden md:flex">
                <button class="bg-gradient-to-r from-cyan-500 to-blue-500 py-3 px-6 rounded-3xl text-white font-bold text-xl w-auto">記録・投稿</button>
            </div>
            <div class="grid grid-rows-2 gap-4">
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <div class="text-blue-700 font-bold">Today</div>
                            <div class="font-bold text-3xl">3</div>
                            <div class="text-blue-300">hour</div>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <div class="text-blue-700 font-bold">Month</div>
                            <div class="font-bold text-3xl">120</div>
                            <div class="text-blue-300">hour</div>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <div class="text-blue-700 font-bold">Total</div>
                            <div class="font-bold text-3xl">1348</div>
                            <div class="text-blue-300">hour</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-3 md:p-5 text-gray-900">
                        <div id="bar_graph"></div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-3 md:p-5 text-gray-900">
                        <div class="font-bold text-sm md:text-xl">学習コンテンツ</div>
                        <div id="learing_content"></div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-3 md:p-5 text-gray-900">
                        <div class="font-bold text-sm md:text-xl">学習言語</div>
                        <div id="learing_language"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center gap-4 col-span-1 md:col-span-2">
                <div class="text-blue-700 font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </div>
                <div>2023年3月</div>
                <div class="text-gray-900 font-light">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </div>
            <div class="col-span-1 flex justify-end md:hidden">
                <button class="bg-gradient-to-r from-cyan-500 to-blue-500 py-3 px-6 rounded-3xl text-white font-bold text-xl w-full">記録・投稿</button>
            </div>
        </div>
    </div>
</x-app-layout>

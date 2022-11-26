<div class="flex flex-col gap-2">
    <div class="flex flex-col justify-between gap-2 sm:flex-row">
        <div class="w-full flex flex-col gap-5 border rounded-lg px-6 py-2">
            <h4 class="text-center">
                Stats : 
            </h4>
            <div class="flex justify-between">
                <div class="flex gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-yellow-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                
                    <h4 class="text-yellow-500">
                        SSR Get  
                    </h4>
                </div>
                <h4 class="text-yellow-500">
                    {{$ssrCaught}}
                </h4>
            </div>

            <div class="flex justify-between">
                <div class="flex gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                    </svg>
                
                    <h4>
                        Coins  
                    </h4>
                </div>
                <h4>
                    {{$coins}}
                </h4>
            </div>

            <div class="flex justify-between">
                <div class="flex gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                    </svg>                  
                
                    <h4>
                        Coins Spend 
                    </h4>
                </div>
                <h4>
                    {{$coinsSpend}}
                </h4>
            </div>

            <div class="flex justify-between">
                <div class="flex gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                
                    <h4>
                        Total Rolls 
                    </h4>
                </div>
                <h4>
                    {{$roll_count}}
                </h4>
            </div>
        </div>

        <div class="w-full flex flex-col gap-5 border rounded-lg px-6 py-2">
            <h4 class="text-center">
                Rarity : 
            </h4>
            <div class="flex flex-col gap-2">
                <div class="flex justify-between">
                    <h5 class="text-yellow-500">
                        SSR
                    </h5>
                    <h5 class="text-yellow-500">
                        {{
                            (array_count_values($this->banner)[\App\Enum\Gacha\GachaRarityEnum::SSR()->value] * 100) / count($this->banner)
                        }}%
                    </h5>
                </div>

                <div class="flex justify-between">
                    <h5 class="text-purple-500">
                        SR
                    </h5>
                    <h5 class="text-purple-500">
                        {{
                            (array_count_values($this->banner)[\App\Enum\Gacha\GachaRarityEnum::SR()->value] * 100) / count($this->banner)
                        }}%
                    </h5>
                </div>

                <div class="flex justify-between">
                    <h5 class="text-blue-500">
                        R
                    </h5>
                    <h5 class="text-blue-500">
                        {{
                            (array_count_values($this->banner)[\App\Enum\Gacha\GachaRarityEnum::R()->value] * 100) / count($this->banner)
                        }}%
                    </h5>
                </div>

                <div class="flex justify-between">
                    <h5 class="text-gray-400">
                        UC
                    </h5>
                    <h5 class="text-gray-500">
                        {{
                            (array_count_values($this->banner)[\App\Enum\Gacha\GachaRarityEnum::UC()->value] * 100) / count($this->banner)
                        }}%
                    </h5>
                </div>

                <div class="flex justify-between">
                    <h5 class="text-green-500">
                        C
                    </h5>
                    <h5 class="text-green-500">
                        {{
                            (array_count_values($this->banner)[\App\Enum\Gacha\GachaRarityEnum::C()->value] * 100) / count($this->banner)
                        }}%
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col w-full border rounded-lg py-2">
        <h1 class="text-center">
            <span class="text-yellow-500">
                SSR
            </span>
            In 
            <span class="font-semibold">
                {{$pitty}}
            </span> 
            @if($pitty == 1)
                Roll
            @else
                Rolls
            @endif
        </h1>
    </div>
</div>
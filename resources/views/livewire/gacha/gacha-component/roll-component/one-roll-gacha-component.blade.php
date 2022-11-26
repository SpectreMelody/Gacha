<div class="grid px-5 items-center justify-center border w-full min-h-[325px] rounded-md">
    @foreach ($results as $result)
        @if($result == \App\Enum\Gacha\GachaRarityEnum::SSR()->value)
            <div class="bg-yellow-500 px-10 py-1 text-center text-white rounded-md">
                SSR
            </div>
        @endif

        @if($result == \App\Enum\Gacha\GachaRarityEnum::SR()->value)
            <div class="bg-purple-500 px-10 py-1 text-center text-white rounded-md">
                SR
            </div>
        @endif

        @if($result == \App\Enum\Gacha\GachaRarityEnum::R()->value)
            <div class="bg-blue-500 px-10 py-1 text-center text-white rounded-md">
                R
            </div>
        @endif

        @if($result == \App\Enum\Gacha\GachaRarityEnum::UC()->value)
            <div class="bg-gray-400 px-10 py-1 text-center text-white rounded-md">
                UC
            </div>
        @endif

        @if($result == \App\Enum\Gacha\GachaRarityEnum::C()->value)
            <div class="bg-green-500 px-10 py-1 text-center text-white rounded-md">
                C
            </div>
        @endif
    @endforeach
</div>
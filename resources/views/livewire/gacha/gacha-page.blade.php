<div class="min-w-screen min-h-screen flex justify-center items-center">
    <section class="bg-white min-w-full min-h-screen relative lg:rounded-md lg:shadow-lg lg:min-h-[500px] lg:min-w-[600px]">
        <header class="py-5 mb-5 border-b md:mx-3">
            <h1 class="leading-5 text-lg font-Roboto text-center">
                Gacha
            </h1>
        </header>

        <main class="mx-3 flex-col gap-6 justify-between">
            <div class="flex items-center justify-center border w-full min-h-[325px] rounded-md">
                @if($this->result == \App\Enum\Gacha\GachaRarityEnum::SSR()->value)
                    <div class="bg-yellow-500 px-10 py-1 text-white rounded-md">
                        SSR
                    </div>
                @endif

                @if($this->result == \App\Enum\Gacha\GachaRarityEnum::SR()->value)
                    <div class="bg-purple-500 px-10 py-1 text-white rounded-md">
                        SR
                    </div>
                @endif

                @if($this->result == \App\Enum\Gacha\GachaRarityEnum::R()->value)
                    <div class="bg-blue-500 px-10 py-1 text-white rounded-md">
                        R
                    </div>
                @endif

                @if($this->result == \App\Enum\Gacha\GachaRarityEnum::UC()->value)
                    <div class="bg-gray-400 px-10 py-1 text-white rounded-md">
                        UC
                    </div>
                @endif

                @if($this->result == \App\Enum\Gacha\GachaRarityEnum::C()->value)
                    <div class="bg-green-500 px-10 py-1 text-white rounded-md">
                        C
                    </div>
                @endif
            </div>
            <div class="mt-5 flex items-center justify-center gap-4">
                <button 
                wire:click="roll(1)"
                class="bg-blue-400 px-10 md:px-20 py-3 hover:bg-blue-500 rounded-md text-white font-Roboto">
                    Roll 1x
                </button>
                <div class="bg-blue-300 px-10 md:px-20 py-3 rounded-md text-white font-Roboto cursor-not-allowed select-none">
                    Roll 10x
                </div>
            </div>
        </main>
    </section>
</div>

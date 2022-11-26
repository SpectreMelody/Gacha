<div class="min-w-screen min-h-screen flex justify-center items-center">
    <section class="bg-white min-w-full min-h-screen relative lg:rounded-md lg:shadow-lg lg:min-h-[500px] lg:min-w-[600px]">
        <header class="py-5 mb-5 border-b md:mx-3">
            <h1 class="leading-5 text-lg font-Roboto text-center">
                Gacha
            </h1>
        </header>

        <main class="mx-3 flex-col gap-6 justify-between">
            <div 
            wire:poll.1000="increaseCoins()"
            class="px-8 border w-full min-h-[325px] rounded-md py-6">
                @include('livewire.gacha.gacha-component.description-component.description')
            </div>
            
            <div class="mt-5 flex items-center justify-center gap-4">
                @if($this->coins < 10)
                    <div class="bg-blue-300 px-10 md:px-20 py-3 rounded-md text-white font-Roboto cursor-not-allowed select-none">
                        Roll 1x
                    </div>
                @else
                    <button 
                    wire:click="roll(1)"
                    class="bg-blue-400 px-10 md:px-20 py-3 hover:bg-blue-500 rounded-md text-white font-Roboto">
                        Roll 1x
                    </button>
                @endif

                @if($this->coins < 100)
                    <div class="bg-blue-300 px-10 md:px-20 py-3 rounded-md text-white font-Roboto cursor-not-allowed select-none">
                        Roll 10x
                    </div>
                @else
                    <button 
                    wire:click="roll(10)"
                    class="bg-blue-400 px-10 md:px-20 py-3 hover:bg-blue-500 rounded-md text-white font-Roboto">
                        Roll 10x
                    </button>
                @endif
            </div>
        </main>
    </section>
</div>

<div>
    @if(count($results) == 1)
        @include('livewire.gacha.gacha-component.roll-component.one-roll-gacha-component')
    @else
        @include('livewire.gacha.gacha-component.roll-component.ten-roll-gacha-component')
    @endif
</div>

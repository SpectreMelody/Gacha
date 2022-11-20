<?php

namespace App\Http\Livewire\Gacha;

use Livewire\Component;
use App\Enum\Gacha\GachaRarityEnum;

class GachaPage extends Component
{
    public string $result = '';
    public $banner = [];

    public function mount()
    {
        $ssr = 1;
        $sr = 5;
        $r = 15;
        $uc = 35;
        $c = 44;

        for($i=100; $i>0; $i--)
        {
            if($ssr > 0)
            {
                array_push($this->banner,GachaRarityEnum::SSR()->value);
                $ssr--;
            }

            if($sr > 0)
            {
                array_push($this->banner,GachaRarityEnum::SR()->value);
                $sr--;
            }

            if($r > 0)
            {
                array_push($this->banner,GachaRarityEnum::R()->value);
                $r--;
            }

            if($uc > 0)
            {
                array_push($this->banner,GachaRarityEnum::UC()->value);
                $uc--;
            }
            if($c == 0)
            {
                break;
            }

            array_push($this->banner,GachaRarityEnum::C()->value);
            $c--;
        }

        shuffle($this->banner);
    }

    public function render()
    {
        return view('livewire.gacha.gacha-page');
    }

    public function roll($amount)
    {
        $random_number = rand(0,99);
        $this->result = $this->banner[$random_number];
    }
}

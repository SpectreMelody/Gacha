<?php

namespace App\Http\Livewire\Gacha;

use Livewire\Component;
use App\Enum\Gacha\GachaRarityEnum;

class GachaPage extends Component
{
    public array $results = [];
    public array $banner = [];

    public int $roll_count = 0;
    public int $coins = 0;
    public int $coinsSpend = 0;
    public int $ssrCaught = 0;
    public int $pitty = 180;

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

    public function increaseCoins()
    {
        $this->coins+= 1; 
    }

    public function rollCount($amount)
    {
        $this->roll_count+= $amount;
    }

    public function coinsSpend($amount)
    {
        $this->coinsSpend+= $amount;
    }

    public function ssrPitty()
    {
        array_push($this->results,GachaRarityEnum::SSR()->value);
        $this->pitty = 180;
        $this->ssrCaught += 1;
    }

    public function roll($amount)
    {
        $spend = $amount * 10;

        $this->results = [];
        $this->coins-= $spend;

        $this->rollCount($amount);
        $this->coinsSpend($spend);

        for($i = 1; $i <= $amount; $i++)
        {
            $this->pitty -= 1;

            if($this->pitty == 0)
            {
                $this->ssrPitty();
                continue;
            }

            $random_number = rand(0,99);
            $result = $this->banner[$random_number];

            if($result == GachaRarityEnum::SSR()->value)
            {
                $this->ssrCaught += 1;
            }
            array_push($this->results,$result);
        }
        $this->emit('openModal', 'show-gacha-result', ['results' => $this->results]);
    }

    public function render()
    {
        return view('livewire.gacha.gacha-page');
    }
}

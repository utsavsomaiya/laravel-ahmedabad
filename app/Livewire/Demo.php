<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;

class Demo extends Component
{
    #[Url]
    public int $slide = 1;

    public array $titles = [
        'Hey there! Introduction',
    ];

    public function next(): void
    {
        if ($this->slide !== 10) {
            $this->dispatch('update-title', title: 'Next slide please');

            $this->slide++;

            return;
        }

        dd('Ab bas kar slide puri ho gyi beta');
    }

    public function prev(): void
    {
        if ($this->slide > 1) {
            $this->dispatch('update-title', title: 'Prev slide please');
            $this->slide--;
        }
    }

    public function render(): View
    {
        return view('livewire.demo');
    }
}

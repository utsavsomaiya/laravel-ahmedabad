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
        'Quick Poll!',
        'What you will learn?',
        'Rebase v/s Merge',
        '`git rebase --abort`',
        'Git aliases',
        'Hooks 🪝',
        'Scenarios',
        'Thank you!',
    ];

    public function next(): void
    {
        if ($this->slide !== 9) {
            $this->slide++;
            $this->dispatch('update-title', title: $this->titles[$this->slide - 1] ?? 'Oops!');

            return;
        }

        dd('હવે બસ, વધુ સ્લાઈડ નથી! ચા પી ને આરામ કર 😊');
    }

    public function prev(): void
    {
        if ($this->slide > 1) {
            $this->slide--;
            $this->dispatch('update-title', title: $this->titles[$this->slide - 1] ?? 'Oops!');
        }
    }

    public function render(): View
    {
        return view('livewire.demo')
            ->title($this->titles[$this->slide - 1] ?? 'Oops!');
    }
}

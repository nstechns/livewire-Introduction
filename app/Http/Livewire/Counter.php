<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $defaultLayout = 'tailwind';
    public $count = 0;

    public function render()
    {
        return view("livewire.{$this->defaultLayout}.counter");
    }

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
}

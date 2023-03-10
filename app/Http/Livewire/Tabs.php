<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class Tabs extends Component
{
    public function render()
    {
        return view('livewire.tabs');
    }
    protected $listeners = ['reRenderParent'];
    public function reRenderParent()
    {
        $language = session()->get('locale');
        App::setLocale($language);
        $this->render();
    }
}

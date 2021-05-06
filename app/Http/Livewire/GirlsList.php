<?php

namespace App\Http\Livewire;

use App\Models\Publication;
use Livewire\Component;

class GirlsList extends Component
{
    public function render()
    {
        // $girls = Publication::latest()->with('image')->with('user')->take(14)->where('active', 1)->get();
        $publications = Publication::latest()->with('image')->with('user')->where('active', 1)->paginate(9);
        return view('livewire.girls-list', compact('publications'));
    }
}

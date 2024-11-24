<?php
namespace Modules\Testimony\Http\Livewire;

use Livewire\Component;
use Modules\Testimony\Models\Testimony;

class RecentsTestimony extends Component
{
    public $limit;

    public function render()
    {
        $limit = $this->limit;

        $limit = $limit > 0 ? $limit : 5;

        $recentTestimonies = Testimony::recentlyPublished()->take($limit)->get();

        return view('testimony::frontend.testimonies.components.recent-testimonies', compact('recentTestimonies'));
    }
}

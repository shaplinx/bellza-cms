<?php
namespace Modules\Doctor\Http\Livewire;

use Livewire\Component;
use Modules\Doctor\Models\Doctor;

class RecentDoctors extends Component
{
    public $limit;

    public function render()
    {
        $limit = $this->limit;

        $limit = $limit > 0 ? $limit : 8;

        $recentDoctors = Doctor::recentlyPublished()->take($limit)->get();

        return view('doctor::frontend.doctors.components.recent-doctors', compact('recentDoctors'));
    }
}

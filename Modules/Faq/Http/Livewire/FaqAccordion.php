<?php
namespace Modules\Faq\Http\Livewire;

use Livewire\Component;
use Modules\Faq\Models\Faq;

class FaqAccordion extends Component
{
    public $limit;

    public function render()
    {
        $limit = $this->limit;

        $limit = $limit > 0 ? $limit : 5;

        $recentFaqs = Faq::recentlyPublished()->take($limit)->get();

        return view('faq::frontend.faqs.components.recent-faqs', compact('recentFaqs'));
    }
}

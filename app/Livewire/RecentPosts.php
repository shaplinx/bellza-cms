<?php

namespace App\Livewire;

use Livewire\Component;
use Modules\Post\Models\Post;

class RecentPosts extends Component
{
    public $limit;

    public function render()
    {
        $limit = $this->limit;

        $limit = $limit > 0 ? $limit : 3;

        $recentPosts = Post::recentlyPublished()->take($limit)->get();

        return view('livewire.recent-posts', compact('recentPosts'));
    }
}

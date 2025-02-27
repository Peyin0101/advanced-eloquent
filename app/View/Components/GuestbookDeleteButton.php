<?php

namespace App\View\Components;

use App\Models\GuestbookEntry;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GuestbookDeleteButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public GuestbookEntry $entry
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.guestbook-delete-button');
    }
}
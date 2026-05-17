<?php

namespace App\View\Components;

use App\Models\About as ModelsAbout;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class About extends Component
{
    private ModelsAbout $about;
    /**
     * Create a new component instance.
     */
    public function __construct(ModelsAbout $about)
    {
        $this->about = $about;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about', ['about' => $this->about]);
    }
}

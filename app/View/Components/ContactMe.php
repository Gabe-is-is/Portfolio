<?php

namespace App\View\Components;

use App\Models\Contactinfo;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactMe extends Component
{
    private Contactinfo $contactInfo;
    
    public function __construct(ContactInfo $contactInfo)
    {
        $this->contactInfo = $contactInfo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact-me', ['contactInfo' => $this->contactInfo ]);
    }
}

<?php

namespace App\View\Components\Broadcasts;

use Illuminate\View\Component;

class Menu extends Component
{
    
    public $activeMenu;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($activeMenu)
    {
        $this->activeMenu = $activeMenu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.broadcasts.menu');
    }
    
    public function menuClassFor($menuName) {
        if ($this->activeMenu == $menuName) {
            return 'active';
        } 
        return '';
    }
}

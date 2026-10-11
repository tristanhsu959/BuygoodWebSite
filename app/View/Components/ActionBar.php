<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class ActionBar extends Component
{
	/**
     * Create a new component instance.
     */
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
		#$profile = $this->_getProfile();
		
        return view('components.action-bar', []);
    }
	
	private function _getProfile()
	{
		$data = [];
		$data['profile'] = AppManager::getCurrentUser()->toArray();
		$data['options']['area'] = Area::options();
		$data['options']['signoutRoute'] = route('signout');
		$data['options']['updateRoute'] = route('profile.update.post');
		
		return $data;
	}
}

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
		$menus = $this->getMenus();
		return view('components.action-bar')->with('menus', $menus);
    }
	
	private function getMenus()
	{
		$config = config('web.menu');
		
		$menus = collect($config)->map(function($item, $key){
			$temp['name'] 	= $item['name'];
			$temp['style'] 	= $item['style'];
			$temp['url'] 	= $item['iconLink'] ? $item['routeName'] : route($item['routeName']);
			
			return $temp;
		})->toArray();
		
		return $menus;
	}
}

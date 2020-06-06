<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{

  public $title;

  public $breadcrumbs;

  /**
   * Create a new component instance.
   *
   * @param $title
   * @param $breadcrumbs
   */
    public function __construct(String $title, Array $breadcrumbs)
    {
        $this->title = $title;
        $this->breadcrumbs = $breadcrumbs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.breadcrumb');
    }
}

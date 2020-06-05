<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OurLatestWorks extends Component
{
  public $grey;

  /**
   * Create a new component instance.
   *
   * @param bool $grey
   */
    public function __construct($grey = false)
    {
        $this->grey = $grey;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.our-latest-works');
    }
}

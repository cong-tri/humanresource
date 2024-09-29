<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $name;
    public $type;
    public $label;
    public $classnameDiv;
    public $classnameInput;
    public $classnameLabel;
    public $placeholder;
    public $rows;
    public $maxlength;
    public $readonly;
    public $value;
    public $autofocus;
    public $autocomplete;
    public function __construct(
        $id,
        $name,
        $type = 'text',
        $label = null,
        $classnameDiv = '',
        $classnameInput = '',
        $classnameLabel = '',
        $placeholder = '',
        $rows = null,
        $maxlength = null,
        $readonly = false,
        $value = null,
        $autofocus = false,
        $autocomplete = 'off')
    {
        //
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->classnameDiv = $classnameDiv;
        $this->classnameInput = $classnameInput;
        $this->classnameLabel = $classnameLabel;
        $this->placeholder = $placeholder;
        $this->rows = $rows;
        $this->maxlength = $maxlength;
        $this->readonly = $readonly;
        $this->value = $value;
        $this->autofocus = $autofocus;
        $this->autocomplete = $autocomplete;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-field');
    }
}

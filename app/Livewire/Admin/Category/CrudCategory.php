<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Attributes\Layout;
use Livewire\Component;
use function Livewire\Volt\layout;

#[Layout('components.layouts.app')]
class CrudCategory extends Component
{
    public function render()
    {
        return view('livewire.admin.category.crud-category', [
            'categories' => Category::all(),
        ]);
    }
}

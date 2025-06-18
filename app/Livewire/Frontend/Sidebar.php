<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\Category;
use App\Models\Admin\SuperCategory;
use Livewire\Component;

class Sidebar extends Component
{
    public $categories;

    public function mount()
    {
        $category_code = request()->route('RootCategoryCode') ?? '52';
        logger()->debug('➡️ Kategorie kód ze URL:', [$category_code]);

        // Najdi podřízené superkategorie (např. "PC a notebooky")
        $this->categories = \App\Models\Admin\SuperCategory::where('ParentSuperCategoryCode', $category_code)
            ->with('childrenCategory') // připojíme všechny kategorie
            ->get();

        logger()->debug('🧩 Počet nalezených podřízených superkategorií:', [$this->categories->count()]);

        foreach ($this->categories as $cat) {
            logger()->debug('📁 SuperKategorie:', [
                'Název' => $cat->SuperCategoryName,
                'Kód' => $cat->SuperCategoryCode,
                'Počet childrenCategory' => $cat->childrenCategory->count(),
            ]);
        }
    }

    public function render()
    {
        return view('livewire.frontend.sidebar',[
            'categories' => $this->categories,
        ]);
    }
}

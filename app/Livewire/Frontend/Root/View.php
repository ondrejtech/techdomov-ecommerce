<?php

namespace App\Livewire\Frontend\Root;

use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\ShoppingCart;
use App\Models\Admin\SuperCategory;
use Livewire\Component;
use Livewire\WithPagination;

class View extends Component
{
    use WithPagination;
    public $products;

    public function mount()
    {
        $this->fetchProducts();
    }

    public function fetchProducts()
    {
        $categoryCode = request()->route()->RootCategoryCode;
        $superCategory = SuperCategory::where('ParentSuperCategoryCode', $categoryCode)->get();
        $superCategory = $superCategory->pluck('SuperCategoryCode');
        $category = Category::whereIn('SuperCategoryCode', $superCategory->all())->get();

        $paginator = Product::whereIn('CategoryCode', $category->pluck('CategoryCode'))
            ->with(['images' => function($query) {
                $query->limit(1);
            }])
            ->paginate(20);

        $this->products = [
            'data' => $paginator->items(), // Aktuální stránka jako pole
            'links' => $paginator->links()->render(), // Renderovaná stránkovací navigace
        ];
    }


    public function updatedPage()
    {
        $this->fetchProducts();
    }

    public function render()
    {
        return view('livewire.frontend.root.view');
    }

    public function addNewBasket($ProId, $quantity = 1)
    {
        // Zkontroluj, jestli už produkt není v košíku
        $shoppingCart = ShoppingCart::where('ProId', $ProId)
            ->where('user_id', auth()->id())
            ->first();

        if ($shoppingCart) {
            // Pokud produkt v košíku je, zvýšíme jeho množství
            $shoppingCart->quantity = $shoppingCart->quantity + $quantity;
            $shoppingCart->save();

            $this->dispatch('message', [
                'text' => 'Zboží bylo úspěšně přidáno do košíku',
                'type' => 'success',
                'status' => '200',
            ]);
            return redirect()->route('shopping-cart');
        } else {
            // Pokud produkt v košíku není, přidáme nový
            ShoppingCart::create([
                'ProId' => $ProId,
                'user_id' => auth()->id(),
                'quantity' => $quantity,
            ]);

            $this->getShoppingCartCount();
            $this->dispatch('getShoppingCartCount', ['newCount' => $this->itemCount]);

            $this->dispatch('message', [
                'text' => 'Zboží bylo úspěšně přidáno do košíku',
                'type' => 'success',
                'status' => '200',
            ]);

            return redirect()->route('shopping-cart');
        }

    }

    public function getShoppingCartCount()
    {
        $user_id = auth()->user()->id;
        $this->itemCount = ShoppingCart::where('user_id', $user_id)->count();
    }
}

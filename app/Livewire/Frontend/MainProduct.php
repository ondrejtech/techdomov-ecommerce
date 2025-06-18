<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\Product;
use App\Models\Admin\ShoppingCart;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class MainProduct extends Component
{
    use WithPagination;
    public $laptops;

    public function mount()
    {
        $this->fetchLaptops();
    }

    public function fetchLaptops()
    {
        $paginator = Product::where('CategoryCode', 115)
            ->with(['images' => function($query) {
                $query->limit(1);
            }])
            ->paginate(20);

        // Konvertuje na pole, aby Livewire neměl problém s objektem Paginator
        $this->laptops = [
            'data' => $paginator->items(), // Aktuální stránka jako pole
            'links' => $paginator->links()->render(), // Renderovaná stránkovací navigace
        ];
    }

    public function updatedPage()
    {
        $this->fetchLaptops();
    }

    public function render()
    {
        return view('livewire.frontend.main-product', [
            'laptops' => $this->laptops
        ]);
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


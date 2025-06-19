<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\ShoppingCart;
use App\Models\Admin\Product;
use League\Flysystem\UrlGeneration\ShardedPrefixPublicUrlGenerator;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product, $productDetailTabs, $ProId,$itemCount;
    public $activeTab = 0; // Výchozí aktivní záložka
    public $quantity = 1;


    public function mount()
    {
        if (!auth()->check()) {
            return redirect()->to(env('APP_URL')."admin/login"); // Funguje v Livewire
        }

        $this->productDetailTabs = [
            'Parametry',
            'Logické informace',
            'Příslušenství',
            'Hodnocení'
        ];
        $proId = request()->route('ProId');
        $this->product = Product::with('images')->with('logisticData')->where('ProId', $proId)->firstOrFail();
    }

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function render()
    {
        return view('livewire.frontend.product-detail', [
            'product' => $this->product,
            'activeTab' => $this->activeTab,
            'productDetailTabs' => $this->productDetailTabs,
            'quantity' => $this->quantity,
        ]);
    }

    public function addNewBasket()
    {
        // Zkontroluj, jestli už produkt není v košíku
        $shoppingCart = ShoppingCart::where('ProId', $this->product->ProId)
            ->where('user_id', auth()->id())
            ->first();

        if ($shoppingCart) {
            // Pokud produkt v košíku je, zvýšíme jeho množství
            $shoppingCart->quantity = $shoppingCart->quantity + $this->quantity;
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
                'ProId' => $this->product->ProId,
                'user_id' => auth()->id(),
                'quantity' => $this->quantity,
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

    public function incrementQuantity()
    {
        $this->quantity++;
        $this->dispatch('message',[
            'text' => 'Množství bylo úspěšně zvýšeno',
            'type' => 'success',
            'status' => '200',
        ]);
    }

    public function decrementQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
            $this->dispatch('message',[
                'text' => 'Množství bylo úspěšně sníženo',
                'type' => 'success',
                'status' => '200',
            ]);
        }else{
            $this->quantity = 1;
            $this->dispatch('message',[
                'text' => 'Množství nesmí být menší než 1',
                'type' => 'error',
                'status' => '404',
            ]);
        }

    }

    public function getShoppingCartCount()
    {
        $user_id = auth()->user()->id;
        $this->itemCount = ShoppingCart::where('user_id', $user_id)->count();
    }
}


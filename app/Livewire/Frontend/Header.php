<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Models\Admin\ShoppingCart;
use App\Models\Admin\SuperCategory;
use Illuminate\Support\Facades\Auth;

class Header extends Component
{
    public $subcategories, $categories, $total, $itemCount;

    public $search = '';

    public function mount()
    {
        $this->categories = SuperCategory::where('ParentSuperCategoryCode', 0)->with('children.childrenCategory')->get();
        $this->getTotalPrice();
        $this->getShoppingCartCount();
    }

    public function render()
    {
        $products = [];

        if(strlen($this->search) >=1){
            $products = Product::where('Name','like','%'.$this->search.'%')->limit(10)->get();
        }

        return view('livewire.frontend.header',[
            'categories' => $this->categories,
            'products' => $products,
        ]);
    }

    public function getTotalPrice()
    {
        $this->total = 0;
        if(auth()->check()){
            $user_id = auth()->user()->id;


            // Získání všech položek v košíku pro aktuálního uživatele
            $cartItems = ShoppingCart::where('user_id', $user_id)->with('products')->get();

            // Procházení všech položek a výpočet celkové ceny
            foreach ($cartItems as $item) {
                // Ujistěte se, že produkt existuje a má cenu
                if ($item->products) {
                    $this->total += $item->products->YourPriceWithFees * $item->quantity;
                }
            }
        }else{
            $this->total = 0;
        }

        // Můžete také použít dd pro debugging, ale to by mělo být odstraněno po testování
//        dd($this->total);
    }

    public function getShoppingCartCount()
    {
        if(auth()->check()){
            $user_id = auth()->user()->id;
            $this->itemCount = ShoppingCart::where('user_id', $user_id)->count();
        }else{
            $this->itemCount = 0;
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}

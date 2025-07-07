<?php

namespace App\Livewire\Frontend;

use App\Models\User;
use Livewire\Component;
use App\Models\Admin\Product;
use Livewire\Attributes\Rule;
use App\Models\Admin\ShoppingCart;
use League\Flysystem\UrlGeneration\ShardedPrefixPublicUrlGenerator;

class ProductDetail extends Component
{
    public $product, $productDetailTabs, $ProId, $itemCount;
    public $activeTab = 0; // Výchozí aktivní záložka
    public $quantity = 1;
    public $showModal = false;

    #[Rule('nullable|string|max:20')]
    public string $ico = '';

    #[Rule('nullable|string|max:100')]
    public string $companyName = '';

    #[Rule('nullable|string|max:20')]
    public string $dic = '';

    #[Rule('required|string|max:100')]
    public string $street = '';

    #[Rule('required|string|max:100')]
    public string $city = '';

    #[Rule('required|string|max:7')]
    public string $zip = '';

    #[Rule('required|string')]
    public string $country = 'Czech Republic';

    #[Rule('required|string|max:20')]
    public string $firstName = '';

    #[Rule('required|string|max:100')]
    public string $lastName = '';

    #[Rule('required|string|max:20')]
    public string $phone = '';

    #[Rule('required|email|max:100|unique:users,email')]
    public string $email = '';

    #[Rule('nullable|string|max:255')]
    public string $note = '';

    #[Rule('required|string|min:6|max:100')]
    public string $password = '';

    #[Rule('required|string|min:6|max:100')]
    public string $confirm_password = '';

    public function register()
    {
        $this->validate();

        // Ověření, že hesla se shodují
        if ($this->password !== $this->confirm_password) {
            $this->addError('confirm_password', 'Hesla se neshodují.');
            return;
        }

        User::create([
            'name' => $this->firstName,
            'surname' => $this->lastName,
            'phone' => $this->phone,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'ic' => $this->ico,
            'dic' => $this->dic,
            'company_name' => $this->companyName,
            'address' => $this->street,
            'city' => $this->city,
            'postcode' => $this->zip,
            'state' => $this->country,
            'note' => $this->note,
        ]);

        return redirect()->route('admin.login');
    }


    public function mount()
    {
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
        if (auth()->check()) {
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
        } else {
            $this->showModal = true;
        }

    }

    public function incrementQuantity()
    {
        $this->quantity++;
        $this->dispatch('message', [
            'text' => 'Množství bylo úspěšně zvýšeno',
            'type' => 'success',
            'status' => '200',
        ]);
    }

    public function decrementQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
            $this->dispatch('message', [
                'text' => 'Množství bylo úspěšně sníženo',
                'type' => 'success',
                'status' => '200',
            ]);
        } else {
            $this->quantity = 1;
            $this->dispatch('message', [
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

    public function closeModal()
    {
        $this->showModal = false;
    }

}


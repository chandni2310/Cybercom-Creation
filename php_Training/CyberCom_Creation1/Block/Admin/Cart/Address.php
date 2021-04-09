<?php 
namespace Block\Admin\Cart;

class Address extends \Block\Core\Template{
    protected $cart = null;


    public function __construct(){
        parent::__construct();
        $this->setTemplate('./View/admin/cart/address.php');
    }


    public function getCart()
    {
        return $this->cart;
    }

    public function setCart($cart)
    {
        $this->cart = $cart;
        return $this;
    }

    public function getCartBillingAddress()
    {
        $cart = $this->getCart();

        $cartAddress = \Mage::getModel('Model\Cart\Address');
        if (!$cart) {
            return $cartAddress;
        }
        $billingAddress = $cart->getBillingAddress();
        if ($billingAddress) {
            return $billingAddress;
        }

        $customer = $cart->getCustomer();
        if ($customer) {
            $address = $customer->getBillingAddress();

            if ($address) {
                $cartAddress->cartId = $cart->cartId;
                $cartAddress->country = $address->country;
                $cartAddress->city = $address->city;
                $cartAddress->state = $address->state;
                $cartAddress->address = $address->address;
                $cartAddress->zipcode = $address->zipcode;
                $cartAddress->addressType = $address->addressType;
                $cartAddress->save();
                return $cartAddress;
            } else {
                return $cartAddress;
            }
        } else {
            return $cartAddress;
        }
    }

    public function getCartShippingAddress()
    {
        $cart = $this->getCart();

        $cartAddress = \Mage::getModel('Model\Cart\Address');
        if (!$cart) {
            return $cartAddress;
        }
        $shippingAddress = $cart->getShippingAddress();
        if ($shippingAddress) {
            return $shippingAddress;
        }

        $customer = $cart->getCustomer();
        if ($customer) {
            $address = $customer->getShippingAddress();

            if ($address) {
                $cartAddress->cartId = $cart->cartId;
                $cartAddress->country = $address->country;
                $cartAddress->city = $address->city;
                $cartAddress->state = $address->state;
                $cartAddress->zipcode = $address->zipcode;
                $cartAddress->address = $address->address;
                $cartAddress->addressType = $address->addressType;
                $cartAddress->save();
                return $cartAddress;
            } else {
                return $cartAddress;
            }
        } else {
            return $cartAddress;
        }
    }
}


?>
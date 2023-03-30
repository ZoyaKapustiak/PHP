<?php
require_once 'User.php';
class Cart {
    private Product $product;
    private UserName $user;
    private array $productList = [];
    private array $components = [];
    private float $totalPrice;
    private float $totalPriceComponents;
    private int $count;

    function __construct($user)
    {
        $this->user = $user;
    }
    public function addProduct(Product $product, int $count): void
    {
        $this->productList[$product->getTitle()] = $product->getPrice();
        $this->count = $count;
        $this->components = $product->getComponents();
        $this->setPriceComponents($this->components);
    }
    public function setPriceComponents($components): void
    {
        $price = 0;
        foreach ($components as $component ) {
            $price += $component->getPrice();
            }
        $this->totalPriceComponents = $price;
    }
    public function getPriceComponents(): float
    {
        return $this->totalPriceComponents;
    }
    public function removeProduct(Product $product): void
    {
            unset($this->productList[$product->getTitle()]);
    }

    /**
     * @return array
     */
    public function getProductList(): array
    {
        return $this->productList;
    }

    /**
     * @param array $productList
     */
    public function setProductList(array $productList): void
    {
        $this->productList = $productList;
    }

    /**
     * @return array
     */
    public function getComponents(): array
    {
        return $this->components;
    }


    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        $productListSum = $this->totalPrice = array_sum($this->productList) * $this->count;
        if($this->totalPriceComponents) {
            $productListSum += $this->totalPriceComponents;
        }
        return $this->totalPrice = $productListSum;
    }

}
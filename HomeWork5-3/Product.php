<?php
require_once 'User.php';
require_once 'Cart.php';
class Product {
    private string $title;
    private float $price;
    private array $components;

    function __construct(string $title, float $price, ?array $components = [])
    {
        $this->title = $title;
        $this->components = $components;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPriceComponent(): void
    {
        $price = 0;
        foreach ($this->components as $component) {
            $price += $component->getPrice();
        }
        $this->price = $price;
    }

    /**
     * @return array
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * @param array $components
     */
    public function setComponents(array $components): void
    {
        $this->components = $components;
    }
}
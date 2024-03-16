<?php

namespace App\Objects;

class OfferObject
{
    public ?int $id;
    public ?int $account_id;
    public ?int $stock_id;
    public ?string $title;
    public ?int $price;

    public function setId(?int $id)
    {
        $this->id = $id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setAccountId(?int $account_id)
    {
        $this->account_id = $account_id;
    }

    public function getAccountId(): ?int
    {
        return $this->account_id;
    }

    public function setStockId(?int $stock_id)
    {
        $this->stock_id = $stock_id;
    }

    public function getStockId(): ?int
    {
        return $this->stock_id;
    }

    public function setTitle(?string $title)
    {
        $this->title = $title;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setPrice(?int $price)
    {
        $this->price = $price;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }
}

<?php

namespace App\Objects;

class OfferObject
{
    public ?int $id;
    public ?int $account_id;
    public ?array $stocks;
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

    public function setStocks(?array $stocks)
    {
        $this->stocks = $stocks;
    }

    public function getStocks(): ?array
    {
        return $this->stocks;
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

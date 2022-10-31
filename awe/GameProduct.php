<?php

namespace awe;

class GameProduct extends ShopProduct
{
    private $rating;

    public function __construct(
        string $id,
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $rating,
    )
    {
        parent::__construct(
            $id,
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->rating = $rating;
    }
    public function getpegi()
    {
        return $this->rating;
    }
}
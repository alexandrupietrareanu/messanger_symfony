<?php

namespace App\Message;

class AddPonkaToImage
{

    private $imagePostId;

    public function __construct(int $imagePostid)
    {
        $this->imagePostId = $imagePostid;
    }

    public function getImagePostId(): int
    {
        return $this->imagePostId;
    }
}
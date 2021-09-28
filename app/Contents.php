<?php

namespace App;

class Contents
{
    private string $link;
    private array $content = [];

    public function __construct(string $link)
    {
        $this->link = $link;
        $this->content = json_decode(file_get_contents($this->link), true);
    }

    public function getData()
    {
        return $this->content;
    }
}

<?php
namespace App\DTO;
use Spatie\LaravelData\Data;
Class CategoryDTO extends Data
{
    public function __construct(public string $name,public string $description)
    {
    }
}
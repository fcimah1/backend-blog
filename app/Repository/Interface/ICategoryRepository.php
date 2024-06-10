<?php
    namespace App\Repository\Interface;
    use App\DTO\CategoryDTO;

    interface ICategoryRepository
    {
        public function store(CategoryDTO $categoryDTO):bool;
        public function update(CategoryDTO $categoryDTO,int $id):bool;
        public function delete(int $id):bool;
        public function getAll():mixed;
        public function findById(int $id):mixed;
    }

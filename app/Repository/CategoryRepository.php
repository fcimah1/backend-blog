<?php
namespace App\Repository;
use App\DTO\CategoryDTO;
use App\Models\Category;
use App\Repository\Interface\ICategoryRepository;

    class CategoryRepository implements ICategoryRepository
    {
        public function store(CategoryDTO $categoryDTO):bool
        {
            if(Category::create($categoryDTO->toArray()))
            {
                return true;
            }
            return false;
        }
        public function update(CategoryDTO $categoryDTO,int $id):bool
        {
            $category = Category::findOrFail($id);
            $updated = $category->whereId($id)->update($categoryDTO->toArray());
            if($updated)
            {
                return true;
            }
            return false;
        }
        public function delete(int $id):bool
        {
            $category = Category::findOrFail($id);
            if($category->delete())
            {
                return true;
            }
            return false;
        }
        public function getAll():mixed
        {
            return Category::all();
        }

        public function findById(int $id):mixed
        {
            return Category::findOrFail($id);
        }
    }
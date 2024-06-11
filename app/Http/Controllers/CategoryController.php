<?php

namespace App\Http\Controllers;

use App\DTO\CategoryDTO;
use App\Http\Requests\CreateCategoryRequest;
use App\Repository\Interface\ICategoryRepository;

class CategoryController extends Controller
{
    protected $category;
    public function __construct(ICategoryRepository $categoryRepository)
    {
        $this->category = $categoryRepository;
    }

    // Display a listing of the resource.
    public function index()
    {
        $categories = $this->category->getAll();
        return view('dashboard.category.index', ['categories' => $categories]);
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('dashboard.category.create');
    }

    // Store a newly created resource in storage.
    public function store(CreateCategoryRequest $createCategoryRequest)
    {
        $categoryDTO = CategoryDTO::from($createCategoryRequest->all());
        $this->category->store($categoryDTO);
        return redirect()->route('category.index');
    }

    // Show the form for editing the specified resource.
    public function edit(string $id)
    {
        $selectedCategory = $this->category->findById($id);
        return view('dashboard.category.edit', ['category' => $selectedCategory]);
    }

    // Update the specified resource in storage.
    public function update(CreateCategoryRequest $createCategoryRequest , int $id)
    {
        $categoryDTO = CategoryDTO::from($createCategoryRequest->all());
        $updated = $this->category->update($categoryDTO, $id);
        if($updated){
            return redirect()->route('category.index');
        }
    }
    
    //Remove the specified resource from storage.
    public function destroy(int $id)
    {
        if($this->category->delete($id)){
            return redirect()->back();
        }
    }
}

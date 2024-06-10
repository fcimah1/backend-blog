<?php
    namespace App\Repository\Interface;

use App\DTO\PostDTO;

    interface IPostRepository
        {
            public function getAllCategories();
            public function getAllPosts();
            public function getAllUsers();
            public function getById(int $id):object;
            public function create(PostDTO $postDTO):bool;
            public function update(PostDTO $postDTO, $id);                
           public function delete($id):bool;
        }
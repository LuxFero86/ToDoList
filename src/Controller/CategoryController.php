<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Service\CategoryService;

class CategoryController extends AbstractController {

    // Attributes
    private CategoryService $categoryService;

    // Constructor
    public function __construct() {
        $this->categoryService = new CategoryService();
    }

    // Methods
    public function showAllCategory(): mixed {
        // Récupérer toutes les categories
        $categories = $this->categoryService->getAllCategories();

        return $this->render("show_all_categories", "Categories", $categories);
    }

    public function createCategory(): mixed {
        $data= [];
        // Test si le formulaire est soumis
        if (isset($_POST["submit"])) {
            // Ajout de la categorie
            $data["msg"] =  $this->categoryService->insertCategory($_POST);
        }

        return $this->render("add_category", "Ajouter Category", $data);
    }
}

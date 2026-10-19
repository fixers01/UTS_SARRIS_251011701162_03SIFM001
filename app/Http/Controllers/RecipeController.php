<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function home(): View
    {
        $featuredRecipes = Recipe::query()->orderBy('name')->limit(3)->get();

        return view('home', compact('featuredRecipes'));
    }

    public function index(Request $request): View
    {
        $search = $request->string('q')->trim()->toString();

        $recipes = Recipe::query()
            ->when($search !== '', function (Builder $query) use ($search): void {
                $query->where(function (Builder $query) use ($search): void {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('category', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%")
                        ->orWhere('ingredients', 'like', "%{$search}%");
                });
            })
            ->orderBy('name')
            ->paginate(3)
            ->withQueryString();

        $categoryName = null;

        return view('recipes.index', compact('recipes', 'search', 'categoryName'));
    }

    public function category(string $category): View
    {
        $categoryName = match ($category) {
            'makanan-utama' => 'Makanan Utama',
            'minuman' => 'Minuman',
            default => abort(404),
        };

        $recipes = Recipe::query()
            ->where('category', $categoryName)
            ->orderBy('name')
            ->paginate(3)
            ->withQueryString();
        $search = '';

        return view('recipes.index', compact('recipes', 'search', 'categoryName'));
    }

    public function show(Recipe $recipe): View
    {
        return view('recipes.show', compact('recipe'));
    }
}

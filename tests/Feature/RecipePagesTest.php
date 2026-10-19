<?php

namespace Tests\Feature;

use App\Models\Recipe;
use Database\Seeders\RecipeSeeder;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class RecipePagesTest extends TestCase
{
    use LazilyRefreshDatabase;

    public function test_search_returns_matching_recipes_and_preserves_the_query(): void
    {
        $this->seed(RecipeSeeder::class);

        $this->get(route('recipes.index', ['q' => 'Sate']))
            ->assertOk()
            ->assertSee('Sate Ayam Madura')
            ->assertDontSee('Nasi Goreng Spesial')
            ->assertSee('value="Sate"', false);
    }

    public function test_seeder_includes_at_least_ten_foods_and_five_drinks(): void
    {
        $this->seed(RecipeSeeder::class);

        $this->assertGreaterThanOrEqual(10, DB::table('recipes')->where('category', 'Makanan Utama')->count());
        $this->assertGreaterThanOrEqual(5, DB::table('recipes')->where('category', 'Minuman')->count());
    }

    public function test_navigation_links_to_home_recipes_categories_and_about(): void
    {
        $this->seed(RecipeSeeder::class);

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Beranda')
            ->assertSee('Semua Resep')
            ->assertSee('Kategori')
            ->assertSee('Tentang')
            ->assertSee('href="'.route('recipes.index').'"', false)
            ->assertSee('href="'.route('about').'"', false)
            ->assertSee('href="'.route('recipes.category', 'makanan-utama').'"', false)
            ->assertSee('href="'.route('recipes.category', 'minuman').'"', false);
    }

    public function test_home_and_about_render_as_separate_pages(): void
    {
        $this->seed(RecipeSeeder::class);

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Dapur Nusantara')
            ->assertDontSee('Profil proyek');

        $this->get(route('about'))
            ->assertOk()
            ->assertSee('Profil proyek')
            ->assertSee('proyek UTS pengembangan aplikasi web')
            ->assertSee('bukan layanan pemesanan makanan');
    }

    public function test_category_page_only_shows_recipes_in_that_category(): void
    {
        $this->seed(RecipeSeeder::class);

        $this->get(route('recipes.category', 'minuman'))
            ->assertOk()
            ->assertSee('Bajigur')
            ->assertSee('Es Cendol')
            ->assertSee('Es Doger')
            ->assertDontSee('Es Teh Manis')
            ->assertDontSee('Wedang Jahe')
            ->assertDontSee('Sate Ayam Madura');
    }

    public function test_recipe_detail_displays_description_ingredients_steps_and_price(): void
    {
        $this->seed(RecipeSeeder::class);
        $recipe = Recipe::query()->where('name', 'Nasi Goreng Spesial')->firstOrFail();

        $this->get(route('recipes.show', $recipe))
            ->assertOk()
            ->assertSee('Nasi goreng rumahan')
            ->assertSee('Bawang merah')
            ->assertSee('Tumis bawang merah dan bawang putih')
            ->assertSee('Rp18.000');
    }

    public function test_recipe_list_shows_three_recipes_per_page(): void
    {
        $additionalRecipes = collect(range(1, 7))
            ->map(fn (int $number): array => [
                'name' => sprintf('Zzz Test Recipe %02d', $number),
                'description' => 'Resep tambahan untuk pengujian pagination.',
                'ingredients' => 'Bahan uji',
                'steps' => 'Langkah uji',
                'cook_time' => 10,
                'image' => '',
                'category' => 'Uji',
                'price' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ])
            ->all();

        DB::table('recipes')->insert($additionalRecipes);

        $response = $this->get(route('recipes.index', ['page' => 2]));

        $response->assertOk()
            ->assertSee('Menampilkan 4–6 dari 7 resep')
            ->assertSee('Zzz Test Recipe 04')
            ->assertSee('Zzz Test Recipe 05')
            ->assertSee('Zzz Test Recipe 06')
            ->assertDontSee('Zzz Test Recipe 07')
            ->assertSee('page-item active', false)
            ->assertSeeInOrder(['class="pagination"', 'Zzz Test Recipe 04'], false);
    }
}

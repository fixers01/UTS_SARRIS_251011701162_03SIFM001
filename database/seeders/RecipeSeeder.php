<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        $recipes = [
            [
                'name' => 'Nasi Goreng Spesial',
                'description' => 'Nasi goreng rumahan dengan telur, sosis, bakso, dan sentuhan kecap manis.',
                'ingredients' => 'Nasi putih, Telur, Bawang merah, Bawang putih, Kecap manis, Sosis, Bakso',
                'steps' => "1. Tumis bawang merah dan bawang putih hingga harum.\n2. Masukkan telur, lalu orak-arik.\n3. Tambahkan nasi, sosis, dan bakso.\n4. Beri kecap dan bumbu, lalu aduk rata.\n5. Sajikan selagi hangat.",
                'cook_time' => 15,
                'image' => 'nasi-goreng.jpg',
                'category' => 'Makanan Utama',
                'price' => 18000,
            ],
            [
                'name' => 'Sate Ayam Madura',
                'description' => 'Sate ayam bakar dengan saus kacang gurih, kecap manis, dan jeruk limau.',
                'ingredients' => 'Daging ayam, Kecap manis, Kacang tanah, Bawang putih, Cabai, Jeruk limau',
                'steps' => "1. Potong ayam dan tusuk pada tusukan sate.\n2. Bakar hingga setengah matang.\n3. Olesi dengan bumbu kacang dan kecap.\n4. Bakar kembali hingga matang.\n5. Sajikan dengan lontong dan jeruk limau.",
                'cook_time' => 30,
                'image' => 'sate-ayam.jpg',
                'category' => 'Makanan Utama',
                'price' => 25000,
            ],
            [
                'name' => 'Rendang Padang',
                'description' => 'Daging sapi yang dimasak perlahan dengan santan dan rempah khas Minangkabau.',
                'ingredients' => 'Daging sapi, Santan, Cabai merah, Bawang merah, Bawang putih, Serai, Lengkuas, Daun jeruk',
                'steps' => "1. Haluskan cabai dan bawang, lalu tumis bersama rempah hingga harum.\n2. Masukkan daging sapi dan aduk hingga berubah warna.\n3. Tuangkan santan, lalu masak dengan api kecil.\n4. Aduk sesekali hingga kuah mengering dan daging empuk.\n5. Sajikan dengan nasi hangat.",
                'cook_time' => 180,
                'image' => 'rendang.jpg',
                'category' => 'Makanan Utama',
                'price' => 35000,
            ],
            [
                'name' => 'Gudeg Jogja',
                'description' => 'Nangka muda yang dimasak lama dengan santan dan gula jawa, disajikan bersama pelengkap.',
                'ingredients' => 'Nangka muda, Santan, Gula jawa, Daun salam, Lengkuas, Telur, Krecek',
                'steps' => "1. Rebus nangka muda hingga mulai empuk, lalu tiriskan.\n2. Tata nangka, daun salam, dan lengkuas di dalam panci.\n3. Tuangkan santan dan tambahkan gula jawa serta bumbu.\n4. Masak dengan api kecil hingga meresap dan berwarna kecokelatan.\n5. Sajikan dengan telur dan sambal krecek.",
                'cook_time' => 120,
                'image' => 'gudeg.jpg',
                'category' => 'Makanan Utama',
                'price' => 22000,
            ],
            [
                'name' => 'Soto Betawi',
                'description' => 'Soto khas Jakarta dengan kuah santan gurih, daging sapi, dan taburan emping.',
                'ingredients' => 'Daging sapi, Santan, Susu, Bawang merah, Bawang putih, Serai, Daun jeruk, Emping',
                'steps' => "1. Rebus daging sapi hingga empuk, lalu potong-potong.\n2. Tumis bumbu halus bersama serai dan daun jeruk.\n3. Masukkan bumbu ke dalam kaldu, lalu tambahkan santan dan susu.\n4. Masak sambil diaduk hingga kuah mendidih.\n5. Sajikan dengan daging, tomat, dan emping.",
                'cook_time' => 75,
                'image' => 'soto-betawi.jpg',
                'category' => 'Makanan Utama',
                'price' => 28000,
            ],
            [
                'name' => 'Pempek Palembang',
                'description' => 'Olahan ikan dan sagu khas Palembang yang disajikan dengan kuah cuko asam-manis-pedas.',
                'ingredients' => 'Ikan tenggiri, Tepung sagu, Air es, Garam, Gula merah, Asam jawa, Cabai rawit, Bawang putih',
                'steps' => "1. Campur ikan giling dengan air es dan garam hingga rata.\n2. Tambahkan tepung sagu sedikit demi sedikit, lalu bentuk adonan.\n3. Rebus pempek hingga mengapung, kemudian tiriskan.\n4. Rebus gula merah, asam jawa, cabai, dan bawang putih untuk membuat cuko.\n5. Goreng pempek dan sajikan dengan cuko.",
                'cook_time' => 60,
                'image' => 'pempek.jpg',
                'category' => 'Makanan Utama',
                'price' => 20000,
            ],
            [
                'name' => 'Rawon Surabaya',
                'description' => 'Sup daging sapi berkuah hitam dari kluwek dengan aroma rempah yang khas.',
                'ingredients' => 'Daging sapi, Kluwek, Bawang merah, Bawang putih, Serai, Lengkuas, Daun jeruk, Tauge pendek',
                'steps' => "1. Rebus daging sapi hingga empuk dan simpan kaldunya.\n2. Haluskan kluwek bersama bawang dan bumbu lainnya.\n3. Tumis bumbu hingga harum, lalu masukkan ke dalam kaldu.\n4. Tambahkan daging dan masak hingga bumbu meresap.\n5. Sajikan dengan nasi, tauge pendek, dan telur asin.",
                'cook_time' => 90,
                'image' => 'rawon.jpg',
                'category' => 'Makanan Utama',
                'price' => 27000,
            ],
            [
                'name' => 'Ayam Betutu Bali',
                'description' => 'Ayam berbumbu base genep yang dimasak perlahan hingga rempah meresap.',
                'ingredients' => 'Ayam, Bawang merah, Bawang putih, Cabai, Jahe, Kunyit, Kencur, Serai, Daun pisang',
                'steps' => "1. Haluskan bumbu base genep dan tumis hingga harum.\n2. Lumuri ayam dengan bumbu sampai merata.\n3. Bungkus ayam dengan daun pisang.\n4. Kukus atau panggang perlahan hingga ayam matang dan empuk.\n5. Sajikan dengan nasi dan sambal matah.",
                'cook_time' => 120,
                'image' => 'ayam-betutu.jpg',
                'category' => 'Makanan Utama',
                'price' => 32000,
            ],
            [
                'name' => 'Gado-Gado',
                'description' => 'Sayuran rebus dan tahu-tempe dengan saus kacang gurih khas Indonesia.',
                'ingredients' => 'Kangkung, Tauge, Kacang panjang, Kentang, Tahu, Tempe, Kacang tanah, Kecap manis',
                'steps' => "1. Rebus sayuran dan kentang hingga matang, lalu tiriskan.\n2. Goreng tahu dan tempe hingga kecokelatan.\n3. Haluskan kacang tanah goreng bersama bawang putih dan cabai.\n4. Tambahkan air dan kecap, lalu aduk hingga menjadi saus.\n5. Tata sayuran, tahu, dan tempe, kemudian siram dengan saus kacang.",
                'cook_time' => 35,
                'image' => 'gado-gado.jpg',
                'category' => 'Makanan Utama',
                'price' => 18000,
            ],
            [
                'name' => 'Coto Makassar',
                'description' => 'Sup daging dan jeroan dengan kuah rempah kacang khas Makassar.',
                'ingredients' => 'Daging sapi, Jeroan sapi, Kacang tanah, Bawang merah, Bawang putih, Serai, Lengkuas, Ketumbar',
                'steps' => "1. Rebus daging dan jeroan hingga empuk, lalu potong-potong.\n2. Sangrai dan haluskan kacang tanah.\n3. Tumis bumbu halus bersama serai dan lengkuas.\n4. Masukkan bumbu dan kacang ke dalam kaldu, lalu didihkan.\n5. Sajikan kuah bersama daging dan ketupat.",
                'cook_time' => 100,
                'image' => 'coto-makassar.jpg',
                'category' => 'Makanan Utama',
                'price' => 28000,
            ],
            [
                'name' => 'Es Teh Manis',
                'description' => 'Teh hitam dingin dengan rasa manis yang ringan dan menyegarkan.',
                'ingredients' => 'Teh celup, Air panas, Gula pasir, Es batu',
                'steps' => "1. Seduh teh dengan air panas hingga pekat.\n2. Tambahkan gula dan aduk hingga larut.\n3. Biarkan teh sedikit dingin.\n4. Tuangkan ke gelas berisi es batu.\n5. Sajikan segera.",
                'cook_time' => 5,
                'image' => 'es-teh.jpg',
                'category' => 'Minuman',
                'price' => 5000,
            ],
            [
                'name' => 'Es Cendol',
                'description' => 'Minuman dingin berisi cendol pandan, santan, dan gula jawa cair.',
                'ingredients' => 'Cendol pandan, Santan, Gula jawa, Daun pandan, Garam, Es batu',
                'steps' => "1. Rebus gula jawa dengan sedikit air dan daun pandan hingga larut, lalu dinginkan.\n2. Rebus santan bersama sedikit garam sambil diaduk, lalu dinginkan.\n3. Masukkan cendol dan es batu ke dalam gelas.\n4. Tuangkan santan dan gula jawa sesuai selera.\n5. Sajikan selagi dingin.",
                'cook_time' => 15,
                'image' => 'es-cendol.jpg',
                'category' => 'Minuman',
                'price' => 8000,
            ],
            [
                'name' => 'Wedang Jahe',
                'description' => 'Minuman hangat dari jahe dan gula jawa yang nyaman diminum saat cuaca dingin.',
                'ingredients' => 'Jahe, Gula jawa, Serai, Daun pandan, Air',
                'steps' => "1. Bakar jahe sebentar, lalu memarkan.\n2. Rebus air bersama jahe, serai, dan daun pandan.\n3. Masukkan gula jawa dan aduk hingga larut.\n4. Didihkan selama beberapa menit agar rempah meresap.\n5. Saring dan sajikan hangat.",
                'cook_time' => 20,
                'image' => 'wedang-jahe.jpg',
                'category' => 'Minuman',
                'price' => 7000,
            ],
            [
                'name' => 'Bajigur',
                'description' => 'Minuman tradisional Sunda dari santan, gula aren, dan sedikit jahe.',
                'ingredients' => 'Santan, Gula aren, Jahe, Kayu manis, Kopi, Garam',
                'steps' => "1. Rebus santan dengan jahe dan kayu manis menggunakan api kecil.\n2. Tambahkan gula aren dan sedikit garam.\n3. Aduk perlahan agar santan tidak pecah.\n4. Masukkan sedikit kopi, lalu aduk dan saring.\n5. Sajikan hangat.",
                'cook_time' => 20,
                'image' => 'bajigur.jpg',
                'category' => 'Minuman',
                'price' => 8000,
            ],
            [
                'name' => 'Es Doger',
                'description' => 'Es serut santan khas Jawa Barat dengan tape, ketan hitam, dan potongan roti.',
                'ingredients' => 'Es serut, Santan, Sirup merah, Tape singkong, Ketan hitam, Roti tawar, Susu kental manis',
                'steps' => "1. Campur santan dengan sirup merah, lalu bekukan.\n2. Serut campuran santan beku hingga lembut.\n3. Siapkan tape, ketan hitam, dan potongan roti dalam gelas.\n4. Tambahkan es serut santan.\n5. Tuangkan susu kental manis dan sajikan.",
                'cook_time' => 20,
                'image' => 'es-doger',
                'category' => 'Minuman',
                'price' => 10000,
            ],
        ];

        foreach ($recipes as $recipe) {
            $existingRecipes = DB::table('recipes')->where('name', $recipe['name']);

            if ($existingRecipes->exists()) {
                $existingRecipes->update([
                    ...$recipe,
                    'updated_at' => now(),
                ]);

                continue;
            }

            DB::table('recipes')->insert([
                ...$recipe,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

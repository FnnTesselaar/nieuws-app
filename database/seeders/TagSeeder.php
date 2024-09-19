<?php
namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the article
        $article = Article::create([
            'title' => 'hoi',
            'description' => 'doei',
            'categoriesId' => 1, // Assuming category with ID 1 exists
            'usersId' => 1, // Assuming user with ID 1 exists
        ]);

        // Array of tags to be created
        $tags = [
            [
                'title' => 'Internationaal nieuws',
                'description' => 'Artikelen die gebeurtenissen en ontwikkelingen wereldwijd behandelen.',
            ],
            [
                'title' => 'Politiek',
                'description' => 'Nieuws over politiek, inclusief verkiezingen, beleidsbeslissingen en politieke schandalen.',
            ],
            [
                'title' => 'Economie',
                'description' => 'Updates en analyses over economische trends, de beurs en bedrijfsnieuws.',
            ],
            [
                'title' => 'Sport',
                'description' => 'Nieuws en verslagen van sportevenementen, uitslagen en sporters.',
            ],
            [
                'title' => 'Technologie',
                'description' => 'Informatie over de nieuwste technologische ontwikkelingen en innovaties.',
            ],
            [
                'title' => 'Gezondheid',
                'description' => 'Nieuws over gezondheid, ziekten, medisch onderzoek en gezondheidszorg.',
            ],
            [
                'title' => 'Entertainment',
                'description' => 'Updates over films, muziek, beroemdheden en andere vormen van entertainment.',
            ],
            [
                'title' => 'Wetenschap',
                'description' => 'Nieuws over wetenschappelijke ontdekkingen, onderzoeksstudies en technologische vooruitgang.',
            ],
            [
                'title' => 'Cultuur',
                'description' => 'Artikelen over kunst, literatuur, mode, geschiedenis en etnische diversiteit.',
            ],
            [
                'title' => 'Verkiezingen',
                'description' => 'Nieuws en analyses over nationale en internationale verkiezingen.',
            ],
            [
                'title' => 'Milieu',
                'description' => 'Updates over milieuveranderingen, natuurbescherming en duurzaamheidsinitiatieven.',
            ],
            [
                'title' => 'Sociale media',
                'description' => 'Nieuws over trends en veranderingen binnen sociale mediaplatforms.',
            ],
            [
                'title' => 'Ruimtevaart',
                'description' => 'Nieuws over ruimteverkenning, missies en ontdekkingen in de ruimte.',
            ],
            [
                'title' => 'Voetbal',
                'description' => 'Verslagen en updates over nationale en internationale voetbalwedstrijden.',
            ],
            [
                'title' => 'Gezondheidszorg',
                'description' => 'Nieuws over ziekenhuizen, zorgsystemen en medisch beleid.',
            ],
        ];

        // Create tags and associate with the article
        foreach ($tags as $tagData) {
            $tag = Tag::create($tagData);
            $article->tags()->attach($tag->id);
        }
    }
}

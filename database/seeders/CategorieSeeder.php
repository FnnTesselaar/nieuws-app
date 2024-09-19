<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::create(
            [
                
                'title' => 'Nationaal nieuws',
                'description' => 'Artikelen die gebeurtenissen en ontwikkelingen binnen een bepaald land behandelen.',
            ]
        );
        Categorie::create(
            [
                'title' => 'Internationaal nieuws',
                'description' => 'Artikelen die zich richten op gebeurtenissen en ontwikkelingen in andere landen.',
            ]
        );
        Categorie::create(
            [
                'title' => 'Politiek',
                'description' => 'Nieuws dat zich richt op politieke gebeurtenissen, beleidsbeslissingen, verkiezingen en politieke figuren.',
            ]
        );
        Categorie::create(
            [
                'title' => 'Economie en financiën',
                'description' => ' Artikelen over de economie, bedrijfsnieuws, aandelenmarkten, werkgelegenheid en andere financiële onderwerpen.',
            ]
        );
        Categorie::create(
            [
                'title' => 'Sport',
                'description' => 'Nieuws over sportevenementen, wedstrijden, atleten en sportorganisaties.',
            ]
        );
        Categorie::create(
            [
                'title' => 'Kunst en cultuur',
                'description' => 'Artikelen over muziek, film, literatuur, theater, en andere culturele onderwerpen.',
            ]
        );
        Categorie::create(
            [
                'title' => 'Gezondheid en wetenschap',
                'description' => 'Nieuws over medische doorbraken, gezondheidsadviezen, wetenschappelijk onderzoek en technologische innovaties.',
            ]
        );
        Categorie::create(
            [
                'title' => 'Misdaad en recht',
                'description' => 'Artikelen over misdaadincidenten, politieonderzoeken, rechtszaken en juridische kwesties.',
            ]
        );
        Categorie::create(
            [
                'title' => 'Milieu',
                'description' => 'Nieuws over klimaatverandering, natuurbescherming, milieubeleid en ecologische kwesties.',
            ]
        );
        Categorie::create(
            [
                'title' => 'Lifestyle',
                'description' => 'Artikelen over mode, reizen, eten en drinken, persoonlijke ontwikkeling en andere levensstijlonderwerpen.',
            ]
        );
        Categorie::create(
            [
                'title' => 'Onderwijs',
                'description' => 'Nieuws over scholen, universiteiten, onderwijsbeleid en gerelateerde onderwerpen.',
            ]
        );
        Categorie::create(
            [
                'title' => 'Opinie en columns',
                'description' => 'Stukken waarin de auteur zijn of haar mening geeft over een breed scala aan onderwerpen.',
            ]
        );
        Categorie::create(
            [
                'title' => 'Technologie',
                'description' => 'Nieuws over de laatste technologische ontwikkelingen, gadgets, software en tech-industrie.',
            ]

        );
    }
}

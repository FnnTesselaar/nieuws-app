<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        Article::insert([
            [
                'title'       => 'First News Article',
                'description' => 'In the heart of the bustling city, a remarkable event unfolded last night. The community gathered at the central park to witness the unveiling of the new sculpture that symbolizes unity and hope. Local artists collaborated on this project for months, drawing inspiration from the diverse culture of the city. The event was graced by performances from various cultural groups, creating an atmosphere of celebration and togetherness. This marks a significant moment in the city’s history, promoting the values of inclusion and mutual respect.',
                'usersid'     => 1,
                'categoriesId'=> 2
            ],
            [
                'title'       => 'Second News Article',
                'description' => 'In a groundbreaking move, the tech giant unveiled its latest innovation at a grand event yesterday. The new device, which boasts state-of-the-art features and cutting-edge technology, is set to revolutionize the market. Experts predict that this will be a game-changer in the industry, pushing the boundaries of what is possible. Attendees at the event were impressed by the sleek design and advanced functionalities. The CEO emphasized the company’s commitment to innovation and customer satisfaction, hinting at even more exciting developments in the pipeline.',
                'usersid'     => 1,
                'categoriesId'=> 3
            ],
            [
                'title'       => 'Third News Article',
                'description' => 'The local economy received a much-needed boost following the recent policy changes implemented by the government. Small businesses in the area have reported an increase in activity and revenue, attributing their success to the new measures. These policies aim to reduce bureaucratic hurdles and provide easier access to funding. Business owners expressed their optimism about the future, with many planning expansions and new hires. Economists believe that if this trend continues, it could lead to a significant period of growth and stability for the region.',
                'usersid'     => 1,
                'categoriesId'=> 1
            ],
            [
                'title'       => 'Fourth News Article',
                'description' => 'The championship game last night was nothing short of thrilling. Fans packed the stadium, eager to see their favorite teams clash in a battle of skill and strategy. The underdog team pulled off a stunning victory in the final moments, thanks to a decisive play that left spectators on the edge of their seats. The players’ dedication and hard work throughout the season were evident as they celebrated their hard-earned win. This game will be remembered as one of the most exciting and unexpected upsets in the league’s history.',
                'usersid'     => 1,
                'categoriesId'=> 2
            ],
            [
                'title'       => 'Fifth News Article',
                'description' => 'Medical researchers have made a significant breakthrough in the fight against a widespread disease. After years of intensive study, a new treatment has been developed that shows promising results in clinical trials. Patients who received the treatment experienced remarkable improvements, giving hope to millions affected by the disease. The research team, composed of experts from various fields, worked tirelessly to bring this innovation to fruition. This development represents a major step forward in medical science and could potentially save countless lives.',
                'usersid'     => 1,
                'categoriesId'=> 4
            ],
            [
                'title'       => 'Sixth News Article',
                'description' => 'In a recent cultural event, the community came together to celebrate the rich heritage and traditions that define their identity. The festival featured performances, exhibitions, and workshops that showcased the talents of local artists and performers. Attendees had the opportunity to learn about the history and customs of different cultures through interactive displays and activities. The event fostered a sense of pride and appreciation for the diverse backgrounds that make up the community. Organizers hope to make this an annual tradition, bringing people closer together through shared experiences.',
                'usersid'     => 1,
                'categoriesId'=> 5
            ],
            [
                'title'       => 'Seventh News Article',
                'description' => 'Environmental activists are raising awareness about the urgent need to address climate change. In a recent campaign, they highlighted the impact of pollution and deforestation on local ecosystems. Volunteers participated in a cleanup drive, removing tons of waste from natural habitats and planting trees to restore green spaces. The campaign aims to educate the public on sustainable practices and encourage community involvement in conservation efforts. Through these initiatives, activists hope to inspire positive change and protect the environment for future generations.',
                'usersid'     => 1,
                'categoriesId'=> 3
            ],
            [
                'title'       => 'Eighth News Article',
                'description' => 'The latest mission to explore outer space has been a resounding success. The spacecraft, equipped with advanced technology, sent back detailed images and data from a distant planet. Scientists are thrilled with the findings, which could provide new insights into the origins of our solar system. The mission’s success is a testament to the ingenuity and perseverance of the team behind it. This achievement paves the way for future explorations and brings humanity one step closer to unlocking the mysteries of the universe.',
                'usersid'     => 1,
                'categoriesId'=> 4
            ],
            [
                'title'       => 'Ninth News Article',
                'description' => 'In a series of high-stakes political events, world leaders convened to discuss pressing global issues. The summit focused on fostering international cooperation and addressing challenges such as climate change, economic inequality, and security threats. Delegates worked tirelessly to negotiate agreements and form alliances. The outcomes of the summit have been hailed as a step forward in promoting peace and stability. Observers noted the importance of collaboration and dialogue in tackling complex global problems, emphasizing the need for continued efforts in diplomacy.',
                'usersid'     => 1,
                'categoriesId'=> 1
            ],
            [
                'title'       => 'Tenth News Article',
                'description' => 'Technological advancements are rapidly transforming society, with new innovations emerging at an unprecedented pace. The latest developments in artificial intelligence, robotics, and biotechnology are opening up new possibilities and reshaping industries. Experts are optimistic about the potential benefits, including improved healthcare, enhanced productivity, and better quality of life. However, they also caution about the ethical and social implications of these technologies. As society navigates these changes, it is crucial to ensure that progress is inclusive and equitable, benefiting all members of the global community.',
                'usersid'     => 1,
                'categoriesId'=> 2
            ]
        ]);
    }
}

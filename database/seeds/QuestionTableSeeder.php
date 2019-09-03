<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        App\Question::create([
        	'title' => 'Votre adresse mail',
        	'question_type' => 'B',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Votre âge',
        	'question_type' => 'B',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Votre sexe',
        	'question_type' => 'A',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Nombre de personne dans votre foyer (adulte & enfants)',
        	'question_type' => 'C',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Votre profession',
        	'question_type' => 'B',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Quel marque de casque VR utilisez vous ?',
        	'question_type' => 'A',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Sur quel magasin d’application achetez vous des contenus VR ?',
        	'question_type' => 'A',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Quel casque envisagez vous d’acheter dans un futur proche ?',
        	'question_type' => 'A',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen
?',
        	'question_type' => 'C',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Vous utilisez principalement Bigscreen pour :',
        	'question_type' => 'A',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?',
        	'question_type' => 'C',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?',
        	'question_type' => 'C',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Combien donnez vous de point pour la connection réseau de Bigscreen ?',
        	'question_type' => 'C',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?',
        	'question_type' => 'C',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Combien donnez vous de point pour la qualité audio dans Bigscreen ?',
        	'question_type' => 'C',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?',
        	'question_type' => 'A',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?',
        	'question_type' => 'A',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?',
        	'question_type' => 'A',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?',
        	'question_type' => 'A',
            'survey_id' => '1'
        ]);

        App\Question::create([
        	'title' => 'Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?',
        	'question_type' => 'B',
            'survey_id' => '1'
        ]);
    }
}

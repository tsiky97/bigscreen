<?php

use Illuminate\Database\Seeder;

class ChoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Choice::create([
        	'choice' => 'Homme',
        	'question_id' => '3',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'Femme',
        	'question_id' => '3',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'Préfère de pas répondre',
        	'question_id' => '3',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'Occulus Rift/s',
        	'question_id' => '6',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'HTC Vive',
        	'question_id' => '6',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'Windows Mixed Reality',
        	'question_id' => '6',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'PSVR',
        	'question_id' => '6',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'SteamVR',
        	'question_id' => '7',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'Occulus store',
        	'question_id' => '7',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'Viveport',
        	'question_id' => '7',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'Playstation VR',
        	'question_id' => '7',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'Google Play',
        	'question_id' => '7',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'Windows store',
        	'question_id' => '7',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'Occulus Quest',
        	'question_id' => '8',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'Occulus Go',
        	'question_id' => '8',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'HTC Vive Pro',
        	'question_id' => '8',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'Autre',
        	'question_id' => '8',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'Aucun',
        	'question_id' => '8',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'regarder des émissions TV en direct',
        	'question_id' => '10',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'regarder des films',
        	'question_id' => '10',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'jouer en solo',
        	'question_id' => '10',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
        	'choice' => 'jouer en team',
        	'question_id' => '10',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
            'choice' => 'Oui',
            'question_id' => '16',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
            'choice' => 'Non',
            'question_id' => '16',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
            'choice' => 'Oui',
            'question_id' => '17',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
            'choice' => 'Non',
            'question_id' => '17',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
            'choice' => 'Oui',
            'question_id' => '18',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
            'choice' => 'Non',
            'question_id' => '18',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
            'choice' => 'Oui',
            'question_id' => '19',
        	'survey_id' => '1'
        ]);

        App\Choice::create([
            'choice' => 'Non',
            'question_id' => '19',
        	'survey_id' => '1'
        ]);
    }
}

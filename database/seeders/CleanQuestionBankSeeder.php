<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QuestionBank;
class CleanQuestionBankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = QuestionBank::get();
        foreach ($questions as $q) {
            $cleanQuestion = preg_replace('/^\d+\.\s*/', '', $q->question);

            $cleanAnswer = $q->answer;
            $cleanAnswer = str_replace(['[', ']', '"'], '', $cleanAnswer);
            $cleanAnswer = preg_replace('/^જ\.\s*/', '', $cleanAnswer);
            $cleanAnswer = preg_replace('/^A\.\s*/', '', $cleanAnswer);
            QuestionBank::where('id', $q->id)
                ->update([
                    'question' => trim($cleanQuestion),
                    'answer' => trim($cleanAnswer),
                ]);
        }
    }
}

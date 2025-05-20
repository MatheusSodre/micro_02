<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EvaluationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $companies = [
            '5b8f8c8f-2d8f-4f8f-8f8f-8f8f8f8f8f8f',
            '6c9f9d9e-3e9f-5f9f-9f9f-9f9f9f9f9f9f',
            '7d0e0a0f-4a0f-6a0f-a0f0-a0f0a0f0a0f0'
        ];

        $comments = [
            'Ótimo serviço, recomendo!',
            'Atendimento rápido e eficiente.',
            'Produtos de qualidade, mas o atendimento poderia melhorar.',
            'Experiência satisfatória, voltarei a contratar.',
            'Não atendeu completamente minhas expectativas.',
            'Superou todas as expectativas, excelente trabalho!',
            'Demorou mais que o esperado, mas o resultado foi bom.',
            'Não recomendo, serviço deixou a desejar.',
            'Profissionais muito competentes.',
            'Preço justo pelo serviço prestado.'
        ];

        for ($i = 0; $i < 50; $i++) {
            DB::table('evaluations')->insert([
                'company' => $companies[array_rand($companies)],
                'comment' => $comments[array_rand($comments)],
                'stars' => rand(1, 5),
                'created_at' => now()->subDays(rand(1, 365)),
                'updated_at' => now()->subDays(rand(1, 365)),
            ]);
        }
    }
}

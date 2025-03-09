<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inserir um único registro na tabela skills
        DB::table('skills')->insert([
            'skills' => 'Desenvolvimento Full Stack | PostgreSQL | Scrum | API REST | Linux | Programação Orientada a Objetos (POO) | ReactJS | JavaScript | PHP | Laravel | HTML | GitHub | Docker | Jira | jQuery | Node.js | Teste Unitário PHP.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
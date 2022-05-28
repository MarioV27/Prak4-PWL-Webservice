<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Arr;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $project = array();
        for ($i = 0; $i < 5; $i++) {
            $project[] = [
                'nama' => 'Project ' . $i,
                'deskripsi' => 'Project ' . $i . ' yang bekerjasama dengan Client x',
                'tools' => 'Laravel, ReactJS',
            ];
        }
        project::insert($project);
    }
}

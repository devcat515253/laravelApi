<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 50000; $i++) {
            DB::table('employee')->insert([
                'surname' => "Имя",
                'first_name' => "Фамилия",
                'patronymic' => "Отчество",
                'position' => "Работник фирмы",
                'date_of_employment' => "2002-05-20",
                'salary' =>  25000,
                'id_head' =>  50010,

            ]);
        }
        // $this->call(UsersTableSeeder::class);

    }
}

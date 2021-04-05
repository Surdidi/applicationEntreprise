<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ElementFormation')->insert(

            array(
                array(
                    'idElementFormation' => 1,
                    'libelleElementFormation' => 'EMA',
                    'idPere' => null
                ),
                array(
                    'idElementFormation' => '2',
                    'libelleElementFormation' => 'FIAG',
                    'idPere' => '1'
                ),
                array(
                    'idElementFormation' => '3',
                    'libelleElementFormation' => 'infres11',
                    'idPere' => '2'
                ),
                array(
                    'idElementFormation' => '4',
                    'libelleElementFormation' => 'infres12',
                    'idPere' => '2'
                ),
                array(
                    'idElementFormation' => '5',
                    'libelleElementFormation' => 'infres13',
                    'idPere' => '2'
                ),
                array(
                    'idElementFormation' => '6',
                    'libelleElementFormation' => 'Commun1A',
                    'idPere' => '3'
                ),
                array(
                    'idElementFormation' => '7',
                    'libelleElementFormation' => 'Commun2A',
                    'idPere' => '3'
                ),
                array(
                    'idElementFormation' => '8',
                    'libelleElementFormation' => 'Commun1A',
                    'idPere' => '4'
                ),
                array(
                    'idElementFormation' => '9',
                    'libelleElementFormation' => 'Commun2A',
                    'idPere' => '4'
                ),
                array(
                    'idElementFormation' => '10',
                    'libelleElementFormation' => 'Commun1A',
                    'idPere' => '5'
                ),
                array(
                    'idElementFormation' => '11',
                    'libelleElementFormation' => 'S5',
                    'idPere' => '8'
                ),
                array(
                    'idElementFormation' => '12',
                    'libelleElementFormation' => 'S6',
                    'idPere' => '8'
                ),
                array(
                    'idElementFormation' => '13',
                    'libelleElementFormation' => '1.1 general',
                    'idPere' => '11'
                ),
                array(
                    'idElementFormation' => '14',
                    'libelleElementFormation' => 'Anglais',
                    'idPere' => '13'
                ),
                array(
                    'idElementFormation' => '15',
                    'libelleElementFormation' => 'Mathematiques',
                    'idPere' => '13'
                ),
                array(
                    'idElementFormation' => '16',
                    'libelleElementFormation' => 'Algorithmie',
                    'idPere' => '13'
                ),
            )

        );
    }
}

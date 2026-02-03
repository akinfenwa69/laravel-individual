<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        DB::table('pokemons')->insert([
            // Bulbasaur line
            [
                'name'          =>  'Bulbasaur',
                'description'   =>  'There is a plant seed on its back right from the day this Pokémon is born. The seed slowly grows larger.',
                'hp'            =>  45,
                'atk'           =>  49,
                'def'           =>  49,
                'sp_atk'        =>  65,
                'sp_def'        =>  65,
                'spd'           =>  45,
                'shiny'         =>  false,
            ],
            [
                'name'          =>  'Ivysaur',
                'description'   =>  'When the bulb on its back grows large, it appears to lose the ability to stand on its hind legs.',
                'hp'            =>  60,
                'atk'           =>  62,
                'def'           =>  63,
                'sp_atk'        =>  80,
                'sp_def'        =>  80,
                'spd'           =>  60,
                'shiny'         =>  false,
            ],
            [
                'name'          =>  'Venusaur',
                'description'   =>  'The plant blooms when it is absorbing solar energy. It stays on the move to seek sunlight.',
                'hp'            =>  80,
                'atk'           =>  82,
                'def'           =>  83,
                'sp_atk'        =>  100,
                'sp_def'        =>  100,
                'spd'           =>  80,
                'shiny'         =>  false,
            ],
            // Charmander line
            [
                'name'          =>  'Charmander',
                'description'   =>  'Obviously prefers hot places. When it rains, steam is said to spout from the tip of its tail.',
                'hp'            =>  39,
                'atk'           =>  52,
                'def'           =>  43,
                'sp_atk'        =>  60,
                'sp_def'        =>  50,
                'spd'           =>  65,
                'shiny'         =>  false,
            ],
            [
                'name'          =>  'Charmeleon',
                'description'   =>  'When it swings its burning tail, it elevates the temperature to unbearably high levels.',
                'hp'            =>  58,
                'atk'           =>  64,
                'def'           =>  58,
                'sp_atk'        =>  80,
                'sp_def'        =>  65,
                'spd'           =>  80,
                'shiny'         =>  false,
            ],
            [
                'name'          =>  'Charizard',
                'description'   =>  'Spits fire that is hot enough to melt boulders. Known to cause forest fires unintentionally.',
                'hp'            =>  78,
                'atk'           =>  84,
                'def'           =>  78,
                'sp_atk'        =>  109,
                'sp_def'        =>  85,
                'spd'           =>  100,
                'shiny'         =>  true,
            ],
            // Squirtle line
            [
                'name'          =>  'Squirtle',
                'description'   =>  'After birth, its back swells and hardens into a shell. Powerfully sprays foam from its mouth.',
                'hp'            =>  44,
                'atk'           =>  48,
                'def'           =>  65,
                'sp_atk'        =>  50,
                'sp_def'        =>  64,
                'spd'           =>  43,
                'shiny'         =>  false,
            ],
            [
                'name'          =>  'Wartortle',
                'description'   =>  'Often hides in water to stalk unwary prey. For swimming fast, it moves its ears to maintain balance.',
                'hp'            =>  59,
                'atk'           =>  63,
                'def'           =>  80,
                'sp_atk'        =>  65,
                'sp_def'        =>  80,
                'spd'           =>  58,
                'shiny'         =>  false,
            ],
            [
                'name'          =>  'Blastoise',
                'description'   =>  'A brutal Pokémon with pressurized water jets on its shell. They are used for both speed and attacks.',
                'hp'            =>  79,
                'atk'           =>  83,
                'def'           =>  100,
                'sp_atk'        =>  85,
                'sp_def'        =>  105,
                'spd'           =>  78,
                'shiny'         =>  false,
            ],
        ]);

        DB::table('players')->insert([
            [
                'name' => 'Lionel Messi'
            ],
            [
                'name' => 'Cristiano Ronaldo'
            ],
            [
                'name' => 'Neymar Jr.'
            ]
        ]);

        DB::table('teams')->insert([
            [
                'name'          =>  'Team 1',
                'description'   =>  'Team 1 description',
                'color'         =>  '#f33',
                'player_id'     =>  1,
            ],
            [
                'name'          =>  'Team 2',
                'description'   =>  'Team 2 description',
                'color'         =>  '#3f3',
                'player_id'     =>  2,
            ],
            [
                'name'          =>  'Team 3',
                'description'   =>  'Team 3 description',
                'color'         =>  '#33f',
                'player_id'     =>  1,
            ],
            [
                'name'          =>  'Team 4',
                'description'   =>  'Team 4 description',
                'color'         =>  '#077',
                'player_id'     =>  2,
            ],
            [
                'name'          =>  'Team 5',
                'description'   =>  'Team 5 description',
                'color'         =>  '#707',
                'player_id'     =>  1,
            ],
            [
                'name'          =>  'Team 6',
                'description'   =>  'Team 6 description',
                'color'         =>  '#770',
                'player_id'     =>  3,
            ]
        ]);

        DB::table('countries')->insert([
            [
                'name'      => 'Argentina',
                'continent' => 'South America',
                'player_id' => 1
            ],
            [
                'name'      => 'Portugal',
                'continent' => 'Europe',
                'player_id' => 2
            ],
            [
                'name'      => 'Brazil',
                'continent' => 'South America',
                'player_id' => 3
            ]
        ]);

        DB::table('pokemon_team')->insert([
            [
                'pokemon_id'    => 2,
                'team_id'       => 3
            ],
            [
                'pokemon_id'    => 6,
                'team_id'       => 2
            ],
            [
                'pokemon_id'    => 5,
                'team_id'       => 1
            ]
        ]);
    }
}


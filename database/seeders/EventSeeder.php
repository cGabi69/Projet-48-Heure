<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $events = [
            [
                'start_date' => '2023-04-20',
                'end_date' => '2023-04-22',
                'title' => 'Example Event 1',
                'description' => 'This is an example event.',
                'location' => 'New York, NY',
            ],
            [
                'start_date' => '2023-05-01',
                'end_date' => '2023-05-03',
                'title' => 'Example Event 2',
                'description' => 'This is another example event.',
                'location' => 'San Francisco, CA',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}

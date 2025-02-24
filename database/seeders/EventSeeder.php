<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'Team Building Workshop',
                'description' => 'A workshop to improve team collaboration and communication.',
                'date' => Carbon::now()->addDays(7),
                'location' => 'Main Conference Room'
            ],
            [
                'title' => 'Product Launch Event',
                'description' => 'Launch of our new product line with live demonstrations.',
                'date' => Carbon::now()->addDays(14),
                'location' => 'Grand Ballroom'
            ],
            [
                'title' => 'Quarterly Review Meeting',
                'description' => 'Review of Q1 performance and strategy planning for Q2.',
                'date' => Carbon::now()->addDays(21),
                'location' => 'Board Room'
            ]
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}

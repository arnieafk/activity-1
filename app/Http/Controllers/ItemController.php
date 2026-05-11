<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = [
            [
                'id' => 1,
                'name' => 'Boracay',
                'location' => 'Aklan',
                'type' => 'Beach',
                'description' => 'Famous for its white sand beaches and crystal-clear waters.',
                'best_time' => 'November to May'
            ],
            [
                'id' => 2,
                'name' => 'Baguio',
                'location' => 'Benguet',
                'type' => 'City',
                'description' => 'Known as the Summer Capital of the Philippines.',
                'best_time' => 'December to February'
            ],
            [
                'id' => 3,
                'name' => 'Palawan',
                'location' => 'Palawan',
                'type' => 'Island',
                'description' => 'Home to stunning lagoons and underground rivers.',
                'best_time' => 'March to May'
            ],
            [
                'id' => 4,
                'name' => 'Siargao',
                'location' => 'Surigao',
                'type' => 'Surf Spot',
                'description' => 'Surfing capital of the Philippines.',
                'best_time' => 'August to November'
            ],
            [
                'id' => 5,
                'name' => 'Vigan',
                'location' => 'Ilocos Sur',
                'type' => 'Heritage',
                'description' => 'A preserved Spanish colonial town.',
                'best_time' => 'January to March'
            ],
        ];

        return view('items.index', compact('items'));
    }

    public function show($id)
    {
        $items = [
            [
                'id' => 1,
                'name' => 'Boracay',
                'location' => 'Aklan',
                'type' => 'Beach',
                'description' => 'Famous for its white sand beaches and crystal-clear waters.',
                'best_time' => 'November to May'
            ],
            [
                'id' => 2,
                'name' => 'Baguio',
                'location' => 'Benguet',
                'type' => 'City',
                'description' => 'Known as the Summer Capital of the Philippines.',
                'best_time' => 'December to February'
            ],
            [
                'id' => 3,
                'name' => 'Palawan',
                'location' => 'Palawan',
                'type' => 'Island',
                'description' => 'Home to stunning lagoons and underground rivers.',
                'best_time' => 'March to May'
            ],
            [
                'id' => 4,
                'name' => 'Siargao',
                'location' => 'Surigao',
                'type' => 'Surf Spot',
                'description' => 'Surfing capital of the Philippines.',
                'best_time' => 'August to November'
            ],
            [
                'id' => 5,
                'name' => 'Vigan',
                'location' => 'Ilocos Sur',
                'type' => 'Heritage',
                'description' => 'A preserved Spanish colonial town.',
                'best_time' => 'January to March'
            ],
        ];

        $item = collect($items)->firstWhere('id', $id);

        return view('items.show', compact('item'));
    }
}

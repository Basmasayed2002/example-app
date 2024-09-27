<?php
namespace App\Http\Controllers;

class PlanetController extends Controller
{
    private $planets = [
        ['name' => 'Mercury', 'details' => 'Mercury is the smallest planet in our solar system.'],
        ['name' => 'Venus', 'details' => 'Venus is the second planet from the Sun and has a very thick atmosphere.'],
        ['name' => 'Earth', 'details' => 'Earth is the third planet from the Sun and the only known planet with life.'],
        ['name' => 'Mars', 'details' => 'Mars is known as the Red Planet and is the fourth planet from the Sun.'],
        ['name' => 'Jupiter', 'details' => 'Jupiter is the largest planet in our solar system.'],
        ['name' => 'Saturn', 'details' => 'Saturn is known for its prominent ring system.'],
        ['name' => 'Uranus', 'details' => 'Uranus is the seventh planet from the Sun and has a unique tilt.'],
        ['name' => 'Neptune', 'details' => 'Neptune is the eighth and farthest known planet from the Sun in our solar system.'],
    ];

    public function index()
    {
        return view('planets.index', ['planets' => $this->planets]);
    }

    public function show($planet)
    {
        $planetDetails = collect($this->planets)->firstWhere('name', ucfirst($planet));

        if ($planetDetails) {
            return view('planets.show', ['planet' => $planetDetails]);
        }

        return response()->view('errors.404', [], 404);
    }
}

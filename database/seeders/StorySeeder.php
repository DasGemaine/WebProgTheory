<?php

namespace Database\Seeders;

use App\Models\Story;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $story = 'Kappa is really scary and cunning. i have met one when i was travelling to japan and when near the mountain fuji there is a river. it was suddenly dead silent, i see a shell floating on the river. suddenly a thing pops out from that shell looking so old he ask me any food. so i grab my bag and trying to give my bread and then i was suddenly grabbed by this thing this kappa and thankfully there is another tourist nearby and said why do you walk to the river?';

        Story::create([
            'title' => 'Kappa in Japan',
            'userID' => 2,
            'ghostID' => 1,
            'story' => $story,
            'thumbnail_text' => Str::limit(strip_tags($story), 100, '...'),
        ]);
    }
}

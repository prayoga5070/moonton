<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Shawshank Redempt',
                'slug' => 'the-shawshank-redempt',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=oOTwGhANh9s',
                'thumbnail' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fti.unpar.ac.id%2Freminder%2Fshort-movie-thumbnail%2F&psig=AOvVaw1siK4V7xOp3gIRY7FVN3xN&ust=1733842485973000&source=images&cd=vfe&opi=89978449&ved=0CBMQjRxqFwoTCJjTzt34mooDFQAAAAAdAAAAABAE',
                'rating' => 8.8,
                'is_featured' => 1,
            ],
            [
                'name' => 'The Shawshank Redempt II',
                'slug' => 'the-shawshank-redempt II',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=oOTwGhANh9s',
                'thumbnail' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fti.unpar.ac.id%2Freminder%2Fshort-movie-thumbnail%2F&psig=AOvVaw1siK4V7xOp3gIRY7FVN3xN&ust=1733842485973000&source=images&cd=vfe&opi=89978449&ved=0CBMQjRxqFwoTCJjTzt34mooDFQAAAAAdAAAAABAE',
                'rating' => 8.3,
                'is_featured' => 0,
            ],
            [
                'name' => 'The Shawshank Redempt III',
                'slug' => 'the-shawshank-redempt III',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=oOTwGhANh9s',
                'thumbnail' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fti.unpar.ac.id%2Freminder%2Fshort-movie-thumbnail%2F&psig=AOvVaw1siK4V7xOp3gIRY7FVN3xN&ust=1733842485973000&source=images&cd=vfe&opi=89978449&ved=0CBMQjRxqFwoTCJjTzt34mooDFQAAAAAdAAAAABAE',
                'rating' => 7.6,
                'is_featured' => 0,
            ],

        ];
        Movie::insert($movies);
    }
}

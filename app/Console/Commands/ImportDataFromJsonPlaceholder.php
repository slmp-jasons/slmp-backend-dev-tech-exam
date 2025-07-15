<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Album;
use App\Models\Photo;
use App\Models\Todo;

class ImportDataFromJsonPlaceholder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Data From Json Placeholder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Importing data...');

        //USERS
        $users = Http::get('https://jsonplaceholder.typicode.com/users')->json();
        foreach ($users as $user) {
            User::updateOrCreate(
                ['id' => $user['id']],
                [
                    'name' => $user['name'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'address' => json_encode($user['address']),
                    'phone' => $user['phone'],
                    'website' => $user['website'],
                    'company' => json_encode($user['company']),
                    'password' => Hash::make('password123'),
                ]
            );
        }

        User::create([
            'name' => 'Test User',
            'username' => 'testuser',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
        ]);

        $this->info('Users imported');

        //POSTS
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        foreach ($posts as $post) {
            Post::updateOrCreate(
                ['id' => $post['id']],
                [
                    'user_id' => $post['userId'],
                    'title' => $post['title'],
                    'body' => $post['body'],
                ]
            );
        }
        $this->info('Posts imported');

        //COMMENTS
        $comments = Http::get('https://jsonplaceholder.typicode.com/comments')->json();
        foreach ($comments as $comment) {
            Comment::updateOrCreate(
                ['id' => $comment['id']],
                [
                    'post_id' => $comment['postId'],
                    'name' => $comment['name'],
                    'email' => $comment['email'],
                    'body' => $comment['body'],
                ]
            );
        }
        $this->info('Comments imported');

        //ALBUMS
        $albums = Http::get('https://jsonplaceholder.typicode.com/albums')->json();
        foreach ($albums as $album) {
            Album::updateOrCreate(
                ['id' => $album['id']],
                [
                    'user_id' => $album['userId'],
                    'title' => $album['title'],
                ]
            );
        }
        $this->info('Albums imported');

        //PHOTOS
        $photos = Http::get('https://jsonplaceholder.typicode.com/photos')->json();
        foreach ($photos as $photo) {
            Photo::updateOrCreate(
                ['id' => $photo['id']],
                [
                    'album_id' => $photo['albumId'],
                    'title' => $photo['title'],
                    'url' => $photo['url'],
                    'thumbnail_url' => $photo['thumbnailUrl'],
                ]
            );
        }
        $this->info('Photos imported');

        //TODOS
        $todos = Http::get('https://jsonplaceholder.typicode.com/todos')->json();
        foreach ($todos as $todo) {
            Todo::updateOrCreate(
                ['id' => $todo['id']],
                [
                    'user_id' => $todo['userId'],
                    'title' => $todo['title'],
                    'completed' => $todo['completed'],
                ]
            );
        }
        $this->info('Todos imported');

        $this->info('All data imported successfully!');
    }

}

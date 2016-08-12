<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class Real_UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit  = 100;
        $offset = 11;

        $client = new GuzzleHttp\Client();
        $response = $client->get(
            "http://46.183.146.144:5984/users/_all_docs?include_docs=true&limit={$limit}&skip={$offset}"
        );

        $users = json_decode(strval($response->getBody()), true)['rows'];

        foreach ($users as $user) {
            $user = $user['doc'];
            $userModel = new App\Models\User();
            $userModel->name = $user['login'];
            $userModel->email = $user['email'];
            $userModel->password = $user['password'];
            $userModel->skype = $user['skype'];
            $userModel->bio = $user['activity'];

            $userModel->save();
        }
    }
}

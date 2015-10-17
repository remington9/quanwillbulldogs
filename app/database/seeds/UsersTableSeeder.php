<?php


class UsersTableSeeder extends Seeder {

    public function run()
    {

        $this->createEnvUser();
    }

    protected function createEnvUser()
    {
        $user = new User();
        $user->first_name = $_ENV['USER_FIRST_NAME'];
        $user->last_name = $_ENV['USER_LAST_NAME'];
        $user->email = $_ENV['USER_EMAIL'];
        $user->password = $_ENV['USER_PASS'];
        $user->save();
    }


}
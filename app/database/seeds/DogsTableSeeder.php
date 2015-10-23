<?php


class DogsTableSeeder extends Seeder {

    public function run()
    {

        $this->createEnvDog();
    }

    protected function createEnvDog()
    {
        $dog = new Dog();
        $dog->name = 'Crush';
        $dog->comment = 'this is crush';
        $dog->gender = 'male';
        $dog->img_url = 'crushBanner.jpg';
        $dog->user_id = '1';
        $dog->banner = '1';
        $dog->save();

        $dog2 = new Dog();
        $dog2->name = 'Jefe';
        $dog2->comment = 'this is Jefe';
        $dog2->gender = 'male';
        $dog2->img_url = 'jefeBanner.jpg';
        $dog2->user_id = '1';
        $dog2->banner = '1';
        $dog2->save();

        $dog3 = new Dog();
        $dog3->name = 'Trooper';
        $dog3->comment = 'this is Trooper';
        $dog3->gender = 'male';
        $dog3->img_url = 'trooperBanner.jpg';
        $dog3->user_id = '1';
        $dog3->banner = '1';
        $dog3->save();

        $dog1 = new Dog();
        $dog1->name = 'Crush';
        $dog1->comment = 'this is crush';
        $dog1->gender = 'male';
        $dog1->img_url = 'crush7.jpg';
        $dog1->user_id = '1';
        $dog1->banner = '0';
        $dog1->save();

        $dog4 = new Dog();
        $dog4->name = 'Nehi';
        $dog4->comment = 'this is Nehi';
        $dog4->gender = 'female';
        $dog4->img_url = 'nehiBanner.jpg';
        $dog4->user_id = '1';
        $dog4->banner = '1';
        $dog4->save();

        $dog5 = new Dog();
        $dog5->name = 'Fanta';
        $dog5->comment = 'this is Fanta';
        $dog5->gender = 'female';
        $dog5->img_url = 'fantaBanner.jpg';
        $dog5->user_id = '1';
        $dog5->banner = '1';
        $dog5->save();

        $dog6 = new Dog();
        $dog6->name = 'Nike';
        $dog6->comment = 'this is Nike';
        $dog6->gender = 'female';
        $dog6->img_url = 'nikeBanner.jpg';
        $dog6->user_id = '1';
        $dog6->banner = '1';
        $dog6->save();

        $dog6 = new Dog();
        $dog6->name = 'Cinch';
        $dog6->comment = 'this is Cinch';
        $dog6->gender = 'female';
        $dog6->img_url = 'cinchBanner.jpg';
        $dog6->user_id = '1';
        $dog6->banner = '1';
        $dog6->save();

    }


}
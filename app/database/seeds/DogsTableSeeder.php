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
        $dog->gender = 'Male';
        $dog->img_url = 'crushBanner.jpg';
        $dog->user_id = '1';
        $dog->banner = '1';
        $dog->parent = 'Dad';
        $dog->save();

        $dog = new Dog();
        $dog->name = 'Ariat';
        $dog->comment = 'this is Ariat';
        $dog->gender = 'Female';
        $dog->img_url = 'ariatBanner.jpg';
        $dog->user_id = '1';
        $dog->banner = '1';
        $dog->parent = 'Mom';
        $dog->save();

        $dog = new Dog();
        $dog->name = 'Crush';
        $dog->comment = 'this is crush';
        $dog->gender = 'Male';
        $dog->img_url = '1.jpg';
        $dog->user_id = '1';
        $dog->banner = '0';
        $dog->puppy = '1';
        $dog->sold = '1';
        $dog->past = '1';
        $dog->save();

        $dog = new Dog();
        $dog->name = 'Hay';
        $dog->comment = 'this is hay';
        $dog->gender = 'Male';
        $dog->img_url = 'hay1.jpg';
        $dog->img_url2 = 'hay2.jpg';
        $dog->user_id = '1';
        $dog->banner = '0';
        $dog->puppy = '1';
        $dog->sold = '0';
        $dog->past = '0';
        $dog->save();

        $dog = new Dog();
        $dog->name = 'Maple';
        $dog->comment = 'this is maple';
        $dog->gender = 'Female';
        $dog->img_url = 'maple1a.jpg';
        $dog->img_url2 = 'maple1b.jpg';
        $dog->user_id = '1';
        $dog->banner = '0';
        $dog->puppy = '1';
        $dog->sold = '0';
        $dog->past = '0';
        $dog->save();

        $dog = new Dog();
        $dog->name = 'Pumpkin';
        $dog->comment = 'this is pumpkin';
        $dog->gender = 'Female';
        $dog->img_url = 'pumpkin1a.jpg';
        $dog->img_url2 = 'pumpkin1b.jpg';
        $dog->user_id = '1';
        $dog->banner = '0';
        $dog->puppy = '1';
        $dog->sold = '1';
        $dog->past = '0';
        $dog->save();

        $dog = new Dog();
        $dog->name = 'Pecan';
        $dog->comment = 'this is Pecan';
        $dog->gender = 'Male';
        $dog->img_url = 'pecan1a.jpg';
        $dog->img_url2 = 'pecan1b.jpg';
        $dog->user_id = '1';
        $dog->banner = '0';
        $dog->puppy = '1';
        $dog->sold = '1';
        $dog->past = '0';
        $dog->save();

        $dog = new Dog();
        $dog->name = 'dog';
        $dog->comment = 'this is dog';
        $dog->gender = 'Female';
        $dog->img_url = 'dogs.jpg';
        $dog->user_id = '1';
        $dog->banner = '0';
        $dog->puppy = '1';
        $dog->sold = '1';
        $dog->past = '1';
        $dog->save();

        $dog = new Dog();
        $dog->name = 'Nehi';
        $dog->comment = 'this is nehi';
        $dog->gender = 'Female';
        $dog->img_url = '2.jpg';
        $dog->user_id = '1';
        $dog->banner = '0';
        $dog->puppy = '1';
        $dog->sold = '1';
        $dog->past = '1';
        $dog->save();

        $dog = new Dog();
        $dog->name = 'Nehi';
        $dog->comment = 'this is nehi';
        $dog->gender = 'Female';
        $dog->img_url = '3.jpg';
        $dog->user_id = '1';
        $dog->banner = '0';
        $dog->puppy = '1';
        $dog->sold = '1';
        $dog->past = '1';
        $dog->save();

        $dog = new Dog();
        $dog->name = 'Shasta';
        $dog->comment = 'this is Shasta';
        $dog->gender = 'Female';
        $dog->img_url = '4.jpg';
        $dog->user_id = '1';
        $dog->banner = '0';
        $dog->puppy = '1';
        $dog->sold = '1';
        $dog->past = '1';
        $dog->save();

        $dog = new Dog();
        $dog->name = 'Fanta';
        $dog->comment = 'this is Fanta';
        $dog->gender = 'Female';
        $dog->img_url = '5.jpg';
        $dog->user_id = '1';
        $dog->banner = '0';
        $dog->puppy = '1';
        $dog->sold = '1';
        $dog->past = '1';
        $dog->save();

        $dog2 = new Dog();
        $dog2->name = 'Jefe';
        $dog2->comment = 'this is Jefe';
        $dog2->gender = 'Male';
        $dog2->img_url = 'jefeBanner.jpg';
        $dog2->user_id = '1';
        $dog2->banner = '1';
        $dog2->save();

        $dog3 = new Dog();
        $dog3->name = 'Trooper';
        $dog3->comment = 'this is Trooper';
        $dog3->gender = 'Male';
        $dog3->img_url = 'trooperBanner.jpg';
        $dog3->user_id = '1';
        $dog3->banner = '1';
        $dog3->retired = '1';
        $dog3->save();

        $dog1 = new Dog();
        $dog1->name = 'Crush';
        $dog1->comment = 'this is crush';
        $dog1->gender = 'Male';
        $dog1->img_url = 'crush7.jpg';
        $dog1->user_id = '1';
        $dog1->banner = '0';
        $dog1->save();

        $dog1 = new Dog();
        $dog1->name = 'Crush';
        $dog1->comment = 'this is crush';
        $dog1->gender = 'Male';
        $dog1->img_url = 'crushHead.jpg';
        $dog1->user_id = '1';
        $dog1->banner = '0';
        $dog1->save();

        $dog1 = new Dog();
        $dog1->name = 'Crush';
        $dog1->comment = 'this is crush';
        $dog1->gender = 'Male';
        $dog1->img_url = 'nc.jpg';
        $dog1->user_id = '1';
        $dog1->banner = '0';
        $dog1->save();

        $dog4 = new Dog();
        $dog4->name = 'Nehi';
        $dog4->comment = 'this is Nehi';
        $dog4->gender = 'Female';
        $dog4->img_url = 'nehiBanner.jpg';
        $dog4->user_id = '1';
        $dog4->banner = '1';
        $dog4->retired = '1';
        $dog4->save();

        $dog5 = new Dog();
        $dog5->name = 'Fanta';
        $dog5->comment = 'this is Fanta';
        $dog5->gender = 'Female';
        $dog5->img_url = 'fantaBanner.jpg';
        $dog5->user_id = '1';
        $dog5->banner = '1';
        $dog5->save();

        $dog6 = new Dog();
        $dog6->name = 'Nike';
        $dog6->comment = 'this is Nike';
        $dog6->gender = 'Female';
        $dog6->img_url = 'nikeBanner.jpg';
        $dog6->user_id = '1';
        $dog6->banner = '1';
        $dog6->save();

        $dog6 = new Dog();
        $dog6->name = 'Cinch';
        $dog6->comment = 'this is Cinch';
        $dog6->gender = 'Female';
        $dog6->img_url = 'cinchBanner.jpg';
        $dog6->user_id = '1';
        $dog6->banner = '1';
        $dog6->save();

    }


}
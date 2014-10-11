<?php

class LeadershipsTableSeeder extends Seeder{

    public function run(){

        DB::table('leaderships')->delete();

        for($i=1; $i<=9; $i++){
            $testdata = array(
                'lead_post_ru' => "Должность $i",
                'lead_post_en' => "Post $i",
                'lead_post_ua' => "Посада $i",
                'lead_fio_ru' => 'Крутой кот '.$i,
                'lead_fio_en' => 'Cool cat '.$i,
                'lead_fio_ua' => 'Крутий кіт '.$i,
                'lead_text_ru' => 'Ко́шка, или дома́шняя ко́шка — домашнее животное, одно из наиболее популярных «животных-компаньонов». С зоологической точки зрения, домашняя кошка — млекопитающее семейства кошачьих отряда хищных.',
                'lead_text_en' => 'Cat or domestic cat - a pet, one of the most popular "companion animals." From the zoological point of view, the domestic cat - feline mammal prey squad.',
                'lead_text_ua' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra dictum neque eget ultricies. Praesent quis lacinia nisi. Nulla vestibulum lacinia faucibus. Donec non pulvinar sapien, non euismod lorem.',
                'lead_photo' => "photo_$i.jpg",
                'lead_email' => "email_$i@gmail.com",
                'lead_phone' => "095315476$i",
            );
            $leaderships[] = $testdata;
        }


        DB::table('leaderships')->insert($leaderships);

    }

}
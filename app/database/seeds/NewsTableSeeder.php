<?php
/**
 * Created by PhpStorm.
 * User: Роман
 * Date: 20.09.14
 * Time: 0:28
 */

class NewsTableSeeder extends Seeder{

    public function run(){

        DB::table('news')->delete();

        $j=1;
        for($i=1; $i<=50; $i++){
            $testdata = array(
                'news_alias' => "news_title_$i",
                'news_keywords_ru' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id tellus at velit pretium tincidunt.',
                'news_keywords_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id tellus at velit pretium tincidunt.',
                'news_keywords_ua' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id tellus at velit pretium tincidunt.',
                'news_description_ru' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra dictum neque eget ultricies. Praesent quis lacinia nisi. Nulla vestibulum lacinia faucibus. Donec non pulvinar sapien, non euismod lorem.',
                'news_description_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra dictum neque eget ultricies. Praesent quis lacinia nisi. Nulla vestibulum lacinia faucibus. Donec non pulvinar sapien, non euismod lorem.',
                'news_description_ua' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra dictum neque eget ultricies. Praesent quis lacinia nisi. Nulla vestibulum lacinia faucibus. Donec non pulvinar sapien, non euismod lorem.',
                'news_title_ru' => "Название $i",
                'news_title_en' => "Title $i",
                'news_title_ua' => "Назва $i",
                'news_text_ru' => "Текст $i. Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).",
                'news_text_ua' => "Text $i. Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер на відміну від, наприклад, \"Тут іде текст. Тут іде текст.\" Це робить текст схожим на оповідний. Багато програм верстування та веб-дизайну використовують Lorem Ipsum як зразок і пошук за терміном \"lorem ipsum\" відкриє багато веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem Ipsum з'явились за минулі роки, деякі випадково, деякі було створено зумисно (зокрема, жартівливі).",
                'news_text_en' => "Текст $i. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                'news_images' => "$j.jpg",
            );
            $news[] = $testdata;

            $j = ($j == 15)? 1 : ($j+1);
        }


        DB::table('news')->insert($news);

    }

}
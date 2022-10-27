<?php


	namespace App\Http\Controllers;


	class HomeController extends Controller {

    /*
     * Главная страница сайта
     * @return string
     **/
        public function index(): string {
            $greeting = 'Добро пожаловать на главную страницу журнала FakeNews!';

            return '<div style="margin: 200px auto 0; width: 600px; height: 100px">
                        <h1 style="text-align: center;">'. $greeting .'</h1>
                        <a href="/about_us" style="text-decoration: none">
                            <button style="width: 100px; height: 30px; cursor: pointer">О нас</button>
                        </a>
                        <a href="/news" style="text-decoration: none">
                            <button style="width: 100px; height: 30px; cursor: pointer">Новости</button>
                        </a>
                    </div>';
        }

        /*
         * Страница "О нас"
         * @return string
         * */
        public function about_us(): string {
            $title = 'О нас:';
            $text = 'Выведем каждого на чистую воду!';

            return '<div style="margin: 200px auto 0; width: 600px; height: 100px">
                        <h1 style="text-align: center;">'. $title .'</h1>
                        <p>'. $text .'</p>
                        <a href="/" style="text-decoration: none">
                            <button style="width: 100px; height: 30px; cursor: pointer">На главную</button>
                        </a>
                    </div>';
        }
	}

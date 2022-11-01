<?php


	namespace App\Http\Controllers;


	class HomeController extends Controller {

    /*
     * Главная страница сайта
     * @return string
     **/
        public function index() {
            return view('homePage');
        }
	}

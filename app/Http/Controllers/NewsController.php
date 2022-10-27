<?php


	namespace App\Http\Controllers;


	class NewsController extends Controller
	{
	    /*
	     * @var список новостей
	     * */
	    protected array $news = [
	        [
	            'id' => 1,
                'title' => 'Дмитрий Рогозин вызвал Илона Маска на дуэль',
                'text' => 'Чистая правда!',
            ],
        	[
	            'id' => 2,
                'title' => 'Ростех наладил выпуск чипов по 7нм технологии',
                'text' => 'Чистая правда!',
            ],
        	[
	            'id' => 3,
                'title' => 'Блогер Даня Милохин набрал 300 баллов по ЕГЭ',
                'text' => 'Чистая правда!',
            ]
        ];

        /*
         * Показать список новостей
         * @return string html-код всех новостей
         * */
        public function index($newsId = null): string {
            if ($newsId) {
                //уменьшаем потому что индекс массива с новостью id = 1 равен нулю
                --$newsId;

                if (isset($this->news[$newsId])) {
                    return $this->showOneNews($newsId);
                }
                else {
//                    return redirect()->route('error404');
                }
            }

            $newsHtmlHead = '<div style="margin: 100px 0; width: 600px; height: 100px"><h3 style="text-align: left;">';
            $newsHtmlTail = '" style="text-decoration: none"><button style="width: 100px; height: 30px; cursor: pointer">Открыть</button></a></div>';
            $allNews = '';

            foreach($this->news as $value) {
                $allNews .= $newsHtmlHead . $value['title'] . '</h3><p>' . $value['text'] . '</p><a href="/news/' . $value['id'] . $newsHtmlTail;
            }

            return $allNews;
        }

        /*
         * Показать одну новость
         * @return string|null html-код одной новости
         * */
        protected function showOneNews($newsId): string {
            $title = $this->news[$newsId]['title'];
            $text = $this->news[$newsId]['text'];

            return '<div style="margin: 100px 0; width: 600px; height: 100px">
                        <h3 style="text-align: left;">' . $title . '<p>' . $text . '</p></h3>
                        <a href="/news" style="text-decoration: none">
                            <button style="width: 100px; height: 30px; cursor: pointer">К новостям</button>
                        </a>
                    </div>';
        }
	}

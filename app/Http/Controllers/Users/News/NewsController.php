<?php


	namespace App\Http\Controllers\Users\News;


	use App\Http\Controllers\Controller;
    use App\Models\News\Categories;
    use App\Models\News\News;

    class NewsController extends Controller
	{
        /*
         * Показывает список категорий новостей
         * */
        public static function index() {
            return view('users.news.categoriesList')->with('categoriesNews', Categories::getAllCategories());
        }

        /*
         * Проверяет, существует ли категория новостей с таким ключом.
         * Если ключ категории валиден, проверяет существует ли новость с таким id.
         * Да - возвращает её, нет - error404.
         * В остальных случаях возвращает список всех новостей данной категории.
         */
        public static function getNewsConcreteCategory($categoryKey, $newsId = null) {
            $categoryKey = htmlspecialchars(strip_tags($categoryKey));
            $newsId = (int)htmlspecialchars(strip_tags($newsId));
            $validCategory = isset(Categories::getAllCategories()[$categoryKey]);

            if (!$validCategory) {
                return view('error404');
            }
            elseif ($validCategory && isset($newsId)) {
                $news = News::getOneNews($categoryKey, $newsId);

                if ($news) return view('users.news.oneNews', ['categoryKey' => $categoryKey, 'news' => $news]);
                else return view('error404');
            }
            else {
                $newsListCategory = News::getListOfCategoryNews($categoryKey);
                $titleCategory = Categories::getAllCategories()[$categoryKey]['title'];
                return view('users.news.listOfCategoryNews',['newsList' => $newsListCategory,
                    'categoryKey' => $categoryKey, 'titleCategory' => $titleCategory]);
            }
        }
	}

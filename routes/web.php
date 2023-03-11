<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'comics'=> config('comics'),
        'navbar'=> [
            [
                'title'=> 'characters',
                'link'=> '/characters'
            ],
            [
                'title'=> 'comics',
                'link'=> '/comics'
            ],
            [
                'title'=> 'movies',
                'link'=> '/movies'
            ],
            [
                'title'=> 'tv',
                'link'=> '/tv'
            ],
            [
                'title'=> 'games',
                'link'=> '/games'
            ],
            [
                'title'=> 'collectibles',
                'link'=> '/collectibles'
            ],
            [
                'title'=> 'videos',
                'link'=> '/videos'
            ],
            [
                'title'=> 'fans',
                'link'=> '/fans'
            ],
            [
                'title'=> 'news',
                'link'=> '/news'
            ],
            [
                'title'=> 'shop',
                'link'=> '/shop'
            ]
        ],
        'blueMenu'=> [
            [   
                'img'=> "resources/img/buy-comics-digital-comics.png",
                'title'=> 'digital comics',
                'link'=> '#'
            ],
            [   
                'img'=> "resources/img/buy-comics-merchandise.png",
                'title'=> 'dc merchandise',
                'link'=> '#'
            ],
            [   
                'img'=> "resources/img/buy-comics-subscriptions.png",
                'title'=> 'subscription',
                'link'=> '#'
            ],
            [   
                'img'=> "resources/img/buy-comics-shop-locator.png",
                'title'=> 'comic shop locator',
                'link'=> '#'
            ],
            [   
                'img'=> "resources/img/buy-dc-power-visa.svg",
                'title'=> 'dc power visa',
                'link'=> '#'
            ]
        ],
        'dcComicsContent'=> [
            [
                'title'=> 'characters',
                'link'=> '/characters'
            ],
            [
                'title'=> 'comics',
                'link'=> '/comics'
            ],
            [
                'title'=> 'Movies',
                'link'=> '/Movies'
            ],
            [
                'title'=> 'TV',
                'link'=> '/TV'
            ],
            [
                'title'=> 'games',
                'link'=> '/games'
            ],
            [
                'title'=> 'videos',
                'link'=> '/videos'
            ],
            [
                'title'=> 'news',
                'link'=> '/news'
            ],
        ],
        'shopContent'=> [
            [
                'title'=> 'shop DC',
                'link'=> '#'
            ],
            [
                'title'=> 'shop collectibles',
                'link'=> '#'
            ]
        ],
        'dcContent'=> [
            [
                'title'=> 'terms of use',
                'link'=> '#'
            ],
            [
                'title'=> 'privacy policy (new)',
                'link'=> '#'
            ],
            [
                'title'=> 'ad choices',
                'link'=> '#'
            ],
            [
                'title'=> 'advertising',
                'link'=> '#'
            ],
            [
                'title'=> 'jobs',
                'link'=> '#'
            ],
            [
                'title'=> 'subscriptions',
                'link'=> '#'
            ],
            [
                'title'=> 'talent workshop',
                'link'=> '#'
            ],
            [
                'title'=> 'CPSC certificates',
                'link'=> '#'
            ],
            [
                'title'=> 'ratings',
                'link'=> '#'
            ],
            [
                'title'=> 'shop help',
                'link'=> '#'
            ],
            [
                'title'=> 'contact us',
                'link'=> '#'
            ],
        ],
        'sitesContent'=> [
            [
                'title'=> 'DC',
                'link'=> '#'
            ],
            [
                'title'=> 'MAD magazine',
                'link'=> '#'
            ],
            [
                'title'=> 'DC kids',
                'link'=> '#'
            ],
            [
                'title'=> 'DC universe',
                'link'=> '#'
            ],
            [
                'title'=> 'DC power visa',
                'link'=> '#'
            ]
        ],
        'socialList'=> [
            [
                'img'=> 'resources/img/footer-facebook.png',
                'link'=> '#',
                'social'=> 'facebook'
            ],
            [
                'img'=> 'resources/img/footer-twitter.png',
                'link'=> '#',
                'social'=> 'twitter'
            ],
            [
                'img'=> 'resources/img/footer-youtube.png',
                'link'=> '#',
                'social'=> 'youtube'
            ],
            [
                'img'=> 'resources/img/footer-pinterest.png',
                'link'=> '#',
                'social'=> 'pinterest'
            ],
            [
                'img'=> 'resources/img/footer-periscope.png',
                'link'=> '#',
                'social'=> 'periscope'
            ]
        ]
    ]);
});
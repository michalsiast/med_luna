<?php

namespace App\Models;

use App\Helpers\Enum;
use ReflectionClass;

abstract class PageType extends Enum
{
    /*
     * examples:
     * #1: controller_moduleCategory.action
     * #2: controller.action
     *
     * action = view
    */

    const INDEX_SHOW = [
        'name' => 'index.show',
        'module' => false,
        'fields' => [
            'rotator' => ['rotator', 'Slider'],
            'subtitle_about_us' => ['head', 'Podtytuł - O nas'],
            'title_about_us' => ['head', 'Tytuł - O nas'],
            'description_about_us' => ['text', 'Opis - O nas'],
            'subtitle_recommended' => ['head', 'Podtytuł - Polecane zabiegi'],
            'title_recommended' => ['head', 'Tytuł - Polecane zabiegi'],
            'description_1_recommended' => ['text', 'Opis 1 - Polecane zabiegi'],
            'description_2_recommended' => ['text', 'Opis 2 - Polecane zabiegi'],
            'subtitle_offer_category' => ['head', 'Podtytuł - Kategoria ofert'],
            'title_offer_category' => ['head', 'Tytuł - Kategoria ofert'],
            'subtitle_why_me' => ['head', 'Nagłówek - Dlaczego ja'],
            'title_why_me' => ['head', 'Tytuł - Dlaczego ja'],
            'description_why_me' => ['text', 'Opis - Dlaczego ja'],
        ]
    ];
    const PAGE_SHOW = [
        'name' => 'page.show',
        'module' => false,
        'fields' => [
            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const GALLERY_SHOW = [
        'name' => 'gallery.show',
        'module' => false,
        'fields' => [
//            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const ABOUT_US_SHOW = [
        'name' => 'about-us.show',
        'module' => false,
        'fields' => [
            'subtitle_about_us' => ['head', 'Podtytuł - O nas'],
            'title_about_us' => ['head', 'Tytuł - O nas'],
            'description_about_us' => ['text', 'Opis - O nas'],
        ]
    ];
    const CONTACT_SHOW = [
        'name' => 'contact.show',
        'module' => false,
        'fields' => [
            'title_message_info' => ['head', 'Tytuł wiadomości'],
            'description_message_info' => ['text', 'Opis wiadomości'],
            'title_contact' => ['head', 'Tytuł kontaktu'],
            'description_contact' => ['text', 'Opis kontaktu'],
        ]
    ];
    const ARTICLE_INDEX = [
        'name' => 'article.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const ARTICLE_CATEGORY_INDEX = [
        'name' => 'article_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const OFFER_INDEX = [
        'name' => 'offer.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const OFFER_CATEGORY_INDEX = [
        'name' => 'offer_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const REALIZATION_INDEX = [
        'name' => 'realization.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const REALIZATION_CATEGORY_INDEX = [
        'name' => 'realization_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];


    static function getNames() : array {
        $class = new ReflectionClass(get_called_class());
        $types = array_values($class->getConstants());
        $names = [];
        foreach ($types as $type) {
            $names[] = $type['name'];
        }
        return $names;
    }

    static function getByName($name) : array {
        $class = new ReflectionClass(get_called_class());
        $types = array_values($class->getConstants());
        foreach ($types as $type) {
            if($type['name'] == $name)
                return $type;
        }
//        return $names;
    }
}

<?php

$namespacePrefix = '\\KRAVANH\\LabelMultiTranslate\\Http\\Controllers\\';

$router->get('label-multi-translate', ['uses' => $namespacePrefix.'LanguageTranslationController@index', 'as' => 'languages']);

$router->post('translations/update', ['uses' => $namespacePrefix.'LanguageTranslationController@transUpdate', 'as' => 'translation.update.json']);

$router->post('translations/updateKey', ['uses' => $namespacePrefix.'LanguageTranslationController@transUpdateKey', 'as' => 'translation.update.json.key']);

$router->delete('translations/destroy/{key}', ['uses' => $namespacePrefix.'LanguageTranslationController@destroy', 'as' => 'translations.destroy']);

$router->post('translations/create', ['uses' => $namespacePrefix.'LanguageTranslationController@store', 'as' => 'translations.create']);

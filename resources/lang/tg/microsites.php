<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Microsites related Language Lines
    |--------------------------------------------------------------------------
    */

    'page_title' => 'Микросайти лоиҳа',
    'page_title_with_name' => 'Микросайти лоиҳа барои :project',
    
    'pages' => [
        'create' => 'Барои лоиҳа микросайт созед ":project"',
        'edit' => 'Таҳияи микросайт барои лоиҳа ":project"',
    ],
    
    
    'hints' => [
        'what' => 'Микросайт барои лоиҳаи шумо сафхаи интернети мекушояд',
        'create_for_project' => 'Барои лоиҳа микросайт созед',
        'for_project' => 'Барои лоиҳа микросайт созед',
        'delete_microsite' => 'Микросайти лоиҳаро дур кунед',
        'edit_microsite' => 'Мундариҷа ва танзимоти саҳифаҳои микросайтро тағйир диҳед',
        
        'site_title' => 'Номи сомонае, ки ба истифодабарандагон нишон дода мешавад',
        'description' => 'Тавсифи мухтасари мақсади микросайти шумо, ки аз тарафи муҳаррикҳои ҷустуҷӯи истифода мешавад.',
        'slug' => ' Номи мусоиди суроғаи вебсайт яъне URL-ро интихоб кунед, то ки ҷустуҷӯ ва дар хотир нигох доштани он ба истифодабарандагон осон бошад.',
        'logo' => 'Логотипи сайт, андозаи максималии 280x80 пиксел. Акс бояд дар ҷое бо пайвасти бехатар аз HTTPS ҷойгир карда шавад',
        'default_language' => 'Забоне, ки бо он вебсайт нишон дода мешавад, агар истифодабаранда ба таври дилхоҳ забонро интихоб накард',

        'content' => 'Дар ин ҷо шумо метавонед мундариҷаи матнии микросайт ва менюи иловагии навигациони муайян кунед. Шумо дар ҳоли хозир фақат мӯҳтаво дар версияи англисӣ ва русиро муқаррар карда метавонед.',
        
        'page_title' => 'Номи саҳифа, киммати пешфарз ”хона” аст',
        'page_slug' => 'Номи мусоиди суроғаи вебсайт яъне URL-ро интихоб кунед, то ки ҷустуҷӯ ва дар хотир нигох доштани он ба истифодабарандагон осон бошад.',
        'page_content' => 'Шумо метавонед матн ва пайвандҳоро дохил кунед. Форматхои дастгиришуда дар  <a href="https://daringfireball.net/projects/markdown/basics" target="_blank">синтаксиси Markdown</a>. Шумо инчунин метавонед пайвандҳо ва елементхо аз сомонаҳои дигар дохил кунед. Барои мисол шумо метавонед мӯҳтавои RSS бо гузоштани ин код дар сархати худ гузоред  <code>@rss:https://klinktest.wordpress.com/feed/</code>. Лутфан дар хотир нигоҳ доред, ки мӯҳтаво дохилӣ барои пешгирӣ намудани истифодаи захираҳои дар ҳофизаи аз 1 то 4 соат ниҳон дошта мешавад (вобаста ба хизматрасони)',
    ],
    
    'actions' => [
        'create' => 'Сохтани Микросайт',
        'edit' => 'Таҳрири Микросайт',
        'save' => 'Танзимоти Микросайт сабт кунед',
        'delete' => 'Микросайтро дур кунед',
        'delete_ask' => 'Шумо холо Микросайти ":title" дур мекунед. Шумо хакикатан мехохед онро дур кунед?',
        'view_site' => 'Боздиди Микросайт',
        'publish' => 'Нашри Микросайт',
        'view_project_documents' => 'Баргашт ба лоиҳа',
        'search' => 'Ҷустуҷӯ дар K-Link...',
        'search_project' => 'Ҷустуҷӯи :project...',
    ],
    
    'messages' => [
        'created' => 'Микросайти ":title" сохта шуд ва дастрас аст дар ин чо <a href=":site_url" target="_blank">:slug</a>',
        'updated' => ' Номи Микросайт ":title" аз нав шуд',
        'deleted' => 'Микросайти ":title" дур карда шуд. Микросай бо ин url дигар дастар нест',
    ],
    
    'errors' => [
        'create' => 'Дар сохтани микросайт хатоги сар дода шуд. :error',
        'create_no_project' => 'Лутфан як лоиҳаро интихоб кунед. Барои сохтани микросайт лоиҳаро интихоб нашуд.',
        'create_already_exists' => ' Микросайт барои лоиҳаро ":project" алакай вучуд дорад. Шумо наметавонед барои лоиҳаро аз як то зиед микросайт созед.',
        'delete' => 'Дар вакти дур кардани микросайт хатогии зерин рух дод. :error',
        'update' => 'Хатоги дар вакти навсозии микросайт рух дод. :error',
        'delete_forbidden' => 'Шумо наметавонде микросайти ":title" дур кунед, чунки Шумо рохбари лоихаи ба ин микрасайт дахл дошта нестед .',
        'forbidden' => 'Барои кор бо микросайт шумо бояд администратори лоиха бошед',
        'user_not_affiliated_to_an_institution' => 'Шумо бо ташкилот ҳамроҳ нестед, лутфан дархост кунед, ки профили шудо пеш аз таъсиси Микросайт тағйир диҳанд.',
    ],
    
    'labels' => [
        'microsite' => 'Микросайт<sup>бета-версия</sup>',
        'site_title' => 'Номи сайт',
        'slug' => 'Номи мусоид ва осони сайт',
        'site_description' => 'Тавсифи сайт',
        'logo' => 'Логотипи сайт, лутфан URL -и расмро гузоред (url бояд дар HTTPS бошад)',
        'default_language' => 'Забони сайт',
        'cancel_and_back' => 'Бекор кунед ва ба лоиҳа баргардед',
        'publishing_box' => 'Нашр',
        'content' => 'Мӯҳтавои микросайт',
        
        'content_en' => 'Версияи англисии мӯҳтаво',
        'content_ru' => 'Версияи русии мӯҳтаво',
        
        'page_title' => 'Номи саҳфа, ки бояд сохта шавад',
        'page_slug' => ' “slug”-и сахфа',
        'page_content' => 'Мӯҳтавои сахфа',
    ],
];

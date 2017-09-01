<?php

return [

    'license_key' => 'Clef de licence',
    'license_key_instruct' => 'Entrez la clef pour le domaine lié, telle que saisie dans votre [Compte Statamic](https:/account.statamic.com/licenses).',

    'locales' => 'Langues',
    'locales_instruct' => 'Les langues dans lesquelles votre site sera affiché.',

    'timezone' => 'Fuseau horaire',
    'timezone_instruct' => 'Le [fuseau horaire](http://php.net/manual/en/timezones.php) dans lequel vous souhaitez que votre site fonctionne.',
    
    'date_format' => 'Format de date',
    'date_format_instruct' => 'La chaîne de formatage de date PHP utilisée lors de la production de variables Dates non formatées.',

    'default_extension' => 'Extension par défaut',
    'default_extension_instruct' => 'L\'extension fichier pour vos fichiers de contenu.',

    'filesystems' => 'Systèmes de fichiers',
    'filesystems_instruct' => 'Détermine comment et à quel endroit le système accèdera à vos différents fichiers.',

    'app_key' => 'Clef d\'application',
    'app_key_instruct' => 'Cette clef est utilisée afin de sécuriser votre application. Ce doit être une chaîne forte de 32 caractères.',
  
    'redactor' => 'Paramètres Redactor',
    'redactor_instruct' => 'Représentation au format YAML des [objets de paramétrage Redactor](https://imperavi.com/assets/pdf/redactor-documentation-10.pdf).  
                            Chacune de ces options pourra être sélectionnée lors de la création d\'un champ de type Redactor.',
                            
    'protect' => 'Protection globale du système',
    'protect_instruct' => 'Saisir ici une règle de protection entraînera son application automatique à la totalité du frontal de votre site.',
    
    'csrf_exclude' => 'URLs exclues de CSRF',
    'csrf_exclude_instruct' => 'Une liste d\'URLs à exclure de la protection CSRF',

  	'php_max_memory_limit' => 'Limite maxi mémoire PHP',
    'php_max_memory_limit_instruct' => "La quantité maximale de mémoire que Statamic essaiera d'utiliser lors de l'exécution d'opérations très gourmandes en mémoire, comme la manipulation d'image.  \nLaissez la zone vide pour utiliser autant de mémoire que possible. Vous pouvez préciser la valeur en bytes ou [un raccourci de valeur reconnu par PHP](http://php.net/manual/en/faq.using.php#faq.using.shorthandbytes).",
    
];

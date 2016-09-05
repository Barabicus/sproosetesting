<?php

return [
    'plugin' => [
        'name' => 'Sider',
        'description' => 'Side- og menyfunksjoner.',
    ],
    'page' => [
        'menu_label' => 'Sider',
        'delete_confirmation' => 'Vil du virkelig slette de valgte sidene? Hvis siden har undersider, blir de også slettet.',
        'no_records' => 'Ingen sider funnet',
        'delete_confirm_single' => 'Vil du virkelig slette denne siden? Hvis siden har undersider, blir de også slettet.',
        'new' => 'Ny side',
        'add_subpage' => 'Ny underside',
        'invalid_url' => 'Ugyldig URL-format. URL-en skal starte med en skråstrek og kan bare inneholde tall, latinske bokstaver og følgende symboler: _-/.',
        'url_not_unique' => 'URL-en er allerede i bruk av en annen side.',
        'layout' => 'Layout',
        'layouts_not_found' => 'Ingen layouts funnet',
        'saved' => 'Siden har blitt lagret.',
        'manage_pages' => 'Administrer statiske sider',
        'manage_menus' => 'Administrer statiske menyer',
        'access_snippets' => 'Tilgang til snippets',
        'manage_content' => 'Administrer statisk innhold'
    ],
    'menu' => [
        'menu_label' => 'Menyer',
        'delete_confirmation' => 'Vil du virkelig slette valgte menyer?',
        'no_records' => 'Ingen menyer funnet',
        'new' => 'Ny meny',
        'new_name' => 'Ny meny',
        'new_code' => 'new-menu',
        'delete_confirm_single' => 'Vil du virkelig slette denne menyen?',
        'saved' => 'Menyen har blitt lagret.',
        'name' => 'Navn',
        'code' => 'Kode',
        'items' => 'Elementer',
        'add_subitem' => 'Nytt underelement',
        'no_records' => 'Ingen elementer funnet',
        'code_required' => 'En kode kreves.',
        'invalid_code' => 'Ugyldig kode-format. Koden kan inneholde tall, latinske bokstaver og følgende symboler: _-'
    ],
    'menuitem' => [
        'title' => 'Tittel',
        'editor_title' => 'Endre element',
        'type' => 'Type',
        'allow_nested_items' => 'Tillat underelementer',
        'allow_nested_items_comment' => 'Underelementer kan bli generert dynamisk av statiske sider og andre elementtyper',
        'url' => 'URL',
        'reference' => 'Referanse',
        'title_required' => 'Tittel kreves.',
        'unknown_type' => 'Ukjent elementtype',
        'unnamed' => 'Navnløs elementtype',
        'add_item' => 'Legg til <u>e</u>lement',
        'new_item' => 'Nytt element',
        'replace' => 'Erstatt dette elementet med sine underelementer',
        'replace_comment' => 'Huk av denne boksen for å skjule dette elementet. Underelementer blir fremdeles synlige.',
        'cms_page' => 'CMS-side',
        'cms_page_comment' => 'Velg hvilken side som skal åpnes når man trykker på linken.',
        'reference_required' => 'En referanse kreves.',
        'url_required' => 'En URL kreves.',
        'cms_page_required' => 'Vennligst velg en CMS-side',
        'code' => 'Kode',
        'code_comment' => 'Velg en elementkode hvis du trenger tilgang via API-en. (valgfritt)'
    ],
    'content' => [
        'menu_label' => 'Innhold',
        'cant_save_to_dir' => 'Å lagre innhold til files i static-pages-mappen er ikke tillatt.'
    ],
    'sidebar' => [
        'add' => 'Legg til',
        'search' => 'Søk...'
    ],
    'object' => [
        'invalid_type' => 'Ukjent objekttype',
        'not_found' => 'Det forespurte objektet ble ikke funnet.'
    ],
    'editor' => [
        'title' => 'Tittel',
        'new_title' => 'Tittel på siden',
        'content' => 'Innhold',
        'url' => 'URL',
        'filename' => 'Filnavn',
        'layout' => 'Layout',
        'description' => 'Beskrivelse',
        'preview' => 'Forhåndsvis',
        'enter_fullscreen' => 'Fullskjermmodus',
        'exit_fullscreen' => 'Avslutt fullskjermmodus',
        'hidden' => 'Skjult',
        'hidden_comment' => 'Kun backend-brukere har tilgang til skjulte sider.',
        'navigation_hidden' => 'Gjem i menyer',
        'navigation_hidden_comment' => 'Huk av denne boksen for å skjule denne siden i genererte menyer',
    ],
    'snippet' => [
        'partialtab' => 'Snippet',
        'code' => 'Snippet-kode',
        'code_comment' => 'Fyll inn en kode for å gjøre denne tilgjengelig som en snippet i Static Pages.',
        'name' => 'Navn',
        'name_comment' => 'Navnet som blir presentert i snippetlisten i Static Pages-menyen og når snippeten er lagt inn på en side.',
        'no_records' => 'Ingen snippets funnet',
        'menu_label' => 'Snippets',
        'column_property' => 'Egenskap',
        'column_type' => 'Type',
        'column_code' => 'Kode',
        'column_default' => 'Standard',
        'column_options' => 'Alternativer',
        'column_type_string' => 'String',
        'column_type_checkbox' => 'Checkbox',
        'column_type_dropdown' => 'Dropdown',
        'not_found' => 'En snippet med koden :code ble ikke funnet.',
        'property_format_error' => 'Egenskapkoden skal starte med en latinsk bokstav og kan kun inneholde bokstver og tall.',
        'invalid_option_key' => 'Ugyldig dropdown-alternativ kode: %s. Alternativkoder kan bare inneholde tall, latinske bokstaver, _ og -'
    ]
];

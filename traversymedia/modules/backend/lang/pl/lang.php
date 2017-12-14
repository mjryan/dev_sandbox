<?php

return [
    'auth' => [
        'title' => 'Panel Administracyjny'
    ],
    'field' => [
        'invalid_type' => 'Użyto nieprawidłowego typu pola :type.',
        'options_method_not_exists' => "Model :model musi definiować metodę :method() zwracając opcję z pola ':field' formularza."
    ],
    'widget' => [
        'not_registered' => "Nazwa klasy widgetu ':name' nie została zarejestrowana",
        'not_bound' => "Nazwa klasy widgetu ':name' nie została przepisana do kontrolera"
    ],
    'page' => [
        'untitled' => 'Bez nazwy',
        'access_denied' => [
            'label' => 'Odmowa dostępu',
            'help' => 'Nie posiadasz odpowiednich uprawnień, aby zobaczyć tą stronę.',
            'cms_link' => 'Powrót do panelu back-end'
        ],
        'no_database' => [
            'label' => 'Brak bazy danych',
            'help' => 'Baza danych jest wymagana do dostępu do panelu administracyjnego. Sprawdz czy baza danych jest prawidłowo skonfigurowana i zmigrowana przed ponowną próbą.',
            'cms_link' => 'Powrót do strony głównej'
        ],
        'invalid_token' => [
            'label' => 'Nieprawidłowy żeton bezpieczeństwa'
        ]
    ],
    'partial' => [
        'not_found_name' => "Blok ':name' nie został odnaleziony."
    ],
    'account' => [
        'sign_out' => 'Wyloguj',
        'login' => 'Zaloguj',
        'reset' => 'Reset',
        'restore' => 'Odzyskaj',
        'login_placeholder' => 'login',
        'password_placeholder' => 'hasło',
        'forgot_password' => 'Zapomniałeś hasła?',
        'enter_email' => 'Wpisz swój email',
        'enter_login' => 'Wpisz swój login',
        'email_placeholder' => 'email',
        'enter_new_password' => 'Wpisz swoje hasło',
        'password_reset' => 'Zmień hasło',
        'restore_success' => 'Wysłano wiadomość na Twój adres email z hasłem oraz instrukcjami odzyskania.',
        'restore_error' => "Nie znaleziono użytkownika z loginem ':login'",
        'reset_success' => 'Twoje hasło zostało prawidłowo zresetowane. Możesz się teraz zalogować.',
        'reset_error' => 'Nieprawidłowe dane zmiany hasła. Spróbuj ponownie!',
        'reset_fail' => 'Nie można zmienić Twojego hasła!',
        'apply' => 'Zastosuj',
        'cancel' => 'Anuluj',
        'delete' => 'Usuń',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => 'Kokpit',
        'widget_label' => 'Widget',
        'widget_width' => 'Szerokość',
        'full_width' => 'pełna szerokość',
        'manage_widgets' => 'Zarządzaj widgetami',
        'add_widget' => 'Dodaj widget',
        'widget_inspector_title' => 'Konfiguracja widgetu',
        'widget_inspector_description' => 'Konfiguruj widget',
        'widget_columns_label' => 'Szerokość: :columns',
        'widget_columns_description' => 'Szerokość widgetu, cyfra pomiędzy 1 a 10.',
        'widget_columns_error' => 'Proszę podać szerokość widgetu jako cyfrę pomiędzy 1 a 10.',
        'columns' => '{1} kolumna|[2,Inf] kolumny',
        'widget_new_row_label' => 'Wymuś nowy wiersz',
        'widget_new_row_description' => 'Umieść widget w nowym wierszu.',
        'widget_title_label' => 'Nazwa widgetu',
        'widget_title_error' => 'Nazwa widgetu jest wymagana.',
        'reset_layout' => 'Resetuj układ',
        'reset_layout_confirm' => 'Ustawić domyślny układ?',
        'reset_layout_success' => 'Został przywrócony domyślny układ',
        'make_default' => 'Ustaw jako domyślny',
        'make_default_confirm' => 'Ustawić obecny układ jako domyślny?',
        'make_default_success' => 'Obecny układ jest teraz domyślny',
        'status' => [
            'widget_title_default' => 'Status systemu',
            'update_available' => '{0} dostępnych aktualizacji!|{1} dostępna aktualizacja!|[2,Inf] dostępne aktualizacje!',
            'updates_pending' => 'Oczekujące aktualizacje',
            'updates_nil' => 'Wersja systemu jest aktualna',
            'updates_link' => 'Aktualizuj',
            'warnings_pending' => 'Niektóre kwestie wymagają uwagi',
            'warnings_nil' => 'Brak ostrzeżeń do wyświetlenia',
            'warnings_link' => 'Wyświetl',
            'core_build' => 'Wersja systemu',
            'event_log' => 'Dziennik zdarzeń',
            'request_log' => 'Log żądań',
            'app_birthday' => 'Online od',
        ],
        'welcome' => [
            'widget_title_default' => 'Witaj',
            'welcome_back_name' => 'Witaj z powrotem to :app, :name.',
            'welcome_to_name' => 'Witaj w :app, :name.',
            'first_sign_in' => 'To jest twoje pierwsze logowanie.',
            'last_sign_in' => 'Data ostatniego logowania',
            'view_access_logs' => 'Zobacz dziennik zdarzeń',
            'nice_message' => 'Miłego dnia!',
        ]
    ],
    'user' => [
        'name' => 'Administrator',
        'menu_label' => 'Administratorzy',
        'menu_description' => 'Zarządzaj administratorami, użytkownikami, grupami i uprawnieniami.',
        'list_title' => 'Zarządzaj Administratorami',
        'new' => 'Nowy Administrator',
        'login' => 'Login',
        'first_name' => 'Imię',
        'last_name' => 'Nazwisko',
        'full_name' => 'Imię i nazwisko',
        'email' => 'E-mail',
        'groups' => 'Grupa',
        'groups_comment' => 'Określ, do której grupy należy ten użytkownik',
        'avatar' => 'Awatar',
        'password' => 'Hasło',
        'password_confirmation' => 'Potwierdź hasło',
        'permissions' => 'Uprawnienia',
        'account' => 'Konto',
        'superuser' => 'Super Użytkownik',
        'superuser_comment' => 'Zaznacz to pole jeżeli chcesz zezwolić temu użytkownikowi na pełny dostęp do panelu.',
        'send_invite' => 'Wyślij zaproszenie wiadomością email',
        'send_invite_comment' => 'Zaznacz to pole, aby wysłać zaproszenie wiadomością email do tego użytkownika',
        'delete_confirm' => 'Czy jesteś pewny, że chcesz usunąć tego administratora',
        'return' => 'Wróc do listy administratorów',
        'allow' => 'Zezwól',
        'inherit' => 'Dziedzicz',
        'deny' => 'Odmów',
        'group' => [
            'name' => 'Grupa',
            'name_comment' => 'Nazwa wyświetlana na liście grup oraz w formularzu dodawania/edycji administratora.',
            'name_field' => 'Nazwa',
            'description_field' => 'Opis',
            'is_new_user_default_field' => 'Dodawaj nowych administratorów do tej grupy jako domyślnej.',
            'is_new_user_default_field_comment' => 'Dodaj nowych administratorów domyślnie do tej grupy',
            'code_field' => 'Kod',
            'code_comment' => 'Wpisz unikalny kod, jeżeli chcesz mieć do niego dostęp poprzez API.',
            'menu_label' => 'Grupy',
            'list_title' => 'Zarządzaj grupami',
            'new' => 'Nowa grupa Administratorów',
            'delete_confirm' => 'Jesteś pewny, że chcesz usunąć tą grupę administratorów?',
            'return' => 'Wróć do listy grup',
            'users_count' => 'Użytkowników'
        ],
        'preferences' => [
            'not_authenticated' => 'Nie znaleziono uwierzytelnionego użytkownika, aby załadować lub zapisać ustawienia.'
        ]
    ],
    'list' => [
        'default_title' => 'Lista',
        'search_prompt' => 'Szukaj...',
        'no_records' => 'Brak rekordów w tym widoku.',
        'missing_model' => 'Zachowanie listy użyte w :class nie ma zdefiniowanego modelu.',
        'missing_column' => 'Brak definicji kolumn dla :columns.',
        'missing_columns' => 'Lista użyta w :class nie posiada zdefiniowanej listy kolumn.',
        'missing_definition' => "Zachowanie listy nie posiada kolumn dla ':field'.",
        'missing_parent_definition' => "Zachowanie listy nie zawiera definicji dla ':definition'.",
        'behavior_not_ready' => 'Zachowanie listy nie zostało zainicjowane, sprawdź czy wywołałeś makeLists() w swoim kontrolerze.',
        'invalid_column_datetime' => "Wartość kolumny ':column' nie jest objektem typu DateTime, czy nie brakuje Ci referencji \$dates w Modelu?",
        'pagination' => 'Wyświetlono rekordy: :from-:to z :total',
        'prev_page' => 'Poprzednia strona',
        'next_page' => 'Następna strona',
        'refresh' => 'Odśwież',
        'updating' => 'Aktualizowanie...',
        'loading' => 'Wczytywanie...',
        'setup_title' => 'Ustawienia listy',
        'setup_help' => 'Użyj pól wyboru, aby wybrać kolumny, które chcesz zobaczyć w liście. Możesz zmienić pozycję kolumny przeciągająć ją w dół lub w górę.',
        'records_per_page' => 'Rekordy na stronę',
        'records_per_page_help' => 'Wybierz liczbnę rekordów do wyświetlenia na stronę. Wyższa liczba rekordów na jedną stronę może zmniejszyć wydajność.',
        'check' => 'Sprawdź',
        'delete_selected' => 'Usuń zaznaczone',
        'delete_selected_empty' => 'Nie wybrano elementów do usunięcia.',
        'delete_selected_confirm' => 'Usunąć zaznaczone elementy?',
        'delete_selected_success' => 'Pomyślnie usunięto zaznaczone elementy.',
        'column_switch_true' => 'Tak',
        'column_switch_false' => 'Nie'
    ],
    'fileupload' => [
        'attachment' => 'Załącznik',
        'help' => 'Dodaj tytuł oraz opis załącznika.',
        'title_label' => 'Tytuł',
        'description_label' => 'Opis',
        'default_prompt' => 'Kliknij %s lub upuść plik aby przesłać',
        'attachment_url' => 'URL załącznika',
        'upload_file' => 'Prześlij plik',
        'upload_error' => 'Błąd przesyłania',
        'remove_confirm' => 'Jesteś pewien?',
        'remove_file' => 'Usuń plik'
    ],
    'form' => [
        'create_title' => 'Nowy :name',
        'update_title' => 'Edytuj :name',
        'preview_title' => 'Podgląd :name',
        'create_success' => ':name został stworzony pomyślnie',
        'update_success' => ':name został stworzony pomyślnie',
        'delete_success' => ':name został usunięty pomyślnie',
        'reset_success' => 'Resetowanie zostało zakończone',
        'missing_id' => 'ID rekordu formularza nie zostało znalezione.',
        'missing_model' => 'Zachowanie formularza w klasie :class nie ma zadefiniowanego Modelu.',
        'missing_definition' => "Zachowanie formularza nie posiada pola dla ':field'.",
        'not_found' => 'Rekord formularza o ID :id nie został znaleziony.',
        'action_confirm' => 'Czy jesteś pewny?',
        'create' => 'Stwórz',
        'create_and_close' => 'Stwórz i zamknij',
        'creating' => 'Tworzenie...',
        'creating_name' => 'Tworzenie :name...',
        'save' => 'Zapisz',
        'save_and_close' => 'Zapisz i zamknij',
        'saving' => 'Zapisywanie...',
        'saving_name' => 'Zapisywanie :name...',
        'delete' => 'Usuń',
        'deleting' => 'Usuwanie...',
        'confirm_delete' => 'Usunąć rekord?',
        'confirm_delete_multiple' => 'Usunąć zaznaczone rekordy?',
        'deleting_name' => 'Usuwanie :name...',
        'reset_default' => 'Resetuj do domyślnych',
        'resetting' => 'Resetowanie',
        'resetting_name' => 'Resetowanie :name',
        'undefined_tab' => 'Różne',
        'field_off' => 'Wył.',
        'field_on' => 'Wł.',
        'add' => 'Dodaj',
        'apply' => 'Zastosuj',
        'cancel' => 'Anuluj',
        'close' => 'Zamknij',
        'confirm' => 'Potwierdź',
        'reload' => 'Przeładuj',
        'complete' => 'Zakończ',
        'ok' => 'OK',
        'or' => 'lub',
        'confirm_tab_close' => 'Czy naprawdę chcesz zamknąć tą kartę? Wszystkie niezapisane zmiany zostaną utracone.',
        'behavior_not_ready' => 'Zachowanie formularza nie zostało zainicjowane, sprawdź czy wywołałeś initForm() w swoim kontrolerze.',
        'preview_no_files_message' => 'Brak wgranych plików.',
        'preview_no_record_message' => 'Brak zaznaczonych elementów.',
        'select' => 'Zaznacz',
        'select_all' => 'wszystkie',
        'select_none' => 'żadne',
        'select_placeholder' => 'proszę zaznacz',
        'insert_row' => 'Wstaw wiersz',
        'insert_row_below' => 'Wstaw wiersz poniżej',
        'delete_row' => 'Usuń wiersz',
        'concurrency_file_changed_title' => 'Plik został zmieniony.',
        'concurrency_file_changed_description' => 'Plik, który edytujesz został zmieniony na dysku przez innego użytkownika. Możesz przeładować plik i stracić swoje zmiany lub nadpisać plik na dysku.',
        'return_to_list' => 'Powrót do listy'
    ],
    'recordfinder' => [
        'find_record' => 'Znajdź Rekord'
    ],
    'relation' => [
        'missing_config' => "Zachowanie relacji nie zawiera konfiguracji dla pola ':config'.",
        'missing_definition' => "Zachowanie relacji nie zawiera definicji dla pola ':field'.",
        'missing_model' => 'Zachowanie relacji użyte w klasie :class nie zawiera definicji modelu.',
        'invalid_action_single' => 'Ta akcja nie może zostać wykonana na pojedynczej zależności.',
        'invalid_action_multi' => 'Ta akcja nie może zostać wykonana na wielokrotnej zależności.',
        'help' => 'Kliknij element, aby dodać.',
        'related_data' => 'Pokrewne :name dane',
        'add' => 'Dodaj',
        'add_selected' => 'Dodaj zaznaczony',
        'add_a_new' => 'Dodaj nowy :name',
        'link_selected' => 'Dołącz zaznaczone',
        'link_a_new' => 'Dołącz nowy :name',
        'cancel' => 'Anuluj',
        'close' => 'Zamknij',
        'add_name' => 'Dodaj :name',
        'create' => 'Stwórz',
        'create_name' => 'Stwórz :name',
        'update' => 'Aktualizuj',
        'update_name' => 'Aktualizuj :name',
        'preview' => 'Podgląd',
        'preview_name' => 'Podgląd :name',
        'remove' => 'Usuń',
        'remove_name' => 'Usuń :name',
        'delete' => 'Usuń',
        'delete_name' => 'Usuń :name',
        'delete_confirm' => 'Na pewno?',
        'link' => 'Dołącz',
        'link_name' => 'Dołącz :name',
        'unlink' => 'Odłącz',
        'unlink_name' => 'Odłącz :name',
        'unlink_confirm' => 'Jesteś pewien?'
    ],
    'reorder' => [
        'default_title' => 'Zmień kolejność',
        'no_records' => 'Brak dostępnych rekordów do sortowania.'
    ],
    'model' => [
        'name' => 'Model',
        'not_found' => "Model ':class' o ID :id nie został znaleziony",
        'missing_id' => 'Nie istnieje sprecyzowane ID dla szukania rekordu modelu.',
        'missing_relation' => "Model ':class' nie zawiera definicji dla ':relation'.",
        'missing_method' => "Model ':class' nie zawiera metody ':method'.",
        'invalid_class' => 'Model :model użyty w klasie :class jest nieprawidłowy i musi dziedziczyć klasę \Model.',
        'mass_assignment_failed' => "Masowe przydzielanie nie powiodło się dla atrybutu ':attribute'."
    ],
    'warnings' => [
        'tips' => 'Konfiguracja Systemu - Porady',
        'tips_description' => 'Istnieją pewne problemy, na które należy zwrócić uwagę, aby skonfigurować sytem poprawnie.',
        'permissions' => 'PHP nie może zapisać danych w katalogu :name lub jego podkatalogach. Prosimy o przydzielenie odpowiednich uprawnień na serwerze.',
        'extension' => 'Rozszerzenie PHP :name nie jest zainstalowane. Prosimy o instalację i aktywację rozszerzenia.'
    ],
    'editor' => [
        'menu_label' => 'Ustawienia edytora kodu',
        'menu_description' => 'Personalizuj ustawienia edytora kodu, takie jak wielkość czcionki oraz kolorostyka.',
        'font_size' => 'Wielkość czcionki',
        'tab_size' => 'Wielkość karty',
        'use_hard_tabs' => 'Wcięcie tabulaturą',
        'code_folding' => 'Zawijanie kodu',
        'code_folding_begin' => 'Oznacz początek',
        'code_folding_begin_end' => 'Oznacz początek i koniec',
        'autocompletion' => 'Autouzupełnianie',
        'word_wrap' => 'Zawijanie wierszy',
        'highlight_active_line' => 'Podświetl aktywne linie',
        'auto_closing' => 'Automatycznie zamykaj tagi i specjalne znaki',
        'show_invisibles' => 'Pokaż niewidzialne znaki',
        'show_gutter' => 'Pokaż gutter',
        'basic_autocompletion' => 'Podstawowe autouzupełnianie (Ctrl + Space)',
        'live_autocompletion' => 'Autouzupełnianie na żywo',
        'enable_snippets' => 'Włącz code snippets (Tab)',
        'display_indent_guides' => 'Pokaż wskazówki dla wcięcia',
        'show_print_margin' => 'Pokaż margines wydruku',
        'mode_off' => 'Off',
        'mode_fluid' => 'Fluid',
        '40_characters' => '40 Znaków',
        '80_characters' => '80 Znaków',
        'theme' => 'Schemat kolorów',
        'markup_styles' => 'Style znaczników',
        'custom_styles' => 'Niestandardowy arkusz stylów',
        'custom styles_comment' => 'Niestandardowe style do dołączenia w edytorze HTML.',
        'markup_classes' => 'Klasy znaczników',
        'paragraph' => 'Paragraf',
        'link' => 'Link',
        'table' => 'Tabela',
        'table_cell' => 'Komórka Tabeli',
        'image' => 'Obraz',
        'label' => 'Etykieta',
        'class_name' => 'Nazwa klasy',
        'markup_tags' => 'Znaczniki',
        'allowed_empty_tags' => 'Zezwól na puste znaczniki',
        'allowed_empty_tags_comment' => 'Lista znaczników, które nie będą usunięte w przypadku braku zawartości.',
        'allowed_tags' => 'Dozwolone znaczniki',
        'allowed_tags_comment' => 'Lista dozwolonych znaczników.',
        'no_wrap' => 'Nie zawijaj znaczników',
        'no_wrap_comment' => 'Lista znaczników, które nie powinny być zawinięte w znacznik blokowy.',
        'remove_tags' => 'Usuń znaczniki',
        'remove_tags_comment' => 'Lista znaczników, które zostaną usunięte wraz z zawartością.'
    ],
    'tooltips' => [
        'preview_website' => 'Podgląd strony'
    ],
    'mysettings' => [
        'menu_label' => 'Moje Ustawienia',
        'menu_description' => 'Ustawienia związane z Twoim kontem administratora.'
    ],
    'myaccount' => [
        'menu_label' => 'Moje konto',
        'menu_description' => 'Zmień informacje o koncie jak imię, email czy hasło.',
        'menu_keywords' => 'security login'
    ],
    'branding' => [
        'menu_label' => 'Personalizuj back-end',
        'menu_description' => 'Personalizuj panel administracyjny, kolory, logo.',
        'brand' => 'Marka',
        'logo' => 'Logo',
        'logo_description' => 'Wyślij własne logo do użycia w panelu administracyjnym.',
        'app_name' => 'Nazwa aplikacji',
        'app_name_description' => 'Ta nazwa jest pokazywana w obszarze tytułu w kokpicie.',
        'app_tagline' => 'Podpis aplikacji',
        'app_tagline_description' => 'Ten podpis jest wyświetlany na ekranie logowania do back-endu',
        'colors' => 'Kolory',
        'primary_color' => 'Podstawowy kolor',
        'secondary_color' => 'Dodatkowy kolor',
        'accent_color' => 'Akcentowany kolor',
        'styles' => 'Style',
        'custom_stylesheet' => 'Własne style',
        'navigation' => 'Nawigacja',
        'menu_mode' => 'Styl menu',
        'menu_mode_inline' => 'W linii',
        'menu_mode_tile' => 'Kafelki',
        'menu_mode_collapsed' => 'Zwinięte'
    ],
    'backend_preferences' => [
        'menu_label' => 'Ustawienia Back-end',
        'menu_description' => 'Zarządzaj swoimi ustawieniami konta, jak język panelu.',
        'region' => 'Region',
        'code_editor' => 'Edytor kodu',
        'timezone' => 'Strefa czasowa',
        'timezone_comment' => 'Dopasuj wyświetlanie dat do tej strefy czasowej.',
        'locale' => 'Język',
        'locale_comment' => 'Wybierz język, którego chciałbyś używać.'
    ],
    'access_log' => [
        'hint' => 'Ten log wyświetla listę udanych logowań administratorów. Dane są przechowywane przez :days dni.',
        'menu_label' => 'Dziennik zdarzeń',
        'menu_description' => 'Zobacz listę pomyślnych zalogowań do panelu administracyjnego.',
        'created_at' => 'Data & Czas',
        'login' => 'Login',
        'ip_address' => 'Adres IP',
        'first_name' => 'Imię',
        'last_name' => 'Nazwisko',
        'email' => 'Email'
    ],
    'filter' => [
        'all' => 'wszystkie',
        'options_method_not_exists' => "Klasa modelu :model musi definiować metodę :method() zwracającą listę opcji dla filtru ':filter'.",
        'date_all' => 'Cały okres'
    ],
    'import_export' => [
        'upload_csv_file' => '1. Wgraj plik CSV',
        'import_file' => 'Importuj Plik',
        'first_row_contains_titles' => 'Pierwszy wiersz zawiera nazwy kolumn',
        'first_row_contains_titles_desc' => 'Zostaw to pole zaznaczone, jeżeli pierwszy wiersz w pliku CSV zawiera tytuły kolumn.',
        'match_columns' => '2. Przypisz kolumny z pliku do pól w bazie danych',
        'file_columns' => 'Kolumny w pliku',
        'database_fields' => 'Pola w bazie',
        'set_import_options' => '3. Ustaw opcje importu',
        'export_output_format' => '1. Format eksportowanego pliku',
        'file_format' => 'Format pliku',
        'standard_format' => 'Standardowy',
        'custom_format' => 'Niestandardowy',
        'delimiter_char' => 'Znak rozdzielający (delimiter)',
        'enclosure_char' => 'Znak zawierający (enclosure)',
        'escape_char' => 'Znak unikania (escape)',
        'select_columns' => '2. Wybierz kolumny do eksportu',
        'column' => 'Kolumna',
        'columns' => 'Kolumny',
        'set_export_options' => '3. Ustaw opcje eksportu',
        'show_ignored_columns' => 'Pokaż ignorowane kolumny',
        'auto_match_columns' => 'Automatycznie przypisz kolumny',
        'created' => 'Stworzono',
        'updated' => 'Zaktualizowano',
        'skipped' => 'Pominięto',
        'warnings' => 'Ostrzeżenia',
        'errors' => 'Błędy',
        'skipped_rows' => 'Pominięte wiersze',
        'import_progress' => 'Postęp importu',
        'processing' => 'Przetwarzanie',
        'import_error' => 'Błąd importu',
        'upload_valid_csv' => 'Wgraj prawidłowy plik CSV.',
        'drop_column_here' => 'Upuść kolumnę tutaj...',
        'ignore_this_column' => 'Ignoruj tą kolumnę',
        'processing_successful_line1' => 'Procedura eksportu zakończyła się powodzeniem!',
        'processing_successful_line2' => 'Przeglądarka automatycznie zaproponuje Ci pobranie pliku.',
        'export_progress' => 'Postęp eksportu',
        'export_error' => 'Błąd eksportu',
        'column_preview' => 'Podgląd kolumny',
        'file_not_found_error' => 'Nie znaleziono pliku',
        'empty_error' => 'Brak danych do wyeksportowania',
        'empty_import_columns_error' => 'Określ kolumny do importu.',
        'match_some_column_error' => 'Najpierw przypisz jakieś kolumny.',
        'required_match_column_error' => 'Przypisz kolumnę dla wymaganego pola :label.',
        'empty_export_columns_error' => 'Określ kolumny do eksportu.',
        'behavior_missing_uselist_error' => 'Musisz zaimplementować zachowanie ListController z włączoną opcją "useList".',
        'missing_model_class_error' => 'Określ klasę modelu dla typu :type',
        'missing_column_id_error' => 'Brak identyfikatora kolumny',
        'unknown_column_error' => 'Nieznana kolumna',
        'encoding_not_supported_error' => 'Nie rozpoznano kodowania pliku źródłowego. Proszę wybrać opcję niestandardowego formatu pliku z poprawnym kodowaniem, aby zaimportować plik.',
        'encoding_format' => 'Kodowanie',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latin-1, Europa Zachodnia)',
            'iso_8859_2' => 'ISO-8859-2 (Latin-2, Europa Centralna)',
            'iso_8859_3' => 'ISO-8859-3 (Latin-3, Europa Południowa)',
            'iso_8859_4' => 'ISO-8859-4 (Latin-4, Europa Północna)',
            'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrylica)',
            'iso_8859_6' => 'ISO-8859-6 (Latin, Arabski)',
            'iso_8859_7' => 'ISO-8859-7 (Latin, Grecki)',
            'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrajski)',
            'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turecki)',
            'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordycki)',
            'iso_8859_11' => 'ISO-8859-11 (Latin, Tajski)',
            'iso_8859_13' => 'ISO-8859-13 (Latin-7, Kraje Nadbałtyckie)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtycki)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, Europa Zachodnia wersja ze znakiem euro)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)'
        ]
    ],
    'permissions' => [
        'manage_media' => 'Manage mediami'
    ],
    'mediafinder' => [
        'default_prompt' => 'Kliknij przycisk %s aby znaleźć element'
    ],
    'media' => [
        'menu_label' => 'Media',
        'upload' => 'Prześlij',
        'move' => 'Przenieś',
        'delete' => 'Usuń',
        'add_folder' => 'Dodaj folder',
        'search' => 'Szukaj',
        'display' => 'Pokaż',
        'filter_everything' => 'Wszystko',
        'filter_images' => 'Obrazki',
        'filter_video' => 'Filmy',
        'filter_audio' => 'Dźwięki',
        'filter_documents' => 'Dokumenty',
        'library' => 'Biblioteka',
        'size' => 'Rozmiar',
        'title' => 'Tytuł',
        'last_modified' => 'Data modyfikacji',
        'public_url' => 'Publiczny URL',
        'click_here' => 'Kliknij tutaj',
        'thumbnail_error' => 'Wystąpił błąd przy tworzeniu miniatury.',
        'return_to_parent' => 'Wróć do folderu nadrzędnego',
        'return_to_parent_label' => 'Idź w górę ..',
        'nothing_selected' => 'Nic nie zaznaczono.',
        'multiple_selected' => 'Wybrano wiele elementów.',
        'uploading_file_num' => 'Przesyłanie :number pliku(ów)...',
        'uploading_complete' => 'Przesyłanie zakończone',
        'uploading_error' => 'Błąd przesyłania pliku',
        'type_blocked' => 'Typ pliku jest zablokowany ze względów bezpieczeństwa.',
        'order_by' => 'Sortowanie',
        'folder' => 'Folder',
        'no_files_found' => 'Nie znaleziono żadnych pasujących elementów.',
        'delete_empty' => 'Wybierz elementy do usunięcia.',
        'delete_confirm' => 'Czy na pewno chcesz usunąć wybrane elementy?',
        'error_renaming_file' => 'Wystąpił błąd przy zmianie nazwy elementu.',
        'new_folder_title' => 'Nowy folder',
        'folder_name' => 'Nazwa folderu',
        'error_creating_folder' => 'Wystąpił błąd przy tworzeniu folderu',
        'folder_or_file_exist' => 'Folder lub plik o podanej nazwie już istnieje.',
        'move_empty' => 'Wybierz elementy do przeniesienia.',
        'move_popup_title' => 'Przenieś pliki lub foldery',
        'move_destination' => 'Folder docelowy',
        'please_select_move_dest' => 'Wybierz folder docelowy.',
        'move_dest_src_match' => 'Wybierz inny folder docelowy.',
        'empty_library' => 'Biblioteka Mediów jest pusta. Na początek prześlij pliki lub utwórz foldery.',
        'insert' => 'Wstaw',
        'crop_and_insert' => 'Przytnij lub wstaw',
        'select_single_image' => 'Wybierz pojedynczy obrazek.',
        'selection_not_image' => 'Wybrany element nie jest obrazkiem.',
        'restore' => 'Cofnij wszystkie zmiany',
        'resize' => 'Skaluj...',
        'selection_mode_normal' => 'Normalny',
        'selection_mode_fixed_ratio' => 'Zablokuj proporcje',
        'selection_mode_fixed_size' => 'Zablokuj rozmiar',
        'height' => 'Wysokość',
        'width' => 'Szerokość',
        'selection_mode' => 'Tryb zaznaczenia',
        'resize_image' => 'Zmień rozmiar obrazka',
        'image_size' => 'Rozmiar obrazka:',
        'selected_size' => 'Wybrano:'
    ]
];

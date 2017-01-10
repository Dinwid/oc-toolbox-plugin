<?php return [
    'plugin' => [
        'name' => 'Toolbox',
        'description' => '',
    ],
    'field' => [
        'id'                                => 'ID',
        'name'                              => 'Название',
        'title'                             => 'Заголовок',
        'active'                            => 'Активность',
        'code'                              => 'Код',
        'slug'                              => 'URL',
        'external_id'                       => 'Внешний ID',
        'preview_text'                      => 'Краткое описание',
        'preview_image'                     => 'Изображение-превью',
        'image'                             => 'Изображение',
        'images'                            => 'Изображения (галерея)',
        'description'                       => 'Описание',
        'category'                          => 'Категория',

        'sort_order'                        => 'Сортировка',
        'created_at'                        => 'Создано',
        'updated_at'                        => 'Обновлено',
        'deleted_at'                        => 'Удалено',
        'deleted'                           => 'Удаленные',
        'empty'                             => 'Не выбрано',
        'password'                          => 'Пароль',
    ],
    'menu' => [],
    'validation' => [
        "accepted"         => 'Вы должны принять ":attribute".',
        "active_url"       => 'Поле ":attribute" недействительный URL.',
        "after"            => 'Поле ":attribute" должно содержать дату после ":date."',
        "alpha"            => 'Поле ":attribute" может содержать только буквы.',
        "alpha_dash"       => 'Поле ":attribute" может содержать только буквы, цифры и дефис.',
        "alpha_num"        => 'Поле ":attribute" может содержать только буквы и цифры.',
        "array"            => 'Поле ":attribute" должно быть массивом.',
        "before"           => 'Поле ":attribute" должно содержать дату перед :date.',
        "between"          => [
            "numeric" => 'Поле ":attribute" должно быть между :min и :max.',
            "file"    => 'Размер ":attribute" должен быть от :min до :max Килобайт.',
            "string"  => 'Длина ":attribute" должна быть от :min до :max символов.',
            "array"   => 'Поле ":attribute" должно содержать :min - :max элементов.',
        ],
        "confirmed"        => 'Поле ":attribute" не совпадает с подтверждением.',
        "date"             => 'Поле ":attribute" не является датой.',
        "date_format"      => 'Поле ":attribute" не соответствует формату :format.',
        "different"        => 'Поля ":attribute" и ":other" должны различаться.',
        "digits"           => 'Длина цифрового поля ":attribute" должна быть :digits.',
        "digits_between"   => 'Длина цифрового поля ":attribute" должна быть между :min и :max.',
        "email"            => 'Поле ":attribute" имеет ошибочный формат.',
        "exists"           => 'Выбранное значение для ":attribute" не существует.',
        "image"            => 'Поле ":attribute" должно быть изображением.',
        "in"               => 'Выбранное значение для ":attribute" ошибочно.',
        "integer"          => 'Поле ":attribute" должно быть целым числом.',
        "ip"               => 'Поле ":attribute" должно быть действительным IP-адресом.',
        "max"              => [
            "numeric" => 'Поле ":attribute" должно быть не больше :max.',
            "file"    => 'Поле ":attribute" должно быть не больше :max Килобайт.',
            "string"  => 'Поле ":attribute" должно быть не больше :max символов.',
            "array"   => 'Поле ":attribute" должно содержать не более :max элементов.',
        ],
        "mimes"            => 'Поле ":attribute" должно быть файлом одного из типов: :values.',
        "extensions"       => 'Поле ":attribute" должно иметь одно из расширений: :values.',
        "min"              => [
            "numeric" => 'Поле ":attribute" должно быть не менее :min.',
            "file"    => 'Поле ":attribute" должно быть не менее :min Килобайт.',
            "string"  => 'Поле ":attribute" должно быть не менее :min символов.',
            "array"   => 'Поле ":attribute" должно содержать не менее :min элементов.',
        ],
        "not_in"           => 'Выбранное значение для ":attribute" ошибочно.',
        "numeric"          => 'Поле ":attribute" должно быть числом.',
        "regex"            => 'Поле ":attribute" имеет ошибочный формат.',
        "required"         => 'Поле ":attribute" обязательно для заполнения.',
        "required_if"      => 'Поле ":attribute" обязательно для заполнения, когда ":other" равно :value.',
        "required_with"    => 'Поле ":attribute" обязательно для заполнения, когда :values указано.',
        "required_without" => 'Поле ":attribute" обязательно для заполнения, когда :values не указано.',
        "same"             => 'Значение ":attribute" должно совпадать с ":other".',
        "size"             => [
            "numeric" => 'Поле ":attribute" должно быть :size.',
            "file"    => 'Поле ":attribute" должно быть :size Килобайт.',
            "string"  => 'Поле ":attribute" должно быть длиной :size символов.',
            "array"   => 'Количество элементов в поле ":attribute" должно быть :size.',
        ],
        "unique"           => 'Такое значение поля ":attribute" уже существует.',
        "url"              => 'Поле ":attribute" имеет ошибочный формат.',
    ],
    'tab' => [
        'preview_content'       => 'Превью-контент',
        'full_content'          => 'Полный контент',
        'images'                => 'Изображения',
        'settings'              => 'Настройки',
        'description'           => 'Описание',
    ],
    'component' => [
        'property_name_error_404'           => 'Отображать 404 страницу',
        'property_value_on'                 => 'Да',
        'property_value_off'                => 'Нет',
        'property_slug'                     => 'Slug',
    ],
    'button' => [
        'restore' => 'Восстановить',
    ],
    'message' => [
        'create_success'                    => 'Создание :name было успешно выполнено',
        'update_success'                    => 'Редактирование :name было успешно выполнено',
        'delete_success'                    => 'Удаление :name было успешно выполнено',
        'restore_confirm'                   => 'Вы действительно хотите восстановить выбранные элементы?',
        'restore_success'                   => 'Элементы восстановлены',
    ],
    'settings' => [
        'count_per_page'            => 'Количество элементов на странице',
        'number_validation'         => 'Необходимо ввести число',
        'pagination_limit'          => 'Максимальное количество кнопок пагинации',
        'active_class'              => 'Класс активной кнопки',
        'button_list'               => 'Список кнопок',
        'button_list_description'   => 'main,first,first-more,prev,prev-more,next,next-more,last,last-more',
        'button_name'               => 'Название кнопки',
        'button_limit'              => 'Отображить после страницы',
        'button_number'             => 'Отображить имя кнопки как число',
        'button_class'              => 'CSS класс',
        'last_button'               => '"Последняя"',
        'last-more_button'          => '"Еще" (перед "Последняя")',
        'next_button'               => '"Следующая"',
        'next-more_button'          => '"Еще" (перед "Следующая")',
        'prev_button'               => '"Предыдущая"',
        'prev-more_button'          => '"Еще" (после "Предыдущая")',
        'first_button'              => '"Первая"',
        'first-more_button'         => '"Еще" (после "Первая")',
        'main_button'               => '"Основная"',
    ],
];
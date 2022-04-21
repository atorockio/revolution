<?php
/**
 * TV English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['example_tag_tv_name'] = 'NameOfTV';
$_lang['has_access'] = 'Доступно для редагування?';
$_lang['filter_by_category'] = 'Фільтр за категорією...';
$_lang['rank'] = 'Порядок';
$_lang['rendering_options'] = 'Налаштування відображення';
$_lang['tv'] = 'TV';
$_lang['tvs'] = 'Змінні шаблону';
$_lang['tv_binding_msg'] = 'Це TV підтримує прив\'язку даних з використанням @-команд';
$_lang['tv_caption'] = 'Підпис';
$_lang['tv_caption_desc'] = 'Мітка, показана для цього TV на сторінках редагування ресурсів (може бути перевизначена за шаблоном або іншими критеріями за допомогою <a href="?a=security/forms" target="_blank">Налаштування форм</a>).';
$_lang['tv_category_desc'] = 'Використовуйте для групування TV полей у сторінках редагування ресурсів і в дереві елементів.';
$_lang['tv_change_template_msg'] = 'Зміна цього шаблону призведе до перезавантаження TV для сторінки з втратою всіх не збережених змін. <br /> <br /> Ви впевнені, що хочете змінити цей шаблон? ';
$_lang['tv_delete_confirm'] = 'Ви впевнені, що хочете видалити цей TV? ';
$_lang['tv_description'] = 'Описання';
$_lang['tv_description_desc'] = 'Usage information for this TV shown next to its caption in Resource editing pages, as a tooltip in the Elements tree, and within search results.';
$_lang['tv_err_delete'] = 'Відбулася помилка під час спроби видалити TV поле. ';
$_lang['tv_err_duplicate'] = 'Сталася помилка під час спроби копіювання TV поля. ';
$_lang['tv_err_duplicate_templates'] = 'Сталася помилка під час копіювання TV шаблону. ';
$_lang['tv_err_duplicate_documents'] = 'Сталася помилка під час копіювання TV ресурса. ';
$_lang['tv_err_duplicate_documentgroups'] = 'Сталася помилка під час копіювання TV груп ресурсів. ';
$_lang['tv_err_ae'] = 'TV з назвою "[[+name]]" вже існує.';
$_lang['tv_err_invalid_name'] = 'Назва TV неприпустима. ';
$_lang['tv_err_invalid_id_attr'] = 'HTML Ідентифікатори не повинні починатися з цифри або містити пробіл. ';
$_lang['tv_err_locked'] = 'TV заблоковано!';
$_lang['tv_err_nf'] = 'TV не знайдено.';
$_lang['tv_err_nfs'] = 'Не знайдено TV з ID: [[+id]]';
$_lang['tv_err_ns'] = 'TV не вказано. ';
$_lang['tv_err_reserved_name'] = 'TV не може мати таку ж назву, як у поля ресурсу. ';
$_lang['tv_err_save_access_permissions'] = 'Сталася помилка при спробі збереження прав доступу для TV.';
$_lang['tv_err_save'] = 'Сталася помилка під час збереження TV.';
$_lang['tv_inuse'] = 'Наступні ресурси використовують цей TV. Щоб продовжити видалення, натисніть кнопку «Видалити». Якщо ви передумали, натисніть кнопку «Скасувати». ';
$_lang['tv_inuse_template'] = 'Наступний шаблон (або шаблони) використовує це TV: [[+templates]]. <br /> <br /> Будь ласка, Відв\'яжіть TV від шаблону (або шаблонів) перед його видаленням. ';
$_lang['is_static_tv_desc'] = 'Use an external file to store the default value for this TV. This may be useful if the default value’s content is particularly lengthy.';
$_lang['tv_lock'] = 'Обмежити редагування';
$_lang['tv_lock_desc'] = 'Редагувати TV можуть лише користувачі з правами доступу "edit_locked".';
$_lang['tv_management_msg'] = 'Управління ТВ для ваших ресурсів. ';
$_lang['tv_name_desc'] = 'Помістіть контент, створений у цьому ТV в ресурсі, шаблоні або чанці, використовуючи наступний тег MODX: <span class="copy-this">[[*<span class="example-replace-name"><span class="example-replace-name"> '.$_lang['example_tag_tv_name'].'</span>]]</span>';
$_lang['tv_new'] = 'Створити TV';
$_lang['tv_novars'] = ' TV не знайдені';
$_lang['tv_properties'] = 'Параметри за замовчуванням';
$_lang['tv_rank'] = 'Порядок сортування';
$_lang['tv_rank_desc'] = 'Використовується для керування позиціонуванням TV на сторінках редагування ресурсів (може бути перевизначено за шаблоном або іншими критеріями за допомогою <a href="?a=security/forms" target="_blank">Налаштування форм</a>). ';
$_lang['tv_reset_params'] = 'Скинути параметри';
$_lang['tv_tab_access_desc'] = 'Виберіть групи ресурсів, до яких належить цей TV. Тільки користувачі з доступом до вибраних груп зможуть змінювати цей його. Якщо жодну групу не вибрано, всі користувачі з доступом до менеджера зможуть змінювати TV. ';
$_lang['tv_tab_general_desc'] = 'Here you can enter the basic attributes for this <em>Template Variable</em> (TV). Note that TVs must be assigned to templates in order to access them from snippets and documents.';
$_lang['tv_tab_input_options'] = 'Параметри вводу';
$_lang['tv_tab_input_options_desc'] = '<p>Тут можна редагувати параметри введення для TV, специфічні для типу візуалізації, який ви оберете.</p> ';
$_lang['tv_tab_output_options'] = 'Параметри виводу';
$_lang['tv_tab_output_options_desc'] = '<p>Тут можна редагувати параметри виведення TV, специфічні для типу відображення, який ви оберете.</p> ';
$_lang['tv_tab_sources_desc'] = 'Тут Ви можете призначити джерела медіа, які будуть використані цією змінною шаблону для кожного окремого контексту. Для зміни двічі клацніть по імені джерела у таблиці.';
$_lang['tv_tab_tmpl_access'] = 'Доступ шаблонів';
$_lang['tv_tab_tmpl_access_desc'] = 'Виберіть шаблони, які дозволяють доступ до цього TV. ';
$_lang['tv_tag_copied'] = 'TV тег скопійовано!';
$_lang['tv_widget'] = 'Віджет';
$_lang['tv_widget_prop'] = 'Параметри віджету';
$_lang['tvd_err_remove'] = 'Виникла помилка при спробі видалити TV із ресурсу. ';
$_lang['tvdg_err_remove'] = 'Виникла помилка при спробі видалити TV із групи ресурсів. ';
$_lang['tvdg_err_save'] = 'Виникла помилка при спробі прикріпити TV до групи ресурсів. ';
$_lang['tvt_err_nf'] = 'TV не має доступу до вказаного шаблону. ';
$_lang['tvt_err_remove'] = 'Виникла помилка при спробі видалити TV із шаблону. ';
$_lang['tvt_err_save'] = 'Виникла помилка під час спроби прикріпити TV до шаблону.';

// Temporarily match old keys to new ones to ensure compatibility
// -- fields
$_lang['tv_desc_caption'] = $_lang['tv_caption_desc'];
$_lang['tv_desc_category'] = $_lang['tv_category_desc'];
$_lang['tv_desc_description'] = $_lang['tv_description_desc'];
$_lang['tv_desc_name'] = $_lang['tv_name_desc'];
$_lang['tv_lock_msg'] = $_lang['tv_lock_desc'];
$_lang['tv_rank_msg'] = $_lang['tv_rank_desc'];

// -- tabs
$_lang['tv_access_msg'] = $_lang['tv_tab_access_desc'];
$_lang['tv_input_options'] = $_lang['tv_tab_input_options'];
$_lang['tv_input_options_msg'] = $_lang['tv_tab_input_options_desc'];
$_lang['tv_msg'] = $_lang['tv_tab_general_desc'];
$_lang['tv_output_options'] = $_lang['tv_tab_output_options'];
$_lang['tv_output_options_msg'] = $_lang['tv_tab_output_options_desc'];
$_lang['tv_sources.intro_msg'] = $_lang['tv_tab_sources_desc'];
$_lang['tv_tmpl_access'] = $_lang['tv_tab_tmpl_access'];
$_lang['tv_tmpl_access_msg'] = $_lang['tv_tab_tmpl_access_desc'];

/*
    Refer to default.inc.php for the keys below.
    (Placement in this default file necessary to allow
    quick create/edit panels access to them when opened
    outside the context of their respective element types)

    tv_caption_desc
    tv_category_desc
    tv_description_desc

*/

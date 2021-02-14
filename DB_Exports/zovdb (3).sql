DB:
u744860774_zovdbnew
Username:
u744860774_rootnew
Password:
Developer38!@




-- --------------------------------------------------------

--
-- Структура таблицы `bonuscards`
--

DROP TABLE IF EXISTS `bonuscards`;
CREATE TABLE `bonuscards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `cardname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discountpercent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `branches`
--

DROP TABLE IF EXISTS `branches`;
CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countryid` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `x` double NOT NULL,
  `y` double NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `codes`
--

DROP TABLE IF EXISTS `codes`;
CREATE TABLE `codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countryid` int(11) NOT NULL,
  `countryinfoid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `codes`
--

INSERT INTO `codes` (`id`, `userid`, `code`, `countryid`, `countryinfoid`, `created_at`, `updated_at`) VALUES
(1, 5, 'S3-4001', 3, 1, NULL, NULL),
(2, 6, 'S5-4002', 5, 1, NULL, NULL),
(3, 7, 'S3-4003', 3, 1, NULL, NULL),
(4, 8, 'S3-4004', 3, 1, NULL, NULL),
(5, 9, 'S5-4005', 5, 1, NULL, NULL),
(6, 10, '-1', 0, -1, NULL, NULL),
(7, 11, '-1', 0, -1, NULL, NULL),
(8, 12, '-1', 0, -1, NULL, NULL),
(9, 13, '-1', 0, -1, NULL, NULL),
(10, 14, '-1', 0, -1, NULL, NULL),
(11, 15, 'S4-4012', 4, 1, NULL, NULL),
(12, 2, 'S4-4012', 4, 1, '2020-02-22 11:24:30', '2020-02-22 11:24:30'),
(13, 16, 'S2-4013', 2, 1, NULL, NULL),
(14, 24, 'S5-4014', 5, 1, '2020-09-27 04:16:56', '2020-09-27 04:16:56');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `textru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `texten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allow` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `text`, `textru`, `texten`, `userid`, `allow`, `created_at`, `updated_at`) VALUES
(1, '   It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Всем здравствуйте! Меня зовут Лаура, я основатель онлайн-школы «Mama.inBusiness” (IG: @mama.inbusiness). С компанией ZOV EXPRESS и лично Орханом я знакома больше двух лет. С самых первых дней мы смогли установить прочные партнёрские отношения, которые динамично растут с каждым годом. Я благодарна Орхану за очень тёплое отношение ко всей моей команде и к нашим ученицам. Спасибо, что оперативно решаете все вопросы и даете лучшие тарифы и сроки на доставку. Всегда найдёте решение для каждого клиента. Впервые встречаю такой уровень клиентоориентированности и личной вовлечённости руководства. Также я благодарна за то, что вы всегда открываете все новые горизонты. У вас просто нет границ! И это очень круто! Мы всегда с большим удовольствием поддержим все ваши новые идеи. Успехов вам в этом потрясающем сервисе: соединять разные миры и дарить людям радость покупок и возможность вести бизнес.', '   It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '1', 1, NULL, NULL),
(2, 'efwegwe', 'hththrth', 'kuykyukyuk', '2', 0, NULL, NULL),
(3, '3eeeee', 'eeee', 'rrr', '3', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inforu` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `infoen` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `name`, `nameru`, `nameen`, `shortname`, `avatar`, `info`, `inforu`, `infoen`, `type`) VALUES
(1, 'Rusiya', 'Россия', 'Russia', 'RU', 'flagusa.png', NULL, 'Экспресс 4-6 дней, Авто 10-13 дней', NULL, 2),
(2, 'Ukrayna', 'Украина', 'Ukrain', 'UA', 'flagusa.png', NULL, 'Экспресс 6-8 дней', NULL, 2),
(3, 'Azərbaycan', 'Азербайджан', 'Azerbaijan', 'AZ', 'flagusa.png', NULL, 'Экспресс 7-10 дней, Авто 25-30 дней', NULL, 2),
(4, 'Qırğızstan', 'Кыргызстан', 'Kirgizia', 'KG', 'flagusa.png', NULL, 'Экспресс 3-5 дней, Авто 10-12 дней', NULL, 2),
(5, 'Qazaxstan', 'Казахстан', 'Khazaxstan', 'KZ', 'flagusa.png', NULL, 'Экспресс 4-6 дней, Авто 10-12 дней', NULL, 2),
(6, 'ABŞ', 'США', 'USA', 'US', 'flagusa.png', NULL, 'Экспресс 3-5 дней', NULL, 2),
(7, 'Avropa', 'Европа', 'Europe', 'EU', 'flagusa.png', NULL, 'Экспресс 3-5 дней', NULL, 2),
(8, 'Çin', 'Китай', 'China', 'CH', NULL, NULL, NULL, NULL, 1),
(9, 'Türkiyə', 'Турция', 'Turkey', 'TR', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `countriesinfo`
--

DROP TABLE IF EXISTS `countriesinfo`;
CREATE TABLE `countriesinfo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countryid` int(11) NOT NULL,
  `infoid` int(11) DEFAULT NULL,
  `info` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inforu` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `infoen` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `countriesinfo`
--

INSERT INTO `countriesinfo` (`id`, `countryid`, `infoid`, `info`, `inforu`, `infoen`) VALUES
(1, 1, 1, NULL, 'Экспресс 4-6 дней', NULL),
(2, 1, 2, NULL, ' Авто 10-13 дней', NULL),
(3, 2, 1, NULL, 'Экспресс 6-8 дней', NULL),
(4, 3, 1, NULL, 'Экспресс 7-10 дней', NULL),
(5, 3, 2, NULL, 'Авто 25-30 дней', NULL),
(6, 4, 1, NULL, 'Экспресс 3-5 дней', NULL),
(7, 4, 2, NULL, 'Авто 10-12 дней', NULL),
(8, 5, 1, NULL, 'Экспресс 4-6 дней', NULL),
(9, 5, 2, NULL, 'Авто 10-12 дней', NULL),
(10, 6, 1, NULL, 'Экспресс 3-5 дней', NULL),
(11, 7, 1, NULL, 'Экспресс 3-5 дней', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `generals`
--

DROP TABLE IF EXISTS `generals`;
CREATE TABLE `generals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textru` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texten` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortnameru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortnameen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `generals`
--

INSERT INTO `generals` (`id`, `text`, `textru`, `texten`, `shortname`, `shortnameru`, `shortnameen`, `categoryid`, `type`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'sss ddd<br>', 'ZOV EXPRESS является международной курьерской службой, осуществляющая все виды транспортировки из Китая (Город Гуанчжоу) во многие страны СНГ, Европы и в США. Компания специализируется в основном на быстрых доставках, основываясь на требования сегодняшнего рынка.', '<br>', 'Beynəlxalq kuryer xidməti', 'МЕЖДУНАРОДНАЯ КУРЬЕРСКАЯ СЛУЖБА', 'INTERNATIONAL COURIER SERVICE', 0, 1, NULL, NULL, '2020-02-04 16:58:42'),
(2, 'Biz', 'О нас', 'About', NULL, NULL, NULL, 0, 2, NULL, NULL, NULL),
(3, 'Məlumat', 'Информация', 'Information', NULL, NULL, NULL, 1, 2, NULL, NULL, NULL),
(4, 'Kalkulyator', 'Калькулятор', 'Calculator', NULL, NULL, NULL, 2, 2, NULL, NULL, NULL),
(5, 'İzləmə', 'Отслеживание', 'Tracking', NULL, NULL, NULL, 3, 2, NULL, NULL, NULL),
(6, 'Rəylər', 'Отзывы', 'Reviews', NULL, NULL, NULL, 4, 2, NULL, NULL, NULL),
(7, 'Əlaqə', 'Контакты', 'Contact', NULL, NULL, NULL, 5, 2, NULL, NULL, NULL),
(8, 'TASCO', 'TASCO', 'TASCO', NULL, NULL, NULL, 9, 2, NULL, NULL, NULL),
(9, 'Göndəriş və müddətlər', 'Виды отправок и сроки', 'Sending and durations', NULL, NULL, NULL, 11, 2, NULL, NULL, NULL),
(10, 'Qadağan olunmuş mallar', 'Запрещенные товары', 'Forbidden goods', NULL, NULL, NULL, 12, 2, NULL, NULL, NULL),
(11, 'İzləmə haqqında', 'Отслеживание товаров', 'Tracking info', NULL, NULL, NULL, 13, 2, NULL, NULL, NULL),
(12, '<p><br></p>', '<p style=\"font-weight: bold\">Tradind and search company</p>\r\n            <p style=\"text-align: justify\">\r\n                    <strong>TASCO</strong> является нашей торгово-поисковой компанией, которая предоставляет своим клиентам полный спектр услуг относительно международной торговли и бизнеса с Китаем.\r\n                    В <strong>TASCO</strong> с вами работает команда профессионалов, которые легко и быстро найдут нужный вам товар из Китая по самой приемлемой цене, обработают заказ, переговорят с поставщиком, проведут экспедицию,\r\n                    и подготовят товар на отправку. Мы принимаем как крупные заказы оптом, так и розничные заказы. Также мы предлагаем товары нашим клиентам из наших каталогов, на нашем канале в <a href=\"https://t.me/TASCO_FM\">Telegram</a>\r\n                    и на нашей странице в Instagram - <a href=\"https://www.instagram.com/tasco_china/\">@tasco_china</a> куда постоянно скидываются новинки всех видов товаров из Китая.\r\n                    Мы предлагаем самые низкие цены за товары, и берём самые низкие проценты за услуги, при этом предоставляя вам самый высокий уровень сервиса.\r\n            </p>\r\n            <p> Предоставляемые услуги <strong>TASCO</strong>:\r\n            </p><ul>\r\n                <li>Нахождение товара по запросу</li>\r\n                <li>Выбор товара с наших каталогов</li>\r\n                <li>Выкуп с интернет порталов Китая</li>\r\n                <li>Услуги байера (группа и индивидуально)</li>\r\n                <li>Переговоры с фабриками и поставщиками</li>\r\n                <li>Проверка товара (фото/видео отчёт)</li>\r\n                <li>Услуги переводчика</li>\r\n                <li>Услуги гида (встреча в аэропорту)</li>\r\n            </ul>\r\n            <p></p>\r\n            <p>\r\n                <span style=\"text-align: center;\">Обучающие курсы бизнесу с Китаем <strong>CHINA IN BUSINESS</strong></span>\r\n                </p><p>Мы проводим обучающие онлайн курсы :\r\n                </p><ul>\r\n                <li>Как начать бизнес с Китаем почти без вложений ?</li>\r\n                <li>Как открыть собственный интернет магазин с товарами из Китая ?</li>\r\n                <li>Как правильно находить поставщиков ?</li>\r\n                <li>Как самостоятельно выкупать товары с интернет порталов Китая ?</li>\r\n                <li>Как быстро и эффективно собрать клиентуру?</li>\r\n                <li>Продвижение бизнеса</li>\r\n                <li>Рынки и фабрики Китая</li>\r\n                <li>Обследование рынка</li>\r\n                </ul>\r\n                <p></p>\r\n\r\n            Этому и многому другому относительно бизнеса с Китаем мы научим вас на наших обучающих курсах <strong>China in Business</strong>.\r\n            Для большей информации подпишитесь на наш Instagram  <a href=\"https://www.instagram.com/china_in_business/\">@china_in_business</a> и\r\n            на наш канал в <a href=\"https://t.me/china_in_business\">Telegram</a>\r\n\r\n            <p></p>\r\n            <p>\r\n                <strong>Контакты</strong> <br>\r\n                Телефон:<br>\r\n                WhatsApp:<br>\r\n                Telegram:<br>\r\n                Instagram:<br>\r\n            </p>', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'TASCO', 'TASCO', 'TASCO', 0, 3, NULL, NULL, '2020-01-13 03:09:42'),
(13, NULL, '<p></p>\r\n            <p>\r\n            </p><p style=\"font-weight: bold\">РОССИЯ</p>\r\n            <p>Экспресс 4-6 дней</p>\r\n            <p>\r\n                </p><ul>\r\n                    <li>5 отправок в неделю</li>\r\n                    <li>Приём посылок от 0,1 кг</li>\r\n                    <li>Упаковка бесплатная</li>\r\n                    <li>На грузы выше 20 кг страховка 1%</li>\r\n                </ul>\r\n            <p></p>\r\n            <p>Авто 10-13 дней</p>\r\n            <p>\r\n            </p><ul>\r\n                <li>5 отправок в неделю</li>\r\n                <li>Приём от 20 кг</li>\r\n                <li>Упаковка оплачивается отдельно</li>\r\n                <li>Страховка 1%</li>\r\n            </ul>\r\n            <p></p>\r\n            <p></p>\r\n\r\n            <p>\r\n            </p><p style=\"font-weight: bold\">УКРАИНА</p>\r\n            <p>Экспресс 6-8 дней</p>\r\n            <p>\r\n            </p><ul>\r\n                <li>5 отправок в неделю</li>\r\n                <li>Приём посылок от 0,1 кг</li>\r\n                <li>Упаковка бесплатная</li>\r\n                <li>На грузы выше 20 кг страховка 1%</li>\r\n            </ul>\r\n            <p></p>\r\n            <p></p>\r\n\r\n            <p>\r\n            </p><p style=\"font-weight: bold\">АЗЕРБАЙДЖАН</p>\r\n            <p>Экспресс 7-10 дней</p>\r\n            <p>\r\n            </p><ul>\r\n                <li>3 отправки в неделю</li>\r\n                <li>Приём посылок от 5 кг</li>\r\n                <li>Упаковка оплачивается отдельно</li>\r\n                <li>Страховка бесплатная</li>\r\n            </ul>\r\n            <p></p>\r\n            <p>Авто 25-30 дней</p>\r\n            <p>\r\n            </p><ul>\r\n                <li>5 отправок в неделю</li>\r\n                <li>Приём от 20 кг</li>\r\n                <li>Упаковка оплачивается отдельно</li>\r\n                <li>Страховка по желанию клиента (1%)</li>\r\n            </ul>\r\n            <p></p>\r\n            <p></p>\r\n\r\n            <p>\r\n            </p><p style=\"font-weight: bold\">КЫРГЫЗСТАН</p>\r\n            <p>Экспресс 3-5 дней</p>\r\n            <p>\r\n            </p><ul>\r\n                <li>5 отправок в неделю</li>\r\n                <li>Приём посылок от 0,1 кг</li>\r\n                <li>Упаковка бесплатная</li>\r\n                <li>Страховка бесплатная</li>\r\n            </ul>\r\n            <p></p>\r\n            <p>Авто 10-12 дней</p>\r\n            <p>\r\n            </p><ul>\r\n                <li>3 отправок в неделю</li>\r\n                <li>Приём посылок от 0,1 кг (упк. и стр. бесплатно)</li>\r\n                <li>Приём от 50 кг</li>\r\n                <li>Упаковка оплачивается отдельно</li>\r\n                <li>Страховка по желанию клиента (1%)</li>\r\n            </ul>\r\n            <p></p>\r\n            <p></p>\r\n\r\n            <p>\r\n            </p><p style=\"font-weight: bold\">КАЗАХСТАН</p>\r\n            <p>Экспресс 4-6 дней</p>\r\n            <p>\r\n            </p><ul>\r\n                <li>5 отправок в неделю</li>\r\n                <li>Приём посылок от 0,1 кг</li>\r\n                <li>Упаковка бесплатная</li>\r\n                <li>Страховка бесплатная</li>\r\n            </ul>\r\n            <p></p>\r\n            <p>Авто 10-12 дней</p>\r\n            <p>\r\n            </p><ul>\r\n                <li>4 отправок в неделю</li>\r\n                <li>Приём посылок от 0,1 кг (упк. и стр. бесплатно)</li>\r\n                <li>Приём от 50 кг</li>\r\n                <li>Упаковка оплачивается отдельно</li>\r\n                <li>Страховка по желанию клиента (1%)</li>\r\n            </ul>\r\n            <p></p>\r\n            <p></p>\r\n\r\n            <p>\r\n            </p><p style=\"font-weight: bold\">США</p>\r\n            <p>Экспресс 3-5 дней</p>\r\n            <p>\r\n            </p><ul>\r\n                <li>5 отправок в неделю</li>\r\n                <li>Приём посылок от 0,1 кг</li>\r\n                <li>Упаковка бесплатная</li>\r\n                <li>Страховка бесплатная</li>\r\n            </ul>\r\n            <p></p>\r\n            <p></p>\r\n\r\n            <p>\r\n            </p><p style=\"font-weight: bold\">ЕВРОПА</p>\r\n            <p>Экспресс 3-5 дней</p>\r\n            <p>\r\n            </p><ul>\r\n                <li>5 отправок в неделю</li>\r\n                <li>Приём посылок от 0,1 кг</li>\r\n                <li>Упаковка бесплатная</li>\r\n                <li>Страховка бесплатная</li>\r\n            </ul>\r\n            <p></p>\r\n            <p></p>\r\n\r\n            <p></p>', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', NULL, 'ВИДЫ ОТПРАВОК И СРОКИ', 'SENDING & DURATIONS', 1, 3, NULL, NULL, '2020-01-13 03:11:35'),
(14, NULL, '<p>\r\n            </p><p> <strong>Авиа:</strong>\r\n            </p><ul>\r\n\r\n                <li>Аккумуляторы, батареи</li>\r\n                <li>Взрывоопасные вещества</li>\r\n                <li>Продукты питания</li>\r\n                <li>Любые виды оружия</li>\r\n                <li>Наркотические вещества</li>\r\n                <li>Горючие материалы</li>\r\n                <li>Лекарства</li>\r\n            </ul>\r\n            <p></p>\r\n            <p> <strong>Авто:</strong>\r\n            </p><ul>\r\n                <li>Продукты питания</li>\r\n                <li>Наркотические вещества</li>\r\n                <li>Лекарства</li>\r\n\r\n            <p></p></ul>', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', NULL, 'ЗАПРЕЩЕННЫЕ ТОВАРЫ', 'FORBIDDEN GOODS', 2, 3, NULL, NULL, '2020-01-13 03:12:38'),
(15, '', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', NULL, 'ОТСЛЕЖИВАНИЕ ТОВАРОВ', 'TRACKING INFO', 3, 3, NULL, NULL, NULL),
(16, '<br>', '<div class=\"col-2\" style=\"font-style: normal; margin-bottom:20px; margin-right:20px;\n								 font-size: 13px;line-height: 20px;\">\n	                             <strong>Офис в Казахстане:</strong> <br><strong>Aдрес:</strong> Алматы,<br> ул. Досмухамедова 117<br> \n	                             <strong>Тел.:</strong> +7 777 0151540\n	                             </div>\n	 \n	                             <div class=\"col-2\" style=\"font-style: normal;margin-bottom:20px;margin-right:20px;\n	                             font-size: 13px;line-height: 20px;\">\n	                             <strong>Офис в Кыргызстане:</strong> <br><strong>Aдрес:</strong> Бишкек,<br> ул. Ибраимова 42<br> \n	                             <strong>Тел.:</strong> +996 50 4901601\n	                             </div>\n	 \n	                             <div class=\"col-2\" style=\"font-style: normal;margin-bottom:20px;margin-right:20px;\n	                             font-size: 13px;line-height: 20px;\">\n	                             <strong>Офис в России:</strong> <br><strong>Aдрес:</strong> Москва, <br> ТЦ Садовод<br> <strong>Тел.:</strong> +7 926 2398888\n	                             </div>\n	 \n	                             <div class=\"col-2\" style=\"font-style: normal;margin-bottom:20px;margin-right:20px;\n	                             font-size: 13px;line-height: 20px;\">\n	                             <strong>Офис в Азербайджане:</strong> <br><strong>Aдрес:</strong> Баку,<br> пр. Нобеля 175<br> <strong>Тел.:</strong> +994 55 6161619\n	                             </div>', '<br>', 'Ünvan', 'Адрес', 'Address', 0, 4, NULL, NULL, '2020-01-14 00:22:14'),
(17, '', 'Другое', '', NULL, NULL, NULL, 1, 2, NULL, NULL, NULL),
(18, 'Daxil ol', 'Вход', 'Login', NULL, NULL, NULL, 0, 5, NULL, NULL, NULL),
(19, 'Qeydiyyat', 'Регистрация', 'Registration', NULL, NULL, NULL, 1, 5, NULL, NULL, NULL),
(20, '', 'Информация', '', NULL, NULL, NULL, 2, 5, NULL, NULL, NULL),
(21, '', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'DİGƏR', 'ДРУГОЕ', 'OTHER', 4, 3, NULL, NULL, NULL),
(22, '', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'İSTİFADƏÇİ RAZILAŞMASI', 'ПОЛЬЗОВАТЕЛЬСКОЕ СОГЛАШЕНИЕ', 'USER AGREEMENT', 5, 3, NULL, NULL, NULL),
(23, '', '<p></p><p> <strong>КАК МЫ РАБОТАЕМ ?</strong>\r\n             </p><ul>\r\n                 <li>Зарегистрируйтесь на нашем сайте.</li>\r\n                 <li>В разделе ПОЛУЧИТЬ ПЕРСОНАЛЬНЫЙ КОД выберите страну, вид отправки (Авиа/Авто) получите ваш персональный код для отправки, и адрес куда нужно отправить ваш груз или посылку. Вы можете передать информацию вашему поставщику для отправки товара на наш склад, или же ввести информацию на интернет порталах Китая, с которого делаете выкуп.</li>\r\n                 <li>После оформления заказа, можете отслеживать вашу посылку в разделе ОТСЛЕЖИВАНИЕ. Вы можете отслеживать вашу посылку по персональному коду или же по треку вашей посылки. Ваш товар появляется в разделе ОТСЛЕЖИВАНИЕ после поступления на наш склад в Китае.</li>\r\n                 <li>При получении в вашей стране, с вами связываются наши менеджеры и оповещают вас о поступлении. Вы можете забрать вашу посылку/груз с наших офисов, или же заказать доставку до двери.</li>\r\n                 <li>Оплату за доставку вы можете произвести при получении.</li>\r\n \r\n             </ul>\r\n             <p></p>\r\n             <p>\r\n                 </p><p><strong>ДОСТУПНЫЕ ЦЕНЫ</strong></p>\r\n                 <p>Мы предлагаем приемлемые цены за доставку. Вес вашей посылки подсчитывается до грамма (не округляется до килограмма). Маленькие посылки отправляемые экспресс отправкой полностью страхуются бесплатно, упаковка таких посылок также делается бесплатно.</p>\r\n \r\n                 <p><strong>ДОСТАВКА В РЕГИОНЫ И ГОРОДА</strong></p>\r\n                 <p>После поступления вашего товара в вашу страну, вы можете заказать доставку в другие регионы и города страны.</p>\r\n \r\n                 <p><strong>КАЛЬКУЛЯТОР</strong></p>\r\n                 <p>В разделе КАЛЬКУЛЯТОР введя вес и габариты вашей посылки/груза вы можете получить предварительную стоимость отправки.</p>\r\n \r\n                 <p><strong>ВИДЫ ОТПРАВОК И СРОКИ</strong></p>\r\n                 <p>В этом разделе вы можете ознакомиться с видами и сроками отправок в ту или иную страну.</p>\r\n \r\n             <p></p>', '', 'HAQQIMIZDA', 'О НАС', 'ABOUT US', 6, 3, NULL, NULL, '2020-01-05 07:32:06'),
(24, NULL, '<!--<ul >\r\n                         <li  style=\"padding: 0px 0px;font-size: 12px;margin:10px 0px; font-weight: bold;\"><h3 style=\"padding: 0px 0px;font-size: 12px;margin:0px;\">Ссылки на соц. сети:</h3></li>\r\n                         <li  style=\"padding: 0px 0px;font-size: 10px;margin: 0px;\"><span style=\"padding: 0px 0px;font-size: 10px;margin: 0px; font-weight: bold;\">Инстаграм :</span> @zov_express</li>\r\n                         <li  style=\"padding: 0px 0px;font-size: 10px;margin: 0px;\"><span style=\"padding: 0px 0px;font-size: 10px;margin: 0px; font-weight: bold;\">Канал в телеграмм :</span> https://t.me/zov_express</li>\r\n                         <li  style=\"padding: 0px 0px;font-size: 10px;margin: 0px;\"><span style=\"padding: 0px 0px;font-size: 10px;margin: 0px; font-weight: bold;\">Менеджер в телеграмм :</span> @zovexpress_infobot</li>\r\n                         <li  style=\"padding: 0px 0px;font-size: 10px;margin: 0px;\"><span style=\"padding: 0px 0px;font-size: 10px;margin: 0px; font-weight: bold;\">Менеджер в вотсап :</span> </li>\r\n                         <li  style=\"padding: 0px 0px;font-size: 10px;margin: 0px;\"><span style=\"padding: 0px 0px;font-size: 10px;margin: 0px; font-weight: bold;\">Менеджер в вичат :</span> </li>\r\n                     </ul>-->', NULL, 'Sosial', 'Социальные', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'İş gedir', 'Идет работа', 'Under Construction', 'Under Construction', 'Under Construction', 'Under Construction', 7, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `shopid` int(11) NOT NULL,
  `catid` int(11) NOT NULL DEFAULT 0,
  `genderid` int(11) NOT NULL DEFAULT 2,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titleru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titlech` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titlekz` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titlekg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titletr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titletc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptionu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptionch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptionkz` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptionkg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptiontr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptiontc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avgstarscount` double DEFAULT 0,
  `commentcount` int(11) NOT NULL DEFAULT 0,
  `ordercount` int(11) NOT NULL DEFAULT 0,
  `price` double NOT NULL,
  `pricemany` double NOT NULL,
  `additionaldiscountpercent` double DEFAULT NULL,
  `additionaldiscountpercentcount` int(11) DEFAULT NULL,
  `totalcount` int(11) NOT NULL DEFAULT 1,
  `instagramlink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `userid`, `shopid`, `catid`, `genderid`, `title`, `titleru`, `titleen`, `titlech`, `titlekz`, `titlekg`, `titletr`, `titletc`, `description`, `descriptionu`, `descriptionen`, `descriptionch`, `descriptionkz`, `descriptionkg`, `descriptiontr`, `descriptiontc`, `avgstarscount`, `commentcount`, `ordercount`, `price`, `pricemany`, `additionaldiscountpercent`, `additionaldiscountpercentcount`, `totalcount`, `instagramlink`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4, -1, '', 'Лейка для душа', '', '', '', '', '', '', '', 'Лейка для душа с эффектом дождя, насадка для душа, 300 отверстий, водосберегающий фильтр, распылительная насадка с функцией экономии воды под высоким давлением ', '', '', '', '', '', '', 3.7, 358, 24, 12, 10, 20, 100, 15, '', NULL, NULL),
(2, 1, 2, 2, 0, '', 'Мужские роскошные часы', '', '', '', '', '', '', '', 'Чвсы уцпуцпц упцупцуацу пкцупцуп пц цупцуп цуп', '', '', '', '', '', '', 5, 21, 14, 45.33, 42, 6, 30, 15, '', NULL, NULL),
(3, 1, 3, 4, -1, '', 'Лейка для душа2', '', '', '', '', '', '', '', 'Лейка для душа с эффектом дождя, насадка для душа, 300 отверстий, водосберегающий фильтр, распылительная насадка с функцией экономии воды под высоким давлением ', '', '', '', '', '', '', 3.7, 358, 24, 12, 10, 20, 100, 15, '', NULL, NULL),
(4, 1, 1, 2, 0, '', 'Мужские роскошные часы2', '', '', '', '', '', '', '', 'Чвсы уцпуцпц упцупцуацу пкцупцуп пц цупцуп цуп', '', '', '', '', '', '', 5, 21, 14, 45.33, 42, 6, 30, 15, '', NULL, NULL),
(5, 1, 2, 4, -1, '', 'Лейка для душа3', '', '', '', '', '', '', '', 'Лейка для душа с эффектом дождя, насадка для душа, 300 отверстий, водосберегающий фильтр, распылительная насадка с функцией экономии воды под высоким давлением ', '', '', '', '', '', '', 3.7, 358, 24, 12, 10, 20, 100, 15, '', NULL, NULL),
(6, 1, 2, 2, 0, '', 'Мужские роскошные часы3', '', '', '', '', '', '', '', 'Чвсы уцпуцпц упцупцуацу пкцупцуп пц цупцуп цуп', '', '', '', '', '', '', 5, 21, 14, 45.33, 42, 6, 30, 15, '', NULL, NULL),
(7, 1, 2, 4, -1, '', 'Лейка для душа4', '', '', '', '', '', '', '', 'Лейка для душа с эффектом дождя, насадка для душа, 300 отверстий, водосберегающий фильтр, распылительная насадка с функцией экономии воды под высоким давлением ', '', '', '', '', '', '', 3.7, 358, 24, 12, 10, 20, 100, 15, '', NULL, NULL),
(8, 1, 2, 2, 0, '', 'Мужские роскошные часы4', '', '', '', '', '', '', '', 'Чвсы уцпуцпц упцупцуацу пкцупцуп пц цупцуп цуп', '', '', '', '', '', '', 5, 21, 14, 45.33, 42, 6, 30, 15, '', NULL, NULL),
(9, 15, 10, 0, 2, NULL, 'tov1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'wewegwe', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 33, 22, 2, 30, 1, NULL, '2021-01-04 18:10:59', '2021-01-04 18:10:59'),
(10, 15, 10, 0, 2, NULL, 'myTovar2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'r2r12r12r', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 66, 55, 3, 30, 1, NULL, '2021-01-04 18:13:04', '2021-01-04 18:13:04'),
(11, 15, 10, 0, 2, NULL, 'myTovar2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'r2r12r12r', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 66, 55, 3, 30, 1, NULL, '2021-01-04 18:13:20', '2021-01-04 18:13:20'),
(12, 15, 10, 0, 2, NULL, 'myTovar2wwww', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'r2r12r12r', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 66, 55, 3, 30, 1, NULL, '2021-01-04 18:20:33', '2021-01-04 18:20:33'),
(13, 15, 10, 0, 2, NULL, 'myTovar2wwww', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'r2r12r12r', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 66, 55, 3, 30, 1, NULL, '2021-01-04 18:22:22', '2021-01-04 18:22:22'),
(14, 15, 10, 0, 2, NULL, 'myTovar2wwww', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'r2r12r12r', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 66, 55, 3, 30, 1, NULL, '2021-01-04 18:23:08', '2021-01-04 18:23:08'),
(15, 15, 10, 0, 2, NULL, 'myTovar2wwww', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'r2r12r12r', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 66, 55, 3, 30, 1, NULL, '2021-01-04 18:23:31', '2021-01-04 18:23:31'),
(16, 15, 11, 0, 2, NULL, 'fff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'wfwf', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 2222, 222, 2, 2, 1, NULL, '2021-01-04 18:25:49', '2021-01-04 18:25:49'),
(17, 15, 11, 0, 2, NULL, 'fff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'wfwf', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 2222, 222, 2, 2, 1, NULL, '2021-01-04 18:27:44', '2021-01-04 18:27:44'),
(18, 15, 11, 0, 2, NULL, 'tov1www', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '44ewef', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 4444, 222, 4, 4, 1, NULL, '2021-01-04 18:28:48', '2021-01-04 18:28:48'),
(19, 15, 11, 0, 2, NULL, 'ttttttt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '333wfwf', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 333, 33, 3, 3, 1, NULL, '2021-01-04 18:30:27', '2021-01-04 18:30:27'),
(20, 15, 10, 0, 2, NULL, 'ee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'eeeeee', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 33, 22, 2, 30, 1, NULL, '2021-01-04 18:36:42', '2021-01-04 18:36:42'),
(21, 15, 10, 0, 2, NULL, 'tovtov', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'wqwf', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 44, 33, 5, 4, 1, NULL, '2021-01-04 18:40:54', '2021-01-04 18:40:54'),
(22, 15, 10, 0, 2, NULL, 'otototototo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'qwfqwf', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 3, 222, 2, 30, 1, NULL, '2021-01-04 18:43:38', '2021-01-04 18:43:38');

-- --------------------------------------------------------

--
-- Структура таблицы `good_cats`
--

DROP TABLE IF EXISTS `good_cats`;
CREATE TABLE `good_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderid` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titlech` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titlekz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titlekg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titletr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titletc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `good_cats`
--

INSERT INTO `good_cats` (`id`, `orderid`, `title`, `titleru`, `titleen`, `titlech`, `titlekz`, `titlekg`, `titletr`, `titletc`, `created_at`, `updated_at`) VALUES
(1, 1, '', 'Женская одежда', '', '', '', '', '', '', NULL, NULL),
(2, 2, '', 'Мужская одежда', '', '', '', '', '', '', NULL, NULL),
(3, 3, '', 'Детская одежда', '', '', '', '', '', '', NULL, NULL),
(4, 4, '', 'Аксессуары', '', '', '', '', '', '', NULL, NULL),
(5, 5, '', 'Женская обувь', '', '', '', '', '', '', NULL, NULL),
(6, 6, '', 'Мужская обувь', '', '', '', '', '', '', NULL, NULL),
(7, 7, '', 'Детская обувь', '', '', '', '', '', '', NULL, NULL),
(8, 8, '', 'Игрушки', '', '', '', '', '', '', NULL, NULL),
(9, 9, '', 'Часы', '', '', '', '', '', '', NULL, NULL),
(10, 10, '', 'Электроника', '', '', '', '', '', '', NULL, NULL),
(11, 11, '', 'Посуда', '', '', '', '', '', '', NULL, NULL),
(12, 12, '', 'Мебель', '', '', '', '', '', '', NULL, NULL),
(13, 13, '', 'Постельное белье', '', '', '', '', '', '', NULL, NULL),
(14, 14, '', 'Стройматериалы', '', '', '', '', '', '', NULL, NULL),
(15, 15, '', 'Аксессуары для моб. ', '', '', '', '', '', '', NULL, NULL),
(16, 16, '', 'Оборудование', '', '', '', '', '', '', NULL, NULL),
(17, 17, '', 'Спорт инвентарь', '', '', '', '', '', '', NULL, NULL),
(18, 18, '', 'Сумки, кошельки', '', '', '', '', '', '', NULL, NULL),
(19, 19, '', 'Косметика', '', '', '', '', '', '', NULL, NULL),
(20, 20, '', 'Бижутерия', '', '', '', '', '', '', NULL, NULL),
(21, 21, '', 'Инструменты', '', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `good_comments`
--

DROP TABLE IF EXISTS `good_comments`;
CREATE TABLE `good_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `goodid` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `authorname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `good_genders`
--

DROP TABLE IF EXISTS `good_genders`;
CREATE TABLE `good_genders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titlech` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titlekz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titlekg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titletr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titletc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `good_genders`
--

INSERT INTO `good_genders` (`id`, `title`, `titleru`, `titleen`, `titlech`, `titlekz`, `titlekg`, `titletr`, `titletc`, `created_at`, `updated_at`) VALUES
(1, '', 'Мужская', '', '', '', '', '', '', NULL, NULL),
(2, '', 'Женская', '', '', '', '', '', '', NULL, NULL),
(3, '', 'Детская', '', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `good_orders`
--

DROP TABLE IF EXISTS `good_orders`;
CREATE TABLE `good_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `goodid` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `authorname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `good_pics`
--

DROP TABLE IF EXISTS `good_pics`;
CREATE TABLE `good_pics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `goodid` int(11) NOT NULL,
  `ismain` int(11) NOT NULL DEFAULT 0,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fileNamesmall` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `good_pics`
--

INSERT INTO `good_pics` (`id`, `goodid`, `ismain`, `filename`, `fileNamesmall`, `path`, `orderid`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'goodmain.png', 'tascogood', '/assets/img/tasco/', 0, NULL, NULL),
(2, 1, 0, 'good1.png', 'good1', '/assets/img/tasco/', 1, NULL, NULL),
(3, 1, 0, 'good2.png', 'good2', '/assets/img/tasco/', 2, NULL, NULL),
(4, 1, 0, 'good3.png', 'good3', '/assets/img/tasco/', 3, NULL, NULL),
(5, 1, 0, 'good4.png', 'good4', '/assets/img/tasco/', 4, NULL, NULL),
(6, 2, 1, 'tasco_goods.png', 'tascogood', '/assets/img/tasco/', 0, NULL, NULL),
(7, 2, 0, 'tasco_goods.png', 'good1', '/assets/img/tasco/', 1, NULL, NULL),
(8, 2, 0, 'tasco_goods.png', 'good2', '/assets/img/tasco/', 2, NULL, NULL),
(9, 2, 0, 'tasco_goods.png', 'good3', '/assets/img/tasco/', 3, NULL, NULL),
(10, 2, 0, 'tasco_goods.png', 'good4', '/assets/img/tasco/', 4, NULL, NULL),
(11, 1, 0, '1609799011.png', NULL, '/assets/img/users/15/shops/aaa/goods/myTovar2wwww/', 0, '2021-01-04 18:23:31', '2021-01-04 18:23:31'),
(12, 1, 0, '1609799149.png', NULL, '/assets/img/users/15/shops/ww/goods/fff/', 0, '2021-01-04 18:25:49', '2021-01-04 18:25:49'),
(13, 17, 1, '1609799264.png', NULL, '/assets/img/users/15/shops/ww/goods/fff/', 0, '2021-01-04 18:27:44', '2021-01-04 18:27:44'),
(14, 18, 1, '1609799328.png', NULL, '/assets/img/users/15/shops/ww/goods/tov1www/', 0, '2021-01-04 18:28:48', '2021-01-04 18:28:48'),
(15, 19, 1, '1609799427.jpeg', NULL, '/assets/img/users/15/shops/ww/goods/ttttttt/', 0, '2021-01-04 18:30:27', '2021-01-04 18:30:27'),
(16, 20, 1, '1609799802.jpeg', NULL, '/assets/img/users/15/shops/aaa/goods/ee/', 0, '2021-01-04 18:36:42', '2021-01-04 18:36:42'),
(17, 20, 0, '1609799802.png', NULL, '/assets/img/users/15/shops/aaa/goods/ee/', 0, '2021-01-04 18:36:42', '2021-01-04 18:36:42'),
(18, 20, 0, '1609799802.png', NULL, '/assets/img/users/15/shops/aaa/goods/ee/', 0, '2021-01-04 18:36:42', '2021-01-04 18:36:42'),
(19, 21, 1, '1609800054.jpeg', NULL, '/assets/img/users/15/shops/aaa/goods/tovtov/', 0, '2021-01-04 18:40:54', '2021-01-04 18:40:54'),
(20, 21, 0, '1609800054.png', NULL, '/assets/img/users/15/shops/aaa/goods/tovtov/', 0, '2021-01-04 18:40:54', '2021-01-04 18:40:54'),
(21, 21, 0, '1609800054.png', NULL, '/assets/img/users/15/shops/aaa/goods/tovtov/', 0, '2021-01-04 18:40:54', '2021-01-04 18:40:54'),
(22, 22, 1, '11609800218.jpeg', NULL, '/assets/img/users/15/shops/aaa/goods/otototototo/', 0, '2021-01-04 18:43:38', '2021-01-04 18:43:38'),
(23, 22, 0, '21609800218.png', NULL, '/assets/img/users/15/shops/aaa/goods/otototototo/', 0, '2021-01-04 18:43:38', '2021-01-04 18:43:38'),
(24, 22, 0, '31609800218.png', NULL, '/assets/img/users/15/shops/aaa/goods/otototototo/', 0, '2021-01-04 18:43:38', '2021-01-04 18:43:38'),
(25, 22, 0, '41609800218.png', NULL, '/assets/img/users/15/shops/aaa/goods/otototototo/', 0, '2021-01-04 18:43:38', '2021-01-04 18:43:38'),
(26, 22, 0, '51609800218.png', NULL, '/assets/img/users/15/shops/aaa/goods/otototototo/', 0, '2021-01-04 18:43:38', '2021-01-04 18:43:38');

-- --------------------------------------------------------

--
-- Структура таблицы `good_shops`
--

DROP TABLE IF EXISTS `good_shops`;
CREATE TABLE `good_shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shopcatid` int(11) NOT NULL,
  `shopcountryid` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titleru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titleen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titlech` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titlekz` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titlekg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titletr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titletc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownerid` int(11) NOT NULL,
  `shoplogotip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagramlink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebooklink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `good_shops`
--

INSERT INTO `good_shops` (`id`, `shopcatid`, `shopcountryid`, `title`, `titleru`, `titleen`, `titlech`, `titlekz`, `titlekg`, `titletr`, `titletc`, `ownerid`, `shoplogotip`, `instagramlink`, `facebooklink`, `web`, `phone`, `phone2`, `email`, `created_at`, `updated_at`) VALUES
(1, 0, 0, '', 'shoppo', '', '', '', '', '', '', 1, '', '', '', 'shoppo.ru', '+994505351980', '', 'shoppo@gmail.com', NULL, NULL),
(4, 14, 3, NULL, 'wwww', NULL, NULL, NULL, NULL, NULL, NULL, 15, '1609679948.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-03 09:19:08', '2021-01-03 09:19:08'),
(5, 1, 1, NULL, 'qqq', NULL, NULL, NULL, NULL, NULL, NULL, 2, '1609680122.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-03 09:22:02', '2021-01-03 09:22:02'),
(6, 2, 3, NULL, 'wdwdwdw', NULL, NULL, NULL, NULL, NULL, NULL, 2, '1609680609.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-03 09:30:09', '2021-01-03 09:30:09'),
(7, 2, 3, NULL, 'frfrfr', NULL, NULL, NULL, NULL, NULL, NULL, 1, '1609680674.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-03 09:31:14', '2021-01-03 09:31:14'),
(8, 3, 3, NULL, 'dwdwd', NULL, NULL, NULL, NULL, NULL, NULL, 1, '1609759067.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-04 07:17:47', '2021-01-04 07:17:47'),
(9, 10, 5, NULL, 'dwdwd', NULL, NULL, NULL, NULL, NULL, NULL, 15, '1609759141.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-04 07:19:01', '2021-01-04 07:19:01'),
(10, 3, 1, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, 15, '1609775631.png', NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-04 11:53:51', '2021-01-04 11:53:51'),
(11, 3, 2, NULL, 'ww', NULL, NULL, NULL, NULL, NULL, NULL, 15, '1609795812.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-04 17:30:12', '2021-01-04 17:30:12');

-- --------------------------------------------------------

--
-- Структура таблицы `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countryid` int(11) NOT NULL,
  `personalCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promoCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) NOT NULL,
  `price` double NOT NULL,
  `lastPrice` double NOT NULL,
  `isExpress` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `trackingid` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `invoices`
--

INSERT INTO `invoices` (`id`, `countryid`, `personalCode`, `promoCode`, `description`, `link`, `size`, `color`, `count`, `price`, `lastPrice`, `isExpress`, `status`, `userid`, `trackingid`, `created_at`, `updated_at`) VALUES
(1, 3, 'wegwegeg', 'erherhh', 'kkkk', 'fffffffffffffffff', '34', 'hfhf', 2, 435, 5555, 0, 0, 24, NULL, '2020-09-26 08:42:11', '2020-09-26 08:42:11'),
(2, 4, 'wegwegeg', NULL, 'ggg', 'qqdqdq', '22', 'ag', 6, 66, 77, 0, 0, 24, NULL, '2020-09-26 08:43:14', '2020-09-26 08:43:14'),
(3, 1, 'wegwegeg', NULL, NULL, 'sssssssssssss', NULL, NULL, 1, 22, 222, 0, 0, 24, NULL, '2020-09-26 08:43:52', '2020-09-26 08:43:52'),
(4, 2, 'wegwegeg', NULL, NULL, 'egwegwe', NULL, NULL, 3, 333, 3333, 0, 0, 23, NULL, '2020-09-26 08:44:55', '2020-09-26 08:44:55'),
(5, 3, 'xxxxxxxxxxxxx', 'vvvvvvvvvvvvvvv', 'iii', 'http://127.0.0.1:8000/invoicenew', '333', 'red', 5, 435, 444, 0, 0, NULL, NULL, '2020-09-26 14:53:45', '2020-09-26 14:53:45'),
(6, 4, '554545', '55555', 'hhh', 'ya.ru', '66', 'yellow', 4, 44444, 444, 0, 0, NULL, NULL, '2020-09-26 14:57:39', '2020-09-26 14:57:39'),
(7, 4, '554545', '55555', 'hhh', 'ya.ru', '66', 'yellow', 4, 44444, 444, 0, 0, NULL, NULL, '2020-09-26 14:58:39', '2020-09-26 14:58:39'),
(8, 2, 'xxxxxxxxxxxxx', NULL, NULL, 'fffffffffffffffff', '3', 'rr', 3, 3, 3, 0, 0, NULL, NULL, '2020-09-26 14:59:12', '2020-09-26 14:59:12'),
(9, 2, 'xxxxxxxxxxxxx', NULL, NULL, 'fffffffffffffffff', '3', 'rr', 3, 3, 3, 0, 0, NULL, NULL, '2020-09-26 15:00:59', '2020-09-26 15:00:59'),
(10, 2, 'xxxxxxxxxxxxx', NULL, NULL, 'fffffffffffffffff', '3', 'rr', 3, 3, 3, 0, 0, NULL, NULL, '2020-09-26 15:01:20', '2020-09-26 15:01:20'),
(11, 1, 'xxxxxxxxxxxxx1', '1', '2', '11', '1', 'yellow', 2, 2, 2, 0, 0, 24, NULL, '2020-09-26 15:03:17', '2020-09-26 15:03:17');

-- --------------------------------------------------------

--
-- Структура таблицы `kuryers`
--

DROP TABLE IF EXISTS `kuryers`;
CREATE TABLE `kuryers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `targetcountryid` int(11) NOT NULL,
  `targetregionname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personalcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `targetphone1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `targetphone2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `targetaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posilkacount` int(11) NOT NULL,
  `lastprice` double NOT NULL,
  `userid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `kuryers`
--

INSERT INTO `kuryers` (`id`, `targetcountryid`, `targetregionname`, `personalcode`, `targetphone1`, `targetphone2`, `targetaddress`, `posilkacount`, `lastprice`, `userid`, `created_at`, `updated_at`) VALUES
(1, 1, 'eegeg', 'wegwegeg', '53523523523', '2323523', 'Kreston Usserod Kongevej 157', 411, 7, -1, '2020-10-06 07:44:23', '2020-10-06 07:44:23'),
(2, 1, 'eegeg', 'wegwegeg', '53523523523', '2323523', 'Kreston Usserod Kongevej 157', 411, 7, -1, '2020-10-06 07:44:58', '2020-10-06 07:44:58'),
(3, 1, 'sag', '14', '333333', '22233', 'Kreston Usserod Kongevej 157111', 1, 11, 24, '2020-10-07 03:37:13', '2020-10-07 03:37:13');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_15_085618_country', 1),
(5, '2019_12_15_090512_pack', 1),
(6, '2019_12_15_141437_routes', 1),
(7, '2019_12_16_174200_review', 1),
(8, '2019_12_16_174430_general', 1),
(9, '2019_12_16_192904_price', 1),
(10, '2019_12_19_213239_create_trackings_table', 1),
(11, '2019_12_22_123226_create_codes_table', 1),
(12, '2020_01_06_104553_create_comments_table', 1),
(13, '2020_02_18_055306_create_otpravkas_table', 1),
(14, '2020_09_23_141518_create_invoices_table', 1),
(15, '2020_09_27_090416_create_promocods_table', 1),
(16, '2020_09_28_103750_create_searchrequests_table', 1),
(17, '2020_09_28_103806_create_shops_table', 1),
(18, '2020_09_28_104029_create_zovadresses_table', 1),
(19, '2020_09_28_104132_create_branches_table', 1),
(20, '2020_09_28_104443_create_bonuscards_table', 1),
(21, '2020_09_28_104518_create_partners_table', 1),
(22, '2020_09_28_131424_create_searchrequestpictures_table', 1),
(23, '2020_10_06_113050_create_kuryers_table', 1),
(24, '2020_11_08_140840_create_good_shops_table', 1),
(25, '2020_11_08_140902_create_good_cats_table', 1),
(26, '2020_11_08_141120_create_good_genders_table', 1),
(27, '2020_11_08_141133_create_goods_table', 1),
(28, '2020_11_08_141143_create_good_comments_table', 1),
(29, '2020_11_08_141156_create_good_orders_table', 1),
(30, '2020_11_08_141206_create_good_pics_table', 1),
(31, '2014_10_12_000000_create_users_table', 1),
(32, '2014_10_12_100000_create_password_resets_table', 1),
(33, '2019_08_19_000000_create_failed_jobs_table', 1),
(34, '2019_12_15_085618_country', 1),
(35, '2019_12_15_090512_pack', 1),
(36, '2019_12_15_141437_routes', 1),
(37, '2019_12_16_174200_review', 1),
(38, '2019_12_16_174430_general', 1),
(39, '2019_12_16_192904_price', 1),
(40, '2019_12_19_213239_create_trackings_table', 1),
(41, '2019_12_22_123226_create_codes_table', 1),
(42, '2020_01_06_104553_create_comments_table', 1),
(43, '2020_02_18_055306_create_otpravkas_table', 1),
(44, '2020_09_23_141518_create_invoices_table', 1),
(45, '2020_09_27_090416_create_promocods_table', 1),
(46, '2020_09_28_103750_create_searchrequests_table', 1),
(47, '2020_09_28_103806_create_shops_table', 1),
(48, '2020_09_28_104029_create_zovadresses_table', 1),
(49, '2020_09_28_104132_create_branches_table', 1),
(50, '2020_09_28_104443_create_bonuscards_table', 1),
(51, '2020_09_28_104518_create_partners_table', 1),
(52, '2020_09_28_131424_create_searchrequestpictures_table', 1),
(53, '2020_10_06_113050_create_kuryers_table', 1),
(54, '2020_11_08_140840_create_good_shops_table', 1),
(55, '2020_11_08_140902_create_good_cats_table', 1),
(56, '2020_11_08_141120_create_good_genders_table', 1),
(57, '2020_11_08_141133_create_goods_table', 1),
(58, '2020_11_08_141143_create_good_comments_table', 1),
(59, '2020_11_08_141156_create_good_orders_table', 1),
(60, '2020_11_08_141206_create_good_pics_table', 1),
(61, '2020_12_08_092632_create_user_favorites_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `otpravkas`
--

DROP TABLE IF EXISTS `otpravkas`;
CREATE TABLE `otpravkas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sentfrom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sentdate` date DEFAULT NULL,
  `receiveto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receivedate` date DEFAULT NULL,
  `expectedreceivedate` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `nowplace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nowpercent` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `otpravkas`
--

INSERT INTO `otpravkas` (`id`, `name`, `kod`, `sentfrom`, `sentdate`, `receiveto`, `receivedate`, `expectedreceivedate`, `status`, `nowplace`, `nowpercent`, `created_at`, `updated_at`, `type`) VALUES
(1, 'Birinci', '333FD', 'Baku', '0000-00-00', 'Sumqayit', '0000-00-00', '0000-00-00', 1, 'ccc', 100, NULL, '2020-02-29 09:49:41', 0),
(2, 'sss', 'wqfqwfqwf', 'aaaaasgasg', '3111-03-22', 'айцайца', NULL, '2020-01-01', 0, NULL, 33, '2020-02-18 05:23:38', '2020-02-29 09:53:25', 0),
(3, 'qqq', 'kodqqq', 'China', '2020-02-23', 'Pekin', NULL, '2020-02-28', 0, NULL, 0, '2020-02-23 14:27:32', '2020-02-23 14:27:32', 0),
(4, 'ORXAN', 'K-001', 'Guangzhou', '2020-05-01', 'Bishkek', '2020-01-01', '2020-05-05', 0, '0', 0, '2020-05-01 10:02:52', '2020-05-01 10:02:52', 0),
(5, 'ORXAN2', 'K-001', 'Guangzhou', '2020-05-01', 'Bishkek', NULL, '2020-05-05', 0, '0', 0, '2020-05-01 10:03:56', '2020-05-01 10:03:56', 0),
(6, 'ORXAN3', 'K-001', 'Guangzhou', '2020-05-01', 'Bishkek', NULL, '2020-05-05', 0, NULL, 0, '2020-05-01 10:04:50', '2020-05-01 10:04:50', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `pack`
--

DROP TABLE IF EXISTS `pack`;
CREATE TABLE `pack` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usercode` int(11) NOT NULL,
  `trackingnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofsend` date NOT NULL,
  `dateofexpect` date NOT NULL,
  `dateofaccept` date NOT NULL,
  `percentofway` int(11) NOT NULL,
  `routeid` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

DROP TABLE IF EXISTS `prices`;
CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_country_id` int(11) NOT NULL,
  `weight` double NOT NULL,
  `to_country_id` int(11) NOT NULL,
  `price_usd` double NOT NULL,
  `price_azn` double NOT NULL,
  `price_eur` double NOT NULL,
  `price_rub` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`id`, `title`, `from_country_id`, `weight`, `to_country_id`, `price_usd`, `price_azn`, `price_eur`, `price_rub`) VALUES
(1, '1 kq', 8, 1, 4, 4.7, 0, 0, 0),
(2, '1 kq', 8, 1, 1, 7.5, 0, 0, 0),
(3, '1 kq', 8, 1, 5, 5, 0, 0, 0),
(4, '1 kq', 8, 1, 3, 10, 0, 0, 0),
(5, '1 kq', 8, 1, 2, 10.5, 0, 0, 0),
(6, '1 kq', 8, 1, 6, 0, 0, 0, 0),
(7, '1 kq', 8, 1, 7, 0, 0, 0, 0),
(8, '1 kq', 9, 1, 4, 4.3, 0, 0, 0),
(9, '1 kq', 9, 1, 5, 4.6, 0, 0, 0),
(10, '1 kq', 9, 1, 3, 0, 0, 0, 0),
(11, '1 kq', 9, 1, 1, 7, 0, 0, 0),
(12, '1 kq', 9, 1, 2, -1, 0, 0, 0),
(13, '1 kq', 9, 1, 6, -1, 0, 0, 0),
(14, '1 kq', 9, 1, 7, -1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `promocods`
--

DROP TABLE IF EXISTS `promocods`;
CREATE TABLE `promocods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `promocode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discountpercent` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `promocods`
--

INSERT INTO `promocods` (`id`, `promocode`, `discountpercent`, `title`, `created_at`, `updated_at`) VALUES
(1, '0101', 6, 'firstpromocode', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `textru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `texten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authoren` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `routes`
--

DROP TABLE IF EXISTS `routes`;
CREATE TABLE `routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `routename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place0` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place25` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place50` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place75` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place100` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `searchrequestpictures`
--

DROP TABLE IF EXISTS `searchrequestpictures`;
CREATE TABLE `searchrequestpictures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `searchrequests`
--

DROP TABLE IF EXISTS `searchrequests`;
CREATE TABLE `searchrequests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `shops`
--

DROP TABLE IF EXISTS `shops`;
CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countryid` int(11) NOT NULL,
  `shopname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shoplogotip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopcategoryid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `trackings`
--

DROP TABLE IF EXISTS `trackings`;
CREATE TABLE `trackings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `otpravkaid` int(11) DEFAULT NULL,
  `usercode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `tracknumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sentfrom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sentdate` date DEFAULT NULL,
  `receiveto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receivedate` date DEFAULT NULL,
  `expectedreceivedate` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `nowplace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nowpercent` double DEFAULT NULL,
  `routeid` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tracktype` int(11) NOT NULL DEFAULT 0,
  `kq` double DEFAULT NULL,
  `naimenovanie` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zakq` double DEFAULT NULL,
  `summa` double DEFAULT NULL,
  `sf` double DEFAULT NULL,
  `straxovka` double DEFAULT NULL,
  `itoqodollar` double DEFAULT NULL,
  `som` double DEFAULT NULL COMMENT 'local olke valyutasi',
  `dostavka` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itoqo` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `trackings`
--

INSERT INTO `trackings` (`id`, `otpravkaid`, `usercode`, `userid`, `tracknumber`, `sentfrom`, `sentdate`, `receiveto`, `receivedate`, `expectedreceivedate`, `status`, `nowplace`, `nowpercent`, `routeid`, `created_at`, `updated_at`, `tracktype`, `kq`, `naimenovanie`, `zakq`, `summa`, `sf`, `straxovka`, `itoqodollar`, `som`, `dostavka`, `itoqo`) VALUES
(1, 1, 'ZOV-E1840005', 1, '1000000 1', 'Pekin', '2019-12-21', 'Baku', '2019-12-25', '0000-00-00', 1, 'Xabarovsk', 100, 1, NULL, NULL, 0, NULL, NULL, NULL, NULL, 345, 2, NULL, 33, NULL, NULL),
(2, 1, 'ZOV-E1840005', 1, '1000000 1', 'Pekin', '2019-12-14', 'Baku', '0000-00-00', '2019-12-25', 0, '', 50, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 'ZOV-O1599504', 1, '1000000 1', 'Pekin', '2019-12-21', 'Baku', '2019-12-25', '0000-00-00', 1, '', 100, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 2, 'ZOV-P1985602', 2, '1000000 1', 'Pekin', '2019-12-14', 'Baku', '0000-00-00', '2019-12-25', 0, '', 85, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 2, 'ZOV-P1985602', 2, '1000000540801', NULL, '2020-01-01', 'qq', NULL, '2020-01-31', NULL, NULL, NULL, NULL, '2020-01-08 13:44:45', '2020-01-08 13:44:45', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2, 'ZOV-E1840005', 1, '434922833514', NULL, '2020-01-01', 'qq', NULL, '2020-01-31', NULL, NULL, NULL, NULL, '2020-01-08 13:46:24', '2020-01-08 13:46:24', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 2, 'ZOV-E1840005', 1, '1000000 1', 'Pekin', '2019-12-21', 'Baku', '2019-12-25', '0000-00-00', 1, 'Xabarovsk', 100, 1, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 2, 'ZOV-E1840005', 1, '1000000 1', 'Pekin', '2019-12-14', 'Baku', '0000-00-00', '2019-12-25', 0, '', 50, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 2, 'ZOV-O1599504', 1, '1000000 1', 'Pekin', '2019-12-21', 'Baku', '2019-12-25', '0000-00-00', 1, '', 100, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 1, 'ZOV-P1985602', 2, '1000000 1', 'Pekin', '2019-12-14', 'Baku', '0000-00-00', '2019-12-25', 0, '', 85, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 2, 'ZOV-P1985602', 2, '1000000540801', NULL, '2020-01-01', 'qq', NULL, '2020-01-31', NULL, NULL, NULL, NULL, '2020-01-08 13:44:45', '2020-01-08 13:44:45', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 3, 'ZOV-E1840005', 1, '434922833514', NULL, '2020-01-01', 'qq', NULL, '2020-01-31', NULL, NULL, NULL, NULL, '2020-01-08 13:46:24', '2020-01-08 13:46:24', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 3, 'ZOV-L515502', 2, '7434658363261', NULL, '2010-10-10', 'qqq', NULL, '2020-02-20', NULL, NULL, NULL, NULL, '2020-01-17 11:41:41', '2020-01-17 11:41:41', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 3, 'S5-4002', 6, '999998887777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-23 14:50:55', '2020-02-23 14:50:55', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 1, '5', 9, '66666666666', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-11 15:56:48', '2020-03-11 15:56:48', 0, 2, 'odejda', 4, 8, 5, 3, 52, 15, '6', 66),
(24, 3, '3', 7, '99999999999999999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-01 05:45:56', '2020-05-01 05:45:56', 0, 1, 'wwq', 2, 2, 2, 2, 3, 1, '1', 4),
(25, 5, '3', 7, '89898989989', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-01 15:31:56', '2020-05-01 15:31:56', 0, 5, '45wwfwf', 2.5, 12.5, 3, 4, 19.5, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usercode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` int(11) NOT NULL DEFAULT 0,
  `dob` date DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `surname`, `usercode`, `gender`, `dob`, `phone`, `passport`, `avatar`, `description`, `email_verified_at`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Elşad', 'Əzizov', NULL, 'ZOV-Z1026905', 0, '1980-07-22', '+994505351980', 'AZE444333', NULL, 'fbfdbdfbd', NULL, 'elshad.aziz@gmail.com', '$2y$10$CDhf2BUBbkMLwWVjxENy3.LVkIPTs3Vu7nYLBBYhuc4G5WXXUvaDq', 999, NULL, '2019-12-20 03:12:00', '2019-12-24 21:14:46'),
(2, 'Rafiq', 'Əliyev', NULL, 'ZOV-P1985602', 0, '1960-07-22', '+994505351980', 'AZE557755', NULL, 'fbfdbdfbd', NULL, 'rafiq.aliyev@gmail.com', '$2y$10$CDhf2BUBbkMLwWVjxENy3.LVkIPTs3Vu7nYLBBYhuc4G5WXXUvaDq', 0, NULL, '2019-12-20 03:12:00', '2020-01-09 01:18:24'),
(3, 'Raida', 'Əliyeva', NULL, 'ZOV-P1985602', 1, '1960-07-22', '+994505351980', 'AZE557755', NULL, 'fbfdbdfbd', NULL, 'rafida.aliyeva@gmail.com', '$2y$10$CDhf2BUBbkMLwWVjxENy3.LVkIPTs3Vu7nYLBBYhuc4G5WXXUvaDq', 999, NULL, '2019-12-20 03:12:00', '2019-12-24 21:14:46'),
(4, 'Ramin', 'Rzayev', 'Rza', NULL, 0, NULL, '+994505351980', 'AA2222222', NULL, NULL, NULL, 'Ramin@gmail.com', '$2y$10$ZICyLQ6/3G2mt/jGutUd8eH5zTGQFTa7LvMLpwDUDUF58ZpH5lStW', 0, NULL, '2020-02-04 16:48:15', '2020-02-04 16:48:15'),
(6, 'demofirst', 'demolast', NULL, NULL, 0, NULL, '+994509999999', 'AZE000000', NULL, NULL, NULL, 'Elshadaziz@ya.ru', '$2y$10$N3eGh0ja1P9nLSFYY431iO5xdQpCfJA2sq7Ea2eH9KTJd5fF24KaW', 0, NULL, '2020-02-15 08:37:18', '2020-02-15 08:37:18'),
(7, 'demofirst', 'demolast', NULL, NULL, 0, NULL, '+994509999999', 'AZE000000', NULL, NULL, NULL, 'Eee@ddd.ru', '$2y$10$9C/aWWw6FBCVflMlRFs9Pudpm6eyM64IicI.OEXjdjB4F9t30R8Ry', 0, NULL, '2020-02-15 22:40:44', '2020-02-15 22:40:44'),
(8, 'demofirst', 'demolast', NULL, NULL, 0, NULL, '+994509999999', 'AZE000000', NULL, NULL, NULL, 'Azlogistika1@mail.ru', '$2y$10$evqnCgVWCI2iv7Gimsmhh.9eg77PgxdipaxRH7zhqasvvwd6XEbQy', 0, NULL, '2020-02-16 00:23:48', '2020-02-16 00:23:48'),
(9, 'demofirst', 'demolast', NULL, NULL, 0, NULL, '+994509999999', 'AZE000000', NULL, NULL, NULL, 'Vasif.muradov@mail.ru', '$2y$10$BDyzUD0NaFTneWWFkTxy3eFFIJh1TN6G0sWxobeoCAKdC5lKfMZt2', 0, NULL, '2020-02-16 00:25:57', '2020-02-16 00:25:57'),
(10, 'Edikgrgrgr', 'dddd', 'ewwwww', NULL, 0, NULL, '+994504444444', 'AZE000000', NULL, NULL, NULL, 'etimad@bayramov.com', '$2y$10$iuOQqHaqlDtdbyrdrEYw7uzfjIftQOh1wUxDFLV7Y/Fi611X3eoFi', 0, NULL, '2020-02-21 22:45:57', '2020-02-21 22:45:57'),
(11, 'qqd', 'wfqwfqwf', 'wewegw', NULL, 0, NULL, '+994505553355', 'AZE000000', NULL, NULL, NULL, 'umka.22@mail.ru', '$2y$10$JRsd5p47IYdYzyAh5pEWG.Yzpez4B4pcUWFe.yWOFD1UCCACr2GBm', 0, NULL, '2020-02-21 22:51:31', '2020-02-21 22:51:31'),
(12, 'qvwee', 'wfqwfqwf', 'wewegw', NULL, 0, NULL, '+994505553355', 'AZE000000', NULL, NULL, NULL, 'umka.222@mail.ru', '$2y$10$wDBmpZ2cIzJ8fjJrBWLSsOqkGtAi7vt3mUTXS4/wBxkq4ElPn38xS', 0, NULL, '2020-02-21 22:58:04', '2020-02-21 22:58:04'),
(13, 'wfqwfqw', 'fqwfqwf', '11111', NULL, 0, NULL, '+994505351980', 'AZE000000', NULL, NULL, NULL, 'umkadjj.22@mail.ru', '$2y$10$dwqUlOpvxg9FikurJsqrxe02XGhunCNB1MDgo9QChdAOn/fRHRvjq', 0, NULL, '2020-02-21 23:01:59', '2020-02-21 23:01:59'),
(14, 'wfqwfqw', 'fqwfqwf', '11111', NULL, 0, NULL, '+994505351980', 'AZE000000', NULL, NULL, NULL, 'umkad.22@mail.ru', '$2y$10$h2NmLDSieq3GQ06KTfBfO.9AlK9JrKo.9Bd1Q.p7dF8AxTUvNyqs2', 0, NULL, '2020-02-21 23:03:53', '2020-02-21 23:03:53'),
(15, 'Etimad', 'Musayev', 'ffqwfq', NULL, 0, NULL, '+994505351933', 'AZE000000', NULL, NULL, NULL, 'etimadh@bayramov.com', '$2y$10$n9PQfIzpE2s..l3YO.BW1OZxd70nllIr7V2rSx1IuQlSCQ8yO6dMW', 0, NULL, '2020-02-21 23:07:22', '2021-01-01 16:26:20'),
(16, 'demofirst', 'demolast', NULL, NULL, 0, NULL, '+994509999999', 'AZE000000', NULL, NULL, NULL, 'eelshad@fdgdg.aa', '$2y$10$6AzfWHe7Fe8fSzdpm/70r.ME.T0dE4LvQFV50lA8Y5FAQGSIMAsU.', 0, NULL, '2020-02-22 12:38:51', '2020-02-22 12:38:51'),
(18, 'demofirst', 'demolast', NULL, NULL, 0, NULL, '+994509999999', 'AZE000000', NULL, NULL, NULL, 'elshadaziz@yandex.ru', '$2y$10$p/g7Ud4wveTbcdD8ExUJleqslOnok8qzgRsV2zmZZ.AueEUtQ7Gw6', 0, NULL, '2020-02-22 14:55:59', '2020-02-22 14:55:59'),
(19, 'erberb', 'erberb', 'erwbwe', NULL, 0, NULL, '+79168884455', 'AZE000000', NULL, NULL, NULL, 'rafiq.aliyeve@gmail.com', '$2y$10$KFl5UCcSB9s7onwc1oXgyuGwOldorMirN7zk1qg9m6CXMLY3vMz5S', 0, NULL, '2020-02-28 14:55:50', '2020-02-28 14:55:50'),
(20, 'ewfew', 'weweg', 'wefwef', NULL, 0, NULL, '+994505351980', 'AZE000000', NULL, NULL, NULL, 'rafiq.aezliyev@gmail.com', '$2y$10$7M5GXy2f2yIXjNgM1VHufuwzSPpiraAGeJ0CUvxYXEd8YHvw1oucm', 0, NULL, '2020-02-28 14:56:29', '2020-02-28 14:56:29'),
(21, 'greber', 'wefwefwef', 'vrvrev', NULL, 0, NULL, 'regerg', 'AZE000000', NULL, NULL, NULL, 'rafiq.ealiyev@gmail.com', '$2y$10$VqUwX6wCBIWPpQZ97hMBmOVZmWoQ0Ry8.mzWsYkOhrl37rUMBMrNu', 0, NULL, '2020-02-28 14:57:02', '2020-02-28 14:57:02'),
(22, 'wqcqwcwq', 'wqwcqwc', 'cqwcwc', NULL, 0, NULL, 'qwcqwc', 'AZE000000', NULL, NULL, NULL, 'rafiq.daliyev@gmail.com', '$2y$10$Ru67nRx27vtHm87ERmfKKu4bSjyiCNsdVToAmhPBN8oT8DwTikcEC', 0, NULL, '2020-02-28 15:02:00', '2020-02-28 15:02:00'),
(23, 'wwfw', 'f32f23', '23f23f', NULL, 0, NULL, 'gnrtnrtn', 'AZE000000', NULL, NULL, NULL, 'Akief@gmail.com', '$2y$10$80w.Zi2MN1Jlim7nA5kIUu5DRMqgCLZscXra3uICt6RBqbOBEJagm', 0, NULL, '2020-02-28 15:03:01', '2020-02-28 15:03:01'),
(24, 'ssssasasas', 'aafasfs', 'wewegweg', NULL, 0, NULL, '+8618688848498', 'AZE000000', NULL, NULL, NULL, 'sadichok@mail.rukk', '$2y$10$vS16UqdLwL/Zv03BWLvvEuNkxIvdn5uGKJjBYKutorQ7XN9klK0c2', 0, NULL, '2020-08-14 09:20:13', '2020-08-14 09:20:13');

-- --------------------------------------------------------

--
-- Структура таблицы `user_favorites`
--

DROP TABLE IF EXISTS `user_favorites`;
CREATE TABLE `user_favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `goodsid` int(11) NOT NULL,
  `goodstitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goodsprice` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `zovadresses`
--

DROP TABLE IF EXISTS `zovadresses`;
CREATE TABLE `zovadresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countryid` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direction` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bonuscards`
--
ALTER TABLE `bonuscards`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `good_cats`
--
ALTER TABLE `good_cats`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `good_comments`
--
ALTER TABLE `good_comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `good_genders`
--
ALTER TABLE `good_genders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `good_orders`
--
ALTER TABLE `good_orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `good_pics`
--
ALTER TABLE `good_pics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `good_shops`
--
ALTER TABLE `good_shops`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kuryers`
--
ALTER TABLE `kuryers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_favorites`
--
ALTER TABLE `user_favorites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `good_pics`
--
ALTER TABLE `good_pics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `good_shops`
--
ALTER TABLE `good_shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT для таблицы `user_favorites`
--
ALTER TABLE `user_favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

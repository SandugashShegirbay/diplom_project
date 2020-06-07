-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: srv-pleskdb48.ps.kz:3306
-- Время создания: Июн 06 2020 г., 19:05
-- Версия сервера: 10.2.32-MariaDB
-- Версия PHP: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `inconkz_vuzy`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cafedra`
--

CREATE TABLE `cafedra` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cafedra`
--

INSERT INTO `cafedra` (`id`, `name`) VALUES
(3, 'Образование'),
(4, 'Гуманитарные науки'),
(5, 'Право'),
(6, 'Искусство'),
(7, 'Социальные науки, экономика и бизнес'),
(8, 'Естественные науки'),
(9, 'Технические науки и технологии'),
(10, 'Сельскохозяйственные науки'),
(11, 'Услуги'),
(12, 'Военное дело и безопасность'),
(13, 'Ветеринария'),
(15, 'Здравоохранение и социальное обеспечение (медицина)');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Бакалавриат'),
(2, 'Магистратура'),
(3, 'Докторантура'),
(4, 'Постдокторантура'),
(5, 'Школа / Колледж');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1586459468),
('m130524_201442_init', 1586459501),
('m190124_110200_add_verification_token_column_to_user_table', 1586459501);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `shdescrip` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `shdescrip`, `img`) VALUES
(1, 'Завершился прием заявлений на ЕНТ (июнь)', '<p>В ближайшие дни поступающие могут узнать место и время тестирования. Прием заявлений на Единое национальное тестирование (далее – ЕНТ), которое проводится с 20 июня по 5 июля календарного года, начался 10 апреля 2020 года и закончился 15 мая. По заявлению Главы государства от 27 апреля 2020 года в соответствии с режимом чрезвычайного положения, введенным в связи с пандемией COVID - 19 для обеспечения эпидемиологической безопасности, внесены изменения в формат приема заявлений на участие в ЕНТ. Выпускники текущего года, имеющие удостоверение личности или паспорт, подавали заявления в режиме онлайн через сайт Национального центра тестирования (далее-Центр) в веб - приложении «Digital ID: цифровой паспорт». Выпускники школ текущего года, не достигшие 16 лет, имеющие только свидетельство о рождении, подавали заявления дистанционно через пункты проведения ЕНТ, посредством отправки данных работникам филиалов (через страницы социальной сети, WhatsApp) НЦТ. Выпускники организаций среднего образования прошлых лет, технического и профессионального или послесреднего образования и лица, зачисленные в высшие учебные заведения (далее – ВУЗ) по очной форме обучения на платной основе до завершения первого академического периода, для зачисления в ВУЗ на платной основе, выпускники организаций среднего образования, обучавшиеся по линии международного обмена школьников за рубежом, а также лица казахской национальности, не являющиеся гражданами Республики Казахстан, окончившие учебные заведения за рубежом, предварительно подавали заявку в онлайн режиме через сайт Центра, после отправляли данные ответственным секретарям ВУЗов (WhatsApp, страницы социальной сети, по электронной почте) для окончательной регистрации в базе ЕНТ. Контактные телефоны сотрудников филиалов Центра и ответственных секретарей всех ВУЗов были размещены на сайте Центра. То есть, организация подачи заявлений на ЕНТ, не выходя из дома, являлась продолжением челленджа #BizBirgemiz #Алға Қазақстан #ҮйдеБол. В результате общее количество подавших заявление на участие в ЕНТ составило более 131 000 человек, из них выпускники текущего года - более 111 000 человек (более 90 000 – онлайн, более 21 000 – поданы дистанционно), выпускники школ прошлых лет, выпускники организаций технического и профессионального или послесреднего образования, выпускники организаций среднего образования, получивших образование за рубежом по линии международного обмена, и лица казахской национальности, не являющихся гражданами Республики Казахстан, составило более - 20 000 человек. Наряду с этим, 112 выпускникам школ из 5 населенных пунктов Мактаральского района Туркестанской области, пострадавшим от наводнения в связи с разрушением плотины в соседнем Узбекистане, была проведена индивидуальная консультация при регистрации на ЕНТ и предложены особые условия подачи заявления. Для выпускников данных населенных пунктов дополнительно из Центра направлены обновленные книжки-вопросники, а также комплект учебно-методических пособий по каждому предмету для подготовки к ЕНТ. Кроме того, в регионах, где отсутствует сеть интернет или слабая связь, была проведена отдельная инструкция по подаче заявления и через работников филиалов Центра произведена дистанционная регистрация. На сегодняшний день Центром продолжается организационная работа по базе заявлений ЕНТ. В связи с этим информация для тестируемых о сроках, времени и месте проведения ЕНТ будут известны после 20 мая текущего года. Информация о тестировании для выпускников текущего года, подавших заявления в режиме онлайн, будет доступна на сайте http://ent2020.testcenter.kz в личном кабинете. Для выпускников школ, подавших заявление через пункт проведения ЕНТ, пропуски будут переданы дистанционно через классных руководителей (WhatsApp, страницы социальных сетей, электронная почта). Для выпускников школ прошлого года, выпускников организаций технического и профессионального или послесреднего образования, выпускников организаций среднего образования, получивших образование за рубежом по линии международного обмена, и граждан казахской национальности, не являющихся гражданами Республики Казахстан, проходящих обучение за рубежом, пропуски будут выдаваться через приемные комиссии высших учебных заведений, в которых они зарегистрированы. Выпускников текущего года, подавших заявление на ЕНТ в онлайн режиме, при запуске в пункт проведения ЕНТ идентифицируют через сканер объёмно-пространственной формы лица человека. Остальные лица допускаются к тестированию посредством документов, удостоверяющих личность, паспорта и пропуска. При запуске на тестирование используются металлоискатели ручного и рамочного типа. Применение металлоискателей при запуске на тестирование осуществляется в целях обеспечения безопасности поступающих при проведении тестирования, а также недопущения проноса ими в здание запрещенных предметов. При запуске на тестирование, в случае обнаружения запрещенных предметов в зоне проверки металлоискателя во время запуска, тестируемые будут не допущены с составлением акта. При выявлении запрещенных предметов, во время произведения проверки металлоискателем в ходе запуска на тестирование, Представителем Министерства в соответствии с Правилами проведения Единого национального тестирования, утвержденными приказом Министра образования и науки Республики Казахстан от 2 мая 2017 года № 204 (далее - Правила), поступающий исключается из здания и не допускается к тестированию в текущем году. В случае обнаружения «подставного лица» в ходе запуска поступающий, вовлекший «подставное лицо», не допускается к тестированию в текущем году. После завершения ЕНТ до 25 августа календарного года Центр осуществляет просмотр записей видеонаблюдения тестирования. В случае обнаружения факта использования поступающим во время ЕНТ одного из запрещенных предметов, результаты тестирования (баллы ЕНТ) и конкурса аннулируются.</p>', 'В ближайшие дни поступающие могут узнать место и время тестирования. Прием заявлений на Единое национальное тестирование (далее – ЕНТ), которое проводится с 20 июня по 5 июля календарного года, начался 10 апреля 2020 года и закончился 15 мая. По заявлению Главы государства от 27 апреля 2020 года в соответствии с режимом чрезвычайного положения, введенным в связи с пандемией COVID - 19 для обеспечения эпидемиологической безопасности, внесены изменения в формат приема заявлений на участие в ЕНТ. Выпускники текущего года, имеющие удостоверение личности или паспорт, подавали заявления в режиме онлайн через сайт Национального центра тестирования (далее-Центр) в веб - приложении «Digital ID: цифровой паспорт».\r\n', 'news/1591469676.png'),
(2, 'Джон Джонс высказался о словах Конора Макгрегора', '<p>Первый номер рейтинга UFC вне зависимости от весовых категорий <a href=\"https://fightnews.info/fighters/jon-jones\">Джон Джонс</a> сомневается, что бывшего чемпиона двух дивизионов <a href=\"https://fightnews.info/fighters/conor-mcgregor\">Конора Макгрегора</a> можно причислить к списку лучших бойцов в истории смешанных единоборств, хотя и отмечает большой вклад ирландца в развитие ММА:</p><blockquote><p>\"Речь идет о том, чтобы стать парнем, о котором люди будут говорить через пятьдесят и через сто лет. Именно это заставляет меня вставать с кровати по утрам. В конце концов, никакого неуважения Конору, потому что я люблю все то, что он делает для нашего спорта. Но я не думаю, что его имя будет названо в разговоре людей, которые будут сидеть где-нибудь в парикмахерской и обсуждать величайших бойцов ММА всех времен\", - сказал Джонс.</p></blockquote><p>В ближайшие выходные Джону Джонсу предстоит провести в общей сложности одиннадцатую защиту титула в полутяжелом весе. Противостоять \"Боунсу\" будет непобежденный <a href=\"https://fightnews.info/fighters/dominick-reyes\">Доминик Рейес</a>.</p><p>Источник: https://fightnews.info/dzhon-dzhons-ne-schitaet-chto-konor-makgregor-vhodit-v-chislo-luchshih-boycov-vseh-vremen</p>', 'Джон Джонс не считает, что Конор Макгрегор входит в число лучших бойцов всех времен', 'news/1591458442.jpg'),
(3, 'Lorem Ipsum matet amum leram kira su kasim lopen muna', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat labore nobis corporis sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.</p><p>Ut eligendi obcaecati suscipit numquam, quasi atque consequuntur illum, neque perferendis natus, magnam modi? Optio consectetur temporibus modi, quasi cumque quod animi, iste, ad illo architecto unde rerum, repellat laborum.</p><p>Porro id iusto fuga rerum voluptates cupiditate sunt debitis minima sapiente, nesciunt corporis praesentium architecto dolores deserunt a similique obcaecati, quam hic expedita dolor consequatur. Minima labore, eligendi vitae ipsa.</p><p>Molestiae fugit porro saepe hic minima. Dolor, ipsam enim nisi amet libero praesentium exercitationem et nam sunt, adipisci voluptate ipsa obcaecati! Quidem libero obcaecati accusantium error mollitia magnam hic corrupti.</p><p>Cupiditate impedit, quo explicabo harum architecto, consectetur reprehenderit error voluptatum voluptas minus nisi pariatur veniam autem tenetur consequuntur eligendi! Laborum alias ut, eligendi? Quis nesciunt, fugit explicabo iste ea mollitia.</p>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat labore nobis corporis sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.', 'news/1591458739.jpg'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat labore nobis corporis ', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat labore nobis corporis sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat labore nobis corporis sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat labore nobis corporis sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat labore nobis corporis sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat labore nobis corporis sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat labore nobis corporis sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat labore nobis corporis sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat labore nobis corporis sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat labore nobis corporis sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat labore nobis corporis sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.</p>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat labore nobis corporis sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.', 'news/1591458776.jfif'),
(5, 'sunt eius quidem atque asperiores! Expedita dolor aut ', '<p>sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.</p><p>sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.</p><p>sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.</p>', 'sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! ', 'news/1591458840.jpg'),
(6, 'Lo sunt eius quidem atque asperiores! ', '<p>Scd sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.</p><p>&nbsp;</p><p>Scd sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.</p><p>Scd sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.</p>', 'Scd sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. Repellendus, corrupti aspernatur.sunt eius quidem atque asperiores! Expedita dolor aut placeat voluptates beatae illum nihil repellendus accusantium. ', 'news/1591458913.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `name`) VALUES
(1, 'Алматы'),
(2, 'Астана'),
(3, 'Талдыкорган\r\n'),
(4, 'Актау'),
(5, 'Атырау'),
(6, 'Жезказган'),
(7, 'Караганды'),
(8, 'Кокшетау'),
(9, 'Костанай'),
(10, 'Кызылорда'),
(11, 'Павлодар'),
(12, 'Петропавловск'),
(13, 'Семей'),
(14, 'Тараз'),
(15, 'Туркестан'),
(16, 'Уральск'),
(17, 'Усть-Каменогорск	'),
(18, 'Шымкент');

-- --------------------------------------------------------

--
-- Структура таблицы `selected`
--

CREATE TABLE `selected` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `univer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `selected`
--

INSERT INTO `selected` (`id`, `user_id`, `univer_id`) VALUES
(2, 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `spec`
--

CREATE TABLE `spec` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `caf_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `spec`
--

INSERT INTO `spec` (`id`, `name`, `caf_id`) VALUES
(4, 'Дошкольное обучение и воспитание\r\n\r\n', 3),
(5, 'Педагогика и методика начального обучения\r\n\r\n', 3),
(6, 'Педагогика и психология\r\n\r\n', 3),
(7, 'Начальная военная подготовка\r\n\r\n', 3),
(8, 'Дефектология', 3),
(9, 'Музыкальное образование\r\n\r\n', 3),
(10, 'Изобразительное искусство и черчение\r\n\r\n', 3),
(11, 'Физическая культура и спорт \r\n\r\n', 3),
(12, 'Математика\r\n\r\n', 3),
(13, 'Физика\r\n\r\n', 3),
(14, 'Информатика\r\n\r\n', 3),
(15, 'Химия ', 3),
(16, 'Биология', 3),
(17, 'История', 3),
(18, 'Основы права и экономики \r\n\r\n', 3),
(19, 'География', 3),
(20, 'Казахский язык и литература\r\n\r\n', 3),
(21, 'Русский язык и литература\r\n\r\n', 3),
(22, 'Иностранный язык: два иностранных языка\r\n\r\n', 3),
(23, 'Профессиональное обучение\r\n\r\n', 3),
(24, 'Казахский язык и литература в школах с неказахским языком обучения\r\n\r\n', 3),
(25, 'Русский язык и литература в школах с нерусским языком обучения\r\n\r\n', 3),
(26, 'Социальная педагогика и самопознание\r\n\r\n', 3),
(27, 'Химия-Биология\r\n\r\n', 3),
(28, 'Математика-Физика\r\n\r\n', 3),
(29, 'Математика-Информатика\r\n\r\n', 3),
(30, 'Физика-Информатика\r\n\r\n', 3),
(31, 'География-История\r\n\r\n', 3),
(32, 'История-Религиоведение\r\n\r\n', 3),
(33, 'Философия ', 4),
(34, 'Международные отношения \r\n\r\n', 4),
(35, 'История\r\n\r\n', 4),
(36, 'Культурология', 4),
(37, 'Филология\r\n\r\n', 4),
(38, 'Религиоведение', 4),
(39, 'Переводческое дело\r\n\r\n', 4),
(40, 'Археология и этнология\r\n\r\n', 4),
(41, 'Востоковедение', 4),
(42, 'Иностранная филология\r\n\r\n', 4),
(43, 'Теология\r\n\r\n', 4),
(44, 'Тюркология', 4),
(45, 'Исламоведение', 4),
(46, 'Юриспруденция', 5),
(47, 'Международное право\r\n\r\n', 5),
(48, 'Правоохранительная деятельность\r\n\r\n', 5),
(49, 'Таможенное дело\r\n\r\n', 5),
(50, 'Музыковедение\r\n\r\n', 6),
(51, 'Инструментальное исполнительство\r\n\r\n', 6),
(52, 'Вокальное искусство\r\n\r\n', 6),
(53, 'Традиционное музыкальное искусство\r\n\r\n', 6),
(54, 'Дирижирование', 6),
(55, 'Дирижирование', 6),
(56, 'Актерское искусство\r\n\r\n', 6),
(57, 'Искусство эстрады\r\n\r\n', 6),
(58, 'Хореография\r\n\r\n', 6),
(59, 'Сценография', 6),
(60, 'Композиция', 6),
(61, 'Операторское искусство\r\n\r\n', 6),
(62, 'Живопись', 6),
(63, 'Графика', 6),
(64, 'Скульптура', 6),
(65, 'Искусствоведение', 6),
(66, 'Декоративное искусство \r\n\r\n', 6),
(67, 'Музейное дело и охрана памятников\r\n\r\n', 6),
(68, 'Архитектура', 6),
(69, 'Дизайн', 6),
(70, 'Издательское дело  \r\n\r\n', 6),
(71, 'Арт - менеджмент\r\n\r\n', 6),
(72, 'Социология', 7),
(73, 'Политология', 7),
(74, 'Психология', 7),
(75, 'Журналистика', 7),
(76, 'Регионоведение', 7),
(77, 'Экономика', 7),
(78, 'Менеджмент', 7),
(79, 'Учет и аудит\r\n\r\n', 7),
(80, 'Финансы', 7),
(81, 'Государственное и местное управление\r\n\r\n', 7),
(82, 'Маркетинг', 7),
(83, 'Статистика', 7),
(84, 'Мировая экономика\r\n\r\n', 7),
(85, 'Связь с общественностью\r\n\r\n', 7),
(86, 'Архивоведение, документоведение и документационное обеспечение\r\n\r\n', 7),
(87, 'Организация и нормирование труда  \r\n\r\n', 7),
(88, 'Государственный аудит\r\n\r\n', 7),
(89, 'Менеджмент спорта\r\n\r\n', 7),
(90, 'Математика', 8),
(91, 'Информатика', 8),
(92, 'Механика', 8),
(93, 'Физика', 8),
(94, 'Ядерная физика\r\n\r\n', 8),
(95, 'Химия', 8),
(96, 'Биология', 8),
(97, 'Экология  ', 8),
(98, 'География', 8),
(99, 'Гидрология', 8),
(100, 'Физика и астрономия\r\n\r\n', 8),
(101, 'Метеорология', 8),
(102, 'Биотехнология', 9),
(103, 'Автоматизация и управление\r\n\r\n', 9),
(104, 'Информационные системы\r\n\r\n', 9),
(105, 'Вычислительная техника и программное обеспечение \r\n\r\n', 9),
(106, 'Математическое и компьютерное моделирование\r\n\r\n', 9),
(107, 'Геология и разведка месторождений полезных ископаемых\r\n\r\n', 9),
(108, 'Горное дело\r\n\r\n', 9),
(109, 'Нефтегазовое дело\r\n\r\n', 9),
(110, 'Металлургия', 9),
(111, 'Материаловедение и технология новых материалов\r\n\r\n', 9),
(112, 'Геодезия и картография\r\n\r\n', 9),
(113, 'Машиностроение', 9),
(114, 'Транспорт, транспортная техника и технологии\r\n\r\n', 9),
(115, 'Авиационная техника и технологии\r\n\r\n', 9),
(116, 'Морская техника и технологии\r\n\r\n', 9),
(117, 'Приборостроение', 9),
(118, 'Теплоэнергетика', 9),
(119, 'Электроэнергетика', 9),
(120, 'Радиотехника, электроника и телекоммуникации\r\n\r\n', 9),
(121, 'Химическая технология  неорганических веществ\r\n\r\n', 9),
(122, 'Химическая технология органических веществ\r\n\r\n', 9),
(123, 'Полиграфия', 9),
(124, 'Техническая физика\r\n\r\n', 9),
(125, 'Технологические машины и оборудование (по отраслям)\r\n\r\n', 9),
(126, 'Технология деревообработки и изделий из дерева (по областям применения)\r\n\r\n', 9),
(127, 'Технология и конструирование изделий легкой промышленности\r\n\r\n', 9),
(128, 'Технология продовольственных продуктов\r\n\r\n', 9),
(129, 'Технология перерабатывающих производств (по отраслям)\r\n\r\n', 9),
(130, 'Строительство', 9),
(131, 'Производство строительных материалов, изделий и конструкций\r\n\r\n', 9),
(132, 'Безопасность жизнедеятельности и защита окружающей среды\r\n\r\n', 9),
(133, 'Стандартизация и сертификация (по отраслям)\r\n\r\n', 9),
(134, 'Технология  и  проектирование текстильных материалов\r\n\r\n', 9),
(135, 'Обогащение полезных ископаемых\r\n\r\n', 9),
(136, 'Обогащение полезных ископаемых\r\n\r\n', 9),
(137, 'Технология обработки материалов давлением\r\n\r\n', 9),
(138, 'Летная эксплуатация летательных аппаратов и двигателей\r\n\r\n', 9),
(139, 'Транспортное строительство\r\n\r\n', 9),
(140, 'Космическая техника и технологии\r\n\r\n', 9),
(141, 'Технология фармацевтического производства\r\n\r\n', 9),
(142, 'Метрология\r\n\r\n', 9),
(143, 'Инженерные системы и сети\r\n\r\n', 9),
(144, 'Химическая технология тугоплавких неметаллических и силикатных материалов\r\n\r\n', 9),
(145, 'Агрономия', 10),
(146, 'Технология  производства продуктов животноводства\r\n\r\n', 10),
(147, 'Охотоведение и звероводство\r\n\r\n', 10),
(148, 'Рыбное хозяйство и промышленное рыболовство\r\n\r\n', 10),
(149, 'Водные ресурсы и водопользование\r\n\r\n', 10),
(150, 'Аграрная техника и технология\r\n\r\n', 10),
(151, 'Лесные ресурсы и лесоводство\r\n\r\n', 10),
(152, 'Почвоведение и агрохимия\r\n\r\n', 10),
(153, 'Плодоовощеводство\r\n\r\n', 10),
(154, 'Мелиорация, рекультивация и охрана земель\r\n\r\n', 10),
(155, 'Защита и карантин растений\r\n\r\n', 10),
(156, 'Энергообеспечение сельского хозяйства\r\n\r\n', 10),
(157, 'Энергообеспечение сельского хозяйства\r\n\r\n', 11),
(158, 'Туризм', 11),
(159, 'Землеустройство', 11),
(160, 'Социальная работа\r\n\r\n', 11),
(161, 'Культурно-досуговая работа\r\n\r\n', 11),
(162, 'Кадастр', 11),
(163, 'Оценка', 11),
(164, 'Логистика (по отраслям)\r\n\r\n', 11),
(165, 'Библиотечное дело\r\n\r\n', 11),
(166, 'Ресторанное дело  и гостиничный бизнес\r\n\r\n', 11),
(167, 'Пожарная безопасность\r\n\r\n', 12),
(168, 'Системы информационной безопасности\r\n\r\n', 12),
(169, 'Сестринское дело\r\n\r\n', 15),
(170, 'Общественное здравоохранение\r\n\r\n', 15),
(171, 'Фармация', 15),
(172, 'Медико-профилактическое дело\r\n\r\n', 15),
(173, 'Ветеринарная медицина\r\n\r\n\r\n\r\n', 13),
(174, 'Ветеринарная санитария\r\n\r\n', 13),
(175, 'Общая медицина\r\n\r\n', 15),
(176, 'Стоматология', 15),
(177, 'Педиатрия', 15),
(178, 'Исполнительское искусство\r\n\r\n', 6),
(179, 'Народные инструменты\r\n\r\n', 6),
(180, 'Искусство пения\r\n\r\n', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `spisok`
--

CREATE TABLE `spisok` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `spisok`
--

INSERT INTO `spisok` (`id`, `path`) VALUES
(7, 'spisok/1591468904.pdf');

-- --------------------------------------------------------

--
-- Структура таблицы `univers`
--

CREATE TABLE `univers` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `students` int(11) NOT NULL,
  `sthouse` int(11) NOT NULL,
  `grants` text NOT NULL,
  `accr` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `caf_id` int(11) NOT NULL,
  `spec_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `inform` text NOT NULL,
  `ssilka` varchar(255) NOT NULL,
  `times` varchar(255) NOT NULL,
  `money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `univers`
--

INSERT INTO `univers` (`id`, `title`, `name`, `price`, `students`, `sthouse`, `grants`, `accr`, `cat_id`, `caf_id`, `spec_id`, `reg_id`, `img`, `inform`, `ssilka`, `times`, `money`) VALUES
(3, 'Диджитал маркетинг СДУ', 'Университет Сулеймана Демиреля', 1100000, 0, 1, 'Государственный', '2', 1, 7, 82, 1, 'univers/1591389258.png', '<h4><strong>Описание программы</strong></h4><p>Основная цель этой программы – подготовить маркетологов, умеющих распознавать появляющиеся возможности в сфере бизнеса и справляться с трудностями, возникающими при работе с финансовыми рынками Казахстана и мира. Наша школа предоставляет доступ к новейшим знаниям в сфере маркетинга, а также развивает в студентах навыки, необходимые для построения надежной репутации на рынке.</p><h4><strong>В результате</strong></h4><p>• Усовершенствование творческого, критического и рефлективного мышления, необходимого для того, чтобы распознавать возможности и справляться с трудностями в сфере бизнеса.</p><p>• Умение распознавать ключевые аналитические структуры и основные инструменты, эффективно применимые в маркетинге.</p><p>• Многочисленные коммуникационные навыки, такие как устные, письменные, аудио/визуальные и цифровые, которые обязательно пригодятся будущим маркетологам.</p><p>• Умение критиковать и оценивать юридические и этические аспекты действий маркетологов при принятии решений.</p><p>• Интеграцию цифровых инструментов в финансовые процессы организации и за её пределами.</p><h4><strong>Обязательные и элективные модули (курсы)</strong></h4><p><strong>Семестр 1</strong></p><p>Principles of Marketing</p><p><strong>Семестр 2</strong></p><p>Cases in Marketing<br>Traditional and Digital Marketing communications<br>Consumer Behavior<br>Social Media Marketing<br>Marketing<br>Research</p><p><strong>Семестр</strong>&nbsp;<strong>3</strong></p><p>Personal Selling<br>Digital Advertising&nbsp;Strategy<br>Artificial Intelligence in Marketing</p><p><strong>Семестры 4-6</strong></p><p>Designing user Experience and Web analytics<br>Sales Management<br>Service Marketing<br>Target Audience Analysis</p><p><strong>Семестры 7-8</strong></p><p>Neuromarketing</p><h4><strong>Трудоустройство</strong></h4><p>В настоящее время, маркетинг применяется практически во всех сферах жизнедеятельности человека, и поэтому, студенты данной специальности получают возможность работать в любой желаемой отрасли. Перед нашими выпускниками открывается широкий спектр направлений, начиная от торгового маркетинга, сектора товаров народного потребления (FMCG), рекламных агентств, розничной торговли, сферы маркетинга услуг и цифрового маркетинга, вплоть до некоммерческих организаций, таких как благотворительность, местное управление или ВУЗы.</p>', 'https://sdu.edu.kz', '4', 24091),
(4, 'EAГИ', 'ЕВРАЗИЙСКИЙ ГУМАНИТАРНЫЙ ИНСТИТУТ', 400000, 40000, 1, 'Государственный', '2', 1, 3, 6, 2, 'univers/1591451670.png', '<p>Евразийский гуманитарный институт – интеллектуальный и образовательный центр столицы, один из ведущих вузов по удовлетворению потребностей общества и государства в подготовке высококвалифицированных кадров, востребованных на рынке труда, обладающих профессиональными компетенциями, инновационными подходами и исследовательскими навыками.</p><p>Миссия института – подготовка компетентных специалистов, конкурентоспособных в современных условиях профессиональной деятельности.</p><p>Прием на обучение по группам образовательных программ высшего образования, требующих специальной подготовки:</p><ul><li>область образования – «Педагогические науки»</li><li>осуществляется с учетом результатов специального экзамена.</li><li>прием <strong>документов</strong> поступающих и проведение специального <strong>экзамена</strong> для поступления по области образования «Педагогические науки» осуществляется с 20 июня по 24 августа 2020 года.</li></ul><p>Перечень документов, необходимых для сдачи специального экзамена для поступления по области образования «Педагогические науки»:</p><ol><li>Документ об общем среднем или техническом и профессиональном, послесреднем образовании (подлинник);</li><li>8 фотокарточек размером 3 x 4 сантиметра;</li><li>Копию документа, удостоверяющего личность;</li><li>Сертификат ЕНТ (при его наличии).</li></ol>', 'www.egi.kz', '4', 26000),
(5, 'EAГИ', 'ЕВРАЗИЙСКИЙ ГУМАНИТАРНЫЙ ИНСТИТУТ', 300000, 40000, 1, 'Государственный', '2', 1, 3, 4, 2, 'univers/1591451956.png', '<p>Евразийский гуманитарный институт – интеллектуальный и образовательный центр столицы, один из ведущих вузов по удовлетворению потребностей общества и государства в подготовке высококвалифицированных кадров, востребованных на рынке труда, обладающих профессиональными компетенциями, инновационными подходами и исследовательскими навыками.</p><p>Миссия института – подготовка компетентных специалистов, конкурентоспособных в современных условиях профессиональной деятельности.</p><p>Прием на обучение по группам образовательных программ высшего образования, требующих специальной подготовки:</p><ul><li>область образования – «Педагогические науки»</li><li>осуществляется с учетом результатов специального экзамена.</li><li>прием <strong>документов</strong> поступающих и проведение специального <strong>экзамена</strong> для поступления по области образования «Педагогические науки» осуществляется с 20 июня по 24 августа 2020 года.</li></ul><p>Перечень документов, необходимых для сдачи специального экзамена для поступления по области образования «Педагогические науки»:</p><ol><li>Документ об общем среднем или техническом и профессиональном, послесреднем образовании (подлинник);</li><li>8 фотокарточек размером 3 x 4 сантиметра;</li><li>Копию документа, удостоверяющего личность;</li><li>Сертификат ЕНТ (при его наличии).</li></ol>', 'www.egi.kz', '4', 26000),
(6, 'EAГИ', 'ЕВРАЗИЙСКИЙ ГУМАНИТАРНЫЙ ИНСТИТУТ', 300000, 4000, 1, 'Государственный', '2', 1, 3, 5, 2, 'univers/1591452032.png', '<p>Евразийский гуманитарный институт – интеллектуальный и образовательный центр столицы, один из ведущих вузов по удовлетворению потребностей общества и государства в подготовке высококвалифицированных кадров, востребованных на рынке труда, обладающих профессиональными компетенциями, инновационными подходами и исследовательскими навыками.</p><p>Миссия института – подготовка компетентных специалистов, конкурентоспособных в современных условиях профессиональной деятельности.</p><p>Прием на обучение по группам образовательных программ высшего образования, требующих специальной подготовки:</p><ul><li>область образования – «Педагогические науки»</li><li>осуществляется с учетом результатов специального экзамена.</li><li>прием <strong>документов</strong> поступающих и проведение специального <strong>экзамена</strong> для поступления по области образования «Педагогические науки» осуществляется с 20 июня по 24 августа 2020 года.</li></ul><p>Перечень документов, необходимых для сдачи специального экзамена для поступления по области образования «Педагогические науки»:</p><ol><li>Документ об общем среднем или техническом и профессиональном, послесреднем образовании (подлинник);</li><li>8 фотокарточек размером 3 x 4 сантиметра;</li><li>Копию документа, удостоверяющего личность;</li><li>Сертификат ЕНТ (при его наличии).</li></ol>', 'www.egi.kz', '4', 26000),
(7, 'EAГИ', 'ЕВРАЗИЙСКИЙ ГУМАНИТАРНЫЙ ИНСТИТУТ', 300000, 4000, 1, 'Государственный', '2', 1, 3, 35, 2, 'univers/1591452482.png', '<p>Евразийский гуманитарный институт – интеллектуальный и образовательный центр столицы, один из ведущих вузов по удовлетворению потребностей общества и государства в подготовке высококвалифицированных кадров, востребованных на рынке труда, обладающих профессиональными компетенциями, инновационными подходами и исследовательскими навыками.</p><p>Миссия института – подготовка компетентных специалистов, конкурентоспособных в современных условиях профессиональной деятельности.</p><p>Прием на обучение по группам образовательных программ высшего образования, требующих специальной подготовки:</p><ul><li>область образования – «Педагогические науки»</li><li>осуществляется с учетом результатов специального экзамена.</li><li>прием <strong>документов</strong> поступающих и проведение специального <strong>экзамена</strong> для поступления по области образования «Педагогические науки» осуществляется с 20 июня по 24 августа 2020 года.</li></ul><p>Перечень документов, необходимых для сдачи специального экзамена для поступления по области образования «Педагогические науки»:</p><ol><li>Документ об общем среднем или техническом и профессиональном, послесреднем образовании (подлинник);</li><li>8 фотокарточек размером 3 x 4 сантиметра;</li><li>Копию документа, удостоверяющего личность;</li><li>Сертификат ЕНТ (при его наличии).</li></ol>', 'www.egi.kz', '4', 26000),
(8, 'EAГИ', 'ЕВРАЗИЙСКИЙ ГУМАНИТАРНЫЙ ИНСТИТУТ', 300000, 4000, 1, 'Государственный', '2', 1, 3, 20, 2, 'univers/1591452611.png', '<p>Евразийский гуманитарный институт – интеллектуальный и образовательный центр столицы, один из ведущих вузов по удовлетворению потребностей общества и государства в подготовке высококвалифицированных кадров, востребованных на рынке труда, обладающих профессиональными компетенциями, инновационными подходами и исследовательскими навыками.</p><p>Миссия института – подготовка компетентных специалистов, конкурентоспособных в современных условиях профессиональной деятельности.</p><p>Прием на обучение по группам образовательных программ высшего образования, требующих специальной подготовки:</p><ul><li>область образования – «Педагогические науки»</li><li>осуществляется с учетом результатов специального экзамена.</li><li>прием <strong>документов</strong> поступающих и проведение специального <strong>экзамена</strong> для поступления по области образования «Педагогические науки» осуществляется с 20 июня по 24 августа 2020 года.</li></ul><p>Перечень документов, необходимых для сдачи специального экзамена для поступления по области образования «Педагогические науки»:</p><ol><li>Документ об общем среднем или техническом и профессиональном, послесреднем образовании (подлинник);</li><li>8 фотокарточек размером 3 x 4 сантиметра;</li><li>Копию документа, удостоверяющего личность;</li><li>Сертификат ЕНТ (при его наличии).</li></ol>', 'www.egi.kz', '4', 26000),
(9, 'EAГИ', 'ЕВРАЗИЙСКИЙ ГУМАНИТАРНЫЙ ИНСТИТУТ', 300000, 4000, 1, 'Государственный', '2', 1, 3, 22, 2, 'univers/1591452944.png', '<p>Евразийский гуманитарный институт – интеллектуальный и образовательный центр столицы, один из ведущих вузов по удовлетворению потребностей общества и государства в подготовке высококвалифицированных кадров, востребованных на рынке труда, обладающих профессиональными компетенциями, инновационными подходами и исследовательскими навыками.</p><p>Миссия института – подготовка компетентных специалистов, конкурентоспособных в современных условиях профессиональной деятельности.</p><p>Прием на обучение по группам образовательных программ высшего образования, требующих специальной подготовки:</p><ul><li>область образования – «Педагогические науки»</li><li>осуществляется с учетом результатов специального экзамена.</li><li>прием <strong>документов</strong> поступающих и проведение специального <strong>экзамена</strong> для поступления по области образования «Педагогические науки» осуществляется с 20 июня по 24 августа 2020 года.</li></ul><p>Перечень документов, необходимых для сдачи специального экзамена для поступления по области образования «Педагогические науки»:</p><ol><li>Документ об общем среднем или техническом и профессиональном, послесреднем образовании (подлинник);</li><li>8 фотокарточек размером 3 x 4 сантиметра;</li><li>Копию документа, удостоверяющего личность;</li><li>Сертификат ЕНТ (при его наличии).</li></ol>', 'www.egi.kz', '4', 26000),
(10, 'EAГИ', 'ЕВРАЗИЙСКИЙ ГУМАНИТАРНЫЙ ИНСТИТУТ', 300000, 40000, 1, 'Государственный', '2', 1, 3, 39, 2, 'univers/1591453047.png', '<p>Евразийский гуманитарный институт – интеллектуальный и образовательный центр столицы, один из ведущих вузов по удовлетворению потребностей общества и государства в подготовке высококвалифицированных кадров, востребованных на рынке труда, обладающих профессиональными компетенциями, инновационными подходами и исследовательскими навыками.</p><p>Миссия института – подготовка компетентных специалистов, конкурентоспособных в современных условиях профессиональной деятельности.</p><p>Прием на обучение по группам образовательных программ высшего образования, требующих специальной подготовки:</p><ul><li>область образования – «Педагогические науки»</li><li>осуществляется с учетом результатов специального экзамена.</li><li>прием <strong>документов</strong> поступающих и проведение специального <strong>экзамена</strong> для поступления по области образования «Педагогические науки» осуществляется с 20 июня по 24 августа 2020 года.</li></ul><p>Перечень документов, необходимых для сдачи специального экзамена для поступления по области образования «Педагогические науки»:</p><ol><li>Документ об общем среднем или техническом и профессиональном, послесреднем образовании (подлинник);</li><li>8 фотокарточек размером 3 x 4 сантиметра;</li><li>Копию документа, удостоверяющего личность;</li><li>Сертификат ЕНТ (при его наличии).</li></ol>', 'www.egi.kz', '4', 26000),
(11, 'EAГИ', 'ЕВРАЗИЙСКИЙ ГУМАНИТАРНЫЙ ИНСТИТУТ', 300000, 40000, 1, 'Внутренний', '2', 1, 7, 80, 2, 'univers/1591453187.png', '<p>Евразийский гуманитарный институт – интеллектуальный и образовательный центр столицы, один из ведущих вузов по удовлетворению потребностей общества и государства в подготовке высококвалифицированных кадров, востребованных на рынке труда, обладающих профессиональными компетенциями, инновационными подходами и исследовательскими навыками.</p><p>Миссия института – подготовка компетентных специалистов, конкурентоспособных в современных условиях профессиональной деятельности.</p><p>Прием на обучение по группам образовательных программ высшего образования, требующих специальной подготовки:</p><ul><li>область образования – «Педагогические науки»</li><li>осуществляется с учетом результатов специального экзамена.</li><li>прием <strong>документов</strong> поступающих и проведение специального <strong>экзамена</strong> для поступления по области образования «Педагогические науки» осуществляется с 20 июня по 24 августа 2020 года.</li></ul><p>Перечень документов, необходимых для сдачи специального экзамена для поступления по области образования «Педагогические науки»:</p><ol><li>Документ об общем среднем или техническом и профессиональном, послесреднем образовании (подлинник);</li><li>8 фотокарточек размером 3 x 4 сантиметра;</li><li>Копию документа, удостоверяющего личность;</li><li>Сертификат ЕНТ (при его наличии).</li></ol>', 'www.egi.kz', '4', 0),
(12, 'EAГИ', 'ЕВРАЗИЙСКИЙ ГУМАНИТАРНЫЙ ИНСТИТУТ', 300000, 40000, 1, 'Внутренний', '2', 1, 5, 46, 2, 'univers/1591453260.png', '<p>Евразийский гуманитарный институт – интеллектуальный и образовательный центр столицы, один из ведущих вузов по удовлетворению потребностей общества и государства в подготовке высококвалифицированных кадров, востребованных на рынке труда, обладающих профессиональными компетенциями, инновационными подходами и исследовательскими навыками.</p><p>Миссия института – подготовка компетентных специалистов, конкурентоспособных в современных условиях профессиональной деятельности.</p><p>Прием на обучение по группам образовательных программ высшего образования, требующих специальной подготовки:</p><ul><li>область образования – «Педагогические науки»</li><li>осуществляется с учетом результатов специального экзамена.</li><li>прием <strong>документов</strong> поступающих и проведение специального <strong>экзамена</strong> для поступления по области образования «Педагогические науки» осуществляется с 20 июня по 24 августа 2020 года.</li></ul><p>Перечень документов, необходимых для сдачи специального экзамена для поступления по области образования «Педагогические науки»:</p><ol><li>Документ об общем среднем или техническом и профессиональном, послесреднем образовании (подлинник);</li><li>8 фотокарточек размером 3 x 4 сантиметра;</li><li>Копию документа, удостоверяющего личность;</li><li>Сертификат ЕНТ (при его наличии).</li></ol>', 'www.egi.kz', '4', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`, `admin`) VALUES
(1, 'maksat', 'ggmUd74_QDu_gRG6pOQUEK8JmQrL-9co', '$2y$13$sC5gtw7Sd579TaGROd8AkusAauAuPWbBMT0Djx9gSyqJ87png/Cwi', NULL, 'maksatakashayev@gmail.com', 10, 1586459524, 1586459524, 'a4RJTgkk_tIZjpoW6jqbU_oZjMxKEKpG_1586459524', 1),
(4, 'mrk22', 'ObCWwlyE1rer3e5vpesXmOl4TXuca0qe', '$2y$13$n4DpR/MJnCpHxrz9MP8L0e0.XOG1hvpjE4lPMsbEd4zL44v3V8Ohm', NULL, 'asd@gmail.com', 10, 1586460773, 1586460773, 'vKMpCXbSPXJlOWoDlkukXKlzeHHllyqk_1586460773', 0),
(5, 'mert2', '5-CEs1k2phGm7-o1LYcRK1v31fvNEZHa', '$2y$13$iLM6lNHvu5xHey.RajpVKeRP784lyBPqhlGWzKFO2TMEEnsjH4U56', NULL, 'masd@gmail.com', 10, 1586460927, 1586460927, '-zPCKCkF5sjfgKu2UyJNMq5a0Ual3-Gt_1586460927', 0),
(6, 'asd2', 'Gbzjmz3Kw9iYpDkTFAnZFB6L1V3sXeWT', '$2y$13$AWj1aliK7tdR6/G36L.a9Ojir.sChHJTYTYAFzJJ4YAyEnHYf3Cni', NULL, 'maksa@gmail.com', 10, 1586460956, 1586460956, 'Y1MmRSpThTf8-_lDY5kAahPj13x--xBy_1586460956', 0),
(7, 'Zhanara', 'ol7HtMlSvB49ccAqF6mIzBp-N7iWzyOe', '$2y$13$bHGtrTUogXB/bS7ib25xyu4SR4OFcqM4jDM3Rs3/0lCEwh/0e7lXe', NULL, 'zhanaratlebaldy@gmail.com', 10, 1591241329, 1591241329, 'Fjg3eY6dCuBgyrpIGLZM_a3qMhbk64b3_1591241329', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cafedra`
--
ALTER TABLE `cafedra`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `selected`
--
ALTER TABLE `selected`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `spec`
--
ALTER TABLE `spec`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `spisok`
--
ALTER TABLE `spisok`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `univers`
--
ALTER TABLE `univers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cafedra`
--
ALTER TABLE `cafedra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `selected`
--
ALTER TABLE `selected`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `spec`
--
ALTER TABLE `spec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT для таблицы `spisok`
--
ALTER TABLE `spisok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `univers`
--
ALTER TABLE `univers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

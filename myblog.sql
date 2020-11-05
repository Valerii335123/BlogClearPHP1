-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июн 22 2020 г., 23:39
-- Версия сервера: 5.6.43
-- Версия PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myblog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `coments`
--

CREATE TABLE `coments` (
  `id` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `coment` blob NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `coments`
--

INSERT INTO `coments` (`id`, `idpost`, `iduser`, `coment`, `time`) VALUES
(1, 1, 1, 0x736f6d65, '2020-06-04 21:00:00'),
(2, 1, 1, 0x7269756572, '2020-04-03 21:00:00'),
(8, 1, 1, 0x717765727479, '2020-06-14 14:16:10'),
(9, 2, 1, 0x736f6d6520636f6d656e74, '2020-06-14 14:16:37'),
(10, 1, 1, 0x746573742068696464656e, '2020-06-14 14:27:30'),
(11, 7, 1, 0x746573742061646420636f6d656e742066726f6d206f746865722075736572, '2020-06-16 17:42:24'),
(12, 6, 3, 0x69206c616b6520697420706f7374, '2020-06-16 18:25:39'),
(13, 9, 1, 0x6c696b65207468697320706f7374, '2020-06-16 18:32:50'),
(14, 6, 4, 0x746573742074657374207465737420746573742074657374207465737420746573742074657374207465737420746573742074657374207465737420746573742074657374207465737420746573742074657374207465737420746573742074657374207465737420746573742074657374207465737420, '2020-06-20 12:55:25'),
(15, 6, 1, 0x746573742061646464646464646464646464646464646464646464646464646464, '2020-06-20 12:55:49'),
(16, 6, 5, 0x62726272627262726262627262726272627262726272627262726262727262627262726272726262726272, '2020-06-22 09:14:44'),
(17, 1, 1, 0x7177656571776577657765777165657765716571, '2020-06-22 17:00:07');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lik` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `idUser`, `title`, `post`, `time`, `lik`) VALUES
(1, 1, 'some test update', 'some update', '2020-06-30 21:00:00', 0),
(2, 1, 'title2', 'post', '2020-05-03 21:00:00', 0),
(3, 1, 'title', 'bdfdshfhdskhkfjhjdshfjhdsjfkhdshfhdskhfkdshfcnvnzxcmznx,cnxz,ncnzxnc,zx\r\n                                                                             djfkdshjkfkhdsjkfhhdsjhfjsdhfhdshjfhjhdsfjkdshfjhkjshdhdksjhfn,cnz,ncm,nzmx,', '2020-03-02 22:00:00', 0),
(4, 1, 'testadd', 'somepost', '2020-06-14 13:34:48', 0),
(5, 1, 'testadd2', 'some post', '2020-06-14 14:14:55', 0),
(6, 1, 'test add hz', 'Сан (The Sun в переводе с англ. — «Солнце») — нью-йоркская ежедневная газета, издававшаяся с 1833 года по 1950-й. Была задумана как серьёзное новостное издание большого формата, наподобие уже действующих успешных газет города The New York Times и New York Herald Tribune.\r\n\r\nПервое время The Sun позиционировала себя утренней газетой, в частности слоган ассоциировал издание с Солнцем, которое «светит для всех», при этом в качестве основателя и идеолога выступил нью-йоркский журналист Бенджамин Дэй. В 1887 году появилась вечерняя версия газеты, а в 1916-м оба варианта приобрёл предприниматель Фрэнк Манси, присоединив вечернее издание к своей New York Press, а утреннее — к New York Herald, образовав The Sun and New York Herald. Однако в 1920 году Манси снова их разделил, ликвидировав вечерний Evening Sun и перенеся на вечернее время оригинальный The Sun. В таком формате газета существовала вплоть до 4 января 1950 года, когда её поглотило издание New York World-Telegram, сменившее название на New York World-Telegram and Sun. В свою очередь этот вестник просуществовал до 1966 года, после чего стал частью газеты New York World Journal Tribune, основанной за год до этого[2].\r\n\r\nОсобую известность The Sun получила в 1835 году благодаря «Большому лунному надувательству», серии из шести очерков, об открытии жизни и цивилизации на Луне. Это открытие было ложно приписано Джону Гершелю, который являлся, возможно, одним из самых знаменитых астрономов своего времени, и вызвало большой общественный резонанс. В 1844 году было опубликовано знаменитое «Воздушное надувательство», статья Эдгара Аллана По о перелёте через Атлантику на воздушном шаре.\r\n\r\nВ 1949 году газета была удостоена Пулитцеровской премии за лучший местный репортаж, за новаторские статьи Малькольма Джонсона о городской преступности[3].\r\n\r\nПримечания', '2020-06-14 14:30:22', 0),
(7, 3, 'test see other user', 'yafhdsjfhdsjfsjdkfhskfhsjfhjfhj  h hfhd f df fhdsf df dsf fjk sdfjk hdsf hfjd  hfdskfh dsfhjk kdsf s', '2020-06-16 17:33:35', 6),
(8, 3, 'test my post', 'my post addasdkdsfdjdskljdfjdsfljdlfjdlkfslfjsldf fjdfjdlfjdfjdfjslfjds', '2020-06-16 18:25:16', 0),
(9, 4, 'post  update', 'post  update', '2020-06-16 18:31:35', 17),
(10, 5, 'br', 'BR', '2020-06-22 09:17:37', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `signup`
--

INSERT INTO `signup` (`id`, `name`, `pass`, `image`) VALUES
(1, 'Valera', '111', 'image/portal_glow_bright_148108_1920x1080.jpg'),
(2, '', 'test', ''),
(3, 'test', 'test', ''),
(4, 'Vital', '111', 'image/sunset_clouds_sky_162370_3840x2160.jpg'),
(5, 'vv', '1', 'image/treugolnik_perevernutyy_chernyy_fon_92770_1920x1080.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpost` (`idpost`),
  ADD KEY `iduser` (`iduser`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Индексы таблицы `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `coments`
--
ALTER TABLE `coments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `coments`
--
ALTER TABLE `coments`
  ADD CONSTRAINT `coments_ibfk_1` FOREIGN KEY (`idpost`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `coments_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `signup` (`id`);

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `signup` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

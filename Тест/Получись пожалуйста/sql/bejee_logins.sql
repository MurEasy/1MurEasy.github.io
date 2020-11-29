
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `token` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `logins`
--

INSERT INTO `logins` (`id`, `token`, `userid`) VALUES
(3, 'fe19c8fee637a38fe3250850a4f0215674434fd2b24c0f850b6840006f30edaa', 15),
(4, '28d3f7768b351b98a733f6212e48ba902575cdc9297306270a9f3a5941e72e58', 15),
(5, '9895bdf619a2311e84fb6103822bd3dab91af3f4b3863ee8dc391a2f5a1bec9d', 15),
(6, '0b5a9740ead280f8b56bb0a18ecfbbcb04f5899f7f18343fbed2f74064293549', 15),
(7, '3762263ad703468bb98eebac8c8d1686ef21099a34c6dad29fbdf07508ccaa85', 15);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `beejee_logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `beejee_logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

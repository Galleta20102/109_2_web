-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-06-17 14:29:35
-- 伺服器版本： 10.4.19-MariaDB
-- PHP 版本： 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `teadata`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'wind9051', 'wind900501', 'WindOuO');

-- --------------------------------------------------------

--
-- 資料表結構 `favorite`
--

CREATE TABLE `favorite` (
  `user` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `img_path` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `score` double NOT NULL,
  `cafe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `favorite`
--

INSERT INTO `favorite` (`user`, `name`, `phone`, `img_path`, `id`, `section`, `score`, `cafe`) VALUES
(18, '青立方 Greenery Cube Café', '+886222178768', '../img/cafe/青立方.png', 21, 1, 4.1, 6),
(1, '二會咖啡廳', '+886225221213', '../img/cafe/二會.png', 22, 1, 4.5, 3);

-- --------------------------------------------------------

--
-- 資料表結構 `store`
--

CREATE TABLE `store` (
  `name` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `score` double NOT NULL,
  `output` tinyint(1) NOT NULL,
  `time` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `map` varchar(1000) NOT NULL,
  `section` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `store`
--

INSERT INTO `store` (`name`, `img_path`, `score`, `output`, `time`, `id`, `address`, `phone`, `map`, `section`) VALUES
('C25度咖啡館', '../img/cafe/C25.webp', 4.3, 1, '週一 - 週日 10:00 - 18:00', 1, '106台北市大安區安和路一段21巷23號1樓', '+886227818902', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.838620137021!2d121.54934181509043!3d25.039550183969737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abcf790ee9c9%3A0x6b24599977067313!2zQzI15bqm5ZKW5ZWh6aSoIHzmnbHljYDkuI3pmZDmmYLlkpbllaHlu7N8IOW_oOWtneaVpuWMluermXwg55Sf5pel5oW255Sf6IGa6aSQIHwg576p5aSn5Yip6bq1576O6aOfIHw!5e0!3m2!1szh-TW!2stw!4v1623785359942!5m2!1szh-TW!2stw', 1),
('CHIT CHAT Cafe', '../img/cafe/CHIT.png', 4.8, 1, '週一 - 週日 10:00 - 18:00', 2, '105台北市松山區南京東路五段38號1樓', '+886227420338', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.493904936325!2d121.55728701509065!3d25.051243683964262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abd70f9727fb%3A0xc87abc939ddf7dec!2sCHIT%20CHAT%20Cafe!5e0!3m2!1szh-TW!2stw!4v1623785764500!5m2!1szh-TW!2stw', 1),
('二會咖啡廳', '../img/cafe/二會.png', 4.5, 1, '週二 周三公休 13:00 - 20:00', 3, '10444台北市中山區華陰街21號2樓', '+886225221213', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14459.35450889563!2d121.54277573200841!3d25.039549943514388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a988845097ef%3A0x6583b233cbca644d!2z5LqM5pyD5ZKW5ZWh5buz!5e0!3m2!1szh-TW!2stw!4v1623786095879!5m2!1szh-TW!2stw', 1),
('Merci vielle', '../img/cafe/Merci Vielle.png', 4.5, 1, '週一 - 週日\r\n13:00 - 22:00', 4, '220新北市板橋區府中路50號2樓', '+886289653906', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57851.50727151102!2d121.4571433!3d25.0096556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a81d5318045f%3A0x3a4930dd7b47003c!2sMerci%20vielle!5e0!3m2!1szh-TW!2stw!4v1623786524687!5m2!1szh-TW!2stw', 1),
('BooksCoffee 布可咖啡', '../img/cafe/Book.png', 4.4, 1, '周四公休\r\n10:00 - 19:00', 5, '220新北市板橋區光武街48巷49號', '+886988224960', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.2032673278522!2d121.46616631509013!3d25.02717498397549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a81557d3c409%3A0x3ee65b350b9b5ebf!2zQm9vaydzIENvZmZlZSDluIPlj6_lkpbllaE!5e0!3m2!1szh-TW!2stw!4v1623932514823!5m2!1szh-TW!2stw', 1),
('青立方 Greenery Cube Café', '../img/cafe/青立方.png', 4.1, 1, '週一 - 週日\r\n10:30 - 18:00', 6, '231新北市新店區銀河路98號', '+886222178768', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65369183.36050215!2d121.58111249999997!3d0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346801b596bf126f%3A0x8b2de278f3bdf030!2z6Z2S56uL5pa5IEdyZWVuZXJ5IEN1YmUgQ2Fmw6k!5e0!3m2!1szh-TW!2stw!4v1623786961208!5m2!1szh-TW!2stw', 1),

('Cheers Cafe 騎士咖啡', '../img/cafe/騎士.png', 4.7, 1, '週一 週二公休 13:00 - 22:00', 19, '408台中市南屯區環中路四段303號', '+886988537211', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116509.77988948846!2d120.62334159999999!3d24.1390745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693dd9c5fe3ca3%3A0x416d4f508b1256b9!2zQ2hlZXJzIENhZmUg6aiO5aOr5ZKW5ZWh!5e0!3m2!1szh-TW!2stw!4v1623935602943!5m2!1szh-TW!2stw', 2),
('Raven Coffee', '../img/cafe/Raven.png', 4.5, 1, '週一 - 週日 09:00 - 19:00', 20, '407台中市西屯區河南路二段301巷58號', '+886424514848', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119275069.33963947!2d120.6481519!3d24.172215100000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691620cf492de9%3A0x7a073821c6b738b6!2zUmF2ZW4gQ29mZmVl772c5Y-w5Lit5ZKW5ZWh5buz!5e0!3m2!1szh-TW!2stw!4v1623935712864!5m2!1szh-TW!2stw', 2),
('窩柢咖啡', '../img/cafe/窩.png', 4.6, 1, '週一 - 週日 12:00 - 21:00', 21, '407台中市西屯區杏林路27號', '+886427086808', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119279318.70933416!2d120.6420476!3d24.167666800000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693df4b8f297c5%3A0xb51d277122707d04!2z56qp5p-i5ZKW5ZWh!5e0!3m2!1szh-TW!2stw!4v1623935828736!5m2!1szh-TW!2stw', 2),
('coffee stopover', '../img/cafe/stopover.png', 4.8, 1, '週日公休 11:00 - 20:00', 22, '403台中市西區民權路217巷24號', '+886423055388', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119297810.21173318!2d120.6679919!3d24.147865100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d75a52cb74b%3A0xc4834a1007ee0690!2scoffee%20stopover!5e0!3m2!1szh-TW!2stw!4v1623935949120!5m2!1szh-TW!2stw', 2),
('Frini Café', '../img/cafe/Pluto.png', 4.9, 1, '週二 週三公休 13:00 - 22:00', 23, '407台中市西屯區台灣大道四段776號', '+886975342975', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119267191.68181068!2d120.620533!3d24.1806448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691600a34ec4a5%3A0x37a95868cbc2235e!2sFrini%20Caf%C3%A9!5e0!3m2!1szh-TW!2stw!4v1623936051712!5m2!1szh-TW!2stw', 2),
('Pluto Espressoria', '../img/cafe/往前.png', 4.1, 1, '週一 - 週日公休 13:00 - 22:00', 24, '408台中市南屯區大墩十一街396號', '+886422512691', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119296799.42445248!2d120.6423628!3d24.1489479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693dc00d4d0fbd%3A0x1b10b4f430e1d278!2sPluto%20Espressoria!5e0!3m2!1szh-TW!2stw!4v1623936223295!5m2!1szh-TW!2stw', 2),

('凹凸咖啡館', '../img/cafe/凹凸.png', 4.2, 1, '週二公休 10:00 - 18:00', 7, '64051雲林縣斗六市雲中街9巷12號', '+88655339610', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d935191.5121701151!2d120.53976670000002!3d23.708413999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346ec83b4c71931f%3A0xd25795a2cfc2900b!2z5Ye55Ye45ZKW5ZWh6aSo!5e0!3m2!1szh-TW!2stw!4v1623933333089!5m2!1szh-TW!2stw', 3),
('後院 houyuan', '../img/cafe/後院.png', 4.3, 1, '週三公休 10:30 - 18:00 19:30 - 01:00', 8, '632雲林縣虎尾鎮忠孝路2號', 'null', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d935214.5243288286!2d120.4310472!3d23.705203299999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346eb0aa1691994b%3A0x485492e3353e846f!2z5b6M6ZmiIGhvdXl1YW4!5e0!3m2!1szh-TW!2stw!4v1623933585411!5m2!1szh-TW!2stw', 3),
('Maimenla Café', '../img/cafe/maimenla.png', 4.8, 1, '週二 週三公休 14:00 - 23:00', 9, '640雲林縣斗六市警民街38-1號', '+886938300949', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119700112.1833156!2d120.5529608!3d23.7132108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346ec849bb271be5%3A0x1aa5b086088d6a5f!2sMaimenla%20Caf%C3%A9!5e0!3m2!1szh-TW!2stw!4v1623933775177!5m2!1szh-TW!2stw', 3),
('Mr.Lobby Coffee', '../img/cafe/Lobby.png', 4.8, 1, '週一公休 13:00 - 22:00', 10, '640雲林縣斗六市府前街117號', '+886916168989', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119707328.84857528!2d120.54224479999998!3d23.705345299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346ec83b4a290409%3A0xbc5de20ba439a076!2sMr.%20Lobby%20Coffee%20Project!5e0!3m2!1szh-TW!2stw!4v1623933922137!5m2!1szh-TW!2stw', 3),
('騷咖啡', '../img/cafe/騷.png', 4.5, 1, '週一 - 週日 12:00 - 00:00', 11, '640雲林縣斗六市文化路15號', '+88655370438', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59851068.72231061!2d120.5439441!3d23.7110037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346ec83a12864ae1%3A0x87b26e7adaaad039!2z6ai35ZKW5ZWh!5e0!3m2!1szh-TW!2stw!4v1623934392721!5m2!1szh-TW!2stw', 3),
('兔子の窩 Coffee House', '../img/cafe/兔子.png', 4.6, 1, '週二公休 14:00 - 21:00', 12, '632雲林縣虎尾鎮新興路23號', '+886979019229', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119705092.93739851!2d120.43543950000002!3d23.7077825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346eb0ab4e1e3cbf%3A0x6f57ef4e84e4c5ee!2z5YWU5a2Q44Gu56qpIENvZmZlZSBIb3VzZQ!5e0!3m2!1szh-TW!2stw!4v1623934576559!5m2!1szh-TW!2stw', 3),

('往前咖啡店 Forward Coffee', '../img/cafe/往前.png', 4.5, 1, '週二 週三公休 13:00 - 22:00', 13, '600嘉義市東區興中街203號', '+88652786920', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58549.497962684545!2d120.44974979999999!3d23.484129499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e9432e6b4a153%3A0xed63b4573587582a!2z5b6A5YmN5ZKW5ZWh5bqXIEZvcndhcmQgQ29mZmVl!5e0!3m2!1szh-TW!2stw!4v1623934759808!5m2!1szh-TW!2stw', 3),
('木更 MUGENERATION', '../img/cafe/木更.png', 4.6, 1, '週三 週四公休 10:00 - 18:00', 14, '600嘉義市東區成仁街189號', '+88652232288', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58551.09310435199!2d120.45205689999999!3d23.4805365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e94368ad752a1%3A0x44af0f6b62ae71a1!2z5pyo5pu0IE1VR0VORVJBVElPTg!5e0!3m2!1szh-TW!2stw!4v1623934881101!5m2!1szh-TW!2stw', 3),
('那個那個咖啡', '../img/cafe/那個.png', 3.9, 1, '週一 - 週日公休 08:00 - 16:00', 15, '600嘉義市西區中正路692號', '+88652167858', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58551.95952537638!2d120.4431525!3d23.4785847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e94338c0b6c97%3A0x9fb5532af8486039!2z6YKj5YCL6YKj5YCL5ZKW5ZWh!5e0!3m2!1szh-TW!2stw!4v1623935036394!5m2!1szh-TW!2stw', 3),
('霜空咖啡', '../img/cafe/霜空.png', 4.3, 1, '週三 週四公休 13:00 - 20:00', 16, '600嘉義市西區國華街132號', '+88652255507', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58552.27153216936!2d120.4137163791016!3d23.477881800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e955a183f2a91%3A0x4f3244281f5ee92e!2z6Zyc56m65ZKW5ZWh77yI5q-P5pyI54ef5qWt5pmC6ZaT6KuL5Y-D6ICD57KJ57Wy5bCI6aCB77yJ!5e0!3m2!1szh-TW!2stw!4v1623935205000!5m2!1szh-TW!2stw', 3),
('玖CAFÉ', '../img/cafe/玖.png', 4.4, 1, '週一 -週日公休 13:00 - 19:00', 17, '600嘉義市東區興業東路387號', '+88652162626', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58555.89010483587!2d120.458537!3d23.4697283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e9438838d001b%3A0x91ff993ffeee3f69!2z546WQ0FGw4k!5e0!3m2!1szh-TW!2stw!4v1623935322331!5m2!1szh-TW!2stw', 3),
('Daisy的雜貨店', '../img/cafe/Daisy.png', 4.5, 1, '週四公休 13:00 - 22:00', 18, '600嘉義市東區維新路73號', '+88652770893', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58550.60734971651!2d120.45879099999999!3d23.4816307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e95ca88b4e6f7%3A0xf481c57c8f57b9aa!2zRGFpc3nnmoTpm5zosqjlupc!5e0!3m2!1szh-TW!2stw!4v1623935452181!5m2!1szh-TW!2stw', 3);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

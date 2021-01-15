<?php

use App\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement(
            "INSERT INTO `articles` (`id`, `title`, `slug`, `manufacturer`, `description`, `code`, `category_id`, `sale`, `active`, `price`, `discount`, `amount`, `tax`, `image`, `image1`, `image2`, `image3`, `image4`, `created_at`, `updated_at`, `subcat_id`) VALUES
            (1, 'Asus laptop X453MA-WX417 Promenjen', REPLACE(title,' ','-'), 'ASUS', '<h3>Asus laptop X453MA-WX417 Ekran 14\" LED Slim HD (1366x768) 16:9</h3>\r\n<p>Glare Procesor Intel Dual-Core Celeron N2840 (do 2.58GHz, 1MB cache)<br /> Grafička karta Integrisana Memorija 4GB DDR3 DRAM<br /> Hard disk 1 SATA 500GB, 5400rpm, 2.5\" HDD<br /> Hard disk 2 Nema<br /> Optički uređaj [SATA] 8X Super Multi, Double Layer<br /> Wi-Fi Wireless 802.11b/g/n<br /> Bluetooth Bluetooth 4.0 (Single band)<br /> Mrežna karta 10/100 Mbps<br /> Web kamera VGA<br /> Mikrofon Da<br /> Zvučnici Mono<br /> Zvučna karta Sonic Master<br /> HDMI 1 Display port Nema VGA 1<br /> USB 2.0 1 USB 3.0 1<br /> Čitač memorijskih kartica SD/MMC<br /> čitač kartica<br /> Tastatura Pločasta tastatura<br /> Baterija 30Wh, 2-cell Li-ion Polymer<br /> Dimenzije 34.8 x 2.53 x 24.2 cm<br /> Težina 2 kg<br /> Boja Crna<br /> Materijal kući&scaron;ta Plastika<br /> Operativni sistem Linpus Lite</p>', '1', 1, 0, 1, 32500.00, 5.00, 0.00, 'S1', 'asus.jpg', 'asus.jpg', 'as2.jpg', 'as3.jpg', 'as4.png', '2016-12-31 23:00:00', '2017-04-03 16:44:27', 5),
            (2, 'Digitalna Kamera Sony HDR - CX240EB, Full HD kamkorder',REPLACE(title,' ','-'), 'SONY', '<p>Snimajte život ba&scaron; onako kako ga vidite. Handycam&reg; kamkorder CX240E ima snažni BIONZ X procesor slike, EXMOR R&reg; CMOS senzor i &scaron;irokougaoni ZEISS objektiv. BIONZ X procesor je brz, snažan i smanjuje nivo &scaron;uma na čitavoj slici. Funkcioni&scaron;e utandemu sa detaljnim EXMOR R&reg; CMOS senzorom radi verne reprodukcije svakog aspekta scene uz precizne i prirodne detalje. Bez obzira da li snimate izbliza ili sa razdaljine, zabeležite scenu uz izvanrednu preciznost i jasnoću. &Scaron;irokougaoni Vario-Tessar&reg; objektiv od 29,8 mm kompanije ZEISS daje kompletnu sliku, ba&scaron; onako kako je vidite golim okom. Baterija tipa X omogućava vam da uživate u 130 minuta neprekidnog snimanja. To znači da nikada nećete propustiti trenutak.</p>\r\n\r\n<p><strong>Boja&nbsp;</strong>Crna</p>\r\n\r\n<p><strong>Rezolucija </strong>9.2Mpix</p>\r\n\r\n<p><strong>Zoom </strong>Optički 27x, Clear Image Zoom 54x, digitalni 320x</p>\r\n\r\n<p><strong>LCD ekran&nbsp;</strong>2.7&quot; (6.7cm)</p>\r\n\r\n<p><strong>Tip senzora&nbsp;</strong>1/5.8&quot; Exmor R CMOS sa pozadinskim osvetljenjem</p>\r\n\r\n<p><strong>Mediji </strong>Memorijske kartice</p>\r\n\r\n<p><strong>Podržane kartice&nbsp;</strong>Memory Stick Micro, Micro SD/SDHC/SDXC (klasa 4 ili vi&scaron;e)</p>\r\n\r\n<p><strong>Povezivanje </strong>USB, kompozitni izlaz, HDMI izlaz</p>\r\n\r\n<p><strong>Napajanje </strong>Punjiva baterija NP-BX1</p>\r\n\r\n<p><strong>Ostalo </strong>Carl Zeiss Vario-Tessar &scaron;irokougaoni objektiv, Electrical SteadyShot stabiizacija slike, detekcija lica, integrisani mikrofon i zvučnik</p>\r\n\r\n<p><strong>Sadržaj pakovanja </strong>HDR-CX240EB, AC adapter, USB kabl, mikro HDMI kabl</p>\r\n', '2', 1, 0, 1, 23490.00, 5.00, 0.00, 'S1', 'camera1.jpg', 'camera2.jpg', 'camera3.jpg', 'camera4.jpg', 'camera5.jpg', '2016-12-31 23:00:00', '2016-12-31 23:00:00', 6),
            (3, 'Samsung Galaxy S6',REPLACE(title,' ','-'), 'SAMSUNG', '<p><strong>OSNOVNE INFORMACIJE</strong></p>\r\n<p>Operativni sistem<br /> Android OS, 5.0 (Lollipop)</p>\r\n<p>Dimenzije<br /> 143.4 x 70.5 x 6.8mm</p>\r\n<p>Težina<br /> 138g</p>\r\n<p>Tip baterije<br /> 2550 mAh</p>\r\n<p>Procesor<br /> Quad 2.1GHz + Quad 1.5Ghz, procesor aplikacija od osam jezgra</p>\r\n<p><strong>EKRAN</strong></p>\r\n<p>Veličina<br /> 5.1&rdquo; Quad HD Super AMOLED</p>\r\n<p>Rezolucija<br /> 2560 x 1440</p>\r\n<p>KAMERA<br /> Prednja, rezolucija&nbsp;5 MP</p>\r\n<p>Karakteristike<br /> LED flash, Quick Launch, Auto Real-time HDR, Low Light Video (Front &amp; Rear), High Clear Zoom, White Balance, Virtual Shot, Slow Motion, Fast Motion</p>\r\n<p>Zadnja, rezolucija&nbsp;16 MP OIS</p>\r\n<p><strong>MEMORIJA</strong></p>\r\n<p>Interna<br /> 32GB, 3GB RAM LPDDR4</p>\r\n<p>Eksterna<br /> Ne</p>', '3', 2, 0, 1, 65750.00, 0.00, 0.00, 'S1', '1.png', '2.jpg', '3.jpg', '4.png', '5.png', '2016-12-31 23:00:00', '2017-03-13 13:12:41', 3),
            (4, 'Armani Code for Men',REPLACE(title,' ','-'), 'ARMANI', '<p>Armani Code muski parfem. Nesvakidasnja ponuda!</p>', '4', 4, 0, 1, 7500.00, 10.00, 0.00, 'S1', '11.jpg', '22.jpg', '33.jpg', '44.jpg', '55.jpg', '2016-12-31 23:00:00', '2017-03-26 15:41:19', 7),
            (5, 'Bračni krevet BANANA',REPLACE(title,' ','-'), 'Forma Ideale', '<p>Model bračnog kreveta HELENA kompatibilan je sa du&scaron;ekom dimenzija 200 x 160 cm. Ovaj model bračnog kreveta, u tri kombinacije dezena, zajedno sa garderoberom i noćnim ormarićima, čini kompoziciju spavaće sobe. Kombinacija dezena bračnog kreveta HELENA bira se pri montaži. * Napomena: cena je bez poda i du&scaron;eka</p>', '5', 7, 0, 1, 12300.00, 40.00, 0.00, 'S1', '111.jpg', '222.jpg', '333.jpg', '444.jpg', '555.png', '2016-12-31 23:00:00', '2017-03-13 13:28:34', 19),
            (6, 'Ris papir (A4 Copy paper)',REPLACE(title,' ','-'), 'XEROX', '<p>Cena je za jedno pakovanje od 500 komada.</p>', '6', 5, 0, 1, 450.00, 0.00, 0.00, 'S1', 'papir.jpg', 'papir.jpg', '', '', '', '2016-12-31 23:00:00', '2017-03-13 13:28:45', 18),
            (7, 'Starfire 165/70 R14 81T WT200 26760 SOME DUMMY ADDED text',REPLACE(title,' ','-'), 'Starfire', '', '7', 3, 0, 1, 3590.00, 0.00, 0.00, 'S1', '954150.jpg', '954150.jpg', 'kleber-hydraxer.jpg', '952808.jpg', NULL, '2016-12-31 23:00:00', '2017-03-13 13:25:31', 9),
            (8, 'Kutija za alat',REPLACE(title,' ','-'), 'PATROL', '<p><em><strong>Karakteristike:&nbsp;</strong></em><br /> * Duzina &nbsp; - &nbsp;470mm<br /> * &Scaron;irina &nbsp; - &nbsp;220mm<br /> * Visina &nbsp; - &nbsp;250&nbsp;&nbsp;</p>', '8', 7, 0, 1, 1499.99, 0.00, 0.00, 'S1', 'kutija-za-alat-hd-trofy-patrol-pattr2-362.jpg', 'kutija-za-alat-hd-trofy-patrol-pattr2-362.jpg', NULL, NULL, NULL, '2016-12-31 23:00:00', '2017-03-13 13:26:37', 8),
            (9, 'Digitalna Kamera Canon Legria HF-G25',REPLACE(title,' ','-'), 'Canon', '<p>Phasellus in quam dui. Nunc ornare, tellus rutrum porttitor imperdiet, dui leo molestie nisl, sit amet dignissim nibh magna pharetra quam. Nunc ultrices pellentesque massa, ac adipiscing dui rutrum id. In cursus augue non erat faucibus eu condimentum dolor molestie.</p>', '9', 10, 0, 1, 110490.00, 0.00, 0.00, 'S1', '1178312-1.jpg', '1178312.jpg', '1178312-2.jpg', '1178312-3.jpg', 'cam55.jpg', '2016-12-31 23:00:00', '2017-03-13 13:27:13', 6),
            (25, 'Microsoft XBOX One 500GB + Kinect + Diablo 3 UEEr',REPLACE(title,' ','-'), '', '<p>Tip: Xbox One Procesor: 8 Core AMD custom CPU Frequency: 1.75 GHz Radna memorija: 8GB DDR3 Clock: 2133MHz Bandwidth: 68.26 GB/s + 32MB eSRAM Bandwi... Kapacitet interne memorije: 500GB Mreža: Gigabit Ethernet, WiFi (A/B/G/N dual-band at 2.4ghz and 5ghz) includes WiFi D...1</p>', '32', 11, 0, 1, 88322.00, 0.00, 9.00, 'S1', 'xbox1.jpg', 'xbox2.jpg', '', '', '', '2017-02-06 23:00:00', '2017-03-13 13:33:54', 20),
            (26, 'Sony PlayStation 4, 500GB igre DriveClub/LittleBigPlanet/The Last of US',REPLACE(title,' ','-'), '', 'Tip: PS4\r\nProcesor: x86-64 AMD “Jaguar”, 8 jezgara, MediaCon (pomoćni procesor za zadatke u pozad...\r\nRadna memorija: 8GB GDDR5\r\nKapacitet interne memorije: 500GB\r\nMreža: 802.11 b/g/n, Bluetooth 2.1', '33', 11, 0, 1, 73568.00, 0.00, 4.00, 'S1', 'konzola1.jpg', 'konzola2.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 20),
            (27, 'Sony PlayStation 4, 500GB + igra GTA V',REPLACE(title,' ','-'), '', 'Tip: PS4\r\nProcesor: x86-64 AMD “Jaguar”, 8 jezgara, MediaCon (pomoćni procesor za zadatke u pozad...\r\nRadna memorija: 8GB GDDR5\r\nKapacitet interne memorije: 500GB\r\nMreža: LAN 10/100/1000 base-T, Wi-Fi 802.11 b/g/n, Bluetooth 2.1', '34', 11, 0, 1, 61300.00, 0.00, 8.00, 'S1', 'gta1.jpg', 'gta2.jpg', '', '', '', '2017-02-06 23:00:00', '2017-03-14 15:05:43', 20),
            (28, 'Kontroler Move Motion Navigation za Sony PS3',REPLACE(title,' ','-'), '', '<p>Tip: PlayStation3 Povezivanje: Wireless, USB Broj joypad-a: 2</p>', '35', 11, 0, 0, 1563.00, 0.00, 10.00, 'S1', 'n1.jpg', 'n2.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 20),
            (29, 'Memory card Sony PS Vita 4GB Reta',REPLACE(title,' ','-'), '', 'Tip: Memorijska kartica 4GB za Sony PlayStation Vita konzole\r\n', '36', 11, 0, 1, 2314.00, 0.00, 30.00, 'S1', 'memcard1.jpg', 'memcard2.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 12),
            (37, 'Kontroler Sony DualShock 3 Sixaxis',REPLACE(title,' ','-'), '', '<p>Tip: PlayStation3 Broj joypad-a: 1</p>', '37', 11, 0, 1, 8555.00, 30.00, 3.00, 'S1', 'PlayStation1.png', 'PlayStation2.png', '', '', '', '2017-02-06 23:00:00', '2017-03-26 15:43:08', 11),
            (38, 'Kontroler Sony Playstation 4 DualShock Crni',REPLACE(title,' ','-'), '', 'Tip: Playstation 4 Dual Shock kontroler\r\nPovezivanje: Bluetooth 2.1 + EDR, USB (Micro B), Extension Port, priključak za slušalice', '38', 11, 0, 1, 9788.00, 0.00, 15.00, 'S1', 'kontroler1.jpg', 'kontroler2.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 11),
            (39, 'Kontroler Sony Playstation 4 DualShock Plavi',REPLACE(title,' ','-'), '', 'Tip: Playstation 4 Dual Shock kontroler\r\nPovezivanje: Bluetooth 2.1 + EDR, USB (Micro B), Extension Port, priključak za slušalice', '39', 11, 0, 1, 9688.00, 0.00, 4.00, 'S1', 'joy1.jpg', 'joy2.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 11),
            (40, 'Sony PS4 Camera CUH-ZEY1',REPLACE(title,' ','-'), '', 'Tip: PS4 kamera', '40', 11, 0, 1, 9344.00, 0.00, 7.00, 'S1', 'sony.png', 'sony1.png', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 11),
            (41, 'Kontroler Sony Playstation 4 DualShock Beli',REPLACE(title,' ','-'), '', 'Tip: Playstation 4 Dual Shock kontroler\r\nPovezivanje: Bluetooth 2.1 + EDR, USB (Micro B), Extension Port, priključak za slušalice', '41', 11, 0, 1, 8590.00, 0.00, 6.00, 'S1', 'kontrolerbeli.jpg', 'kontrolerbeli1.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 11),
            (42, 'Kontroler Sony Playstation 4 DualShock Magma Crveni',REPLACE(title,' ','-'), '', 'Tip: Playstation 4 Dual Shock kontroler\r\nPovezivanje: Bluetooth 2.1 + EDR, USB (Micro B), Extension Port, priključak za slušalice', '42', 11, 0, 1, 8590.00, 0.00, 6.00, 'S1', 'kontrolerds1.jpg', 'kontrolerds2.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 11),
            (43, 'Konzola Sony PSP E1004 EUR, Crna + CARS 2',REPLACE(title,' ','-'), '', '<p>Tip: PlayStation Portable Povezivanje: USB 2.0 Prateće pakovanje: Jedna poklon igrica CARS 2</p>', '43', 11, 0, 0, 10110.00, 0.00, 5.00, 'S1', 'jp1.jpg', 'jp2.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 20),
            (44, 'PS4 igra NBA Live 14',REPLACE(title,' ','-'), '', 'Vrsta: Igra za PS4, sportska simulacija', '44', 9, 0, 1, 9299.00, 0.00, 30.00, 'S1', 'PS4NBA.jpg', 'PS4NBA1.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 10),
            (45, 'PS3 Skylanders Trap Team Starter Pack',REPLACE(title,' ','-'), '', 'Napomena: Biće dostupna od 10.10.2014\r\nVrsta: Skylanders figure', '45', 9, 0, 1, 9299.00, 0.00, 12.00, 'S1', 'PN.jpg', 'PN1.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 10),
            (46, 'PS4 Call of Duty Advanced Warfare',REPLACE(title,' ','-'), '', '', '46', 9, 0, 1, 9299.00, 0.00, 25.00, 'S1', 'Call_Of_Duty.jpg', 'Call_Of_Duty1.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 10),
            (47, 'PC Watch Dogs Vigilante Edition',REPLACE(title,' ','-'), '', '', '47', 9, 0, 1, 10990.00, 0.00, 50.00, 'S1', 'watchdogs.jpg', 'watchdogs1.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 10),
            (48, 'XBOX360 Grand Theft Auto V Collectors Edition',REPLACE(title,' ','-'), '', '', '48', 9, 0, 1, 16880.00, 0.00, 13.00, 'S1', 'gta_5.jpg', 'gta_51.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 10),
            (49, 'Televizor TV 80',REPLACE(title,' ','-'), '', '<p>Dijagonala: 80\" (203cm) Ekran: LED LCD Rezolucija: 3840 x 2160 (Ultra HD) Tip Tunera: DVB-T/C/T2/S2 Frekvencija: 800 Hz</p>', '49', 12, 0, 1, 939990.00, 0.00, 2.00, 'S1', 'download.jpg', 'download1.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 13),
            (50, 'Televizor TV 55\" Smart 3D OLED LG 55EC930V,1920x1080(Full HD), WiFi',REPLACE(title,' ','-'), '', 'Dijagonala: 55\" (139cm)\r\nEkran: OLED\r\nRezolucija: 1920x1080\r\nTip Tunera: Analogni TV prijem Da, Digitalni TV prijem (Zemaljski, kablovski, sateli...\r\n3D funkcija: 3D da, 3D Tip (SG/FPR/AR/GPR/Bez stakla) fpr, Podržani formati: S/S...', '50', 12, 0, 1, 359990.00, 0.00, 10.00, 'S1', 'tv.jpg', 'tv1.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 13),
            (52, 'PC Commandos Complete Collection',REPLACE(title,' ','-'), '', '', '51', 9, 0, 1, 990.00, 0.00, 6.00, 'S1', 'commandos.jpg', 'commandos1.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 10),
            (53, 'PS4 The Crew D1 Limited Edition',REPLACE(title,' ','-'), '', '<p>test izmena slike1</p>', '52', 9, 0, 1, 7800.00, 0.00, 10.00, 'S1', 'crew.jpg', 'crew1.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 10),
            (54, 'XBOXONE NBA 2K14',REPLACE(title,' ','-'), '', '', '53', 9, 0, 1, 7999.00, 0.00, 5.00, 'S1', 'nbaxbox.jpg', 'nbaxbox1.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 10),
            (61, 'testjhj',REPLACE(title,' ','-'), '', '<p>setdsgdfg</p>', '54', 8, 0, 1, 1234.00, 0.00, 0.00, 'S1', 'Windows10LoginScreenBackground.jpg', 'Windows10LoginScreenBackground1.jpg', '', '', '', '2017-02-06 23:00:00', '2017-02-06 23:00:00', 17),
            (63, 'KNJIGOVODSTVENE  USLUGE',REPLACE(title,' ','-'), NULL, NULL, '111', 13, 0, 1, 10000.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-10 12:06:56', '2017-03-10 12:06:56', 21),
            (64, 'SLUSALICE  SBCHP250 DSF',REPLACE(title,' ','-'), NULL, NULL, '1110', 1, 0, 0, 200.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-10 12:06:57', '2017-03-10 12:06:57', 16),
            (65, 'ZAKUP POSLOVNOG PROSTORA',REPLACE(title,' ','-'), NULL, NULL, '112', 13, 0, 0, 120000.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-10 12:06:57', '2020-07-29 15:02:52', 21),
            (66, 'UPS MUSTEK 600VA',REPLACE(title,' ','-'), NULL, NULL, '113', 1, 0, 0, 3000.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-10 12:06:57', '2017-03-10 12:06:57', 17),
            (67, 'ZVUCNICI MERCURY 5.1 6200',REPLACE(title,' ','-'), NULL, NULL, '114', 1, 0, 0, 4000.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-10 12:06:57', '2017-03-10 12:06:57', 16),
            (68, 'Mis optiCki beziCni',REPLACE(title,' ','-'), NULL, NULL, '115', 1, 0, 1, 800.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-10 12:06:57', '2017-03-13 16:56:29', 14),
            (69, 'Mikrofon za PC',REPLACE(title,' ','-'), NULL, NULL, '116', 1, 0, 1, 2000.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-10 12:06:57', '2017-03-15 16:26:30', 16),
            (70, 'HDD kuler FULL 1/2',REPLACE(title,' ','-'), NULL, NULL, '117', 1, 0, 1, 2800.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-10 12:06:57', '2017-03-15 16:29:44', 17),
            (71, 'Tastatura DTK bela YU',REPLACE(title,' ','-'), NULL, NULL, '118', 1, 0, 0, 1000.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-10 12:06:57', '2017-03-10 12:06:57', 15),
            (72, 'SLUSALICE SBCHP195 ',REPLACE(title,' ','-'), '', '', '119', 1, 0, 0, 600.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-10 12:06:57', '2017-03-13 13:25:10', 16),
            (466, 'Pretplata Flora Magazin 2-55',REPLACE(title,' ','-'), NULL, 'test napomena i opis', '86018', 7, 0, 0, 750.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (467, 'Pretplata Flora Magazin 3-6',REPLACE(title,' ','-'), NULL, 'napomena 2', '20', 7, 0, 0, 750.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (468, 'Pretplata Magazin 4-7',REPLACE(title,' ','-'), NULL, 'napomena 3', '27', 7, 0, 0, 750.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (469, '18002006-Hladnjak Escort  Iii 1 1 Fiesta Motor Ohv',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '18002006', 7, 0, 0, 5250.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (470, 'Lukovice I Grupe',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149014', 7, 0, 0, 99.00, 0.00, 90.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (471, 'Lukovice Gardening 19 Kom',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149021', 7, 0, 0, 599.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (472, 'Lukovice 100 Kom',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149038', 7, 0, 0, 1499.00, 0.00, 11.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (473, 'Lukovice Iv Grupe',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149045', 7, 0, 0, 99.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (474, 'Perene Maloprodaja  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149052', 7, 0, 0, 130.00, 0.00, 568.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (475, 'Padajuca Viola Žuto-Crvena Cool Wave Red Wing  6 Sad.',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149069', 7, 0, 0, 380.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (476, 'Perena Velika  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149076', 7, 0, 0, 390.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (477, 'Bršljan Mali-Hedera Mix  1Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149106', 7, 0, 0, 349.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (478, 'Solanum Stablašica Plavi-Solanum Pseudo. Mega Ball  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149182', 7, 0, 0, 1190.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (479, '=Padajuca Viola Žuto-Crvena- Cool Wave Red Wing  3 Sad.',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149199', 7, 0, 0, 199.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (480, 'Calluna  Erica  Hebe Mix  1 Sad  P9',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149205', 7, 0, 1, 199.00, 0.00, 149.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 17:10:07', 22),
            (481, 'Evonimus Maloprodaja-Euonimus  Mix  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149212', 7, 0, 0, 390.00, 0.00, 5.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (482, 'Chamaecyparis Obusta Nana Gracilis  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149229', 7, 0, 0, 249.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (483, '**ruža Mikelanðelo -Michelangelo  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149236', 7, 0, 1, 190.00, 0.00, 81.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 17:10:09', 22),
            (484, 'Vres Cinerea-Erica Cinerea  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149243', 7, 0, 0, 179.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (485, 'Gaulterija-Gaultheria Mucronata  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149250', 7, 0, 0, 0.01, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (486, 'Cetinari Mix-Coniferen In Sorten  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149267', 7, 0, 1, 320.00, 0.00, 149.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:59:04', 22),
            (487, 'Lavanda-Lavandula A.dwarf Blue  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149274', 7, 0, 0, 420.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (488, 'Cytisus Apricot Gem  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149281', 7, 0, 0, 449.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (489, 'Hebe Andersonii Variegata  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149298', 7, 0, 0, 329.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (490, 'Lavandula Angustifolia Munstead  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149304', 7, 0, 0, 315.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (491, 'Hebe Addenda In Soorten  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149311', 7, 0, 0, 690.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (492, 'Pernettya Mucronata-Na Stablu  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149328', 7, 0, 0, 670.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (493, 'Metasequoia Glyptostroboides  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149335', 7, 0, 0, 690.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (494, 'Photinia Fraseri Little Red Robin  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149342', 7, 0, 0, 1090.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (495, 'Fotinija Little Red Robin  1Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149359', 7, 0, 0, 890.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (496, 'Orlovi Nokti Crveno Beli- Lonicera Red World  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149366', 7, 0, 0, 590.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (497, 'Puzavice Mix 1819',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149373', 7, 0, 0, 509.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (498, 'Plava Smrca Globosa - Picea Pungens Glauca  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149380', 7, 0, 0, 2390.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (499, 'Paprat Mix    1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149397', 7, 0, 0, 249.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (500, 'Ilex Na Stablu-Ilex Spp  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149403', 7, 0, 0, 2950.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (501, 'Kamelija Šatirana-Camellia Japonica  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149410', 7, 0, 0, 1990.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (502, 'Drvo Žalfije-Vitex Agnus Castus Latifolia  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149427', 7, 0, 0, 1890.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (503, 'Dunjarica Na Štapu-Cotoneaster Spp.  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149434', 7, 0, 0, 1690.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (504, 'Vrba Kuglasta- Salix Integra Hac  1 Sad.',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149441', 7, 0, 0, 1890.00, 0.00, 7.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (505, 'Srebrna Vrba-Salix Helvetica  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149458', 7, 0, 0, 1690.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (506, 'Azaleja Narandžasta-Rhodod.glowing Embers 1Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149465', 7, 0, 0, 590.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (507, 'Cetinari Maloprodaja 90-100 Cm',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149472', 7, 0, 0, 690.00, 0.00, 6.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (508, 'Japanski Javor Mala Princeza- A.little Princess  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149489', 7, 0, 0, 1590.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (509, 'Osmantus Na Stablu- Osmanthus Het. Goshiki  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149496', 7, 0, 0, 1890.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (510, '**ruža Mini Bigudi - Bigoudi  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149502', 7, 0, 1, 190.00, 0.00, 64.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:59:22', 22),
            (511, '**ruža Mini Crvena- Baby Baccara  1Sad.',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149519', 7, 0, 1, 190.00, 0.00, 150.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:59:16', 22),
            (512, 'Crvene Kovrdže- Leucothoe Axilaris  Curly Red  1 Sad.',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149526', 7, 0, 0, 1290.00, 0.00, 1.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (513, 'Lobelia Skarlet- Lobel.speciosa Fan Scarlet  1 Sad',REPLACE(title,' ','-'), NULL, 'Bez opisa ...', '8606104149533', 7, 0, 0, 0.01, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-03-15 16:58:07', '2017-03-15 16:58:07', 22),
            (515, 'Moj novi artikal 2',REPLACE(title,' ','-'), 'Sony', '<p>Jos jedan test sa ispravljenim uploadom slika</p>', '996868', 2, 0, 0, 32000.00, 0.00, 0.00, 'S1', 'asus.jpg', '', '', '', '', '2017-04-01 09:18:29', '2017-04-03 16:43:27', 4),
            (516, 'Moj novi artikal za TV',REPLACE(title,' ','-'), 'VOX', '<p>test opis za tv vox sa kategorijom i podkategorijom</p>', '9857656', 12, 0, 1, 22500.00, 0.00, 0.00, 'S1', 'vox.jpg', 'vox1.png', '', '', '', '2017-04-01 18:25:07', '2017-04-09 14:48:33', 13),
            (517, 'Sony MEX-N4100BT',REPLACE(title,' ','-'), 'Sony', '<p><span style=\"font-weight: bold; color: #3c444d; font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px;\">Car radio SONY MEX-BT N4100BT NFC MP3 USB</span><br style=\"color: #3c444d; font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px;\" /><br style=\"color: #3c444d; font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px;\" /><span style=\"color: #3c444d; font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px;\">- Multimedia car radio MEX-N4100BT more enjoyable way favorite recordings.&nbsp;</span><br style=\"color: #3c444d; font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px;\" /><span style=\"color: #3c444d; font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px;\">- Bluetooth and NFC technologies allow streaming music from selected smartphones.&nbsp;</span><br style=\"color: #3c444d; font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px;\" /><span style=\"color: #3c444d; font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px;\">- The device is also compatible with the technology of Siri Eyes Free iPhone, serving for the safe operation of voice commands.&nbsp;</span><br style=\"color: #3c444d; font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px;\" /><span style=\"color: #3c444d; font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px;\">- The best possible quality music listening and DSEE technologies provide Clearaudio +, and MEGA BASS system enhances the bass line.</span></p>', '55664458', 3, 0, 1, 10320.00, 0.00, 1.00, 'S1', 'sony.jpg', 'sony.jpg', '', '', '', '2017-04-19 13:28:57', '2017-04-23 14:56:27', 43),
            (521, 'Pretplata Flora Magazin 2-5',REPLACE(title,' ','-'), NULL, 'test napomena i opis', '18812998', 0, 0, 0, 750.00, 0.00, 0.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2017-05-10 09:25:59', '2017-05-10 09:25:59', 0),
            (522, 'Asus Laptop X453Ma-Wx417 Promenjen2',REPLACE(title,' ','-'), NULL, '', 'IMP1', 0, 0, 0, 42000.00, 0.00, 10.00, 'S1', NULL, NULL, NULL, NULL, NULL, '2020-07-29 15:01:51', '2020-07-29 15:01:51', 0)"
        );
    }
}

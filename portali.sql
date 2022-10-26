-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 12:43 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portali`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorite`
--

CREATE TABLE `kategorite` (
  `id` int(11) NOT NULL,
  `emri_kategorise` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorite`
--

INSERT INTO `kategorite` (`id`, `emri_kategorise`) VALUES
(2, 'Politike'),
(35, 'Sport'),
(36, 'Teknologji'),
(47, 'Kulturë');

-- --------------------------------------------------------

--
-- Table structure for table `lajmet`
--

CREATE TABLE `lajmet` (
  `lajmetID` int(11) NOT NULL,
  `titulli` varchar(255) NOT NULL,
  `permbajtja` text NOT NULL,
  `imazhi` text NOT NULL,
  `kategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lajmet`
--

INSERT INTO `lajmet` (`lajmetID`, `titulli`, `permbajtja`, `imazhi`, `kategoria`) VALUES
(1, 'Vjen reagimi i Kurtit pas shkarkimit të bordit të AKP’së', 'Kurti thotë se ky është vetëm hapi i parë drejt shuarjes së këtij institucioni,\r\n\r\n“Të mirat vijnë ngadalë, por të këqijat duhen ndalur shpejt. Sot Kuvendi votoi për shkarkimin e bordit të AKP-së, që të ndalet tjetërsimi e zhvatja. Ky është vetëm hapi i parë drejt shuarjes së këtij institucioni, gjë që hap rrugën për themelimin e Fondit Sovran. Si Qeveri, sot po ashtu jemi autorizuar që të propozojmë një bord të ri para Kuvendit, bord i cili do të ketë një mandat të ri, në përputhje me strategjinë zhvillimore të Qeverisë sonë”, ka shkruar ai\r\n\r\nNdryshe 65 deputetë kanë votuar për shkarkimin e bordit të AKP’së, 2 kundër dhe asnjë abstenim.', 'https://reporteri.net/wp-content/uploads/2021/03/kurti1-3.jpg', 2),
(2, 'Lutfi Haziri kërkon nga qytetarët që t’i shmangen kësaj rruge', 'Pas reshjeve të jashtëzakonshme të shiut, kryetari i Komunës së Gjilanit, Lutfi Haziri, ka aktivizuar Shtabin Emergjent, i cili ka dalë menjëherë në terren.\r\n\r\nPër momentin, situatë më e rënduar paraqitet në fshatin Sllubicë dhe Pogragjë, në disa shtëpi të banorëve që jetojnë afër lumit.\r\n\r\nKryetari Haziri ka kërkuar nga qytetarët e asaj pjese që në rast të përkeqësimit të situatës, të largohen përkohësisht nga shtëpitë e tyre, për ta parandaluar më të keqen.\r\n\r\nAktualisht, ekipet e Shtabit Emergjent gjenden në Sllubicë dhe Pogragjë, për t’iu dalë në ndihmë qytetarëve, për ta përballuar situatën pas reshjeve.\r\n\r\nPër çfarëdo problemi eventual, luten qytetarët që t’i kontaktojnë numrat e emergjencave të cilët janë pa pagesë: 112 dhe 193.\r\n\r\n', 'https://gazetainfokus.com/wp-content/uploads/2021/02/lutfi-haziri-1-800x445-1-600x3601-1.jpg', 2),
(15, 'ZYRTARE: Antonio Conte largohet nga Interi', 'Kështu të paktën raporton gazetari i njohur, Fabrizio Romano, i cili ka shkruar se Conte dhe ‘Zikaltërit’ i kanë ndarë rrugët.\r\n\r\nInteri do ti paguaj teknikut italian rreth 7 milion euro për prishje të kontratës, pasi kishte marrëveshje deri në vitin 2022 me pagë prej 13 milionë eurove.\r\n\r\nAntoni Conte dhe klubin nga Milano kanë shkëputur kontratën, pasi Interi pritet ti shes disa nga yjet kryesor të skuadrës për shkak të krizës së madhe financiare.\r\n\r\nConte me Interin është shpallur kampion i Italisë për sezonin 2020/2021.', 'https://icdn.football-espana.net/wp-content/uploads/2020/12/830570-antonio-conte.jpg', 35),
(20, 'Nis peticioni për pranimin e Kosovës në Eurovision, kërkohet mbështetja e qytetarëve', 'RTK për vite me radhë e zhvilloi betejën e vetme me shtetin e Serbisë dhe Rusisë. Pas shumë viteve të përpjekjeve të vazhdueshme së paku ata kanë arritur ta fusim në agjendë ndryshimin e statutit ku do t’i mundësohej RTK-së të ishte pjesë e kësaj organizate dhe me këtë edhe Kosova mund të përfaqësohej në Festivalin të Eurosongut, por gjithçka ka mbetur pezull pasi që në luftën kundër kësaj kërkese nga Kosova u angazhua direkt Qeveria e Serbisë dhe ajo e Rusisë.\r\n\r\nTashmë është marr hapi i radhës dhe këtë e ka bërë Albert Limani. Duke e parë ndikimin pozitiv të peticioneve, Limani ka nisur një të tillë përmes të cilit kërkon pranimin e Kosovës në Eurovision.\r\n\r\nNismëtari i këtij peticioni kërkon mbështetjen e qytetarëve të cilët duke nënshkruar këtë peticion ndihmojnë në arritjen e qëllimit, dërgimit të Kosovës në Eurovision 2022.\r\n\r\n“Eurovisioni mbaroi për këtë vit, por jo edhe angazhimi jonë për ta quar Kosovën vitin e ardhshëm në Itali.\r\n\r\nDuke vlerësuar rëndësinë e zërit të qytetarëve, kërkojmë nga ju që të na mbështesni duke nënshkruar këtë peticion i cili ka për qëllim ta dërgojë Kosovën në Eurovision 2022.\r\n\r\nKosova tashmë është pjesë e organizatave të mëdha dhe është koha që edhe Rrjeti i Transmetuesve Evropian (EBU) t’i hapë dyert për Kosovën (RTK)”, thuhet në njoftim.', 'https://static01.nyt.com/images/2021/05/22/business/22eurovision-finals-blog-winner-sub/22eurovision-finals-blog-scene-wrap-videoSixteenByNine3000.jpg', 47),
(21, 'Dua Lipa nuk ka të ndalur, fiton edhe një çmimin të rëndësishëm', 'Këngëtarja shqiptare me famë botërore, Dua Lipa, prej shumë kohësh qëndron në top listat botërore dhe sukseset e saj nuk kanë të ndalur. Së fundmi këngëtarja ka fituar një çmim të rëndësishëm në “Latin American Music Award” si ‘Favorite Artist-Crossover’.\r\n\r\nDua lajmin e bëri të ditur përmes një postimi në rrjetin social “Instagram”, ku u shpreh tejet e lumur për këtë sukses dhe i falënderoi të gjithë.\r\n\r\nKujtojmë se këngëtarja shqiptare u vlerësua si “mbretëresha e karantinës” pas suksesit që pati me albumin “Future Nostalgia”, i cili u publikua në një kohë që e gjithë bota ishte në izolim total nga pandemia e virusit COVID-19.\r\n\r\n“Future Nostalgia”, shënoi një tjetër sukses duke bërë që të renditet në vendin e parë për sa i përket albumeve më të shitur në Mbretërinë e Bashkuar dhe për vitin 2021 janë shitur plot 68.926 kopje.\r\n\r\nKëtë lajm e bëri të ditur vetë Dua, ku nëpërmjet një postimi në InstaStory ku është shprehur shumë e lumtur për këtë arritje të sajën.', 'https://gazetainfokus.com/wp-content/uploads/2021/04/dua-lipa-600x360-1.jpg', 47),
(22, 'Microsoft mbyll Internet Explorer', 'Gjiganti i programeve amerikane Microsoft njoftoi sot se do të mbyllë Internet Explorer vitin e ardhshëm dhe do të hedh të gjitha hartat në Edge për t’u përpjekur të rrezikojë pozicionin udhëheqës të Google Chrome.\r\n\r\nInternet Explorer u lansua në vitin 1995 dhe ka dominuar tregun e shfletuesve për më shumë se 10 vjet, të paketuara në Windows.\r\n\r\nDy dekada më parë, Microsoft u gjend pas bankës së të akuzuarve për shkak të kësaj pakete, dhe një gjykatës amerikan vendosi që kompania kishte shkelur rregullat e konkurrencës.\r\n\r\nMicrosoft apeloi vendimin, por gjykata e lartë e mbështeti atë dhe kompania vazhdoi të instalonte Internet Explorer në Windows, transmeton Reuters.\r\n\r\nNë fund të viteve 2000, pozicioni i Internet Explorer u kërcënua nga Chrome i Google dhe shfletuesi i Microsoft u bë subjekt i memeve të panumërta që talleshin me ngadalësinë e tij në krahasim me konkurrencën.\r\n\r\nPër t’iu përshtatur konkurrencës, Microsoft prezantoi shfletuesin Edge në vitin 2015, i cili përdor të njëjtën teknologji si Chrome i Google.\r\n\r\nNë prill të këtij viti, Chrome mbajti një pjesë prej 65 për qind të tregut global të shfletuesve, i ndjekur nga Safari i Apple me një pjesëmarrje prej 18 për qind, njoftoi kompania e analizave të internetit Statcounter.\r\n\r\nMicrosoft’s Edge kishte një përqindje tre për qind dhe Internet Explorer u reduktua në një pjesë të vogël të tregut që dikur mbizotëronte.\r\n\r\nMicrosoft tani ka vendosur të hedhë gjithçka në një hartë, të mbyllë Explorer dhe ta zëvendësojë me Edge.\r\n\r\n“Aplikacioni desktop Internet Explorer 11 po del në pension dhe mbështetja do të ndërpritet më 15 qershor 2022 për versione të caktuara të Windows 10″, tha kompania në një postim në blog.', 'https://ichef.bbci.co.uk/news/1024/branded_news/151D8/production/_118588468_sunsetting_internet_explorer.jpg', 36),
(23, 'ZYRTARE: Zidane largohet nga Real Madridi', 'Real Madridi dhe Zinedine Zidane kanë ndarë përfundimisht rrugët për herë të dytë,\r\n\r\nLajmin e ka bërë të ditur vet klubi madrilien me anë të një komunikate të lëshuar.\r\n\r\n“Zidane është njëri prej miteve më të mëdha të Real Madridit dhe legjenda e tij tregon se çka ka bërë ai me klubin tonë si trajner dhe si lojtar. Ai e di se është në zemër të çdo madrileni dhe Real Madridi do të jetë gjithmonë shtëpia e tij”, thuhej në njoftim.\r\n\r\nKujtojmë që ‘Los Blancos’ arritën të fitonin tri herë Ligën e Kampionëve nën urdhërat e teknikut francez.', 'https://thumb.besoccer.com/media/img_news/afp_fr_7c29f4f183c2e4c04b04a16ed434345bf7adb06f.jpg?size=1000x&ext=jpeg', 35),
(24, 'Me shume rreth bendit qe e fitoj eurovisionin', 'nëtarët e bandës së pari u takuan me njëri-tjetrin si studentë të së njëjtës shkollë të mesme në Monteverde , Romë . Ata vendosën të krijonin një bandë në vitin 2016.  Emri i grupit u zgjodh kur u duhej të regjistroheshin për Pulse, një konkurs lokal muzikor për bende në zhvillim.  Ndërsa stuhi mendimesh, De Angelis, e cila është gjysmë daneze, u kërkua nga shokët e saj të grupit të hidhte disa fjalë daneze, dhe ata ranë dakord për Måneskin (\"drita e hënës\"), megjithëse kuptimi i saj nuk lidhet me vetë bandën. Konkursi i Pulsit gjithashtu shënoi një pikë kthese në karrierën e tyre, pasi që atyre iu desh të fillonin të shkruanin këngët e tyre. Konkurrenca i bëri ata të performonin në Felt Music Club & School, dhe ata më vonë vazhduan të fitonin çmimin e parë. [9] [11]\r\n\r\nAta më vonë performuan si autobusë në rrugët e rrethit Colli Portuensi të Romës, si dhe në qendrën historike të Romës, përfshirë në Via del Corso . Një nga koncertet e tyre të para drejtpërdrejtë jashtë qytetit të tyre të lindjes u zhvillua në Faenza , në Takimin 2016 të Etiketave të Pavarura të Regjistrimit. Përafërsisht 30 njerëz morën pjesë në shfaqje. Pas një udhëtimi në Danimarkë, gjatë të cilit grupi gjithashtu performoi disa shfaqje të drejtpërdrejta, Måneskin forcoi kohezionin e tyre dhe filloi të luante së bashku për disa orë në ditë. \r\n\r\nSipas Damiano David , \"grupi është një përkthim i muzikës së së kaluarës në modernitet\". [31] Måneskin janë klasifikuar si një rock pop , [3] [32] rock alternative , [33] dhe band glam rock . [34] Stili i tyre muzikor ndryshoi nga një tingull pop rock me ndikime funk në albumin e parë në studio, [35] në hard rock në albumin e dytë të studios siç shihet në \" Zitti e buoni \". [36] [37] Pamja dhe tingulli i tyre janë krahasuar me muzikën rock të viteve \'70. Anëtarët e grupit përmendin si ndikime Led Zeppelin, Fleetwood Mac , Nirvana , Radiohead , [25] Franz Ferdinand , [38] David Bowie , Gentle Giant , [39] Rolling Stones and the Doors . [31]', 'https://www.leggilo.org/wp-content/uploads/2021/03/maneskin-abiti-sanremo-2021-look-stilista.jpg', 47),
(25, 'Çmimi i Bitcoin vazhdon të bjerë, duke tërhequr me vete kriptovalutat e tjera', 'Bitcoin dhe shumë monedha të tjera ranë pas njoftimit të Biden të premten.\r\n\r\nPasi çmimi i Bitcoin u stabilizua në mbi 40,000 dollarë amerikanë, pati një rënie tjetër. Në mes, ajo arriti një minimum prej 34,285 dollarësh.\r\n\r\nNjë deklaratë nga qeveria kineze ishte ndoshta fajtore për këtë. Sipas kësaj, duhet goditur sjellja e minierave dhe tregtisë së Bitcoin në mënyrë që të zvogëlohet rreziku për mjedisin shoqëror.\r\n\r\nShkalla e Bitcoin tani është përsëri në 38,265 dollarë amerikanë (burimi Coindesk, që nga 22 maj, 10:30).\r\n\r\nNë një krahasim 24 orësh, kjo ende do të thotë një humbje prej 7.16 për qind.\r\n\r\nMonedha të tjera gjithashtu pëlqejnë atë\r\n\r\nShumë monedha të tjera kanë rënë gjithashtu së bashku me Bitcoin. Ethereum aktualisht qëndron në 2,338 dollarë, një humbje prej 12 për qind.\r\n\r\nMe XRP ka edhe një humbje çmimi prej 17 për qind, me Dogecoin ka një humbje prej 10 për qind. Të 3 monedhat duket se po rikuperohen për momentin.\r\n\r\nEkspertët presin që norma e Bitcoin të stabilizohet gjatë fundjavës dhe ndoshta të rikuperohet pak.\r\n\r\nArsyeja për këtë është se qeveritë, kompanitë dhe organizatat e tjera zakonisht nuk botojnë raporte gjatë fundjavave që perceptohen si lajme të këqija nga pronarët e kriptovalutave.', 'https://ichef.bbci.co.uk/news/976/cpsprodpb/A218/production/_118569414_bitcoin2.jpg', 36),
(27, 'Arrijnë në Kosovë mbi 100 mijë vaksina Pfizer', 'Që nga arritja e 24, 000 dozave të para të vaksinës, të cilat u pasuan nga 38, 400 doza që morëm dy javë më parë, dhe 15, 000 doza, që janë dorëzuar deri më tani nga Mekanizmi i Bashkimit Evropian për Ballkani Perëndimor, ekipet e vaksinimit në të gjithë vendin kanë vaksinuar grupet prioritare dhe qytetarët me sëmundje kronike siç përcaktohet në Planin shtetëror të Vaksinimit”, thuhet në komunikatë.\r\n\r\nNga MSH, theksojnë se “Vaksinimi është mjeti thelbësor dhe shpresa më e mirë për t’i dhënë fund pandemisë COVID-19”.\r\n\r\n“100, 620 vaksinat e siguruara përmes COVAX janë një hap i rëndësishëm për të ndjekur planin e vaksinimit me ritme të shpejta dhe pandërprerë, sipas të gjithë parametrave të sigurisë dhe cilësisë”, thuhet tutje në komunikatë.\r\n\r\nMinistria e Shëndetësisë po ashtu shton se pandemia COVID-19 nuk ka mbaruar ende.\r\n\r\n“Në ndërkohë, ne do të vazhdojmë të mbajmë masat e mëposhtme të parandalimit – mbajtjen e maskave, distancën fizike dhe higjienën e mirë për të kufizuar përhapjen e virusit dhe për të kontribuar në parandalimin e humbjeve të jetës dhe komplikimeve serioze të  shëndetit të shkaktuara nga pandemia COVID-19”.', 'https://telegrafi.com/wp-content/uploads/2021/05/190781521_2000689693421941_7466100960278906676_n-780x439.jpg', 2),
(28, 'Një i vdekur, 23 raste të reja dhe 230 të shëruar nga coronavirusi për 24 orë', 'Instituti Kombëtar i Shëndetit Publik bën të ditur se gjatë 24 orëve të fundit, në Laboratorin e Mikrobiologjisë Molekulare në IKShPK dhe laboratorët private me metodën RT-PCR, si dhe laboratorët publike dhe private me metodën RAT, janë testuar gjithsej 2.460 mostra të marra nga ShSKUK dhe gjurmimi i kontakteve të rasteve në terren, prej të cilëve rezultojnë 23 raste pozitive.\r\n\r\nIKSHPK njofton se brenda 24 orëve është raportuar vetëm 1 rast i vdekjes me SARS CoV-2 pozitiv. Rasti i vdekjes është nga komuna: Ferizaj 1 rast (63 vjeç).\r\n\r\n\r\nNumri total i rasteve pozitive është 107.336 raste nga 602.319 persona të dyshimtë në virusin SARS-CoV-2 dhe 2.242 raste të vdekjes.\r\n\r\nGjatë 24 orëve të fundit, janë shëruar 230 pacientë derisa numri i përgjithshëm i të shëruarve deri më sot është gjithsej 102.107 raste, kurse numri i rasteve aktive është 2.987.\r\n\r\nRastet pozitive janë nga komunat: Prishtinë 5 raste, Pejë 3 raste, Ferizaj 2 raste, Leposaviq 2 raste, Vushtrri 2 raste dhe me nga një rast komunat Deçan, Gjakovë, Gjilan, Istog, Klinë, Mitrovicë, Obiliq, Prizren dhe Viti.', 'https://a2news.com/wp-content/uploads/2020/07/Kosove-koronavirus-1100x620.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'ilir.mehmeti', '$2y$10$FUv9MOr7/3GkNKi25KpNju7U6B5yFCGZA64r0THEzqdwk3lkV4E9y'),
(3, 'eron.ismajli', '$2y$10$M1e8Ue97RR0TB0nAj.F1cO.LKDfkoQqFHeU4prJ7KN3i.nujI4xsi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorite`
--
ALTER TABLE `kategorite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lajmet`
--
ALTER TABLE `lajmet`
  ADD PRIMARY KEY (`lajmetID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorite`
--
ALTER TABLE `kategorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `lajmet`
--
ALTER TABLE `lajmet`
  MODIFY `lajmetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

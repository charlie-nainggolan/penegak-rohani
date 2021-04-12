-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2021 at 05:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penegak_rohani`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `asal_gereja` varchar(50) NOT NULL,
  `role` int(1) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `tanggal_bergabung` date NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lagu`
--

CREATE TABLE `lagu` (
  `id_lagu` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `bahasa` varchar(20) NOT NULL,
  `lirik` varchar(1000) NOT NULL,
  `kontributor` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lagu`
--

INSERT INTO `lagu` (`id_lagu`, `judul`, `bahasa`, `lirik`, `kontributor`, `tanggal`) VALUES
(1, 'Tuhan Penolongku', 'Indonesia', 'Tuhan Penolongku pada hari lalu<br>\r\nPengharapan hari datang<br>\r\nPerlindungan dari saat yang jahat<br>\r\nDalam damai kemah Tuhanku<br>\r\n<br>\r\nEngkau menara hidupku<br>\r\nMenara kemenanganku <br>\r\nAwan pada siang api malam hari<br>\r\nSampai akhir perjalananku\r\n<br>\r\nKu tinggal dibawah naungan tahtaMu<br>\r\nLingkupan kemurahanMu<br>\r\nDicukupkan oleh besar kasihMu<br>\r\nDiteguhkan dalam kuasaMu\r\n\r\n', 1, '2021-03-06'),
(2, 'Bangkit hai bangkit', 'Indonesia', 'Bangkit hai bangkit umat<br>\r\nDengar seruan Tuhanmu<br>\r\nBangkit hai bangkit<br>\r\nBerjuang untuk Tuhanmu<br>\r\nBerjalan lurus kedepan<br>\r\nKe arah Roh Tuhan memimpinmu<br>\r\nJangan berbalik ke jalan luas<br>\r\nHidupmu telah dibayar penuh<br>\r\n<br>\r\nBangkitlah dan berbuatlah<br>\r\nB\'ritakan Injil ke ujung dunia<br>\r\nMenyongsong hari yang amat indah<br>\r\nKristus datang dalam kemuliaan<br>\r\n<br>\r\nSeperti pohon aras<br>\r\nBertumbuh mekar dan kuat<br>\r\nSegala badai jaman<br>\r\nTiada mampu menindas<br>\r\nDihempas tidak binasa<br>\r\nDianiaya tidak ditinggal<br>\r\nKekuatanmu melimpah-limpah<br>\r\nYang datang dari Tuhan Allahmu<br>\r\n<br>\r\nJangan tawar hatimu<br>\r\nMenghadap tugas mulia<br>\r\nKenakan jubah jirah<br>\r\nJaminan kemenanganmu<br>\r\nTingkatkan pelayananmu<br>\r\nNyatakan kasih Tuhan Allahmu<br>\r\nBerjalan sambil bergandeng tangan<br>\r\nPanggilan umat disempurnakan', 1, '2021-03-06'),
(5, 'Mari Berjuang', 'Indonesia', 'Mari berjuang bersama kami<br>\r\nHimpunan pilihan Tuhan<br>\r\nMenyanyikan nyanyian nan surga<br>\r\nAgungkan kemuliaannya<br>\r\n<br>\r\nYesus yang pimpin himpunan ini<br>\r\nMemenangkan peperangan<br>\r\nDalam kasihNya kita bekerja<br>\r\nMencari jiwa tersesat<br>\r\nDalam kuasaNya kita bekerja<br>\r\nMembuat kuat dan menang<br>\r\n<br>\r\nBukan pedang yang tajam<br>\r\nDan bukan lembing yang runcing<br>\r\nBukan hikmat jiwa ini<br>\r\nKeperkasaan diri ini<br>\r\n<br>\r\nTetapi oleh Roh Kudus<br>\r\nFirman Tuhan Allah<br>\r\nMari berjuang, mari berjuang<br>\r\nTurut dalam himpunan<br>\r\nMari berjuang, mari berjuang<br>\r\nSebagai laskar Kristus', 1, '2021-03-06'),
(6, 'Puji Hu', 'Indonesia', 'Puji Hu kar\'na baiklah Dia<br>\r\nPuji Hu kar\'na baiklah Dia<br>\r\nPuji Hu kar\'na baiklah Dia<br>\r\nMemuji nama Tuhan<br>\r\n<br>\r\nKar\'na kasihNya, Kar\'na kasihNya<br>\r\nMemuji nama Tuhan<br>\r\nKar\'na kasihNya, Kar\'na kasihNya<br>\r\nMemuji nama Tuhan<br>\r\n<br>\r\nKar\'na kuasaNya, Kar\'na kuasaNya<br>\r\nMemuji nama Tuhan<br>\r\nKar\'na kuasaNya, Kar\'na kuasaNya<br>\r\nMemuji nama Tuhan<br>', 1, '2021-03-06'),
(9, 'Kapan Yesus Kembali', 'Indonesia', 'Kapan Yesus kembali, kapan Yesus kembali<br>\r\nKe dalam dunia ini sungguh tak lama lagi<br>\r\nBetapa senang hatiku kalau sudah bertemu<br>\r\nHatiku sangat rindu pada Yesus Tuhanku', 1, '2021-03-06'),
(10, 'Betapa Hati Rindu (Malungun Do Rohangku)', 'Indonesia', 'Betapa hati rindu<br>\r\nMenunggu hari Tuhan<br>\r\nDatang Yesus Raja yang mulia<br>\r\nGelombang kehidupan<br>\r\nMenggetarkan hidupku<br>\r\nKuatkan imanku ya Tuhan<br>\r\n<br>\r\nBila kuhidup sendiri<br>\r\nKuingat salibMu<br>\r\nKuingat bilurMu ya Tuhanku<br>\r\nBila kuhidup sendiri<br>\r\nKuucapkan syukurku<br>\r\nKunaikkan mazmur bagiMu<br>\r\n<br>\r\nSatukanlah hidupku, kepadaMu ya Tuhan<br>\r\nAgar ku dapat hidup yang kekal<br>\r\nEngkau tempat berlindung<br>\r\nDalam kesusahanku<br>\r\nSegarkan jiwaku ya Bapa ku', 1, '2021-03-06'),
(11, 'Sai Na Malungun Do Rohangku', 'Tapanuli', 'Sai na malungun do rohangku<br>\r\nDi sambulonhu na di ginjang<br>\r\nDisi tarbaen pajumpang au<br>\r\nDohot sude hina holongan<br>\r\nMarsonang-sonang ma nasida<br>\r\nSude naung sahat ro tusi<br>\r\n<br>\r\nO sambulonhu sambulonhu<br>\r\nHo ma tongtong huhasihol i<br>\r\n<br>\r\nNang hasangapon hamoraon<br>\r\nNang gabe pe di hajolmaon<br>\r\nTung na so boi do mangalehon<br>\r\nDi manang ise hasonangan<br>\r\nAi silang ni Tuhan i do<br>\r\nDalanhu tu sambulon i<br>\r\n<br>\r\nGok parungkilon do rohangku<br>\r\nPaet nang parniahapanhu<br>\r\nPortibion tundalhononhu<br>\r\nNa so boi hasonanganhu<br>\r\nO Jesus Sipangolu au<br>\r\nGomos ma tiop tanganhi<br>\r\n<br>\r\nNa bobonosan do rohangku<br>\r\nPaima-ima Ho Tuhanhu<br>\r\nHape matua laos so ro Ho rasirasa sadarion<br>\r\nSai tatap ma hami anakkonmon<br>\r\nNa tumaon na porsuk on', 1, '2021-03-06'),
(12, 'Di Na Mardalan Hita', 'Pakpak', 'Mula mardalan hita mi kesenangan i<br>\r\nBue kalon mengambat idalan si mahal en<br>\r\nI baing mo gegohna mengambat aku en<br>\r\nIdok mo ne sondat laos mi surgo i<br>\r\n<br>\r\nSai marlolo ate aku laus mardalan<br>\r\nMendapetken Jesus i<br>\r\nAi teridah ibelengku tanda kenggeh ken i<br>\r\n<br>\r\nLam mergogoh na jèlma mengelai i<br>\r\nNggo ngo lam mergegohna aku mi surgo i<br>\r\nSekejap nai dapetmo kesenangan i<br>\r\n<br>\r\nKarina kene kaltuku merlojang mo misi<br>\r\nSai didapetkan Tuhan mi kesenangan i<br>\r\nAi lembong pertangisan ngo tanoh mo misi<br>\r\nI surgo kesenangan merlolo ate mo', 1, '2021-03-06'),
(13, 'Miftabu Tafasindro', 'Nias', 'Miftabu tafasindro sa\'ae ita<br>\r\nBa halówó Fendrakose si no so<br>\r\nTa\'alui Jerusalema si bohou<br>\r\nNaha So\'ahonoa ni\'aluida<br>\r\n<br>\r\nBa wahasara dódóda tasóndra<br>\r\nNa fanótónada Rófa zo\'aya<br>\r\nDozi sahalöwö bakhö zo\'aya<br>\r\nBa latema dakula fa\'aurira', 1, '2021-03-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `lagu`
--
ALTER TABLE `lagu`
  ADD PRIMARY KEY (`id_lagu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lagu`
--
ALTER TABLE `lagu`
  MODIFY `id_lagu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

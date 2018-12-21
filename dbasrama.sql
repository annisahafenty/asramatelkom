-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 07:52 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbasrama`
--

-- --------------------------------------------------------

--
-- Table structure for table `soal_ei`
--

CREATE TABLE `soal_ei` (
  `id` int(3) NOT NULL,
  `soal_e` varchar(500) NOT NULL,
  `soal_i` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_ei`
--

INSERT INTO `soal_ei` (`id`, `soal_e`, `soal_i`) VALUES
(1, 'Lebih memilih berkomunikasi dengan bicara', 'Lebih memilih berkomunikasi dengan menulis'),
(2, 'Menemukan dan mengembangkan ide dengan mendiskusikannya', 'Menemukan dan mengembangkan ide dengan merenungkan'),
(3, 'Berorientasi pada dunia eksternal (kegiatan, orang)', 'Berorientasi pada dunia internal (memori, pemikiran, ide)'),
(4, 'Fokus pada banyak hobi secara luas dan umum', 'Fokus pada sedikit hobi namun mendalam'),
(5, 'Sosial dan ekspresif', 'Tertutup dan mandiri'),
(6, 'Bertemu orang dan aktivitas sosial membuat bersemangat', 'Pertemuan dengan orang lain dan aktivitas sosial melelahkan'),
(7, 'Beraktifitas sendirian di rumah membosankan', 'Beraktifitas sendirian di rumah menyenangkan'),
(8, 'Berinisiatif tinggi hampir dalam berbagai hal meskipun tidak berhubungan dengan dirinya', 'Berinisiatif bila situasi memaksa atau berhubungan dengan kepentingan sendiri'),
(9, 'Lebih memilih tempat yang ramai dan banyak interaksi / aktifitas', 'Lebih memilih tempat yang tenang dan pribadi untuk berkonsentrasi'),
(10, 'Berani bertindak tanpa terlalu lama berfikir', 'Berpikir secara matang sebelum bertindak'),
(11, 'Mengekspresikan semangat', 'Menyimpan semangat dalam hati'),
(12, 'Memilih berkomunikasi pada sekelompok orang', 'Mencari kesempatan untuk berkomunikasi secara perorangan'),
(13, 'Lebih suka komunikasi langsung (tatap muka)', 'Lebih suka komunikasi tidak langsung (telp, surat, e-mail)'),
(14, 'Membangun ide pada saat berbicara', 'Membangun ide dengan matang baru membicarakannya'),
(15, 'Spontan, Easy Going, fleksibel', 'Berhati-hati, penuh pertimbangan, kaku');

-- --------------------------------------------------------

--
-- Table structure for table `soal_jp`
--

CREATE TABLE `soal_jp` (
  `id` int(3) NOT NULL,
  `soal_j` varchar(500) NOT NULL,
  `soal_p` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_jp`
--

INSERT INTO `soal_jp` (`id`, `soal_j`, `soal_p`) VALUES
(1, 'Terencana dan memiliki deadline jelas', 'Spontan, Fleksibel, tidak diikat waktu'),
(2, 'Tidak menyukai hal-hal yang bersifat mendadak dan di luar perencanaan', 'Perubahan mendadak tidak jadi masalah'),
(3, 'Aturan, jadwal dan target akan sangat membantu dan memperjelas tindakan', 'Aturan, jadwal dan target sangat mengikat dan membebani'),
(4, 'Berorientasi pada hasil', 'Berorientasi pada proses'),
(5, 'Mengatur orang lain dengan tata tertib agar tujuan tercapai', 'Membiarkan orang lain bertindak bebas asalkan tujuan tercapai'),
(6, 'Fokus pada target dan mengabaikan hal-hal baru', 'Memperhatikan hal-hal baru dan siap menyesuaikan diri serta mengubah target'),
(7, 'Berpegang teguh pada pendirian', 'Pendirian masih bisa berubah tergantung situasi nantinya'),
(8, 'Merasa tenang bila semua sudah diputuskan', 'Merasa nyaman bila situasi tetap terbuka terhadap pilihan-pilihan lain'),
(9, 'Ketidakpastian membuat bingung dan meresahkan', 'Ketidakpastian itu seru, menegangkan dan membuat hati lebih senang'),
(10, 'Situasi last minute sangat menyiksa, membuat stress dan merupakan kesalahan', 'Situasi last minute membuat bersemangat dan memunculkan potensi'),
(11, 'Perubahan adalah musuh', 'Perubahan adalah semangat hidup'),
(12, 'Bertindak sesuai apa yang sudah direncanakan', 'Bertindak sesuai situasi dan kondisi yang terjadi saat itu'),
(13, 'Hidup harus sudah diatur dari awal', 'Hidup seharusnya mengalir sesuai kondisi'),
(14, 'Daftar dan checklist adalah panduan penting', 'Daftar dan checklist adalah tugas dan beban'),
(15, 'Puas ketika mampu menjalankan semuanya sesuai rencana', 'Puas ketika mampu beradaptasi dengan momentum yang terjadi');

-- --------------------------------------------------------

--
-- Table structure for table `soal_sn`
--

CREATE TABLE `soal_sn` (
  `id` int(3) NOT NULL,
  `soal_s` varchar(500) NOT NULL,
  `soal_n` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_sn`
--

INSERT INTO `soal_sn` (`id`, `soal_s`, `soal_n`) VALUES
(1, 'Bergerak dari detail ke gambaran umum sebagai kesimpulan akhir', 'Bergerak dari gambaran umum baru ke detail'),
(2, 'Berbicara mengenai masalah yang dihadapi hari ini dan langkah-langkah praktis mengatasinya', 'Berbicara mengenai visi masa depan dan konsep-konsep mengenai visi tersebut'),
(3, 'Menggunakan pengalaman sebagai pedoman', 'Menggunakan imajinasi dan perenungan sebagai pedoman'),
(4, 'SOP sangat membantu', 'SOP sangat membosankan'),
(5, 'Prosedural dan tradisional', 'Bebas dan dinamis'),
(6, 'Memilih fakta lebih penting daripada ide inspiratif', 'Memilih ide inspiratif lebih penting daripada fakta'),
(7, 'Kontinuitas dan stabilitas lebih diutamakan', 'Perubahan dan variasi lebih diutamakan'),
(8, 'Bertindak step by step dengan timeframe yang jelas', 'Bertindak dengan semangat tanpa menggunakan timeframe'),
(9, 'Menarik kesimpulan dengan lama dan hati-hati', 'menarik kesimpulan dengan cepat sesuai naluri'),
(10, 'Mengklarifikasi ide dan teori sebelum dipraktekkan', 'Memahami ide dan teori saat mempraktekkannya langsung'),
(11, 'Berfokus pada masa kini (apa yang bisa diperbaiki sekarang)', 'Berfokus pada masa depan (apa yang mungkin dicapai di masa depan)'),
(12, 'Secara konsisten mengamati dan mengingat detail', 'Mengamati dan mengingat detail hanya bila berhubungan dengan pola'),
(13, 'Praktis', 'Konseptual'),
(14, 'Menggunakan keterampilan yang sudah dikuasai', 'Menyukai tantangan untuk menguasai keterampilan baru'),
(15, 'Memilih cara yang sudah ada dan sudah terbukti', 'Memilih cara yang unik dan belum dipraktekkan orang lain');

-- --------------------------------------------------------

--
-- Table structure for table `soal_tf`
--

CREATE TABLE `soal_tf` (
  `id` int(3) NOT NULL,
  `soal_t` varchar(500) NOT NULL,
  `soal_f` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_tf`
--

INSERT INTO `soal_tf` (`id`, `soal_t`, `soal_f`) VALUES
(1, 'Obyektif', 'Subyektif'),
(2, 'Diyakinkan dengan penjelasan yang masuk akal', 'Diyakinkan dengan penjelasan yang menyentuh perasaan'),
(3, 'Berorientasi tugas dan job description', 'Berorientasi pada manusia dan hubungan'),
(4, 'Mengambil keputusan berdasar logika dan aturan main', 'Mengambil keputusan berdasar perasaan pribadi dan kondisi orang lain'),
(5, 'Menganalisa', 'Berempati'),
(6, 'Menghargai seseorang karena skill dan faktor teknis', 'Menghargai seseorang karena sifat dan perilakunya'),
(7, 'Mengemukakan tujuan dan sasaran lebih dahulu', 'Mengemukakan kesepakatan terlebih dahulu'),
(8, 'Melibatkan perasaan itu tidak profesional', 'Terlalu kaku pada peraturan dan pekerjaan itu kejam'),
(9, 'Yang penting situasi harmonis terjaga', 'Yang penting tujuan tercapai'),
(10, 'Mempertanyakan', 'Mengakomodasi'),
(11, 'Sering dianggap keras kepala', 'Sering dianggap terlalu memihak'),
(12, 'Bersemangat saat mengkritik dan menemukan kesalahan', 'Bersemangat saat menolong orang keluar dari kesalahan dan meluruskan'),
(13, 'Standar harus ditegakkan di atas segalanya (itu menunjukkan kehormatan dan harga diri)', 'Perasaan manusia lebih penting dari sekadar standar (yang adalah benda mati)'),
(14, 'Menuntut perlakuan yang adil dan sama pada semua orang', 'Menuntut perlakuan khusus sesuai karakteristik masing-masing orang'),
(15, 'Mementingkan sebab-akibat', 'Mementingkan nilai-nilai personal');

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '4dm1n');

-- --------------------------------------------------------

--
-- Table structure for table `tbgedung`
--

CREATE TABLE `tbgedung` (
  `id_gedung` int(11) NOT NULL,
  `nama_gedung` varchar(200) NOT NULL,
  `tipe_gedung` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbgedung`
--

INSERT INTO `tbgedung` (`id_gedung`, `nama_gedung`, `tipe_gedung`) VALUES
(1, 'Gedung 1', 'Asrama Laki-Laki'),
(2, 'Gedung 2', 'Asrama Laki-Laki'),
(3, 'Gedung 3', 'Asrama Laki-Laki'),
(4, 'Gedung 4', 'Asrama Laki-Laki'),
(5, 'Gedung 5', 'Asrama Laki-Laki'),
(6, 'Gedung 6', 'Asrama Laki-Laki'),
(7, 'Gedung 7', 'Asrama Laki-Laki'),
(8, 'Gedung 8', 'Asrama Laki-Laki'),
(9, 'Gedung 9', 'Asrama Laki-Laki'),
(10, 'Gedung 10', 'Asrama Laki-Laki'),
(11, 'Gedung 11', 'Asrama Perempuan'),
(12, 'Gedung 12', 'Asrama Perempuan'),
(13, 'Gedung A', 'Asrama Perempuan'),
(14, 'Gedung B', 'Asrama Perempuan'),
(15, 'Gedung C', 'Asrama Perempuan'),
(16, 'Gedung D', 'Asrama Perempuan'),
(17, 'Gedung E', 'Asrama Perempuan'),
(18, 'Gedung F', 'Asrama Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tbhasiltes`
--

CREATE TABLE `tbhasiltes` (
  `id_hasil` int(11) NOT NULL,
  `id_penghuni` int(11) NOT NULL,
  `nilai_e` int(11) NOT NULL,
  `nilai_i` int(11) NOT NULL,
  `nilai_s` int(11) NOT NULL,
  `nilai_n` int(11) NOT NULL,
  `nilai_t` int(11) NOT NULL,
  `nilai_f` int(11) NOT NULL,
  `nilai_j` int(11) NOT NULL,
  `nilai_p` int(11) NOT NULL,
  `tipe_kepribadian` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbhasiltes`
--

INSERT INTO `tbhasiltes` (`id_hasil`, `id_penghuni`, `nilai_e`, `nilai_i`, `nilai_s`, `nilai_n`, `nilai_t`, `nilai_f`, `nilai_j`, `nilai_p`, `tipe_kepribadian`) VALUES
(74, 21, 4, 11, 10, 5, 15, 0, 15, 0, 'ISTJ'),
(75, 22, 2, 13, 3, 12, 13, 2, 10, 5, 'INTJ'),
(76, 23, 3, 12, 12, 3, 3, 12, 12, 3, 'ISFJ'),
(77, 24, 2, 13, 7, 8, 5, 10, 5, 10, 'INFP'),
(78, 25, 8, 7, 4, 11, 14, 1, 8, 7, 'ENTJ'),
(79, 26, 15, 0, 0, 15, 14, 1, 6, 9, 'ENTP'),
(80, 27, 14, 1, 0, 15, 3, 12, 15, 0, 'ENFJ'),
(81, 28, 15, 0, 12, 3, 14, 1, 13, 2, 'ESTJ'),
(82, 29, 11, 4, 0, 15, 12, 3, 12, 3, 'ENTJ'),
(83, 30, 11, 4, 0, 15, 14, 1, 11, 4, 'ENTJ');

-- --------------------------------------------------------

--
-- Table structure for table `tbisikamar`
--

CREATE TABLE `tbisikamar` (
  `id_isikamar` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_penghuni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbisikamar`
--

INSERT INTO `tbisikamar` (`id_isikamar`, `id_kamar`, `id_penghuni`) VALUES
(79, 1, 21),
(80, 23, 22),
(81, 24, 23),
(82, 2, 24),
(83, 1, 25),
(86, 23, 26),
(88, 23, 27),
(91, 1, 28),
(93, 1, 29),
(94, 2, 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbkamar`
--

CREATE TABLE `tbkamar` (
  `id_kamar` int(11) NOT NULL,
  `id_gedung` int(11) NOT NULL,
  `nama_kamar` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkamar`
--

INSERT INTO `tbkamar` (`id_kamar`, `id_gedung`, `nama_kamar`) VALUES
(1, 1, 101),
(2, 1, 102),
(3, 1, 103),
(4, 1, 104),
(5, 1, 105),
(6, 1, 106),
(7, 1, 107),
(8, 1, 108),
(9, 1, 109),
(10, 1, 110),
(11, 1, 111),
(12, 1, 112),
(13, 1, 113),
(14, 1, 114),
(15, 1, 115),
(16, 1, 116),
(17, 1, 117),
(18, 1, 118),
(19, 1, 119),
(20, 1, 120),
(21, 1, 121),
(22, 1, 122),
(23, 13, 101),
(24, 13, 102),
(25, 13, 103),
(26, 13, 104),
(27, 13, 105),
(28, 13, 106),
(29, 13, 107),
(30, 13, 108),
(31, 13, 109),
(32, 13, 110),
(33, 13, 111),
(34, 13, 112),
(35, 13, 113),
(36, 13, 114),
(37, 13, 115),
(38, 13, 116),
(39, 13, 117),
(40, 13, 118),
(41, 13, 119),
(42, 13, 120),
(43, 13, 121),
(44, 13, 122);

-- --------------------------------------------------------

--
-- Table structure for table `tbkriteria`
--

CREATE TABLE `tbkriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria1` varchar(2) DEFAULT NULL,
  `kriteria2` varchar(2) DEFAULT NULL,
  `is_cocok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkriteria`
--

INSERT INTO `tbkriteria` (`id_kriteria`, `kriteria1`, `kriteria2`, `is_cocok`) VALUES
(1, 'ST', 'SF', 1),
(2, 'ST', 'NT', 1),
(3, 'SF', 'NF', 1),
(4, 'NF', 'NT', 1),
(5, 'SF', 'ST', 1),
(6, 'NT', 'ST', 1),
(7, 'NF', 'SF', 1),
(8, 'NT', 'NF', 1),
(9, 'SF', 'SF', 1),
(10, 'ST', 'ST', 1),
(11, 'NF', 'NF', 1),
(12, 'NT', 'NT', 1),
(13, 'ST', 'NF', 0),
(14, 'SF', 'NT', 0),
(15, 'NF', 'ST', 0),
(16, 'NT', 'SF', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbpenghuni`
--

CREATE TABLE `tbpenghuni` (
  `id_penghuni` int(11) NOT NULL,
  `nama_penghuni` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `program_studi` varchar(200) NOT NULL,
  `nomor_hp` varchar(200) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpenghuni`
--

INSERT INTO `tbpenghuni` (`id_penghuni`, `nama_penghuni`, `jenis_kelamin`, `program_studi`, `nomor_hp`, `kota`, `username`, `password`) VALUES
(21, 'Lukman Permana', 'Laki-laki', 'Teknik Fisika', '6284386992', 'Bekasi', 'lukman', 'lukman'),
(22, 'Shinta Yuliani', 'Perempuan', 'Administrasi Bisnis', '62821847739', 'Bandung', 'shinta', 'shinta'),
(23, 'Mawar Dian', 'Perempuan', 'Kriya Tekstil dan Mode', '62844772197', 'Jakarta', 'mawar', 'mawar'),
(24, 'Hamdani Suharto', 'Laki-laki', 'Teknik Telekomunikasi', '62838888339', 'Bekasi', 'hamdani', 'hamdani'),
(25, 'Eko Purnomo', 'Laki-laki', 'Teknik Industri', '6282258477', 'Banten', 'eko', 'eko'),
(26, 'Sri Lestari', 'Perempuan', 'Teknik Industri', '62822512882', 'Banjarmasin', 'sri', 'sri'),
(27, 'Fabiola Mustikasari', 'Perempuan', 'MBTI', '62843338895', 'Surabaya', 'fabiola', 'fabiola'),
(28, 'Abdul Holiq', 'Laki-laki', 'Sistem Informasi', '62854876333', 'Malang', 'abdul', 'abdul'),
(29, 'Muhammad Romi', 'Laki-laki', 'Sistem Komputer', '62845476466', 'Malang', 'romi', 'romi'),
(30, 'Muhammad Arif', 'Laki-laki', 'Sistem Komputer', '6286993927', 'Magelang', 'arif', 'arif'),
(31, 'Doni Andika', 'Laki-laki', 'Teknik Industri', '62822402988', 'Bandung', 'doni', 'doni'),
(32, 'Jenifer Larisa', 'Perempuan', 'Ilmu Komunikasi', '62885876856', 'Malang', 'jenifer', 'jenifer'),
(33, 'Kallista Sidra Philotra', 'Perempuan', 'Teknik Fisika', '62874587474', 'Bandung', 'kallista', 'kallista'),
(34, 'Danu Aulia', 'Laki-laki', 'Sistem Informasi', '62847391077', 'Bekasi', 'danu', 'danu'),
(35, 'Taufik Ahmad', 'Laki-laki', 'Sistem Informasi', '6284378474', 'Jakarta Selatan', 'taufik', 'taufik'),
(36, 'Rahmi Astuti', 'Perempuan', 'MBTI', '62837487444', 'Semarang', 'rahmi', 'rahmi'),
(37, 'Adara Fredella Ulani', 'Perempuan', 'DKV', '62833297234', 'Tangerang', 'adara', 'adara'),
(38, 'Zalwa Afiqah', 'Perempuan', 'DKV', '62823863476', 'Padang', 'zalwa', 'zalwa'),
(39, 'Ario Prawita', 'Laki-laki', 'Sistem Komputer', '62813939938', 'Magelang', 'ario', 'ario'),
(40, 'Fajri Widian', 'Laki-laki', 'Akuntansi', '62897439999', 'Banjarmasin', 'fajri', 'fajri');

-- --------------------------------------------------------

--
-- Table structure for table `tbtipekepribadian`
--

CREATE TABLE `tbtipekepribadian` (
  `tipe_kepribadian` varchar(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `partner1` varchar(4) NOT NULL,
  `partner2` varchar(4) NOT NULL,
  `profesi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbtipekepribadian`
--

INSERT INTO `tbtipekepribadian` (`tipe_kepribadian`, `keterangan`, `partner1`, `partner2`, `profesi`) VALUES
('ENFJ', 'Tipe Idealis Terlibat bersifat ekstrovert dan suka menolong. Selera humor, energi, dan optimisme mereka menarik orang lain. Mereka selalu berusaha cocok dengan semua orang dan menginginkan hubungan mereka harmonis serta memuaskan. Hangat, empati, responsif dan bertanggungjawab. Emosinya cepat terpengaruh oleh kebutuhan dan motivasi orang lain. Loyal, responsive terhadap pujian dan kritikan. Tipe kepribadian ini seringkali menghasilkan orangorang yang sangat karismatik.', 'INFJ', 'ISFP', 'Konsultan, Psikolog, Konselor, Pengajar, Marketing, HRD, Event Coordinator, Entertainer, Penulis, Motivator'),
('ENFP', 'Tipe Idealis Spontan adalah orang-orang yang kreatif, periang, dan berpikiran terbuka. Mereka penuh humor dan menularkan semangat menikmati hidup. Tipe kepribadian ini adalah pengamat yang tajam dan awas, mereka tidak akan ketinggalan satu kejadian pun di sekitar mereka. Tipe ini sangat bangga akan kemandiriannya, baik di dalam diri maupun yang tampak dari luar, dan tidak suka menerima peran bawahan.  Antusias yang hangat dan imajinatif. Memandang hidup dengan penuh kemungkinan. Spontan dan fleksibel, sering percaya dengan kemampuannya memperbaiki keadaan dan komunikasinya.', 'INTJ', 'INFJ', 'Konselor, Psikolog, Entertainer, Pengajar, Motivator, Presenter, Reporter, MC, Seniman, Hospitality'),
('ENTJ', 'Tipe Pemikir Dinamis adalah orang-orang yang penuh percaya diri dan mandiri. Mereka memancarkan antusiasme dan energi. Tipe ini mengejar tujuan-tujuan mereka dengan aktif dan penuh semangat.Tipe ini dilahirkan sebagai pemimpin, kompeten, penuh semangat, dan bertanggung jawab. Umumnya \"well informed\", banyak membaca, senang menambah pengetahuan dan membaginya dengan orang lain. Jujur, cepat mengambil keputusan. Lebih melihat pada rencana jangka panjang dan cara untuk mencapai tujuan.', 'INTP', 'ISTP', 'Entrepreneur, Pengacara, Hakim, Konsultan, Pemimpin Organisasi, Business analyst, Bidang Finansial'),
('ENTP', 'Tipe Pemikir Pendobrak adalah orang penuh pesona dan antusias. Mereka benar-benar penuh dengan energi dan suka mengambil posisi di tengah tengah perhatian. Cepat, memiliki ide brilian, mendorong dan banyak bicara. Memiliki semangat untuk menyelesaikan masalah baru dan menantang. Menerima kemungkinan konsep dan menganalisanya. Bosan dengan rutinitas. Tipe kepribadian ini tak terkalahkan dalam menemukan kemungkinan baru.', 'INFJ', 'INTJ', 'Pengacara, Psikolog, Konsultan, Ilmuwan, Aktor,Marketing, Programmer, Fotografer'),
('ESFJ', 'Tipe Realis Sosial adalah orang-orang populer yang penuh energi. Mereka dapat diandalkan, terorganisir dengan baik, dan senang menolong. Mereka selalu bersedia menghargai sifat-sifat baik orang lain dan memaafkan kelemahan orang itu. Mereka yang paling mudah bergaul dari seluruh tipe kepribadian. Kontak sosial sangat penting bagi mereka. Tipe ini menunjukkan perasaan mereka dengan terbuka dan jujur. Kekuatan mereka terletak pada diri mereka yang teliti dan dapat diandalkan dannbukan pada keluwesan dan spontanitas mereka. Hangat, rajin dan co-operatif. Menginginkan harmoni dalam lingkungannya, bekerja dengan batasan yang jelas.', 'ISFP', 'INFP', 'Perencana Keuangan, Perawat, Guru, Bidang anak-anak, Konselor, Administratif, Hospitality'),
('ESFP', 'Tipe Pelaku Santai adalah orang-orang yang ramah dan bahagia. Mereka menikmati kebersamaan dengan orang lain. Cerdas, pandai bicara, jenaka dan penuh pesona,mereka suka menjadi pusat perhatian. Mereka tidak takut akan hal-hal yang belum mereka ketahui, karena mereka luwes dan kreatif, dengan cepat mereka menyesuaikan diri dengan situasisituasi baru dan memanfaatkannya dengan baik. Menggunakan nalar dan pendekatan realistis. Fleksibel dan spontan, cepat beradaptasi dengan orang dan lingkungan baru. Cara belajar terbaik adalah dengan mencoba keterampilan baru dengan orang lain.', 'ISTJ', 'ISFJ', 'Entertainer, Seniman, Marketing, Konselor, Designer, Tour Guide, Bidang Anak-anak, Bidang Hospitality'),
('ESTJ', 'Tipe Realis Bertekad senang memangku tanggung jawab dan menyambut tantangan. Mereka orang-orang yang stabil dan dapat diandalkan. Kontak dengan pihak luar sangat penting bagi mereka, mereka mudah berbaur dan sangat aktif. Praktis, realistis, menggunakan fakta. Akurat, cepat bergerak untuk melaksanakan keputusan. Peduli dengan detail rutinitas. Memiliki standar logika yang jelas dan sistematis. Kuat dalam merealisasikan rencananya.', 'ISTP', 'INTP', 'Militer, Manajer, Polisi, Hakim, Pengacara, Guru, Sales, Auditor, Akuntan, System Analyst'),
('ESTP', 'Tipe Pelaku Bersemangat adalah orang-orang periang dan spontan. Mereka penuh pesona, dipenuhi energi, dan pelaku-pelaku sesungguhnya. Mereka memiliki pemikiran dan pandangan yang jernih sekalipun sedang berada dalam situasi sulit. Fleksibel dan toleran, menggunakan pendekatan pragmatis untuk mendapatkan hasil. Fokus pada saat ini dan sekarang, spontan, menikmati setiap momen yang bisa membuatnya aktif dengan orang lain. Cara belajar paling bagus adalah dengan pengalaman.', 'ISFJ', 'ISTJ', 'Marketing, Sales, Polisi, Entrepreneur, Pialang Saham, Technical Support'),
('INFJ', 'Tipe Idealis Penyelaras dikenali dari kepribadiannya yang kompleks dan memiliki begitu banyak pemikiran dan perasaan. Mereka orang yang pada dasarnya bersifat hangat dan penuh pengertian. Memiliki keinginan untuk mengerti hal-hal yang memotivasi dan menginspirasi orang. Mereka memiliki pemahaman yang kuat tentang sifat-sifat manusia. Tipe ini menganggap konflik sebagai situasi yang tidak menyenangkan dan lebih menyukai hubungan yang harmonis.', 'ESFP', 'ESTP', 'Pengajar, Psikolog, Dokter, Konselor, Pekerja Sosial, Fotografer, Seniman, Designer, Child Care.'),
('INFP', 'Tipe Idealis Pemimpi sangat berhati-hati dan oleh karenanya tampak pemalu dan pendiam bagi orang lain. Di tempat kerja, tipe ini adalah teman dan pasangan yang suka menolong dan setia Idealis, loyal, mudah beradaptasi, fleksibel, dan mudah menerima kecuali nilai-nilai yang bertentangan. Ingin tahu, cepat melihat kemungkinan, bisa menjadi katalis untuk menjalankan cita-citanya.', 'ENFJ', 'ESFJ', 'Penulis, Sastrawan, Konselor, Psikolog, Pengajar, Seniman, Rohaniawan, Bidang Hospitality'),
('INTJ', 'Tipe Pemikir Mandiri adalah orang-orang yang analitis dan jenaka. Mereka biasanya percaya diri dan tidak membiarkan diri terganggu oleh konflik dan kritik. Mereka sangat sadar akan kekuatan mereka sendiri dan tidak ragu akan kemampuan mereka. Tipe ini tidak tahan dengan rutinitas. Memiliki pikiran yang original. Bila berkomitmen, dia akan melaksanakan pekerjaan dengan baik.', 'ENFP', 'ENTP', 'Peneliti, Ilmuwan, Insinyur, Teknisi, Pengajar, Profesor, Dokter, Research & Development, Business Analyst, System Analyst, Pengacara, Hakim, Programmers, Posisi Strategis dalam organisasi.'),
('INTP', 'Tipe Pemikir Analitis adalah orang-orang pendiam dan tidak banyak bicara. Mereka suka menggali hingga ke dasar masalah, rasa ingin tahu adalah dorongan terbesar mereka. Secara teori dan abstrak, tertarik banyak pada ide daripada interaksi sosial. Pendiam, fleksibel dan mudah beradaptasi, ragu, kadang kritis dan selalu analitis.', 'ENTJ', 'ESTJ', 'Ilmuwan, Fotografer, Programmer, Ahli komputer, System Analyst, Penulis Buku Teknis, Ahli Forensik, Jaksa, Pengacara, Teknisi'),
('ISFJ', 'Tipe Realis Baik Hati adalah pribadi-pribadi yang hangat dan suka menolong. Mereka melakukan pekerjaan mereka dengan sungguh-sungguh dan memiliki bakat mengorganisir yang menonjol. Mereka tidak suka menonjolkan diri, mereka lebih suka menuntaskan pekerjaan mereka di luar sorotan. Mereka adalah pecandu kerja yang sesungguhnya Pendiam, ramah, bertanggungjawab dan teliti. Peduli dengan perasaan orang lain. Berusaha keras membuat keharmonisan di lingkungan rumah dan pekerjaannya.', 'ESFP', 'ESTP', 'Architect, Interior Designer, Perawat, Administratif, Designer, Child Care, Konselor, Back Office Manager, Penjaga Toko / Perpustakaan, Dunia Perhotelan.'),
('ISFP', 'Tipe Pelaku Peka adalah orang-orang yang lembut, rendah hati, dan pendiam. Mereka menangani kehidupan sehari-hari dengan baik dan menyukai keleluasaan pribadi mereka. Tipe ini adalah yang paling mudah disukai dan paling ramah di antara semua tipe kepribadian. Pendiam, bersahabat, sensitif dan baik. Menikmati keadaan saat ini dan apa yang terjadi pada lingkungannya. Membenci perselisihan dan konflik, tidak memaksakan opini dan nilainya pada orang lain.', 'ESFJ', 'ENFJ', 'Seniman, Designer, Pekerja Sosial, Konselor, Psikolog, Guru, Aktor, Bidang Hospitality'),
('ISTJ', 'Tipe Realis Tepercaya rendah hati dan sangat memikirkan tanggung jawab. Mereka cermat, pendiam, dan menuntut. Sifat mereka yang paling menonjol adalah dapat diandalkan dan mereka akan selalu berusaha memenuhi janji yang pernah mereka lontarkan. Tipe Realis Terpercaya adalah orang-orang yang cenderung tidak banyak bicara dan serius, mereka tidak banyak bicara namun pendengar yang baik. Pendiam, serius, menggunakan fakta, realistis dan bertanggung jawab. Memutuskan secara logis dan konsisten. Senang dengan keteraturan. Memegang kuat nilai tradisi dan loyalitas.', 'ESFP', 'ESTP', 'Bidang Manajemen, Polisi, Intelijen, Hakim, Pengacara, Dokter, Akuntan (Staf Keuangan), Programmer atau yang berhubungan dengan IT, System Analys, Pemimpin Militer'),
('ISTP', 'Tipe Pelaku Individualistis adalah orang-orang yang yakin akan diri sendiri dan sangat mandiri. Mereka orang-orang yang pendiam dan realistis, sangat rasional, dan sangat tegas. Mereka adalah orang-orang yang sesungguhnya tidak rumit, mudah bergaul, dan periang, toleran dan fleksibel, cenderung menjadi pengamat sampai muncul persoalan, kemudian bertindak cepat untuk mencari solusi.', 'ESTJ', 'ENTJ', 'Polisi, Ahli Forensik, Programmer, Ahli Komputer, System Analyst, Teknisi, Insinyur, Mekanik, Pilot, Atlit, Entrepreneur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `soal_ei`
--
ALTER TABLE `soal_ei`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_jp`
--
ALTER TABLE `soal_jp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_sn`
--
ALTER TABLE `soal_sn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_tf`
--
ALTER TABLE `soal_tf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbgedung`
--
ALTER TABLE `tbgedung`
  ADD PRIMARY KEY (`id_gedung`);

--
-- Indexes for table `tbhasiltes`
--
ALTER TABLE `tbhasiltes`
  ADD PRIMARY KEY (`id_hasil`),
  ADD UNIQUE KEY `id_penghuni_2` (`id_penghuni`),
  ADD UNIQUE KEY `id_penghuni` (`id_penghuni`),
  ADD KEY `tipe_kepribadian` (`tipe_kepribadian`);

--
-- Indexes for table `tbisikamar`
--
ALTER TABLE `tbisikamar`
  ADD PRIMARY KEY (`id_isikamar`),
  ADD UNIQUE KEY `id_penghuni` (`id_penghuni`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `tbkamar`
--
ALTER TABLE `tbkamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `FK_GedungKamar` (`id_gedung`);

--
-- Indexes for table `tbkriteria`
--
ALTER TABLE `tbkriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tbpenghuni`
--
ALTER TABLE `tbpenghuni`
  ADD PRIMARY KEY (`id_penghuni`);

--
-- Indexes for table `tbtipekepribadian`
--
ALTER TABLE `tbtipekepribadian`
  ADD PRIMARY KEY (`tipe_kepribadian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `soal_ei`
--
ALTER TABLE `soal_ei`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `soal_jp`
--
ALTER TABLE `soal_jp`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `soal_sn`
--
ALTER TABLE `soal_sn`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `soal_tf`
--
ALTER TABLE `soal_tf`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbgedung`
--
ALTER TABLE `tbgedung`
  MODIFY `id_gedung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbhasiltes`
--
ALTER TABLE `tbhasiltes`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `tbisikamar`
--
ALTER TABLE `tbisikamar`
  MODIFY `id_isikamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tbkamar`
--
ALTER TABLE `tbkamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbkriteria`
--
ALTER TABLE `tbkriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbpenghuni`
--
ALTER TABLE `tbpenghuni`
  MODIFY `id_penghuni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbhasiltes`
--
ALTER TABLE `tbhasiltes`
  ADD CONSTRAINT `tbhasiltes_ibfk_1` FOREIGN KEY (`tipe_kepribadian`) REFERENCES `tbtipekepribadian` (`tipe_kepribadian`),
  ADD CONSTRAINT `tbhasiltes_ibfk_2` FOREIGN KEY (`id_penghuni`) REFERENCES `tbpenghuni` (`id_penghuni`);

--
-- Constraints for table `tbisikamar`
--
ALTER TABLE `tbisikamar`
  ADD CONSTRAINT `tbisikamar_ibfk_1` FOREIGN KEY (`id_penghuni`) REFERENCES `tbpenghuni` (`id_penghuni`),
  ADD CONSTRAINT `tbisikamar_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `tbkamar` (`id_kamar`);

--
-- Constraints for table `tbkamar`
--
ALTER TABLE `tbkamar`
  ADD CONSTRAINT `FK_GedungKamar` FOREIGN KEY (`id_gedung`) REFERENCES `tbgedung` (`id_gedung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

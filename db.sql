CREATE TABLE post (
  id serial primary key,
  title varchar(255) NOT NULL,
  content text NOT NULL,
  created_at int DEFAULT NULL,
  updated_at int DEFAULT NULL
);

CREATE TABLE service_center (
  id serial primary key,
  state varchar(255) NOT NULL,
  address text NOT NULL
);

INSERT INTO service_center (id, state, address) VALUES
(1, 'Jakarta', 'Rukan Graha Cempaka Mas Blok C no.29, Jakarta Pusat'),
(2, 'Bekasi', 'Mega Bekasi Hypermall Lantai 1 no. 161'),
(3, 'Jogjakarta', 'Jl. Gejayan 9 Yogyakarta'),
(4, 'Surabaya', 'Jl. Pemuda 27-31 Surabaya, Gedung WTC R425-426'),
(5, 'Bandung', 'Jl. Kopo, Miko Mall lantai 1 no. 71-73, Bandung'),
(6, 'Makasar', 'Jl. Rappocini no. 118g, Makasar'),
(7, 'Cilegon', 'Jl. Temu Putih No 102, Jombang Masjid, Ruko HM Marsudi, Cilegon - Banten 42411'),
(8, 'Bogor', 'Plaza Jambu dua Lt.1 Blok B no.78, Jl. Pajajaran Raya - Bogor'),
(9, 'Depok', 'Depok Twon Square ( Detos ) Lt. 2 Blok SS 19 No. 5'),
(10, 'Semarang', 'Plaza Simpang Lima Lt.1 No.175-176 Semarang'),
(11, 'Bali', 'Jl. Pulau Tarakan no.29, Denpasar - Bali'),
(12, 'Medan', 'jl.Pasar 3 no.103 Karakatau Medan - SUMUT 20222'),
(13, 'Palu', 'Jl. Pattimura no 11,Palu - Sulawesi Tengah 94112'),
(14, 'Malang', 'Jl. B. Cengkeh No.5, Jatimulyo, Kec. Lowokwaru, Kota Malang'),
(15, 'Jember', 'Jl. letjen suprapto 98 kebonsari,jember'),
(16, 'Kupang', 'Ruko Flomamora Mall Blok Waikabubak No 23 oebobo Kupang NTT'),
(17, 'Lampung', 'jl. Diponegoro no: 86E,Teluk betung bandar lampung'),
(18, 'Samarinda', 'Jl. Siradj Salman no.34 (samping ayam goreng TOP), Samarinda'),
(19, 'Pontianak', 'Jl.Diponegoro Komp Khatulistiwa Plaza Lantai 2 No 56'),
(20, 'Palembang', 'Jl. R. Sukamto PTC Mall blok LG No.6'),
(21, 'Belitung', 'jalan jendral sudirman, ruko abotok (depan bank syariah babel/notaris linawati hasan)'),
(22, 'Pekanbaru', 'Jl. Teuku Umar - Plaza Senapelan Lantai dasar Blok A1 no.30 Pekanbaru - Riau'),
(23, 'Cirebon', 'Jl. Pangeran walangsungsang no. 19 Jatiseeng, Cirebon 45188'),
(24, 'Kudus', 'Service City, Jl. Patimura No. 18 Melati kidul - 59319, Jawa Tengah');


CREATE TABLE store (
  id serial primary key,
  region varchar(255) NOT NULL,
  state varchar(255) NOT NULL,
  name varchar(255) NOT NULL,
  address text NOT NULL
);

--
-- Dumping data for table store
--

INSERT INTO store (id, region, state, name, address) VALUES
(1, 'Jawa Timur', 'SURABAYA', 'GRONDRONG CELL', 'JL. PACUAN KUDA N0.62'),
(2, 'Jawa Timur', 'SURABAYA', 'KREBOW CELL', 'JL. MANUKAN DALAM'),
(3, 'Jawa Timur', 'SURABAYA', 'TOM CELL', 'Jl.manyar surabaya'),
(4, 'Jawa Timur', 'MOJOKERTO', 'DIVA CELL', 'JL PAHLAWAN NO 2 MOJOKERTO'),
(5, 'Jawa Timur', 'MOJOKERTO', 'NUSANTARA CELL', 'JL K.H DEWANTORO NO 38 KRIAN'),
(6, 'Jawa Timur', 'SURABAYA', 'ACDS', 'pemuda no 27-31 sby jawa timur'),
(7, 'Jawa Timur', 'SURABAYA', 'PYRAMID', 'pemuda no 27-31 sby jawa timur'),
(8, 'Jawa Timur', 'SURABAYA', 'CHEAPS CELL', 'LANTAI 2'),
(9, 'Jawa Timur', 'GRESIK', 'PERDANA CELL', 'JL. PANGLIMA SUDIRMAN NO. 32'),
(10, 'Jawa Timur', 'SURABAYA', 'DUNIA HP', 'DTC MALL'),
(11, 'Jawa Timur', 'LUMAJANG', 'NAGA CELL', 'JL.HOS COKROAMINOTO 26 LUMAJANG'),
(12, 'Jawa Timur', 'BANYUWANGI', 'MSI', 'Jl. Hos cokro aminoto 10'),
(13, 'Jawa Timur', 'BANYUWANGI', 'SINAR GALAXY', 'JL. GAJAHMADA 116 GENTENG'),
(14, 'Jawa Timur', 'SIDOARJO', 'BANDARA PONSEL', 'JL. WADUNG ASRI NO.85'),
(15, 'Jawa Timur', 'SIDOARJO', 'BANDARA 24 PONSEL', 'JL. RAYA BEBEKAN NO.23 - TAMAN SEPANJANG'),
(16, 'Jawa Timur', 'SIDOARJO', 'AGNES CELL', 'JL. SEDATI'),
(17, 'Jawa Timur', 'SIDOARJO', 'GINAWANGI PONSEL', 'JL. BETRO'),
(18, 'Jawa Timur', 'SIDOARJO', 'JH PHONE', 'JL. KH MUKMIN 47'),
(19, 'Jawa Timur', 'MADURA', 'RADJA CELL', 'JL.KH.MOCH KHOLIL 123 BANGKALAN'),
(20, 'Jawa Timur', 'MADURA', 'BUMI MADURA 1', 'JL. KHMOCH KHOLIL NO88'),
(21, 'Jawa Timur', 'MADURA', 'BUMI MADURA 2', 'JL. KHMOCH KHOLIL NO88'),
(22, 'Jawa Timur', 'SURABAYA', 'FONNY CELL', 'Plaza surabaya lantai 1'),
(23, 'Jawa Timur', 'SIDOARJO', 'DAMAR MULAN PONSEL', 'Jl.sedati , SPBU AL '),
(24, 'Jawa Timur', 'SURABAYA', 'NURY CELL', 'Jl.kedung cowek  surabaya'),
(25, 'Jawa Timur', 'SIDOARJO', 'GO SMURTF', 'SUKODONO'),
(26, 'Jawa Timur', 'SIDOARJO', 'STOCK 24', 'JL. DIPENOGORO NO. 72'),
(27, 'Jawa Timur', 'SURABAYA', 'PONSELINDO', 'Plaza marina lt 2 no 264 blok H'),
(28, 'Jawa Timur', 'SURABAYA', 'MEGACOM', 'ITC Mega grosir lt 2'),
(29, 'Jawa Timur', 'SURABAYA', 'WARNA CELL', 'WTC Lantai 2'),
(30, 'Jawa Timur', 'SURABAYA', 'TOTO CELL', 'JL BENDUL MERISI NO 88'),
(31, 'Jawa Timur', 'PROBOLINGGO', 'ASIAN CELL', 'JL DR. SOETOMO NO 49'),
(32, 'Jawa Timur', 'SIDOARJO', 'DANI CELL', 'RAMAYANA BUNGURASIH '),
(33, 'Jawa Timur', 'SURABAYA', 'TERMINAL HP', 'JL MANUKAN DALAM 18F NO 3');

# Host: localhost  (Version: 5.5.16)
# Date: 2015-04-02 11:08:56
# Generator: MySQL-Front 5.3  (Build 4.136)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "guru"
#

DROP TABLE IF EXISTS `guru`;
CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `nip` char(18) NOT NULL DEFAULT '0',
  `nama_guru` varchar(30) NOT NULL DEFAULT '',
  `tanggal_lahir` date NOT NULL DEFAULT '0000-00-00',
  `jenis_kelamin` varchar(10) NOT NULL DEFAULT '',
  `alamat` varchar(100) NOT NULL DEFAULT '',
  `agama` varchar(20) NOT NULL,
  `pendidikan` varchar(5) DEFAULT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "guru"
#

INSERT INTO `guru` VALUES (12,'1111','reza','1992-01-26','L','pondok pucung 2','Islam','S1','021745'),(13,'1112','sari','1992-01-26','P','jombang prapatan','Islam','S1','021745'),(14,'10003','bagus','1992-11-12','L','ancol','Islam','D3','987654');

#
# Structure for table "jadwal"
#

DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_ajaran` varchar(11) DEFAULT NULL,
  `id_guru` int(11) NOT NULL DEFAULT '0',
  `id_mapel` int(11) NOT NULL DEFAULT '0',
  `id_kelas` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_jadwal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "jadwal"
#

/*!40000 ALTER TABLE `jadwal` DISABLE KEYS */;
/*!40000 ALTER TABLE `jadwal` ENABLE KEYS */;

#
# Structure for table "kelas"
#

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "kelas"
#

INSERT INTO `kelas` VALUES (1,'X 1'),(2,'X 2'),(3,'X 3'),(4,'X 4'),(5,'X 5');

#
# Structure for table "mapel"
#

DROP TABLE IF EXISTS `mapel`;
CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "mapel"
#

INSERT INTO `mapel` VALUES (1,'Bahasa Indonesia'),(2,'Matematika'),(3,'Biologi');

#
# Structure for table "siswa"
#

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` char(18) NOT NULL DEFAULT '0',
  `nama_siswa` varchar(30) NOT NULL DEFAULT '',
  `tanggal_lahir` date NOT NULL DEFAULT '0000-00-00',
  `jenis_kelamin` varchar(10) NOT NULL DEFAULT '',
  `alamat` varchar(100) NOT NULL DEFAULT '',
  `agama` varchar(20) NOT NULL,
  `nama_wali` varchar(30) DEFAULT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "siswa"
#

INSERT INTO `siswa` VALUES (1,'1110','reza satria','1992-01-26','L','pondok pucung','Islam','hasyim','0217456075'),(2,'1111','budi tirto','1992-12-20','L','ciledug','Islam','budi2','02175698'),(4,'1112','susi','1993-12-01','P','pejaten','Islam','susi2','0217456');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(160) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `level` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (9,'reza2','3da541559918a808c2402bba5012f6c60b27661c','reza.shinra@gmail.co.id',1),(10,'budi','40bd001563085fc35165329ea1ff5c5ecbdbbeef','reza.shinra@gmail.cos',2),(11,'reza','40bd001563085fc35165329ea1ff5c5ecbdbbeef','reza.shinra@gmail.com',1);

#
# Structure for table "waktu_ajar"
#

DROP TABLE IF EXISTS `waktu_ajar`;
CREATE TABLE `waktu_ajar` (
  `id_waktu` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(100) DEFAULT NULL,
  `mulai` varchar(10) DEFAULT NULL,
  `selesai` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_waktu`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "waktu_ajar"
#

INSERT INTO `waktu_ajar` VALUES (1,'Jam Pertama','07:00','09:00');

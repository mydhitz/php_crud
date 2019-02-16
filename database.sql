/* Membuat Database dan Table dengan mysql */
create database crud_db; //membuat database baru yaitu “crud_db”
use crud_db;
CREATE TABLE `tabel_user` (     //membuat tabel baru yaitu “tabel_user”
  `id` int(11) NOT NULL auto_increment,  //variabel id yang bertipe data integer
  `nama` varchar(100),    //variable nama yang bertipe data varchar
  `email` varchar(100),    //variable email yang bertipe data varchar
  `mobile` varchar(15),    //variable mobile yang bertipe data varchar
  `alamat` varchar(100),    //variable alamat yang bertipe data varchar
  PRIMARY KEY  (`id`)
);

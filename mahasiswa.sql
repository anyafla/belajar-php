--berikut screenshoot latihan basis data menggunakan mysql ada di link gdrive dibawah ini :--
-- https://drive.google.com/drive/folders/1hyipAqPsCXqE1WEPfawolora_x2dYKBX?usp=sharing --


create database fakultas;

  --not null untuk perintah mengisikan data--
create table jurusan (
  
    ID int primary key auto_increment,
    kode char(6) not null,
    nama varchar(60) not null
);

create table mahasiswa (
    ID int primary key auto_increment,
    id_jurusan integer not null,
    nim char(8) not null,
    nama varchar(50) not null,
    jenis_kelamin enum('laki-laki', 'perempuan') not null,
    tempat_lahir varchar(50),
    foreign key (id_jurusan) references jurusan (ID) 
);


create database tugas01_travelxism;
use tugas01_travelxism;

create table karyawan(
	id_karyawan char (10) not null primary key auto_increment,
	nama_karyawan char (50),
	jk_karyawan char (1),
	dob_karyawan date,
	alamat_karyawan text
);

insert into karyawan VALUES
('204210001', 'Anto','L', '2000-01-01', 'Jl Mangga'),
('204210002', 'Dini','P', '2000-11-23', 'Jl Manggis'),
('204210003', 'Riki','L', '2000-05-15', 'Jl Jeruk');
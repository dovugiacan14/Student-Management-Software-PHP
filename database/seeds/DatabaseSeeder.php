<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(hocsinhSeeder::class);
        //$this->call(khoiSeeder::class);
        //$this->call(lopSeeder::class);
        //$this->call(monhocSeeder::class);
        //$this->call(chuongtrinhhocSeeder::class);
        //$this->call(lhktSeeder::class);
        //$this->call(hockiSeeder::class);
        //$this->call(giaovienSeeder::class);
        //$this->call(ctbdmSeeder::class);
        $this->call(quanlylopSeeder::class);
    }
}
class hocsinhSeeder extends Seeder
{
    public function run()
    {
        DB::table('hocsinhs')->insert([
            ['hoTen'=>'Đoàn Thanh Linh','ngaySinh'=>'2004-012-02','gioiTinh'=>'Nữ','tuoi'=>16,'diaChi'=>'Đồng Nai'],
            ['hoTen'=>'Trần Tuấn Linh','ngaySinh'=>'2004-07-12','gioiTinh'=>'Nam','tuoi'=>15,'diaChi'=>'Bến Tre'],
            ['hoTen'=>'Nguyễn Văn Nam','ngaySinh'=>'2005-08-22','gioiTinh'=>'Nam','tuoi'=>15,'diaChi'=>'Tiền Giang'],
            ['hoTen'=>'Trần Hoàng Linh','ngaySinh'=>'2005-03-02','gioiTinh'=>'Nam','tuoi'=>15,'diaChi'=>'Long An'],
            ['hoTen'=>'Đào Thanh Tuấn','ngaySinh'=>'2005-11-04','gioiTinh'=>'Nam','tuoi'=>15,'diaChi'=>'Khánh Hòa'],
            ['hoTen'=>'Đào Ngọc Thanh Tuấn','ngaySinh'=>'2004-09-28','gioiTinh'=>'Nam','tuoi'=>16,'diaChi'=>'Bến Tre'],
            ['hoTen'=>'Hà Thu Như','ngaySinh'=>'2004-06-23','gioiTinh'=>'Nữ','tuoi'=>16,'diaChi'=>'Đà Nẵng'],
            ['hoTen'=>'Cao Thanh Tài','ngaySinh'=>'2004-11-22','gioiTinh'=>'Nam','tuoi'=>16,'diaChi'=>'Kiên Giang'],
            ['hoTen'=>'Trần Hoàng Lộc','ngaySinh'=>'2004-01-18','gioiTinh'=>'Nam','tuoi'=>16,'diaChi'=>'Quãng Ngãi'],
            ['hoTen'=>'Ngô Khánh Vy','ngaySinh'=>'2004-04-21','gioiTinh'=>'Nữ','tuoi'=>16,'diaChi'=>'Gia Lai'],
            ['hoTen'=>'Nguyễn Văn Tuấn','ngaySinh'=>'2003-06-28','gioiTinh'=>'Nam','tuoi'=>14,'diaChi'=>'Kom Tum'],
            ['hoTen'=>'Cao Thanh Hưng','ngaySinh'=>'2003-04-19','gioiTinh'=>'Nam','tuoi'=>14,'diaChi'=>'Phú Yên'],
            ['hoTen'=>'Đoàn Quốc Bảo','ngaySinh'=>'2003-04-02','gioiTinh'=>'Nam','tuoi'=>14,'diaChi'=>'Bình Định'],
            ['hoTen'=>'Huỳnh Thị Mỹ Yến','ngaySinh'=>'2003-05-28','gioiTinh'=>'Nữ','tuoi'=>14,'diaChi'=>'Phan Thiết'],
            ['hoTen'=>'Đỗ Hoàng Khánh Thi','ngaySinh'=>'2003-08-27','gioiTinh'=>'Nữ','tuoi'=>14,'diaChi'=>'Đồng Tháp'],
        ]);
    }
}
class khoiSeeder extends Seeder
{
    public function run()
    {
        DB::table('khois')->insert([
            ['tenKhoi'=>'10'],
            ['tenKhoi'=>'11'],
            ['tenKhoi'=>'12'],
        
        ]);
    }
}

class quatrinhhocSeeder extends Seeder
{
    public function run()
    {
        DB::table('quatrinhhocs')->insert([
            ['malop'=>1,'mahs'=>11,'mahk'=>4,'trangthaibaohiem'=>'Đã tham gia','trangthaihocphi'=>'Đã đóng phí'],
            ['malop'=>1,'mahs'=>12,'mahk'=>4,'trangthaibaohiem'=>'Đã tham gia','trangthaihocphi'=>'Đã đóng phí'],
            ['malop'=>2,'mahs'=>13,'mahk'=>4,'trangthaibaohiem'=>'Đã tham gia','trangthaihocphi'=>'Đã đóng phí'],
            ['malop'=>2,'mahs'=>14,'mahk'=>4,'trangthaibaohiem'=>'Đã tham gia','trangthaihocphi'=>'Đã đóng phí'],
            ['malop'=>2,'mahs'=>15,'mahk'=>4,'trangthaibaohiem'=>'Chưa tham gia','trangthaihocphi'=>'Đã đóng phí'],
            ['malop'=>5,'mahs'=>2,'mahk'=>4,'trangthaibaohiem'=>'Đã tham gia','trangthaihocphi'=>'Chưa đóng phí'],
            ['malop'=>5,'mahs'=>3,'mahk'=>4,'trangthaibaohiem'=>'Đã tham gia','trangthaihocphi'=>'Đã đóng phí'],
            ['malop'=>6,'mahs'=>4,'mahk'=>4,'trangthaibaohiem'=>'Đã tham gia','trangthaihocphi'=>'Đã đóng phí'],
            ['malop'=>5,'mahs'=>5,'mahk'=>4,'trangthaibaohiem'=>'Đã tham gia','trangthaihocphi'=>'Chưa đóng phí'],
            ['malop'=>7,'mahs'=>7,'mahk'=>4,'trangthaibaohiem'=>'Đã tham gia','trangthaihocphi'=>'Chưa đóng phí'],
            ['malop'=>7,'mahs'=>8,'mahk'=>4,'trangthaibaohiem'=>'Đã tham gia','trangthaihocphi'=>'Đã đóng phí'],
            ['malop'=>8,'mahs'=>9,'mahk'=>4,'trangthaibaohiem'=>'Đã tham gia','trangthaihocphi'=>'Đã đóng phí'],
            ['malop'=>8,'mahs'=>6,'mahk'=>4,'trangthaibaohiem'=>'Đã tham gia','trangthaihocphi'=>'Đã đóng phí'],
            ['malop'=>8,'mahs'=>10,'mahk'=>4,'trangthaibaohiem'=>'Đã tham gia','trangthaihocphi'=>'Đã đóng phí'],
            ['malop'=>9,'mahs'=>1,'mahk'=>4,'trangthaibaohiem'=>'Đã tham gia','trangthaihocphi'=>'Đã đóng phí'],
        ]);
    }
}



class lopSeeder extends Seeder
{
    public function run()
    {
        DB::table('lops')->insert([
            ['tenLop'=>'10A1','makhoi'=> 1],
            ['tenLop'=>'10A2','makhoi'=> 1],
            ['tenLop'=>'10A3','makhoi'=> 1],
            ['tenLop'=>'11A1','makhoi'=> 2],
            ['tenLop'=>'11A2','makhoi'=> 2],
            ['tenLop'=>'11A3','makhoi'=> 2],
            ['tenLop'=>'12A1','makhoi'=> 3],
            ['tenLop'=>'12A2','makhoi'=> 3],
            ['tenLop'=>'12A3','makhoi'=> 3],
        ]);
    }
}

class hockiSeeder extends Seeder
{
    public function run()
    {
        DB::table('hockies')->insert([
            ['tenHocki'=>'Học kỳ 1','namhoc'=> 2020],
            ['tenHocki'=>'Học kỳ 2','namhoc'=> 2020],
            ['tenHocki'=>'Học kỳ 1','namhoc'=> 2021],
            ['tenHocki'=>'Học kỳ 2','namhoc'=> 2021],
            
        ]);
    }
}

class monhocSeeder extends Seeder
{
    public function run()
    {
        DB::table('monhocs')->insert([
            ['tenMonhoc'=>'Toán đại số','diemdat'=> 5],
            ['tenMonhoc'=>'Toán giải tích','diemdat'=> 5],
            ['tenMonhoc'=>'Văn học','diemdat'=> 5],
            ['tenMonhoc'=>'Vật lý','diemdat'=> 5],
            ['tenMonhoc'=>'Hóa học','diemdat'=> 5],
            ['tenMonhoc'=>'Sinh học','diemdat'=> 5],
            ['tenMonhoc'=>'Ngoại ngữ','diemdat'=> 4],
            ['tenMonhoc'=>'Lịch sử','diemdat'=> 5],
            ['tenMonhoc'=>'Địa lý','diemdat'=> 5],
            ['tenMonhoc'=>'Giáo dục công dân','diemdat'=> 5],
            ['tenMonhoc'=>'Tin học','diemdat'=> 5],
            ['tenMonhoc'=>'Công nghệ','diemdat'=> 5],
        ]);
    }
}
class chuongtrinhhocSeeder extends Seeder
{
    public function run()
    {
        DB::table('chuongtrinhhocs')->insert([
            ['makhoi'=> 1,'mamh'=> 1,'heso'=> 2],
            ['makhoi'=> 1,'mamh'=> 3,'heso'=> 2],
            ['makhoi'=> 1,'mamh'=> 7,'heso'=> 2],
            ['makhoi'=> 1,'mamh'=> 4,'heso'=> 1],
            ['makhoi'=> 1,'mamh'=> 5,'heso'=> 1],
            ['makhoi'=> 1,'mamh'=> 6,'heso'=> 1],
            ['makhoi'=> 1,'mamh'=> 8,'heso'=> 1],
            ['makhoi'=> 1,'mamh'=> 9,'heso'=> 1],
            ['makhoi'=> 1,'mamh'=> 10,'heso'=> 1],
            ['makhoi'=> 1,'mamh'=> 11,'heso'=> 1],
            ['makhoi'=> 1,'mamh'=> 12,'heso'=> 1],

            ['makhoi'=> 2,'mamh'=> 1,'heso'=> 2],
            ['makhoi'=> 2,'mamh'=> 2,'heso'=> 2],
            ['makhoi'=> 2,'mamh'=> 3,'heso'=> 2],
            ['makhoi'=> 2,'mamh'=> 7,'heso'=> 2],
            ['makhoi'=> 2,'mamh'=> 4,'heso'=> 1],
            ['makhoi'=> 2,'mamh'=> 5,'heso'=> 1],
            ['makhoi'=> 2,'mamh'=> 6,'heso'=> 1],
            ['makhoi'=> 2,'mamh'=> 8,'heso'=> 1],
            ['makhoi'=> 2,'mamh'=> 9,'heso'=> 1],
            ['makhoi'=> 2,'mamh'=> 10,'heso'=> 1],
            ['makhoi'=> 2,'mamh'=> 11,'heso'=> 1],
            ['makhoi'=> 2,'mamh'=> 12,'heso'=> 1],

            ['makhoi'=> 3,'mamh'=> 2,'heso'=> 2],
            ['makhoi'=> 3,'mamh'=> 3,'heso'=> 2],
            ['makhoi'=> 3,'mamh'=> 7,'heso'=> 2],
            ['makhoi'=> 3,'mamh'=> 4,'heso'=> 1],
            ['makhoi'=> 3,'mamh'=> 5,'heso'=> 1],
            ['makhoi'=> 3,'mamh'=> 6,'heso'=> 1],
            ['makhoi'=> 3,'mamh'=> 8,'heso'=> 1],
            ['makhoi'=> 3,'mamh'=> 9,'heso'=> 1],
            ['makhoi'=> 3,'mamh'=> 10,'heso'=> 1],
            ['makhoi'=> 3,'mamh'=> 11,'heso'=> 1],
            ['makhoi'=> 3,'mamh'=> 12,'heso'=> 1],
        ]);
    }
}

class lhktSeeder extends Seeder
{
    public function run()
    {
        DB::table('loaihinhkiemtras')->insert([
            ['tenlhkt'=>'Kiểm tra miệng', 'hesodiem'=>1,'thoigiankiemtra'=>15],
            ['tenlhkt'=>'Kiểm tra 15p', 'hesodiem'=>1,'thoigiankiemtra'=>15],
            ['tenlhkt'=>'Kiểm tra 1 tiết', 'hesodiem'=>2,'thoigiankiemtra'=>45],
            ['tenlhkt'=>'Kiểm tra học kỳ', 'hesodiem'=>3,'thoigiankiemtra'=>90],
        ]);
    }
}

class giaovienSeeder extends Seeder
{
    public function run()
    {
        DB::table('giaoviens')->insert([
            ['tenGV'=>'Đỗ Vũ Gia Cần'],
            ['tenGV'=>'Nguyễn Phạm Hải Dương'],
            ['tenGV'=>'Nguyễn Văn Nghi'],
            ['tenGV'=>'Nguyễn Văn Bộ'],
            ['tenGV'=>'Trần Thị Dưỡng'],
            ['tenGV'=>'Vũ Ngọc Phương Uyên'],
            ['tenGV'=>'Mai Duy Thức'],
            ['tenGV'=>'Nguyễn Thái Vân Châu'],
            ['tenGV'=>'Nguyễn Ngọc Thức'],
            ['tenGV'=>'Bùi Thanh Uyên'],
        ]);
    }
}

class quanlylopSeeder extends Seeder
{
    public function run()
    {
        DB::table('quanlylops')->insert([
            ['malop'=>1,'magvcn'=>1,'maloptruong'=>11],
            ['malop'=>2,'magvcn'=>2,'maloptruong'=>14],
            ['malop'=>5,'magvcn'=>5,'maloptruong'=>2],
            ['malop'=>6,'magvcn'=>6,'maloptruong'=>4],
            ['malop'=>7,'magvcn'=>7,'maloptruong'=>7],
            ['malop'=>8,'magvcn'=>8,'maloptruong'=>9],
            ['malop'=>9,'magvcn'=>9,'maloptruong'=>1],
        ]);
    }
}


/*
class bdmSeeder extends Seeder
{
    public function run()
    {
        DB::table('bangdiemmons')->insert([
            // môn văn học  
            ['mamh'=>3, 'maqth'=>1,'diemtb_mon'=>0],
            ['mamh'=>3, 'maqth'=>4,'diemtb_mon'=>0],
            ['mamh'=>3, 'maqth'=>5,'diemtb_mon'=>0],
            ['mamh'=>3, 'maqth'=>6,'diemtb_mon'=>0],
            ['mamh'=>3, 'maqth'=>7,'diemtb_mon'=>0],

            // môn vật lý 
            ['mamh'=>4, 'maqth'=>1,'diemtb_mon'=>0],
            ['mamh'=>4, 'maqth'=>4,'diemtb_mon'=>0],
            ['mamh'=>4, 'maqth'=>5,'diemtb_mon'=>0],
            ['mamh'=>4, 'maqth'=>6,'diemtb_mon'=>0],
            ['mamh'=>4, 'maqth'=>7,'diemtb_mon'=>0],

            // môn hóa học 
            ['mamh'=>5, 'maqth'=>1,'diemtb_mon'=>0],
            ['mamh'=>5, 'maqth'=>4,'diemtb_mon'=>0],
            ['mamh'=>5, 'maqth'=>5,'diemtb_mon'=>0],
            ['mamh'=>5, 'maqth'=>6,'diemtb_mon'=>0],
            ['mamh'=>5, 'maqth'=>7,'diemtb_mon'=>0],

            // môn sinh học
            ['mamh'=>6, 'maqth'=>1,'diemtb_mon'=>0],
            ['mamh'=>6, 'maqth'=>4,'diemtb_mon'=>0],
            ['mamh'=>6, 'maqth'=>5,'diemtb_mon'=>0],
            ['mamh'=>6, 'maqth'=>6,'diemtb_mon'=>0],
            ['mamh'=>6, 'maqth'=>7,'diemtb_mon'=>0],

            // môn ngoại ngữ
            ['mamh'=>7, 'maqth'=>1,'diemtb_mon'=>0],
            ['mamh'=>7, 'maqth'=>4,'diemtb_mon'=>0],
            ['mamh'=>7, 'maqth'=>5,'diemtb_mon'=>0],
            ['mamh'=>7, 'maqth'=>6,'diemtb_mon'=>0],
            ['mamh'=>7, 'maqth'=>7,'diemtb_mon'=>0],

            // môn lịch sử
            ['mamh'=>8, 'maqth'=>1,'diemtb_mon'=>0],
            ['mamh'=>8, 'maqth'=>4,'diemtb_mon'=>0],
            ['mamh'=>8, 'maqth'=>5,'diemtb_mon'=>0],
            ['mamh'=>8, 'maqth'=>6,'diemtb_mon'=>0],
            ['mamh'=>8, 'maqth'=>7,'diemtb_mon'=>0],

            // môn địa lý
            ['mamh'=>9, 'maqth'=>1,'diemtb_mon'=>0],
            ['mamh'=>9, 'maqth'=>4,'diemtb_mon'=>0],
            ['mamh'=>9, 'maqth'=>5,'diemtb_mon'=>0],
            ['mamh'=>9, 'maqth'=>6,'diemtb_mon'=>0],
            ['mamh'=>9, 'maqth'=>7,'diemtb_mon'=>0],

            // môn giáo dục công dân 
            ['mamh'=>10, 'maqth'=>1,'diemtb_mon'=>0],
            ['mamh'=>10, 'maqth'=>4,'diemtb_mon'=>0],
            ['mamh'=>10, 'maqth'=>5,'diemtb_mon'=>0],
            ['mamh'=>10, 'maqth'=>6,'diemtb_mon'=>0],
            ['mamh'=>10, 'maqth'=>7,'diemtb_mon'=>0],
            
        ]);
    }
}

class ctbdmSeeder extends Seeder
{
    public function run()
    {
        DB::table('ct_bangdiemmons')->insert([
            ['mabdm'=> 1, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 1, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 1, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 2, 'lhkt'=>1,'diem'=>7.5],
            ['mabdm'=> 2, 'lhkt'=>2,'diem'=>9],
            ['mabdm'=> 2, 'lhkt'=>3,'diem'=>8.8],

            ['mabdm'=> 3, 'lhkt'=>1,'diem'=>6],
            ['mabdm'=> 3, 'lhkt'=>2,'diem'=>5],
            ['mabdm'=> 3, 'lhkt'=>3,'diem'=>8],

            ['mabdm'=> 4, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 4, 'lhkt'=>2,'diem'=>7.5],
            ['mabdm'=> 4, 'lhkt'=>3,'diem'=>7.2],

            ['mabdm'=> 5, 'lhkt'=>1,'diem'=>6],
            ['mabdm'=> 5, 'lhkt'=>2,'diem'=>7.5],
            ['mabdm'=> 5, 'lhkt'=>3,'diem'=>8],

            ['mabdm'=> 6, 'lhkt'=>1,'diem'=>9],
            ['mabdm'=> 6, 'lhkt'=>2,'diem'=>10],
            ['mabdm'=> 6, 'lhkt'=>3,'diem'=>9.5],

            ['mabdm'=> 7, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 7, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 7, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 8, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 8, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 8, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 9, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 9, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 9, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 10, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 10, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 10, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 11, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 11, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 11, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 12, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 12, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 12, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 13, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 13, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 13, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 14, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 14, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 14, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 15, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 15, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 15, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 16, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 16, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 16, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 17, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 17, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 17, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 18, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 18, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 18, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 19, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 19, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 19, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 20, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 20, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 20, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 21, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 21, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 21, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 22, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 22, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 22, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 23, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 23, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 23, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 24, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 24, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 24, 'lhkt'=>3,'diem'=>7.8],

            ['mabdm'=> 25, 'lhkt'=>1,'diem'=>7],
            ['mabdm'=> 25, 'lhkt'=>2,'diem'=>8.5],
            ['mabdm'=> 25, 'lhkt'=>3,'diem'=>7.8],


            
        ]);
    }
}
*/


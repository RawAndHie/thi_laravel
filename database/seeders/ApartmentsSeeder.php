<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'2 PHÒNG NGỦ',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/07/10/20210710082722-6d6b_wm.jpg',
                'status'=>'Chưa bán',

            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn 53m2 tòa T8, T9 giá 1,9 - 21 tỷ bao phí tùy tầng hướng',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518164005-fd57_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn 75m2 tòa T1, 4, 5, 6, 7 giá 2,7 - 2,85 tỷ bao phí.',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518164007-eb22_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn 87m2 căn hoa hậu tòa T5, 6, 7, giá 3,25 - 3,35 tỷ bao phí tùy tầng hướng.',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518164009-f6f4_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn 90m2, tầng trung, tòa T4, 5, 6, 7, giá 3,0 - 3,1 tỷ bao phí, full đồ.',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518164009-acd7_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn 94.4m2, tầng trung, tòa T1, giá 3,25 tỷ, bao phí, gần như full đồ.',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518164009-8aa1_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn 94.4m2, tầng trung, hướng Nam, T4, sửa rất đẹp, full đồ đẹp, xịn, giá 3,45 tỷ bao phí.',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518164010-63a0_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn 109m2, tầng đẹp, tòa T3, giá 3,65 tỷ bao phí, full nội thất đẹp.',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518164036-171a_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn góc 97,5m2, view nhạc nước, giá chỉ 3,530 tỷ bao phí, nhà mới.',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518164036-eba7_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn góc 3 phòng ngủ, 110m2, giá 4,2 - 4,5 tỷ bao phí.',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518164103-2f69_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn 3 phòng ngủ, tòa T11, tầng trung, giá 4,4 - 4,5 tỷ bao phí.',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518164104-236e_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn 80,1m2, tòa Park 7, giá 3,45 tỷ bao phí.',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518164419-3c06_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn 115m2, view và thiết kế siêu đẹp, tòa P7, giá 4,9 tỷ.',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518164421-9130_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn góc Đông Nam 4 phòng ngủ, tòa P8, tầng đẹp, giá 7,5 tỷ.',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518164421-4993_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn 79m2, tòa P12, giá 3,45 tỷ bao phí.',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518164421-c46e_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn góc Đông Nam tòa Park 9, giá 5,6 tỷ bao phí, full đồ đẹp.',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518164422-1f87_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn 115m2, view và thiết kế siêu đẹp, tòa P7, giá 4,9 tỷ.',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518174556-05e1_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn góc Đông Nam 4 phòng ngủ, tòa P8, tầng đẹp, giá 7,5 tỷ',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518174556-ac3b_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn góc 97,5m2, view nhạc nước, giá chỉ 3,530 tỷ bao phí, nhà mới',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518174557-59eb_wm.jpg',
                'status'=>'Chưa bán'
            ],
            [
                'name'=> 'STUDIO 930TR, 2 PHÒNG NGỦ',
                'address'=>'VINHOMES SMART CITY',
                'price'=>'33.000.000/m2',
                'information'=>'Căn 70m2, view quảng trường Park Hill, giá 3,1 tỷ bao phí.r',
                'detail'=>'Dự án Vinhomes Smart City Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'image'=>'https://file4.batdongsan.com.vn/2021/05/18/20210518174559-1916_wm.jpg',
                'status'=>'Chưa bán'
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

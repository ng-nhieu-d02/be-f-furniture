<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loai')->insert([
            'ten_loai'      => 'Bàn',
            'thu_tu'      => '0',
        ]);
        DB::table('loai')->insert([
            'ten_loai'      => 'Ghế',
            'thu_tu'      => '1',
        ]);
        DB::table('loai')->insert([
            'ten_loai'      => 'Giường',
            'thu_tu'      => '2',
        ]);
        DB::table('loai')->insert([
            'ten_loai'      => 'Đèn',
            'thu_tu'      => '3',
        ]);
        DB::table('san_pham')->insert([
            'ma_loai'      => 2,
            'ten_san_pham'      => 'Armchair Royal màu đỏ 2041/17',
            'don_gia'   => 11900000,
            'giam_gia'  => 0,
            'hinh'      => 'https://nhaxinh.com/wp-content/uploads/2022/07/Armchair-Royal-mau-do-204117-600x400.jpg',
            'luot_xem'  => 0,
            'luot_ban'  => 0,
            'mo_ta'     => 'Armchair Royal màu đỏ 2041/17 sở hữu phần chân kim loại 2 màu cùng với lớp nệm bọc vải cao cấp lý tưởng cho không gian phòng khách tăng sự sang trọng, đẳng cấp của những ngôi nhà hiện đại đáp ứng nhu cầu người dùng về chất liệu đem lại cảm giác thoải mái khi ngồi và sắc đỏ quyến rũ, hợp thời trang.'
        ]);
        DB::table('san_pham')->insert([
            'ma_loai'      => 2,
            'ten_san_pham'      => 'Sofa 3 chỗ Penny vải xanh A2',
            'don_gia'   => 26900000,
            'giam_gia'  => 0,
            'hinh'      => 'https://nhaxinh.com/wp-content/uploads/2021/10/17-1-600x400.jpg',
            'luot_xem'  => 0,
            'luot_ban'  => 0,
            'mo_ta'     => 'Armchair Royal màu đỏ 2041/17 sở hữu phần chân kim loại 2 màu cùng với lớp nệm bọc vải cao cấp lý tưởng cho không gian phòng khách tăng sự sang trọng, đẳng cấp của những ngôi nhà hiện đại đáp ứng nhu cầu người dùng về chất liệu đem lại cảm giác thoải mái khi ngồi và sắc đỏ quyến rũ, hợp thời trang.'
        ]);
        DB::table('san_pham')->insert([
            'ma_loai'      => 2,
            'ten_san_pham'      => 'Sofa Tonic 3 chỗ và 2 armchair hiện đại da nâu',
            'don_gia'   => 115900000,
            'giam_gia'  => 0,
            'hinh'      => 'https://nhaxinh.com/wp-content/uploads/2021/10/sofa-nova-da_nau-3.1.1-600x400.jpg',
            'luot_xem'  => 0,
            'luot_ban'  => 0,
            'mo_ta'     => 'Armchair Royal màu đỏ 2041/17 sở hữu phần chân kim loại 2 màu cùng với lớp nệm bọc vải cao cấp lý tưởng cho không gian phòng khách tăng sự sang trọng, đẳng cấp của những ngôi nhà hiện đại đáp ứng nhu cầu người dùng về chất liệu đem lại cảm giác thoải mái khi ngồi và sắc đỏ quyến rũ, hợp thời trang.'
        ]);
        DB::table('san_pham')->insert([
            'ma_loai'      => 3,
            'ten_san_pham'      => 'Giường ngủ bọc da Mây 1m6 Fango',
            'don_gia'   => 28000000,
            'giam_gia'  => 0,
            'hinh'      => 'https://nhaxinh.com/wp-content/uploads/2021/10/giuong-may-xam2-600x400.jpg',
            'luot_xem'  => 0,
            'luot_ban'  => 0,
            'mo_ta'     => 'Giường ngủ bọc da Mây là sự kết hợp giữa thân giường chính bằng gỗ tràm, bọc da và nhấn bằng chất liệu mây cho phần đầu giường. Màu sắc trầm giúp không gian phòng ngủ ấm cúng và gần gũi hơn. Giường Mây có 2 kích thước 1m6 và 1m8.'
        ]);
        DB::table('san_pham')->insert([
            'ma_loai'      => 3,
            'ten_san_pham'      => 'Giường ngủ gỗ Dixie 1m8',
            'don_gia'   => 78000000,
            'giam_gia'  => 0,
            'hinh'      => 'https://nhaxinh.com/wp-content/uploads/2021/10/giuong-ngu-dixie.jpg',
            'luot_xem'  => 0,
            'luot_ban'  => 0,
            'mo_ta'     => 'Giường ngủ gỗ Dixie 1m8 được nhập khẩu từ thương hiệu nổi tiếng Calligaris của Ý, với thiết kế độc đáo, sang trọng, chân inox hiện đại, màu sắc trung tính cho không gian phòng ngủ thêm tinh tế hiện đại.'
        ]);
        DB::table('san_pham')->insert([
            'ma_loai'      => 4,
            'ten_san_pham'      => 'Đèn bàn Lombard 107338E',
            'don_gia'   => 17000000,
            'giam_gia'  => 0,
            'hinh'      => 'https://nhaxinh.com/wp-content/uploads/2022/05/Den-Ban-Lombard-107338E-3105570-600x354.jpg',
            'luot_xem'  => 0,
            'luot_ban'  => 0,
            'mo_ta'     => 'Nguyễn Nhiều'
        ]);
        DB::table('san_pham')->insert([
            'ma_loai'      => 4,
            'ten_san_pham'      => 'Nến led màu trắng 15cm',
            'don_gia'   => 590000,
            'giam_gia'  => 0,
            'hinh'      => 'https://nhaxinh.com/wp-content/uploads/2021/10/100008_1000-6-600x400.jpg',
            'luot_xem'  => 0,
            'luot_ban'  => 0,
            'mo_ta'     => 'Nguyễn Nhiều'
        ]);
        DB::table('san_pham')->insert([
            'ma_loai'      => 4,
            'ten_san_pham'      => 'Đèn bàn màu trắng hình con ngựa 49760',
            'don_gia'   => 2500000,
            'giam_gia'  => 0,
            'hinh'      => 'https://nhaxinh.com/wp-content/uploads/2022/07/Den-ban-hinh-con-ngua-49760-600x387.jpg',
            'luot_xem'  => 0,
            'luot_ban'  => 0,
            'mo_ta'     => 'Nguyễn Nhiều'
        ]);
        DB::table('san_pham')->insert([
            'ma_loai'      => 1,
            'ten_san_pham'      => 'Bàn làm việc Finn 260011',
            'don_gia'   => 25000000,
            'giam_gia'  => 0,
            'hinh'      => 'https://nhaxinh.com/wp-content/uploads/2022/06/Ban-lam-viec-Pinn-260011.jpg',
            'luot_xem'  => 0,
            'luot_ban'  => 0,
            'mo_ta'     => 'Bàn làm việc Skagen được làm bằng khung gỗ Walnut đặc, cánh tủ đóng mở nhẹ nhàng, chân tủ dễ dàng tháo lắp khi cần di chuyển. Với đường nét gia công tỉ mỉ, Bàn làm việc Skagen sẽ là điểm nổi bật cho vị trí làm việc trong ngôi nhà của bạn.'
        ]);
        DB::table('san_pham')->insert([
            'ma_loai'      => 1,
            'ten_san_pham'      => 'Bàn làm việc Skagen',
            'don_gia'   => 12000000,
            'giam_gia'  => 0,
            'hinh'      => 'https://nhaxinh.com/wp-content/uploads/2021/10/3_91313_2.jpg',
            'luot_xem'  => 0,
            'luot_ban'  => 0,
            'mo_ta'     => 'Bàn làm việc Skagen được làm bằng khung gỗ Walnut đặc, cánh tủ đóng mở nhẹ nhàng, chân tủ dễ dàng tháo lắp khi cần di chuyển. Với đường nét gia công tỉ mỉ, Bàn làm việc Skagen sẽ là điểm nổi bật cho vị trí làm việc trong ngôi nhà của bạn.'
        ]);
        DB::table('san_pham')->insert([
            'ma_loai'      => 1,
            'ten_san_pham'      => 'Bàn đầu giường Mây mẫu 2',
            'don_gia'   => 5400000,
            'giam_gia'  => 0,
            'hinh'      => 'https://nhaxinh.com/wp-content/uploads/2021/10/ban-dau-giuong-may-600x400.jpg',
            'luot_xem'  => 0,
            'luot_ban'  => 0,
            'mo_ta'     => 'Bàn làm việc Skagen được làm bằng khung gỗ Walnut đặc, cánh tủ đóng mở nhẹ nhàng, chân tủ dễ dàng tháo lắp khi cần di chuyển. Với đường nét gia công tỉ mỉ, Bàn làm việc Skagen sẽ là điểm nổi bật cho vị trí làm việc trong ngôi nhà của bạn.'
        ]);
    }
}

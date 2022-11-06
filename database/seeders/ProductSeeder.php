<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'ac_id' => 1,
                'cate_id' => 2,
                'publisher_id' => 1,
                'author_id' => 1,
                'product_name' => 'Công Thức Thành Công - Những Bí Quyết Thành Công Vượt Thời Gian Của Napoleon Hill',
                'describe' => '“Nếu là vài năm trước đây, tôi đã không thể viết quyển sách này, bởi như Henry David Thoreau đã viết: “Thật hão huyền khi ngồi viết sách trong khi bạn còn chưa trải nghiệm cuộc sống”\"\r\n\r\nTuy nhiên, từ khi may mắn được sống một cuộc đời mà nhiều người mơ ước, tác giả đã quyết định viết ra để những người khác có thể học hỏi từ quyển sách này – cũng giống như ông đã học được từ những người khác.\r\n\r\nDon M. Green là một món quà quý giá cho những ai từng gặp gỡ ông. Và bây giờ bạn cũng sẽ có cơ hội nhận được món quà đó vì bạn đang cầm trên tay quyển sách Công thức thành công – Những bí quyết thành công vượt thời gian của Napoleon Hill. Trong quyển sách này, Don đã chia sẻ câu chuyện cuộc đời ông, một minh chứng cho thấy rằng dù chỉ được thụ hưởng một nền giáo dục “khiêm tốn” nhất, thì bạn vẫn có thể vươn đến một cuộc đời đầy thành tựu vĩ đại.\r\n\r\nDon đã tiết lộ những bí mật và cách thức để đạt được thành công, đúc kết từ những giai thoại hay tiểu sử của những người thành công đã có ảnh hưởng rất lớn đến ông. Ông chia sẻ những viên ngọc quý từ những người thầy vĩ đại đó, kèm thêm kinh nghiệm của chính bản thân ông, với một cách tiếp cận gần gũi và dễ hiểu nhất để đưa bạn đến với thành tựu vĩ đại nhất của bạn. Bạn sẽ bật cười khi ông kể chuyện chú gấu cưng của ông đào tẩu lúc ông có ý tưởng khởi nghiệp đầu tiên trong đời – mở một sở thú và quầy lưu niệm. Rồi bạn sẽ thấy những ý tưởng khởi nghiệp đã sớm nảy nở thế nào trong cuộc đời đầy thành công và những thành tích ấn tượng của ông trong ngành công nghiệp dịch vụ thương mại. Ông trở thành chủ tịch và CEO của ngân hàng từ khi còn rất trẻ, 41 tuổi. Ngày nay, ông là CEO của Quỹ Napoleon Hill. Don làm việc không ngừng nghỉ để quảng bá những lời dạy của Napoleon Hill trên toàn thế giới, truyền cảm hứng và kiến tạo nên một thế hệ các doanh nhân và những người thành đạt mới. Sự đóng góp mà không bao giờ đòi hỏi được công nhận của ông cho thế giới này là một minh chứng cho sự thành công và cuộc đời cống hiến tận tụy của ông để giúp đỡ người khác. Hãy đọc Công thức thành công – Những bí quyết thành công vượt thời gian của Napoleon Hill và khi bạn đã hiểu về con người này, bạn sẽ nhận ra con đường dẫn đến thành công của chính mình.\r\n',
                'product_price' => '85000',
                'size' => '14 x 20.5',
                'translater' => 'Không có',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_180851.jpg',
                'year_of_manufacture' => '2022',
                'number_of_pages' => '201',
            ],

        );
        DB::table('products')->insert($data);
    }
}

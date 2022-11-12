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
                'describe' => '“Nếu là vài năm trước đây, tôi đã không thể viết quyển sách này, bởi như Henry David Thoreau đã viết: “Thật hão huyền khi ngồi viết sách trong khi bạn còn chưa trải nghiệm cuộc sống”"

                Tuy nhiên, từ khi may mắn được sống một cuộc đời mà nhiều người mơ ước, tác giả đã quyết định viết ra để những người khác có thể học hỏi từ quyển sách này – cũng giống như ông đã học được từ những người khác.
                
                Don M. Green là một món quà quý giá cho những ai từng gặp gỡ ông. Và bây giờ bạn cũng sẽ có cơ hội nhận được món quà đó vì bạn đang cầm trên tay quyển sách Công thức thành công – Những bí quyết thành công vượt thời gian của Napoleon Hill. Trong quyển sách này, Don đã chia sẻ câu chuyện cuộc đời ông, một minh chứng cho thấy rằng dù chỉ được thụ hưởng một nền giáo dục “khiêm tốn” nhất, thì bạn vẫn có thể vươn đến một cuộc đời đầy thành tựu vĩ đại.
                
                Don đã tiết lộ những bí mật và cách thức để đạt được thành công, đúc kết từ những giai thoại hay tiểu sử của những người thành công đã có ảnh hưởng rất lớn đến ông. Ông chia sẻ những viên ngọc quý từ những người thầy vĩ đại đó, kèm thêm kinh nghiệm của chính bản thân ông, với một cách tiếp cận gần gũi và dễ hiểu nhất để đưa bạn đến với thành tựu vĩ đại nhất của bạn. Bạn sẽ bật cười khi ông kể chuyện chú gấu cưng của ông đào tẩu lúc ông có ý tưởng khởi nghiệp đầu tiên trong đời – mở một sở thú và quầy lưu niệm. Rồi bạn sẽ thấy những ý tưởng khởi nghiệp đã sớm nảy nở thế nào trong cuộc đời đầy thành công và những thành tích ấn tượng của ông trong ngành công nghiệp dịch vụ thương mại. Ông trở thành chủ tịch và CEO của ngân hàng từ khi còn rất trẻ, 41 tuổi. Ngày nay, ông là CEO của Quỹ Napoleon Hill. Don làm việc không ngừng nghỉ để quảng bá những lời dạy của Napoleon Hill trên toàn thế giới, truyền cảm hứng và kiến tạo nên một thế hệ các doanh nhân và những người thành đạt mới. Sự đóng góp mà không bao giờ đòi hỏi được công nhận của ông cho thế giới này là một minh chứng cho sự thành công và cuộc đời cống hiến tận tụy của ông để giúp đỡ người khác. Hãy đọc Công thức thành công – Những bí quyết thành công vượt thời gian của Napoleon Hill và khi bạn đã hiểu về con người này, bạn sẽ nhận ra con đường dẫn đến thành công của chính mình.
                ',
                'product_price' => '85000',
                'size' => '14 x 20.5',
                'translater' => 'Không có',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_180851.jpg',
                'year_of_manufacture' => '2022',
                'number_of_pages' => '201',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 2,
                'publisher_id' => 2,
                'author_id' => 2,
                'product_name' => 'Jeff Bezos Và Kỷ Nguyên Amazon (Tái Bản 2019)',
                'describe' => 'Amazon là câu chuyện của một người sáng lập đầy tài năng đã hoàn toàn tự mình định hướng tầm nhìn chiến lược,” Eric Schmidt, chủ tịch của Google – một đối thủ cạnh tranh trực tiếp của Amazon, phát biểu. Chính bản thân ông cũng là thành viên của dịch vụ Amazon Prime – giao hàng trong hai ngày của Amazon. “Sẽ chẳng có ví dụ nào hay hơn. Có lẽ chỉ có thể là Apple, nhưng người ta quên rằng hầu hết mọi người tin Amazon đã sụp đổ do không đạt được quy mô kinh doanh cần thiết để trang trải kết cấu chi phí. Công ty liên tục thua lỗ hàng trăm triệu đô la. Nhưng Jeff quả thực là người có tài ăn nói và rất thông minh. Ông là một mẫu người sáng lập doanh nghiệp có chuyên môn điển hình nên hiểu từng chi tiết nhỏ nhất và cẩn trọng xem xét mọi khía cạnh hơn bất kỳ ai.”

                Mặc dù giá cổ phiếu của công ty tăng cao chóng mặt trong thời gian gần đây, nhưng Amazon vẫn là công ty ẩn chứa những vấn đề kỳ lạ. Những chỉ số quan trọng trên bảng cân đối kế toán nổi tiếng là thiếu sức sống, và việc mở rộng vào thị trường và phân mục sản phẩm mới thậm chí khiến công ty có kết quả kinh doanh thua lỗ trong năm 2012. Nhưng Phố Wall dường như không quan tâm đến số liệu này. Jeff Bezos đưa ra những tuyên bố mạnh mẽ về việc đầu tư xây dựng công ty dài hạn nên tạo dựng lòng tin từ những cổ đông. Những nhà đầu tư sẵn sàng kiên nhẫn chờ đợi một ngày Jeff quyết định chậm lại quá trình mở rộng và nhận được lợi nhuận bền vững.
                
                Bezos hoàn toàn không để ý tới ý kiến của người khác. Ông có khả năng giải quyết vấn đề, có tầm nhìn bao quát của một vị tướng chỉ huy trong cuộc chiến cạnh tranh và luôn hướng tới làm hài lòng khách hàng và cung cấp dịch vụ như giao hàng miễn phí. Ông có những tham vọng vô cùng lớn – không chỉ đối với Amazon, mà còn để thúc đẩy mở rộng giới hạn của khoa học và xây dựng lại lĩnh vực truyền thông. Không chỉ thành lập công ty nghiên cứu vũ trụ Blue Origin của riêng mình, Bezos còn thâu tóm tờ báo gặp khó khăn Washington Postvào tháng 8 năm 2013 với giá 250 triệu đô la, một thương vụ gây choáng váng cho giới truyền thông.
                
                Như nhiều nhân viên dưới quyền chứng thực, làm việc với Bezos rất khó khăn và vất vả. Mặc dù, nổi tiếng với nụ cười nồng nhiệt và vui vẻ, Bezos có thể nổi giận gay gắt giống như người sáng lập của Apple, Steve Jobs, người có thể làm khiếp sợ bất kỳ nhân viên nào bước vào thang máy cùng ông. Bezos theo chủ nghĩa lãnh đạo hoàn hảo, quan tâm theo dõi đến từng chi tiết nhỏ nhất, liên tục cho ra những ý tưởng mới và phản ứng gay gắt với những nỗ lực làm việc không đáp ứng những yêu cầu nghiêm ngặt của ông.
                
                Giống như Jobs, Bezos thuộc tuýp người có khả năng bóp méo thực tại – vẽ ra viễn cảnh tươi sáng đầy thuyết phục nhưng rút cuộc thì lại chẳng mấy khi khiến họ thỏa mãn về công ty. Ông thường nói rằng sứ mệnh của Amazon là “phải nâng cao chuẩn mực trong các lĩnh vực và trên toàn thế giới với mục tiêu tập trung hướng tới khách hàng.” Bezos và nhân viên thực sự tập trung hướng tới đem lại lợi ích cho khách hàng, nhưng đồng thời cũng cạnh tranh không ngừng với đối thủ và thậm chí với cả đối tác. Bezos thích nói rằng thị trường Amazon tham gia cạnh tranh kinh doanh rộng lớn với rất nhiều cơ hội cho nhiều công ty thành công. Điều này có lẽ đúng, nhưng rõ ràng Amazon góp phần gây thiệt hại hoặc phá hủy những đối thủ cạnh tranh dù có quy mô kinh doanh lớn hay nhỏ, rất nhiều trong số đó là những thương hiệu được thế giới biết đến như: Circuit City. Borders. Best Buy.Barnes & Noble.
                
                Người Mỹ nói chung cảm thấy lo lắng về việc tập trung sức mạnh của những tập đoàn lớn, đặc biệt khi các tập đoàn đó có trụ sở ở những thành phố xa xôi. Thành công của những công ty này có thể thay đổi phong cách sống của toàn cộng đồng dân cư. Walmart là trường hợp điển hình phải đối mặt với sự hoài nghi này cùng với những cái tên khác như Sears, Woolworth’s, và gã bán lẻ tạp phẩm khổng lồ A&P phải đối mặt với vụ kiện chống độc quyền có thể gây phá sản trong suốt những năm 1940. Người Mỹ đổ xô tới những nhà bán lẻ lớn vì sự tiện lợi và giá thành thấp. Nhưng ở một mức giá nhất định, những công ty này nhận được lợi nhuận lớn gây mâu thuẫn trong cộng đồng. Chúng tôi muốn hàng hóa giá rẻ, nhưng chúng tôi cũng không thực sự muốn bất kỳ ai phải từ bỏ những cửa hàng độc lập quy mô gia đình trên những con phố hoặc những cửa hàng sách nhỏ đã kinh doanh trong nhiều thập kỷ do sự phổ biến của chuỗi cửa hàng sách như Barnes & Noble và giờ đây là Amazon',
                'product_price' => '77000',
                'size' => '15.5 x 24',
                'translater' => 'Không có',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_190426.jpg',
                'year_of_manufacture' => '2019',
                'number_of_pages' => '403',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 2,
                'publisher_id' => 3,
                'author_id' => 3,
                'product_name' => 'Phong Cách Quản Trị Park Hang Seo - Bí Quyết Thành Công Của Doanh Nghiệp Hàn Quốc (Tái Bản 2019)',
                'describe' => 'Bóng đá, thực ra không khác kinh doanh hay vận hành một tổ chức thông thường là mấy.

                Bóng đá cần có cầu thủ như doanh nghiệp có những nguồn nhân lực; bóng đá cần có sự lựa chọn phương hướng và đường lối chơi bóng, có cách tiếp cận như trong kinh doanh; bóng đá không thể thoát khỏi phạm vi qui định của cuộc chơi cũng không khác gì những qui định pháp luật đặt ra cho kinh doanh; bóng đá không thể sống nếu thiếu người hâm mộ cũng như người tiêu dùng không thể thiếu với doanh nghiệp và... hàng trăm điều nữa. Nhưng tựu trung lại, điều quan trọng nhất vẫn là ban huấn luyện và huấn luyện viên (HLV) trưởng, đó chính là người lãnh đạo doanh nghiệp.
                
                Những chủ tịch tập đoàn hàng đầu trên thế giới đều nhận định thế kỷ 21 chính là thời đại mà vai trò của cá nhân, ban lãnh đạo có thể được đề cao hơn bao giờ hết, một người có thể nuôi sống vạn người, một cá nhân có thể thay đổi một cục diện và mang vinh quang về cho cả một tập thể. Chưa bao giờ mà vai trò của người lãnh đạo được đề cao như thời đại ngày nay.
                
                Rất nhiều doanh nghiệp Hàn Quốc rầm rộ đầu tư và làm ăn thành công tại Việt Nam, tôi cũng rất tò mò xem họ đang làm cách nào mà những con người Việt Nam dưới bàn tay quản lý của họ đều làm việc hiệu quả. Trong thể thao, thành công của vận động viên bắn súng Hoàng Xuân Vinh có sự giúp sức rất lớn của huấn luyện viên người Hàn Quốc đã thôi thúc tôi tìm hiểu nhiều hơn. Nhân dịp U23 tạo ra kỳ kích bởi một người Hàn Quốc khác, xin chia sẻ những triết lý, bí quyết của ban huấn luyện và của HLV trưởng Park Hang Seo để giúp doanh nghiệp, tổ chức mà người Việt đang vận hành tạo ra được những điều kỳ tích như U23 Việt Nam đã làm dưới bầu trời Trung Quốc.
                
                Dù thế, viết sách này, tôi không có ý tôn sùng cá nhân HLV Park Hang Seo hay bất cứ ai, ông ấy cũng là một con người và có nhiều nhược điểm. Hãy hiểu, quyết định của HLV Park Hang Seo cũng là quyết định của cả ban huấn luyện U23 và sự đồng lòng của một tập thể. Tôi chỉ muốn nói rằng HLV Park Hang Seo và ban huấn luyện đã làm thế và đã có những kết quả, và hy vọng những điều họ đã ứng dụng trong bóng đá, dù mới hay cũ, đều có thể là một cảm hứng cho chúng ta trong công việc kinh doanh. Tôi cũng viết những điều này với mong muốn sẽ tổng kết để chúng ta cùng học hỏi, vì chắc chắn ngày nào đó, ông cũng sẽ phải rời xa bóng đá Việt Nam vì một vài lý do nào đó. Và nếu coi ông là một người đáng học hỏi mà chúng ta không học thì chúng ta lại cứ phải thuê hết người nước ngoài này đến người nước ngoài khác về làm HLV mà không có sự tiến bộ nào.
                
                Và tôi xin nhắc lại, chiến thắng này là của một tập thể. Những nhân vật được nhắc trong quyển sách này, đơn giản chỉ là vì tác giả biết ở mức độ hạn hẹp, còn về mặt cá nhân, dù tất cả mọi con người trong ban huấn luyện, thành viên đoàn, cầu thủ U23 đều là những người tôi rất ngưỡng mộ về tài năng và tinh thần của họ.
                
                Về hình ảnh, tôi xin chân thành cảm ơn phóng viên Nguyên Khôi báo Tuổi trẻ đã đồng ý để tôi sử dụng một số hình ảnh của đội U23 Việt Nam trong sách này. Tôi cũng xin gửi lời cảm ơn tới các tác giả của những tư liệu và hình ảnh khác được sử dụng, vì lý do chưa tìm được nguồn gốc của những tư liệu, hình ảnh này nên tôi chưa có cơ hội để liên hệ xin phép. Mong được thể lượng bỏ qua sai sót này.
                
                Trân trọng cảm ơn anh Lê Viết Hải, Chủ tịch tập đoàn Hòa Bình đã tài trợ để quyển sách này ra đời.
                
                Tôi lại không phải là chuyên gia về bóng đá, cũng không phải là người có kinh nghiệm viết sách, kiến thức hạn hẹp, rất mong độc giả góp ý và bổ sung.
                
                ',
                'product_price' => '88000',
                'size' => '14 x 18',
                'translater' => '',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/2/0/2021_07_26_13_22_51_1-390x510.jpg',
                'year_of_manufacture' => '2019',
                'number_of_pages' => '236',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 3,
                'publisher_id' => 8,
                'author_id' => 11,
                'product_name' => 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh (Bản In Mới - 2018)',
                'describe' => 'Những câu chuyện nhỏ xảy ra ở một ngôi làng nhỏ: chuyện người, chuyện cóc, chuyện ma, chuyện công chúa và hoàng tử , rồi chuyện đói ăn, cháy nhà, lụt lội,... Bối cảnh là trường học, nhà trong xóm, bãi tha ma. Dẫn chuyện là cậu bé 15 tuổi tên Thiều. Thiều có chú ruột là chú Đàn, có bạn thân là cô bé Mận. Nhưng nhân vật đáng yêu nhất lại là Tường, em trai Thiều, một cậu bé học không giỏi. Thiều, Tường và những đứa trẻ sống trong cùng một làng, học cùng một trường, có biết bao chuyện chung. Chúng nô đùa, cãi cọ rồi yêu thương nhau, cùng lớn lên theo năm tháng, trải qua bao sự kiện biến cố của cuộc đời.
                Tác giả vẫn giữ cách kể chuyện bằng chính giọng trong sáng hồn nhiên của trẻ con. 81 chương ngắn là 81 câu chuyện hấp dẫn với nhiều chi tiết thú vị, cảm động, có những tình tiết bất ngờ, từ đó lộ rõ tính cách người. Cuốn sách, vì thế, có sức ám ảnh.',
                'product_price' => '125000',
                'size' => '13 x 20',
                'translater' => 'Không',
                'image' => 'https://tse3.mm.bing.net/th?id=OIP.r-NiNQ30OftHyF0ZdcYnmQHaHa&pid=Api&P=0',
                'year_of_manufacture' => '2018',
                'number_of_pages' => '376',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 3,
                'publisher_id' => 5,
                'author_id' => 5,
                'product_name' => 'Nhà Giả Kim (Tái Bản 2020)',
                'describe' => 'Tất cả những trải nghiệm trong chuyến phiêu du theo đuổi vận mệnh của mình đã giúp Santiago thấu hiểu được ý nghĩa sâu xa nhất của hạnh phúc, hòa hợp với vũ trụ và con người. 

                Tiểu thuyết Nhà giả kim của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt của cuốn sách dành cho toàn nhân loại, vượt ra ngoài biên giới quốc gia, Nhà giả kim đã làm rung động hàng triệu tâm hồn, trở thành một trong những cuốn sách bán chạy nhất mọi thời đại, và có thể làm thay đổi cuộc đời người đọc.
                
                “Nhưng nhà luyện kim đan không quan tâm mấy đến những điều ấy. Ông đã từng thấy nhiều người đến rồi đi, trong khi ốc đảo và sa mạc vẫn là ốc đảo và sa mạc. Ông đã thấy vua chúa và kẻ ăn xin đi qua biển cát này, cái biển cát thường xuyên thay hình đổi dạng vì gió thổi nhưng vẫn mãi mãi là biển cát mà ông đã biết từ thuở nhỏ. Tuy vậy, tự đáy lòng mình, ông không thể không cảm thấy vui trước hạnh phúc của mỗi người lữ khách, sau bao ngày chỉ có cát vàng với trời xanh nay được thấy chà là xanh tươi hiện ra trước mắt. ‘Có thể Thượng đế tạo ra sa mạc chỉ để cho con người biết quý trọng cây chà là,’ ông nghĩ.”
                
                - Trích Nhà giả kim
                
                Nhận định
                
                “Sau Garcia Márquez, đây là nhà văn Mỹ Latinh được đọc nhiều nhất thế giới.” - The Economist, London, Anh
                
                 
                
                “Santiago có khả năng cảm nhận bằng trái tim như Hoàng tử bé của Saint-Exupéry.” - Frankfurter Allgemeine Zeitung, Đức
                ',
                'product_price' => '65000',
                'size' => '20.5 x 13 cm',
                'translater' => 'Không',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg',
                'year_of_manufacture' => '2020',
                'number_of_pages' => '227',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 3,
                'publisher_id' => 6,
                'author_id' => 6,
                'product_name' => 'Bố Già (Đông A)',
                'describe' => 'Thế giới ngầm được phản ánh trong tiểu thuyết Bố già là sự gặp gỡ giữa một bên là ý chí cương cường và nền tảng gia tộc chặt chẽ theo truyền thống mafia xứ Sicily với một bên là xã hội Mỹ nhập nhằng đen trắng, mảnh đất màu mỡ cho những cơ hội làm ăn bất chính hứa hẹn những món lợi kếch xù. Trong thế giới ấy, hình tượng Bố già được tác giả dày công khắc họa đã trở thành bức chân dung bất hủ trong lòng người đọc. Từ một kẻ nhập cư tay trắng đến ông trùm tột đỉnh quyền uy, Don Vito Corleone là con rắn hổ mang thâm trầm, nguy hiểm khiến kẻ thù phải kiềng nể, e dè, nhưng cũng được bạn bè, thân quyến xem như một đấng toàn năng đầy nghĩa khí. Nhân vật trung tâm ấy đồng thời cũng là hiện thân của một pho triết lí rất “đời” được nhào nặn từ vốn sống của hàng chục năm lăn lộn giữa chốn giang hồ bao phen vào sinh ra tử, vì thế mà có ý kiến cho rằng “Bố già là sự tổng hòa của mọi hiểu biết. Bố già là đáp án cho mọi câu hỏi”.

                Với cấu tứ hoàn hảo, cốt truyện không thiếu những pha hành động gay cấn, tình tiết bất ngờ và không khí kình địch đến nghẹt thở, Bố già xứng đáng là đỉnh cao trong sự nghiệp văn chương của Mario Puzo. Và như một cơ duyên đặc biệt, ngay từ năm 1971-1972, Bố già đã đến với bạn đọc trong nước qua phong cách chuyển ngữ hào sảng, đậm chất giang hồ của dịch giả Ngọc Thứ Lang.
                
                Năm 2014, Đông A giới thiệu tới bạn đọc tác phẩm Bố già có bản quyền chính thức tại Việt Nam qua bản dịch lôi cuốn, hấp dẫn của Ngọc Thứ Lang.
                
                Vài nét về tác giả:
                
                Mario Puzo (1920 - 1999) là nhà văn, nhà biên kịch người Mỹ gốc Italy nổi tiếng với nhiều tiểu thuyết về đề tài mafia và tội phạm. Bố già (The Godfather) xuất bản năm 1969 là đỉnh cao của dòng văn chương hư cấu này, đồng thời là tác phẩm đưa Puzo lên tột đỉnh vinh quang. Đây cũng là một trong những tiểu thuyết bán chạy nhất mọi thời đại. Ngoài Bố già, Mario Puzo còn nổi tiếng với các tiểu thuyết khác như Sicilian khúc ca bi tráng, Luật im lặng, Ông trùm quyền lực cuối cùng, Gia đình Giáo hoàng…
                
                Vài nét về dịch giả:
                
                Ngọc Thứ Lang tên thật là Nguyễn Ngọc Tú, biệt danh là công tử Bắc Kỳ, vào Sài Gòn lập nghiệp khoảng năm 1950. Ngọc Thứ Lang là dịch giả của thời kì trước năm 1975, đã chuyển ngữ nhiều tác phẩm nhưng có lẽ Bố già là một dấu son trong sự nghiệp của ông.
                
                Năm 1972, bản dịch Bố già của Ngọc Thứ Lang chuyển ngữ từ nguyên bản tiếng Anh ra mắt và đã thu hút được sự chú ý của rất nhiều độc giả. Nếu như The Godfather của Mario Puzo khi vừa xuất bản đã nằm trong danh sách sách bán chạy nhất suốt 67 tuần thì Bố già của Ngọc Thứ Lang cũng “làm mưa làm gió” trên thị trường văn học dịch của Sài Gòn những năm 70 của thế kỉ trước.
                
                Cái hay, cái khiến người đọc say mê Bố già có lẽ nằm ở chính giọng văn đậm chất giang hồ súng đạn của người dịch. Và bản thân cái tên Bố già cũng là một sáng tạo vô tiền khoáng hậu của Ngọc Thứ Lang. Nhiều độc giả Việt Nam nói rằng nếu đọc The Godfather của Mario Puzo, hãy tìm đúng bản dịch của Ngọc Thứ Lang để thấy chất đàn ông trong đó…
                
                Nhận xét về tác phẩm:
                
                “Bố già là sự tổng hòa của mọi hiểu biết. Bố già là đáp án cho mọi câu hỏi.” - Diễn viên Tom Hanks
                
                “Bạn không thể dừng đọc nó và khó lòng ngừng mơ về nó.” - New York Times Magazine
                
                “Một tác phẩm kinh điển về mafia… Tự bản thân nó đã tạo ra một thứ bùa mê hoặc độc giả.”- The Times
                ',
                'product_price' => '104000',
                'size' => '21 x 15',
                'translater' => '',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/8/9/8936071673381.jpg',
                'year_of_manufacture' => '2016',
                'number_of_pages' => '642',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 10,
                'publisher_id' => 7,
                'author_id' => 7,
                'product_name' => 'Cách Nuôi Dạy Một Đứa Trẻ Có Trái Tim Ấm Áp (Tái Bản 2021)',
                'describe' => 'Thế nào là một trái tim ấm áp? Nếu được hỏi “Bạn có trái tim ấm áp không?” – các bạn sẽ trả lời thế nào?

                Một trái tim ấm áp là một trái tim biết thấu hiểu cảm xúc của đối phương, biết suy nghĩ trên lập trường của đối phương – hay nói cách khác là một trái tim biết quan tâm.
                
                Điều này cũng đúng với quan hệ vợ chồng. Khi chồng suy xét đến tâm trạng, lập trường của vợ, và ngược lại vợ cũng để ý tới cảm xúc của chồng, giữa hai người sẽ có bầu không khí ấm áp và cuộc sống chung sẽ luôn thuận hòa. Tuy nhiên, trong lòng mỗi người luôn có những biến chuyển gây cản trở đến điều đó. Những biến chuyển đó được gọi là tính coi mình là trung tâm hay sự ích kỷ.
                
                Tính ích kỷ được thể hiện càng rõ khi càng ít tuổi. Cần phải rèn giũa để dần dần, những đứa trẻ ích kỷ biết thấu hiểu cảm xúc của đối phương cũng như biết nghĩ trên lập trường của đối phương.
                
                Ví dụ, chúng ta hãy thử nghĩ về một em bé 1,5 tuổi. Ở lứa tuổi này, những hành động dựa trên nhu cầu khám phá, hay nói cách khác là “nghịch ngợm” xảy ra nhiều. Các bé nhất định muốn chạm vào một vật mới gì đó lọt vào mắt mình. Tuy nhiên, vì bé chưa rõ cách xử trí với đồ vật này, cộng thêm việc chưa có đủ sự khéo léo nên bé dễ làm hư hỏng, gây nhiều phiền toái cho người lớn.
                
                Trong trường hợp này, đáng lẽ cần cảm thông nhưng người lớn lại thường nổi giận với trẻ. Thái độ tức giận đó của người lớn không hề xuất phát từ lập trường của trẻ. Nhu cầu khám phá của trẻ, cũng giống như tinh thần học hỏi của người lớn, là hành động không thể thiếu cho sự phát triển động lực tự thân của trẻ, nên cần phải chấp nhận những trò nghịch đó.
                
                Và ngược lại, cũng cần phải làm cho trẻ biết đứng trên lập trường của người lớn, thấu hiểu cảm xúc của người lớn. Khi trẻ sờ vào những vật quan trọng của người lớn, cần phải liên tục nghiêm túc nói với trẻ “Đây là đồ quan trọng của mẹ đấy, rất quan trọng”.
                
                Dựa vào ngữ điệu mà trẻ sẽ hiểu cảm xúc của cha mẹ nên sẽ cẩn trọng với những món đồ đó, dần dần nghĩ đó là “vật quan trọng”. Đối với các con, hãy cho con biết nó quan trọng bằng cách nhắc nhiều về hai từ “quan trọng, quan trọng”, cuối cùng tôi đưa tay ra nói “Trả lại cho bố/mẹ nào”, con liền đưa trả và nói “Đây”. Đương nhiên, bạn không được quên câu “Cảm ơn con”.
                
                Cứ như vậy, bắt đầu từ những điều nhỏ nhất, bạn sẽ dạy cho con về những thứ quan trọng với người lớn, và trẻ cũng sẽ hiểu được nếu không chạm vào những thứ đó sẽ nhận sự biết ơn từ người lớn.
                ',
                'product_price' => '95000',
                'size' => '20.5 x 13 cm',
                'translater' => 'Lê Phạm Dạ Hương',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_234136.jpg',
                'year_of_manufacture' => '2021',
                'number_of_pages' => '270',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 10,
                'publisher_id' => 8,
                'author_id' => 7,
                'product_name' => 'Không Có Trẻ Hư - Hiểu Và Phát Huy Khí Chất Con Bạn Theo Kiểu Nhật Bản',
                'describe' => 'Tính cách con trẻ thường được cho là chịu ảnh hưởng của môi trường xung quanh, nhưng sự thật là đứa trẻ nào sinh ra cũng có cá tính ở mức độ nào đó rồi. Đây chính là khí chất và nó chiếm một nửa nhân cách của đứa bé. Và dù có trưởng thành, về mặt bản chất, khí chất đó không thay đổi gì nhiều.

                Không có khí chất tốt hay xấu. Tùy vào cách phát huy, bất kỳ khí chất nào cũng có thể trở thành “cá tính xuất sắc”, hay “tài năng” của trẻ. Sách không chỉ dành cho phụ huynh để áp dụng cho con trẻ, mà còn áp dụng cho chính người lớn. Mỗi người sẽ tìm thấy mình trong các kiểu khí chất, hiểu được những nghề nghiệp phù hợp với mình và cách ứng xử phù hợp với mình và người khác dựa trên kiểu khí chất.',
                'product_price' => '115000',
                'size' => '13 x 20.5',
                'translater' => 'Nguyễn Đỗ An Nhiên',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_184450.jpg',
                'year_of_manufacture' => '2019',
                'number_of_pages' => '226',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 5,
                'publisher_id' => 1,
                'author_id' => 9,
                'product_name' => 'Yêu Những Điều Không Hoàn Hảo',
                'describe' => '“Ngẫm lại cuộc sống của chính mình, ta sẽ nhận thấy rất nhiều điều không hoàn hảo. Trước hết, chỉ nhìn vào bản thân mình thôi ta đã cảm nhận được nhiều thiếu sót rồi: lời nói và hành động mâu thuẫn với nhau, vụng về trong những mối quan hệ xã hội, chuyện học hành, công việc không suôn sẻ như ý muốn. Chưa kể đôi khi ta còn khiến người khác tổn thương, thậm chí còn làm những việc khiến bản thân cảm thấy tội lỗi và hối hận. Và khi nhìn vào những người thân trong gia đình, bạn bè, đồng nghiệp, ta cũng nhận thấy những điều không-hoàn-hảo tương tự như vậy.

                Nhưng dù đang sống giữa thế gian đầy rẫy những điều không hoàn hảo, ta vẫn không thể ngừng yêu thương chính những điều không hoàn hảo ấy. Cuộc sống rất đáng để trân trọng, ta không thể phí hoài cuộc sống vào việc mỉa mai hay căm ghét thứ gì đó chỉ vì không thể hiểu được nó hoặc nó không vừa ý ta.
                
                Mong sao những dòng chữ nhỏ bé của tôi có thể đem đến cho độc giả dũng khí, giúp họ chữa lành vết thương lòng và dành ra cho riêng mình khoảng thời gian để yêu bản thân… Mong sao cuốn sách này sẽ trở thành bàn tay giữ lấy bạn khi bạn rơi vào tuyệt vọng, sẽ trở thành khoảng lặng để bạn tạm dừng chân giữa những hỗn độn ồn ào.”
                
                ― Đại đức Hae Min',
                'product_price' => '139000',
                'size' => '14 x 20.5',
                'translater' => 'Nguyễn Việt Tú Anh',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_12540.jpg',
                'year_of_manufacture' => '2018',
                'number_of_pages' => '295',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 5,
                'publisher_id' => 8,
                'author_id' => 10,
                'product_name' => 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)',
                'describe' => '“Mọi lựa chọn đều giá trị. Mọi bước đi đều quan trọng. Cuộc sống vẫn diễn ra theo cách của nó, không phải theo cách của ta. Hãy kiên nhẫn. Tin tưởng. Hãy giống như người thợ cắt đá, đều đặn từng nhịp, ngày qua ngày. Cuối cùng, một nhát cắt duy nhất sẽ phá vỡ tảng đá và lộ ra viên kim cương. Người tràn đầy nhiệt huyết và tận tâm với việc mình làm không bao giờ bị chối bỏ. Sự thật là thế.”

                Bằng những lời chia sẻ thật ngắn gọn, dễ hiểu về những trải nghiệm và suy ngẫm trong đời, Robin Sharma tiếp tục phong cách viết của ông từ cuốn sách Điều vĩ đại đời thường để mang đến cho độc giả những bài viết như lời tâm sự, vừa chân thành vừa sâu sắc.',
                'product_price' => '75000',
                'size' => '13 x 20.5',
                'translater' => 'không',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_180164_1_43_1_57_1_4_1_2_1_210_1_29_1_98_1_25_1_21_1_5_1_3_1_18_1_18_1_45_1_26_1_32_1_14_1_2730.jpg',
                'year_of_manufacture' => '2018',
                'number_of_pages' => '228',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 2,
                'publisher_id' => 9,
                'author_id' => 12,
                'product_name' => 'Kinh Doanh Trong Thời Đại 4.0',
                'describe' => '“Kỹ thuật số”, hay “số hóa” các hoạt động kinh doanh là xu hướng phát triển tất yếu của mọi doanh nghiệp muốn đột phá trong thời đại cạnh tranh khốc liệt. Kỹ thuật số có thể làm gián đoạn hoạt động của nhiều công ty “già cỗi”, nhưng cũng tạo thời cơ cho các tập đoàn công nghệ như Facebook hay Amazon tăng trưởng kỷ lục.

                Nhưng dù thời đại kỹ thuật số đang và sẽ tiếp tục là thách thức với các ông lớn trong các ngành truyền thống, cơ hội dành cho họ vẫn rộng mở. Cụ thể cơ hội đó là gì? Các doanh nghiệp không có nhiều ưu thế về sự linh hoạt, không có nền tảng công nghệ mạnh mẽ phải làm sao để xoay xở? Và công ty bạn phải làm cách nào để không bị tụt hậu trong cuộc đua này? Làm thế nào mới có thể tận dụng tất cả những cơ hội của thời đại 4.0? Cuốn sách cập nhật nhất - “Kinh doanh trong thời đại 4.0”, một tác phẩm của Sunil Gupta - giáo sư Quản trị Kinh doanh tại trường Kinh doanh Harvard, chuyên gia về chiến lược chuyển đổi kỹ thuật số sẽ dẫn đường cho bạn.
                
                Để thành công, bạn không thể chỉ tạo một đơn vị kỹ thuật số riêng, hoặc chỉ tiến hành các thử nghiệm, hoặc chỉ dự định dùng công nghệ để tăng năng suất. Thay vào đó, bạn phải biến kỹ thuật số thành chiến lược cốt lõi, để nó bao trùm lên mọi hoạt động, mọi bước đi trong doanh nghiệp của mình. Thông qua hàng loạt câu chuyện thực tiễn, với ví dụ tiêu biểu từ những doanh nghiệp đã hoàn toàn lột xác trong kỷ nguyên số, bạn sẽ nắm trong tay các phương pháp và nguyên tắc để vạch ra chiến lược số bao trùm. Hay nói cách khác, “Kinh doanh trong thời đại 4.0” sẽ dẫn lối giúp bạn điều khiển doanh nghiệp vượt qua quá trình chuyển đổi đầy thách thức, không thể không thực hiện.',
                'product_price' => '159000',
                'size' => '13 x 20',
                'translater' => 'Trọng Tuấn',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_180260.jpg',
                'year_of_manufacture' => '2019',
                'number_of_pages' => '440',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 8,
                'publisher_id' => 5,
                'author_id' => 13,
                'product_name' => 'Hoàng Tử Bé (Tái Bản 2019)',
                'describe' => 'Hoàng tử bé được viết ở New York trong những ngày tác giả sống lưu vong và được xuất bản lần đầu tiên tại New York vào năm 1943, rồi đến năm 1946 mới được xuất bản tại Pháp. Không nghi ngờ gì, đây là tác phẩm nổi tiếng nhất, được đọc nhiều nhất và cũng được yêu mến nhất của Saint-Exupéry. Cuốn sách được bình chọn là tác phẩm hay nhất thế kỉ 20 ở Pháp, đồng thời cũng là cuốn sách Pháp được dịch và được đọc nhiều nhất trên thế giới. Với 250 ngôn ngữ dịch khác nhau kể cả phương ngữ cùng hơn 200 triệu bản in trên toàn thế giới, Hoàng tử bé được coi là một trong những tác phẩm bán chạy nhất của nhân loại. 

                Ở Việt Nam, Hoàng tử bé được dịch và xuất bản khá sớm. Từ năm 1966 đã có  đồng thời hai bản dịch: Hoàng tử bé của Bùi Giáng do An Tiêm xuất bản và Cậu hoàng con của Trần Thiện Đạo do Khai Trí xuất bản. Từ đó đến nay đã có thêm nhiều bản dịch Hoàng tử bé mới của các dịch giả khác nhau. Bản dịch Hoàng tử bé lần này, xuất bản nhân dịp kỷ niệm 70 năm Hoàng tử bé ra đời, cũng là ấn bản đầu tiên được Gallimard chính thức chuyển nhượng bản quyền tại Việt Nam, hy vọng sẽ góp phần làm phong phú thêm việc dịch và tiếp nhận tác phẩm quan trọng này với các thế hệ độc giả. 
                
                Tôi cứ sống cô độc như vậy, chẳng có một ai để chuyện trò thật sự, cho tới một lần gặp nạn ở sa mạc Sahara cách đây sáu năm. Có thứ gì đó bị vỡ trong động cơ máy bay. Và vì ở bên cạnh chẳng có thợ máy cũng như hành khách nào nên một mình tôi sẽ phải cố mà sửa cho bằng được vụ hỏng hóc nan giải này. Với tôi đó thật là một việc sống còn. Tôi chỉ có vừa đủ nước để uống trong tám ngày.
                
                Thế là đêm đầu tiên tôi ngủ trên cát, cách mọi chốn có người ở cả nghìn dặm xa. Tôi cô đơn hơn cả một kẻ đắm tàu sống sót trên bè giữa đại dương. Thế nên các bạn cứ tưởng tượng tôi đã ngạc nhiên làm sao, khi ánh ngày vừa rạng, thì một giọng nói nhỏ nhẹ lạ lùng đã đánh thức tôi. Giọng ấy nói:
                
                “Ông làm ơn… vẽ cho tôi một con cừu!”
                
                - Trích "Hoàng tử bé"
                
                Nhận định
                
                “Đây là một câu chuyện tự nó đã rất đáng yêu, ẩn giấu một triết lý quá đỗi nhẹ nhàng và thi vị.”
                
                - The New York Times',
                'product_price' => '75000',
                'size' => '15 x 23',
                'translater' => 'Trác Phong',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_187010.jpg',
                'year_of_manufacture' => '2019',
                'number_of_pages' => '102',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 8,
                'publisher_id' => 5,
                'author_id' => 14,
                'product_name' => 'Chuyện Con Mèo Dạy Hải Âu Bay (Tái Bản 2019)',
                'describe' => 'Cô hải âu Kengah bị nhấn chìm trong váng dầu – thứ chất thải nguy hiểm mà những con người xấu xa bí mật đổ ra đại dương. Với nỗ lực đầy tuyệt vọng, cô bay vào bến cảng Hamburg và rơi xuống ban công của con mèo mun, to đùng, mập ú Zorba. Trong phút cuối cuộc đời, cô sinh ra một quả trứng và con mèo mun hứa với cô sẽ thực hiện ba lời hứa chừng như không tưởng với loài mèo:

                Không ăn quả trứng.
                Chăm sóc cho tới khi nó nở.
                Dạy cho con hải âu bay.
                
                Lời hứa của một con mèo cũng là trách nhiệm của toàn bộ mèo trên bến cảng, bởi vậy bè bạn của Zorba bao gồm ngài mèo Đại Tá đầy uy tín, mèo Secretario nhanh nhảu, mèo Einstein uyên bác, mèo Bốn Biển đầy kinh nghiệm đã chung sức giúp nó hoàn thành trách nhiệm. Tuy nhiên, việc chăm sóc, dạy dỗ một con hải âu đâu phải chuyện đùa, sẽ có hàng trăm rắc rối nảy sinh và cần có những kế hoạch đầy linh hoạt được bàn bạc kỹ càng…
                
                Chuyện con mèo dạy hải âu bay là kiệt tác dành cho thiếu nhi của nhà văn Chi Lê nổi tiếng Luis Sepúlveda – tác giả của cuốn Lão già mê đọc truyện tình đã bán được 18 triệu bản khắp thế giới. Tác phẩm không chỉ là một câu chuyện ấm áp, trong sáng, dễ thương về loài vật mà còn chuyển tải thông điệp về trách nhiệm với môi trường, về sự sẻ chia và yêu thương cũng như ý nghĩa của những nỗ lực – “Chỉ những kẻ dám mới có thể bay”.
                
                Cuốn sách mở đầu cho mùa hè với minh họa dễ thương, hài hước là món quà dành cho mọi trẻ em và người lớn.',
                'product_price' => '49000',
                'size' => '14 x 20.5',
                'translater' => 'Phương Huyên',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_188285.jpg',
                'year_of_manufacture' => '2019',
                'number_of_pages' => '114',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 7,
                'publisher_id' => 7,
                'author_id' => 15,
                'product_name' => 'Khi Hơi Thở Hóa Thinh Không (Tái Bản 2020)',
                'describe' => 'Khi hơi thở hóa thinh không là tự truyện của một bác sĩ bị mắc bệnh ung thư phổi. Trong cuốn sách này, tác giả đã chia sẻ những trải nghiệm từ khi mới bắt đầu học ngành y, tiếp xúc với bệnh nhân cho tới khi phát hiện ra mình bị ung thư và phải điều trị lâu dài.

                Kalanithi rất yêu thích văn chương nên câu chuyện của anh đã được thuật lại theo một phong cách mượt mà, dung dị và đầy cảm xúc. Độc giả cũng được hiểu thêm về triết lý sống, triết lý nghề y của Kalanithi, thông qua ký ức về những ngày anh còn là sinh viên, rồi thực tập, cho đến khi chính thức hành nghề phẫu thuật thần kinh. “Đối với bệnh nhân và gia đình, phẫu thuật não là sự kiện bi thảm nhất mà họ từng phải đối mặt và nó có tác động như bất kỳ một biến cố lớn lao trong đời. Trong những thời điểm nguy cấp đó, câu hỏi không chỉ đơn thuần là sống hay chết mà còn là cuộc sống nào đáng sống.” – Kalanithi luôn biết cách đưa vào câu chuyện những suy nghĩ sâu sắc và đầy sự đồng cảm như thế.
                
                Bạn bè và gia đình đã dành tặng những lời trìu mến nhất cho con người đáng kính trọng cả về tài năng lẫn nhân cách này. Dù không thể vượt qua cơn bệnh nan y, nhưng thông điệp của tác giả sẽ còn khiến người đọc nhớ mãi.',
                'product_price' => '105000',
                'size' => '20.5 x 14 cm',
                'translater' => 'Không',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_220964.jpg',
                'year_of_manufacture' => '2019',
                'number_of_pages' => '236',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 9,
                'publisher_id' => 10,
                'author_id' => 16,
                'product_name' => '30 Chủ Đề Từ Vựng Tiếng Anh (Tập 1)',
                'describe' => 'Ngữ pháp và từ vựng là hai mảng không thể thiếu trong quá trình học ngoại ngữ nói chung và học tiếng Anh nói riêng. Hai phạm trù này sẽ góp phần giúp chúng ta đạt được sự thành thạo về ngôn ngữ. Nếu như ngữ pháp có các quy tắc, có cấu trúc để tuân theo thì từ vựng lại không có bất cứ quy tắc nào. Do đó, đa số người học đều thấy rất khó để học và nhớ được từ vựng. Đó là còn chưa kể tới có rất nhiều từ có nghĩa giống nhau nhưng lại được sử dụng trong các ngữ cảnh khác nhau và một từ thì lại có rất nhiều nghĩa.

                Với mong muốn giúp người học có phương pháp học từ vựng hiệu quả, bộ sách 30 CHỦ ĐỀ TỪ VỰNG TIẾNG ANH được biên soạn thành 2 tập, mỗi tập gồm 15 chủ đề từ vựng bao quát tất cả những chủ đề từ vựng trọng tâm thuộc mọi lĩnh vực của đời sống. Ở mỗi bài, bên cạnh phần hệ thống từ vựng – cấu trúc theo chủ đề bài học, còn có một số lượng bài tập thực hành lớn với các dạng bài như phát âm, trọng âm, chọn đáp án đúng, đồng nghĩa-trái nghĩa, đọc hiểu, đọc điền.
                Bộ sách với mục tiêu cung cấp cho người học phương pháp học từ vựng theo chủ điểm để nhớ từ theo hệ thống, áp dụng vào bài tập thực hành, làm bài tập giúp nhớ từ và có vốn từ để đọc hiểu được đoạn văn tiếng Anh. Ngoài ra học từ vựng để không những giúp phát âm đúng mà còn chuẩn ngữ điệu.
                Với khoảng hơn 4000 từ vựng – cấu trúc và trên 2000 câu trắc nghiệm kèm đáp án có giải thích chi tiết, chắc chắn bộ sách sẽ là công cụ tự học hữu hiệu, giúp người học trau dồi vốn từ vựng một cách hiệu quả nhất.',
                'product_price' => '190000',
                'size' => '19 x 26.5',
                'translater' => 'Không',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/h/h/hh-30-chu-de-tu-vung-tieng-anh_1.jpg',
                'year_of_manufacture' => '2019',
                'number_of_pages' => '498',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 9,
                'publisher_id' => 10,
                'author_id' => 16,
                'product_name' => '30 Chủ Đề Từ Vựng Tiếng Anh (Tập 2)',
                'describe' => 'Ngữ pháp và từ vựng là hai mảng không thể thiếu trong quá trình học ngoại ngữ nói chung và học tiếng Anh nói riêng. Hai phạm trù này sẽ góp phần giúp chúng ta đạt được sự thành thạo về ngôn ngữ. Nếu như ngữ pháp có các quy tắc, có cấu trúc để tuân theo thì từ vựng lại không có bất cứ quy tắc nào. Do đó, đa số người học đều thấy rất khó để học và nhớ được từ vựng. Đó là còn chưa kể tới có rất nhiều từ có nghĩa giống nhau nhưng lại được sử dụng trong các ngữ cảnh khác nhau và một từ thì lại có rất nhiều nghĩa.

                Với mong muốn giúp người học có phương pháp học từ vựng hiệu quả, bộ sách 30 CHỦ ĐỀ TỪ VỰNG TIẾNG ANH được biên soạn thành 2 tập, mỗi tập gồm 15 chủ đề từ vựng bao quát tất cả những chủ đề từ vựng trọng tâm thuộc mọi lĩnh vực của đời sống. Ở mỗi bài, bên cạnh phần hệ thống từ vựng – cấu trúc theo chủ đề bài học, còn có một số lượng bài tập thực hành lớn với các dạng bài như phát âm, trọng âm, chọn đáp án đúng, đồng nghĩa-trái nghĩa, đọc hiểu, đọc điền.
                Bộ sách với mục tiêu cung cấp cho người học phương pháp học từ vựng theo chủ điểm để nhớ từ theo hệ thống, áp dụng vào bài tập thực hành, làm bài tập giúp nhớ từ và có vốn từ để đọc hiểu được đoạn văn tiếng Anh. Ngoài ra học từ vựng để không những giúp phát âm đúng mà còn chuẩn ngữ điệu.
                Với khoảng hơn 4000 từ vựng – cấu trúc và trên 2000 câu trắc nghiệm kèm đáp án có giải thích chi tiết, chắc chắn bộ sách sẽ là công cụ tự học hữu hiệu, giúp người học trau dồi vốn từ vựng một cách hiệu quả nhất.',
                'product_price' => '190000',
                'size' => '19 x 26.5',
                'translater' => 'không',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/h/h/hh-30-chu-de-tu-vung-tieng-anh-2_1.jpg',
                'year_of_manufacture' => '2019',
                'number_of_pages' => '472',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 9,
                'publisher_id' => 11,
                'author_id' => 16,
                'product_name' => '25 Chuyên Đề Ngữ Pháp Tiếng Anh Trọng Tâm - Tập 1',
                'describe' => 'Các chuyên đề ngữ pháp trọng tâm được trình bày đơn giản, dễ hiểu cùng với hệ thống bài tập và từ vựng phong phú. Có tất cả 25 chuyên đề trong 2 tập sách, là tài liệu hữu ích cho học sinh, sinh viên, người đi làm, luyện thi cho các kỳ thi quốc gia, ôn luyện các chứng chỉ quốc tế và là tài liệu tham khảo cho giáo viên.

                Huy Hoàng Bookstore hân hạnh giới thiệu!',
                'product_price' => '110000',
                'size' => '19 x 26.5',
                'translater' => 'không',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_188186.jpg',
                'year_of_manufacture' => '2018',
                'number_of_pages' => '298',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 9,
                'publisher_id' => 11,
                'author_id' => 16,
                'product_name' => '25 Chuyên Đề Ngữ Pháp Tiếng Anh Trọng Tâm - Tập 2',
                'describe' => 'Các chuyên đề ngữ pháp trọng tâm được trình bày đơn giản, dễ hiểu cùng với hệ thống bài tập và từ vựng phong phú. Có tất cả 25 chuyên đề trong 2 tập sách, là tài liệu hữu ích cho học sinh, sinh viên, người đi làm, luyện thi cho các kỳ thi quốc gia, ôn luyện các chứng chỉ quốc tế và là tài liệu tham khảo cho giáo viên.',
                'product_price' => '120000',
                'size' => '26.5 x 19 x 1 cm',
                'translater' => 'không',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935095626649.jpg',
                'year_of_manufacture' => '2018',
                'number_of_pages' => '360',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 12,
                'publisher_id' => 12,
                'author_id' => 17,
                'product_name' => 'Putin - Logic Của Quyền Lực - Putin: Innenansichten Der Macht',
                'describe' => 'Tên gốc của tác phẩm là Putin: Innenansichten der Macht. Sách gồm 21 chương, do Hubert Seipel thực hiện trong 5 năm (từ năm 2010 đến 2015). Tác giả đã có hơn 20 buổi phỏng vấn chuyên sâu với Putin, đồng thời tháp tùng ông trên hàng chục chuyến đi trong, ngoài nước.

                Sách mở ra góc nhìn mới về nhà lãnh đạo Nga. Putin: Logic của quyền lực phát hành ở Việt Nam cuối tháng 11, do dịch giả Phan Xuân Loan chuyển ngữ, Nhà xuất bản Tổng hợp phát hành. Hubert Seipel tái hiện những dấu mốc chính trong cuộc đời Putin. Năm 1975, Putin tốt nghiệp khoa Luật Đại học Tổng hợp Quốc gia Saint Petersburg. Năm 1985, ông trở thành nhân viên tình báo đối ngoại của Liên Xô ở Đức. Năm 1994, ông trở thành phó chủ tịch thứ nhất của thành phố quê nhà Saint Petersburg. Năm 1996, ông chuyển đến Moskva và được bổ nhiệm nhiều chức vụ quan trọng trong văn phòng Tổng thống Nga. Cuối năm 1999, ông trở thành Tổng thống Nga.
                
                Khi mới lên nắm quyền, ông phải đối mặt với nhiều khó khăn trong giai đoạn "tư nhân hóa" các tài sản quốc gia. Putin cùng lúc phải vực dậy nền kinh tế sa sút, giải quyết nạn tham nhũng, chia rẽ dân tộc và các âm mưu lật đổ chính quyền. Cuốn sách đề cập đến cuộc chiến của Putin và hai đối thủ lớn - chính khách Boris Berezovsky và tỷ phú và Mikhai Khodorkovsky - chủ tập đoàn dầu khí Yukos. Để đảo ngược tình thế khó khăn, Putin đã tìm cách tăng trưởng kinh tế, phát triển các dịch vụ y tế, giáo dục. Trên chính trường quốc tế, ông đưa ra nhiều quyết định cứng rắn, đặc biệt là việc phản đối sự mở rộng của Tổ chức Hiệp ước Bắc Đại Tây Dương (NATO) về phía Đông. Sách không chứa nhiều thông tin về đời sống cá nhân của tổng thống.
                
                Trước khi làm việc cùng Hubert Seipel, Putin yêu cầu đặt ra một ranh giới rõ ràng giữa công việc và đời tư để bảo vệ bản thân và gia đình. Ông nói: “Tôi hứng thú với các phương tiện truyền thông bởi vì tôi là chính khách và là Tổng thống Nga, còn các con gái tôi không giữ chức vụ chính trị, những quan hệ cá nhân của tôi không thuộc về các vấn đề chính trị - đó là việc riêng của tôi". Vì thế, vợ con ông chỉ được nhắc đến vài lần.
                
                Vladimir Vladimirovich Putin sinh năm 1952. Ông là tổng thống Nga trong hai nhiệm kỳ từ năm 2000 tới năm 2008, trước khi phải rời điện Kremlin theo Hiến pháp lúc bấy giờ. Putin đảm nhận vai trò thủ tướng Nga sau khi ông Dmitry Medvedev tiếp quản vị trí tổng thống. Với việc chiến thắng trong cuộc bầu cử năm 2012, Putin có nhiệm kỳ tổng thống thứ ba. Năm 2007, Putin được tạp chí Times bình chọn là Nhân vật của năm. Năm 2015, Putin đứng đầu trong danh sách 100 người có sức ảnh hưởng nhất thế giới của tạo chí này. Tạp chí Forbes xếp Putin là người quyền lực nhất thế giới trong bốn năm liên tiếp, từ năm 2013 tới năm 2016.
                
                Tác giả Hubert Seipel sinh năm 1950 ở Wasserlos, Đức. Ông là nhà báo, nhà làm phim tài liệu. Ông từng nghiên cứu chính trị, lịch sử, khoa học chính trị tại tại Đại học Marburg, Đức và Trường Kinh tế và Khoa học Chính trị London, Anh. Ông có cơ hội tiếp xúc với Putin từ năm 2010, khi làm bộ phim tài liệu I, Putin: A Portrait. Sau bộ phim đó, ông trở thành nhà báo phương Tây được tiếp cận gần Putin.',
                'product_price' => '168000',
                'size' => '20.5 x 14.5 cm',
                'translater' => 'Phan Xuân Loan',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_216008.jpg',
                'year_of_manufacture' => '2020',
                'number_of_pages' => '384',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 5,
                'publisher_id' => 1,
                'author_id' => 19,
                'product_name' => 'Thiên Tài Bên Trái, Kẻ Điên Bên Phải (Tái Bản 2021)',
                'describe' => 'NẾU MỘT NGÀY ANH THẤY TÔI ĐIÊN, THỰC RA CHÍNH LÀ ANH ĐIÊN ĐẤY!

                Hỡi những con người đang oằn mình trong cuộc sống, bạn biết gì về thế giới của mình? Là vô vàn thứ lý thuyết được các bậc vĩ nhân kiểm chứng, là luật lệ, là cả nghìn thứ sự thật bọc trong cái lốt hiển nhiên, hay những triết lý cứng nhắc của cuộc đời?
                
                Lại đây, vượt qua thứ nhận thức tẻ nhạt bị đóng kín bằng con mắt trần gian, khai mở toàn bộ suy nghĩ, để dòng máu trong bạn sục sôi trước những điều kỳ vĩ, phá vỡ mọi quy tắc. Thế giới sẽ gọi bạn là kẻ điên, nhưng vậy thì có sao? Ranh giới duy nhất giữa kẻ điên và thiên tài chẳng qua là một sợi chỉ mỏng manh: Thiên tài chứng minh được thế giới của mình, còn kẻ điên chưa kịp làm điều đó. Chọn trở thành một kẻ điên để vẫy vùng giữa nhân gian loạn thế hay khóa hết chúng lại, sống mãi một cuộc đời bình thường khiến bạn cảm thấy hạnh phúc hơn?
                
                Thiên tài bên trái, kẻ điên bên phải là cuốn sách dành cho những người điên rồ, những kẻ gây rối, những người chống đối, những mảnh ghép hình tròn trong những ô vuông không vừa vặn… những người nhìn mọi thứ khác biệt, không quan tâm đến quy tắc. Bạn có thể đồng ý, có thể phản đối, có thể vinh danh hay lăng mạ họ, nhưng điều duy nhất bạn không thể làm là phủ nhận sự tồn tại của họ. Đó là những người luôn tạo ra sự thay đổi trong khi hầu hết con người chỉ sống rập khuôn như một cái máy. Đa số đều nghĩ họ thật điên rồ nhưng nếu nhìn ở góc khác, ta lại thấy họ thiên tài. Bởi chỉ những người đủ điên nghĩ rằng họ có thể thay đổi thế giới mới là những người làm được điều đó. 
                
                Chào mừng đến với thế giới của những kẻ điên',
                'product_price' => '179000',
                'size' => '24 x 16 cm',
                'translater' => 'Thu Hương',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/b/_/b_a-thi_n-t_i-b_n-tr_i-k_-_i_n-b_n-ph_i_1.jpg',
                'year_of_manufacture' => '2021',
                'number_of_pages' => '424',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 3,
                'publisher_id' => 4,
                'author_id' => 18,
                'product_name' => 'Làm Đĩ (Tái Bản 2022)',
                'describe' => 'Vũ Trọng Phụng sinh năm 1912 tại Hà Nội trong một gia đình nghèo. Chính quê nhà văn ở làng Hảo (tức Bần, Yên Nhân, huyện Mỹ Hào, tỉnh Hưng Yên).

                Vũ Trọng Phụng có truyện ngắn đăng trên nhiều tờ báo từ năm 1930. Tác phẩm của nhà văn hầu hết đăng báo trước khi in thành sách.
                
                Tác phẩm chính: Không một tiếng vang (kịch, 1931), Cạm bẫy người (phóng sự, 1933), Dứt tình (tiểu thuyết, 1934), Kỹ nghệ lấy Tây (phóng sự, 1934), Giông tố (tiểu thuyết, 1936), Cơm thầy cơm cô (phóng sự, 1936), Vỡ đê (tiểu thuyết, 1936), Số đỏ (tiểu thuyết, 1936), Làm đĩ (tiểu thuyết, 1936), Lấy nhau vì tình (tiểu thuyết, 1937), Lục sì (phóng sự, 1937), Trúng số độc đắc (tiểu thuyết, 1938),... và nhiều truyện ngắn.
                
                Ông mất ngày 13 tháng 10 năm 1939 vì bệnh lao.
                
                Làm đĩ là một trong số những cuốn sách gây ra nhiều cuộc tranh luận trong hơn suốt nửa thế kỷ qua. Từ Nhất Linh, Thái Phỉ, Hoài Thanh trước đây đã có khá nhiều bài đăng trên các báo Tân văn, Tương lai, Ngày nay, Hà Nội báo... phê phán quan niệm văn chương của Vũ Trọng Phụng xung quanh tiểu thuyết Làm đĩ của ông; cho đến Hoàng Văn Hoan sau này, khi Vũ Trọng Phụng đã mất gần 25 năm, còn cố tình tìm mọi lời lẽ sặc mùi chính trị phê phán Làm đĩ là một cuốn sách dâm uế và có hại cho sự giáo hóa đạo đức và luân lý đối với thế hệ trẻ Việt Nam.
                
                Mã hàng	8935236425650
                Tên Nhà Cung Cấp	Nhà Sách Minh Thắng
                Tác giả	Vũ Trọng Phụng
                NXB	NXB Văn Học
                Năm XB	2022
                Trọng lượng (gr)	300
                Kích Thước Bao Bì	20.5 x 15 x 0.5 cm
                Số trang	264
                Hình thức	Bìa Mềm
                Sản phẩm bán chạy nhất	Top 100 sản phẩm Tác Phẩm Kinh Điển bán chạy của tháng
                Giá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...
                Làm Đĩ (Tái Bản 2022)
                
                Vũ Trọng Phụng sinh năm 1912 tại Hà Nội trong một gia đình nghèo. Chính quê nhà văn ở làng Hảo (tức Bần, Yên Nhân, huyện Mỹ Hào, tỉnh Hưng Yên).
                
                Vũ Trọng Phụng có truyện ngắn đăng trên nhiều tờ báo từ năm 1930. Tác phẩm của nhà văn hầu hết đăng báo trước khi in thành sách.
                
                Tác phẩm chính: Không một tiếng vang (kịch, 1931), Cạm bẫy người (phóng sự, 1933), Dứt tình (tiểu thuyết, 1934), Kỹ nghệ lấy Tây (phóng sự, 1934), Giông tố (tiểu thuyết, 1936), Cơm thầy cơm cô (phóng sự, 1936), Vỡ đê (tiểu thuyết, 1936), Số đỏ (tiểu thuyết, 1936), Làm đĩ (tiểu thuyết, 1936), Lấy nhau vì tình (tiểu thuyết, 1937), Lục sì (phóng sự, 1937), Trúng số độc đắc (tiểu thuyết, 1938),... và nhiều truyện ngắn.
                
                Ông mất ngày 13 tháng 10 năm 1939 vì bệnh lao.
                
                Làm đĩ là một trong số những cuốn sách gây ra nhiều cuộc tranh luận trong hơn suốt nửa thế kỷ qua. Từ Nhất Linh, Thái Phỉ, Hoài Thanh trước đây đã có khá nhiều bài đăng trên các báo Tân văn, Tương lai, Ngày nay, Hà Nội báo... phê phán quan niệm văn chương của Vũ Trọng Phụng xung quanh tiểu thuyết Làm đĩ của ông; cho đến Hoàng Văn Hoan sau này, khi Vũ Trọng Phụng đã mất gần 25 năm, còn cố tình tìm mọi lời lẽ sặc mùi chính trị phê phán Làm đĩ là một cuốn sách dâm uế và có hại cho sự giáo hóa đạo đức và luân lý đối với thế hệ trẻ Việt Nam.',
                'product_price' => '69000',
                'size' => '5 x 19cm',
                'translater' => 'Không',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935236425650.jpg',
                'year_of_manufacture' => '2022',
                'number_of_pages' => '121',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 1,
                'publisher_id' => 3,
                'author_id' => 20,
                'product_name' => 'Hello Các Bạn Mình Là Tôi Đi Code Dạo - Kèm Chữ Ký Tác Giả',
                'describe' => 'Cho tới thời điểm hiện tại, IT vẫn đang là một ngành hot và là sự lựa chọn của rất nhiều các bạn học sinh, sinh viên. Tuy nhiên, cho đến nay, những nguồn tài nguyên học tập trong ngành còn quá ít. Ngoài những tài liệu học tập của trường học thì những tài liệu khác chủ yếu vẫn là các thông tin trên internet hoặc từ những kinh nghiệm của những người đi trước. Để bạn đọc có cái nhìn chân thực và rõ nét hơn về ngành IT, thông qua cuốn sách này, tác giả Phạm Huy Hoàng đã tóm tắt và chia sẻ lại những câu chuyện, bài học kinh nghiệm đã gặp, đã đúc rút được để bạn đọc tham khảo và tìm ra những điểm tương đồng với những gì mình gặp trong khi học tập và làm việc để từ đó rút ra được bài học cho riêng mình.

                “Tôi Đi Code Dạo” là một blog, fanpage và Youtube channel được sáng lập bởi Phạm Huy Hoàng - một full-stack developer đã tốt nghiệp Thạc sĩ ngành Computer Science tại Đại học Lancaster ở Anh (Học bổng 18.000 bảng) và hiện đang làm việc cho một startup công nghệ tại Singapore.
                
                Nội dung mà "Tôi Đi Code Dạo" chia sẻ một nửa là về kĩ thuật lập trình, một nửa còn lại là những kinh nghiệm mà "Mr. Code Dạo" đã học được như: cách deal lương, sắp xếp thời gian, kĩ năng mềm, ngôn ngữ lập trình nên học, con đường phát triển nghề nghiệp… Đó là những điều quan trọng không thua gì kĩ năng lập trình.
                
                Phương châm của “Tôi Đi Code Dạo" là: Developer cần biết nhiều điều hơn ngoài code, blog sẽ vừa dạy bạn code, vừa dạy bạn những điều còn lại.
                
                “Hello các bạn, mình là tôi đi code dạo” tổng hợp và chọn lọc hơn 60 bài viết trên blog của tác giả Phạm Huy Hoàng, chủ blog và fanpage “Tôi đi code dạo”. Cuốn sách hướng dẫn những kỹ năng mềm và những phần kỹ thuật thuần code, đồng thời chia sẻ những kinh nghiệm trong quá trình học tập và làm việc của tác giả.
                
                “Hello các bạn, mình là Tôi Đi Code Dạo” được tóm tắt khá ngắn gọn, lồng ghép một số câu chuyện vui để bạn đọc có thể cảm thấy thư giãn và tham khảo thêm thông tin một cách dễ dàng hơn.
                
                Không chỉ là những kiến thức chuyên ngành khô khan, những câu chuyện đời, chuyện nghề rất thật và nhiều cảm xúc qua lối viết giản dị nhưng dí dỏm sẽ mang đến cho người đọc cảm giác gần gũi, dễ tiếp thu và đồng cảm.
                
                Nếu bạn đã, đang và sẽ theo con đường lập trình viên thì đây chính là cuốn sách hữu ích dành cho bạn, giúp bạn có thêm những kỹ năng căn bản cũng như kinh nghiệm cần thiết trong hành trình theo đuổi ước mơ và nghề nghiệp của bản thân.
                
                LỜI BÌNH LUẬN DÀNH CHO CUỐN SÁCH
                
                Cuốn sách chia sẻ về việc lựa chọn ngành phát triển phần mềm dựa trên các yếu tố “sự kiên trì và nhẫn nại (tiến từng bước nhỏ), improve bản thân dựa trên các thiếu sót và sự mạo hiểm” cùng với yếu tố “khả năng tư duy”.
                
                Bên cạnh đó, tác giả cũng chia sẻ định hướng sau khi chọn ngành học này (xây dựng một learning/study path để xác định mục tiêu học tập để tập trung xây dựng “căn cơ nền móng” trên các kiến thức nền tảng được trang bị khi con người ta “mài đũng quần” trên ghế nhà trường), rèn luyện trong quá trình (teamwork - luyện tập làm việc theo nhóm; sharing - chia sẻ kiến thức cùng bạn bè, partner, đàn em, cộng đồng...) cho đến xây dựng một career path thông qua trải nghiệm (trải nghiệm = học thức + kinh nghiệm + thái độ + improve).
                
                Qua các nội dung chia sẻ dí dỏm, tác giả cũng đã trả lời các câu hỏi mà các bạn sinh viên chọn ngành - chuyên ngành thường hỏi.
                
                Đặc biệt nhất, các câu trả lời giải quyết tâm lý của các bạn sinh viên về việc “tại sao nhà trường luôn dạy các nội dung nền tảng cũ rích mà không cập nhật các nội dung mới, cập nhật theo thị trường?”.
                
                Qua cuốn sách này, các bạn sinh viên có lẽ sẽ nhận ra rằng học thức là do có nền móng - căn cơ (nội dung có lẽ “cũ” nên không ai dạy khi làm thực tế dẫn đến chúng ta “vô tình hay cố ý lướt qua nhau” để rồi...), kinh nghiệm là do rèn luyện để nâng cao tư duy lẫn kỹ năng - tích lũy qua công việc, dự án - chia sẻ kiến thức để có hỗ trợ và tạo ra các liên kết mới, cầu thị để từ đó chúng ta cải thiện chính bản thân hướng tới mơ ước của mình.
                
                Nội dung sách dẫn dắt chúng ta hiểu được những chia sẻ về cách ứng dụng framework, công nghệ khi chúng ta có “căn cơ nền móng”. Các bạn học sinh, sinh viên, các độc giả đã trải nghiệm qua nhiều dự án có thể đọc để có kim chỉ nam trong lựa chọn ngành nghề và nhìn lại chính mình để thấy sự trải nghiệm của chúng ta đã và sẽ như thế nào.
                
                - Thầy Kiều Trọng Khánh - Giảng viên Đại học FPT
                
                Nội dung viết hay và khá hài hước, dễ tiếp thu, phản ánh thực tế khá thú vị cuộc sống ở các công ty hiện tại. 5 thái độ cần có sẽ giúp nhiều cho các bạn trẻ khi vừa ra trường đi làm, không phải tự nhiên mà người ta hay nói “Thái độ hơn trình độ”.
                
                Các nội dung về testing giúp hiểu thêm về sự tương quan giữa dev và test, nếu dev có một chút kiến thức về test sẽ giúp hạn chế một số lỗi cơ bản hay gặp phải.
                
                -Thầy Phạm Công Thành - Là thầy của một lứa FU và FAT
                
                Cuốn sách “gối đầu giường” cho các bạn trẻ đã, đang và sẽ trên con đường trở thành lập trình viên đa-zi-năng. Những kinh nghiệm, bài học được Hoàng đúc kết và tinh gọn rất sát với thực tế, giúp cho các bạn tiết kiệm được rất nhiều thời gian cũng như có nhiều góc nhìn hơn trong ngành Công nghệ. Hãy biến mình trở thành developer “nội công thâm hậu” thay vì là coder “chỉ đâu đánh đó” các bạn nhé.
                
                -Huỳnh Đào Hoàng Vũ - Product Owner - Digital Experience tại Manulife Vietnam
                
                VỀ TÁC GIẢ
                
                Phạm Huy Hoàng - một full-stack developer đã tốt nghiệp Thạc sĩ ngành Computer Science tại Đại học Lancaster ở Anh (Học bổng 18.000 bảng) và hiện đang làm việc cho một startup công nghệ tại Singapore.
                
                -Fanpage: facebook.com/toidicodedao
                
                -Blog: toidicodedao.com/about/
                
                Youtube: youtube.com/c/toidicodedaoblog
                
                Mã hàng	3300000017068
                Tên Nhà Cung Cấp	1980 Books
                Tác giả	Phạm Huy Hoàng
                NXB	NXB Thanh Niên
                Năm XB	2022
                Ngôn Ngữ	Tiếng Việt
                Trọng lượng (gr)	400
                Kích Thước Bao Bì	20 x 13 cm
                Số trang	368
                Hình thức	Bìa Mềm
                Sản phẩm hiển thị trong	
                1980 Books
                Sản phẩm bán chạy nhất	Top 100 sản phẩm Câu Chuyện Cuộc Đời bán chạy của tháng
                Giá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...
                Hello Các Bạn Mình Là Tôi Đi Code Dạo
                
                Cho tới thời điểm hiện tại, IT vẫn đang là một ngành hot và là sự lựa chọn của rất nhiều các bạn học sinh, sinh viên. Tuy nhiên, cho đến nay, những nguồn tài nguyên học tập trong ngành còn quá ít. Ngoài những tài liệu học tập của trường học thì những tài liệu khác chủ yếu vẫn là các thông tin trên internet hoặc từ những kinh nghiệm của những người đi trước. Để bạn đọc có cái nhìn chân thực và rõ nét hơn về ngành IT, thông qua cuốn sách này, tác giả Phạm Huy Hoàng đã tóm tắt và chia sẻ lại những câu chuyện, bài học kinh nghiệm đã gặp, đã đúc rút được để bạn đọc tham khảo và tìm ra những điểm tương đồng với những gì mình gặp trong khi học tập và làm việc để từ đó rút ra được bài học cho riêng mình.
                
                “Tôi Đi Code Dạo” là một blog, fanpage và Youtube channel được sáng lập bởi Phạm Huy Hoàng - một full-stack developer đã tốt nghiệp Thạc sĩ ngành Computer Science tại Đại học Lancaster ở Anh (Học bổng 18.000 bảng) và hiện đang làm việc cho một startup công nghệ tại Singapore.
                
                Nội dung mà "Tôi Đi Code Dạo" chia sẻ một nửa là về kĩ thuật lập trình, một nửa còn lại là những kinh nghiệm mà "Mr. Code Dạo" đã học được như: cách deal lương, sắp xếp thời gian, kĩ năng mềm, ngôn ngữ lập trình nên học, con đường phát triển nghề nghiệp… Đó là những điều quan trọng không thua gì kĩ năng lập trình.
                
                Phương châm của “Tôi Đi Code Dạo" là: Developer cần biết nhiều điều hơn ngoài code, blog sẽ vừa dạy bạn code, vừa dạy bạn những điều còn lại.
                
                “Hello các bạn, mình là tôi đi code dạo” tổng hợp và chọn lọc hơn 60 bài viết trên blog của tác giả Phạm Huy Hoàng, chủ blog và fanpage “Tôi đi code dạo”. Cuốn sách hướng dẫn những kỹ năng mềm và những phần kỹ thuật thuần code, đồng thời chia sẻ những kinh nghiệm trong quá trình học tập và làm việc của tác giả.
                
                “Hello các bạn, mình là Tôi Đi Code Dạo” được tóm tắt khá ngắn gọn, lồng ghép một số câu chuyện vui để bạn đọc có thể cảm thấy thư giãn và tham khảo thêm thông tin một cách dễ dàng hơn.
                
                Không chỉ là những kiến thức chuyên ngành khô khan, những câu chuyện đời, chuyện nghề rất thật và nhiều cảm xúc qua lối viết giản dị nhưng dí dỏm sẽ mang đến cho người đọc cảm giác gần gũi, dễ tiếp thu và đồng cảm.
                
                Nếu bạn đã, đang và sẽ theo con đường lập trình viên thì đây chính là cuốn sách hữu ích dành cho bạn, giúp bạn có thêm những kỹ năng căn bản cũng như kinh nghiệm cần thiết trong hành trình theo đuổi ước mơ và nghề nghiệp của bản thân.
                
                LỜI BÌNH LUẬN DÀNH CHO CUỐN SÁCH
                
                Cuốn sách chia sẻ về việc lựa chọn ngành phát triển phần mềm dựa trên các yếu tố “sự kiên trì và nhẫn nại (tiến từng bước nhỏ), improve bản thân dựa trên các thiếu sót và sự mạo hiểm” cùng với yếu tố “khả năng tư duy”.
                
                Bên cạnh đó, tác giả cũng chia sẻ định hướng sau khi chọn ngành học này (xây dựng một learning/study path để xác định mục tiêu học tập để tập trung xây dựng “căn cơ nền móng” trên các kiến thức nền tảng được trang bị khi con người ta “mài đũng quần” trên ghế nhà trường), rèn luyện trong quá trình (teamwork - luyện tập làm việc theo nhóm; sharing - chia sẻ kiến thức cùng bạn bè, partner, đàn em, cộng đồng...) cho đến xây dựng một career path thông qua trải nghiệm (trải nghiệm = học thức + kinh nghiệm + thái độ + improve).
                
                Qua các nội dung chia sẻ dí dỏm, tác giả cũng đã trả lời các câu hỏi mà các bạn sinh viên chọn ngành - chuyên ngành thường hỏi.
                
                Đặc biệt nhất, các câu trả lời giải quyết tâm lý của các bạn sinh viên về việc “tại sao nhà trường luôn dạy các nội dung nền tảng cũ rích mà không cập nhật các nội dung mới, cập nhật theo thị trường?”.
                
                Qua cuốn sách này, các bạn sinh viên có lẽ sẽ nhận ra rằng học thức là do có nền móng - căn cơ (nội dung có lẽ “cũ” nên không ai dạy khi làm thực tế dẫn đến chúng ta “vô tình hay cố ý lướt qua nhau” để rồi...), kinh nghiệm là do rèn luyện để nâng cao tư duy lẫn kỹ năng - tích lũy qua công việc, dự án - chia sẻ kiến thức để có hỗ trợ và tạo ra các liên kết mới, cầu thị để từ đó chúng ta cải thiện chính bản thân hướng tới mơ ước của mình.
                
                Nội dung sách dẫn dắt chúng ta hiểu được những chia sẻ về cách ứng dụng framework, công nghệ khi chúng ta có “căn cơ nền móng”. Các bạn học sinh, sinh viên, các độc giả đã trải nghiệm qua nhiều dự án có thể đọc để có kim chỉ nam trong lựa chọn ngành nghề và nhìn lại chính mình để thấy sự trải nghiệm của chúng ta đã và sẽ như thế nào.
                
                - Thầy Kiều Trọng Khánh - Giảng viên Đại học FPT
                
                Nội dung viết hay và khá hài hước, dễ tiếp thu, phản ánh thực tế khá thú vị cuộc sống ở các công ty hiện tại. 5 thái độ cần có sẽ giúp nhiều cho các bạn trẻ khi vừa ra trường đi làm, không phải tự nhiên mà người ta hay nói “Thái độ hơn trình độ”.
                
                Các nội dung về testing giúp hiểu thêm về sự tương quan giữa dev và test, nếu dev có một chút kiến thức về test sẽ giúp hạn chế một số lỗi cơ bản hay gặp phải.
                
                -Thầy Phạm Công Thành - Là thầy của một lứa FU và FAT
                
                Cuốn sách “gối đầu giường” cho các bạn trẻ đã, đang và sẽ trên con đường trở thành lập trình viên đa-zi-năng. Những kinh nghiệm, bài học được Hoàng đúc kết và tinh gọn rất sát với thực tế, giúp cho các bạn tiết kiệm được rất nhiều thời gian cũng như có nhiều góc nhìn hơn trong ngành Công nghệ. Hãy biến mình trở thành developer “nội công thâm hậu” thay vì là coder “chỉ đâu đánh đó” các bạn nhé.
                
                -Huỳnh Đào Hoàng Vũ - Product Owner - Digital Experience tại Manulife Vietnam
                
                VỀ TÁC GIẢ
                
                Phạm Huy Hoàng - một full-stack developer đã tốt nghiệp Thạc sĩ ngành Computer Science tại Đại học Lancaster ở Anh (Học bổng 18.000 bảng) và hiện đang làm việc cho một startup công nghệ tại Singapore.
                
                -Fanpage: facebook.com/toidicodedao
                
                -Blog: toidicodedao.com/about/
                
                Youtube: youtube.com/c/toidicodedaoblog',
                'product_price' => '164430',
                'size' => '18 x 13 cm',
                'translater' => 'Phạm Huy Hoàng',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/h/e/hello-c_c-b_n---m_nh-l_-t_i-_i-code-d_o---b_a-1_1.jpg',
                'year_of_manufacture' => '2022',
                'number_of_pages' => '220',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 6,
                'publisher_id' => 12,
                'author_id' => 22,
                'product_name' => 'Spotify Và Những Chuyện Chưa Kể - Hành Trình Đánh Bại Apple, Google Và Amazon Trong Cuộc Đua Âm Thanh Số Của Nhà Sáng',
                'describe' => 'Qua lăng kính và ngòi bút của hai nhà báo Thụy Điển Sven Carlsson và Jonas Leijonhufvud, câu chuyện về quá trình hình thành và trỗi dậy đầy ngoạn mục để trở thành gã khổng lồ trong ngành dịch vụ cung cấp âm nhạc kĩ thuật số của Spotify được hiện ra sống động và kịch tính. Spotify và những câu chuyện chưa kể “hấp dẫn như kịch bản một bộ phim điện ảnh”, trong đó “ghi lại đầy đủ câu chuyện về cách công nghệ đã thay đổi âm nhạc và về những người đã biến giấc mơ đó thành hiện thực”.

                Mùa thu năm 2005, Daniel Ek lang thang trên con phố Vasastan ở Stockholm, Thuỵ Điển. Anh đang có ý tưởng bí mật về loại hình công ty kiểu mới… Và rồi trong một quán kiểu Anh, Daniel Ek đã gặp cộng sự quan trọng của mình, Martin Lorentzon, một doanh nhân 36 tuổi đến từ Boras, cũng chính là người đã cùng Daniel Ek thắp lên ngọn lửa hiện thực hóa ý tưởng mới mẻ mà táo bạo này. Daniel bắt đầu phát triển ý tưởng về mạng ngang hàng và nội dung chia sẻ, còn Martin thì muốn biến ý tưởng đó thành hiện thực bằng hành động đầu tiên là đưa Tradedoubler lên sàn chứng khoán và bán cổ phiếu của mình. Kể từ đó họ bắt đầu hành trình đánh chiếm Thung lũng Silicon và ngành công nghệ âm nhạc. Hai người họ đã đánh cược tất cả cho ý tưởng tạo nên đế chế nhạc số online ngày nay, một cái gai trong mắt Apple.
                
                Cuộc chiến công nghệ cách đây 10 năm chỉ giữa hai ông lớn Apple iPhone và Android, nhưng Spotify xuất hiện và đã ngay lập tức giành được chiến thắng. Xuất phát điểm là một công ty công nghệ bé nhỏ của Thuỵ Điển, nền tảng nghe nhạc Spotify đã tận dụng chính mối đe doạ từ việc vi phạm bản quyền, tải nhạc lậu để giành được vị trí dẫn đầu giới nhạc số và khiến cho các công ty âm nhạc lừng lẫy thế giới phải kí hợp đồng với mình.
                
                Trải qua bao thăng trầm và biến động, Daniel Ek đã viết nên câu chuyện khởi nghiệp thành công và Spotify ngày nay với hơn 50 triệu bài hát, hơn một triệu podcast và phủ sóng hơn 90 quốc gia cùng lượng người sử dụng đạt 350 triệu vào năm 2021.
                
                Có thể coi Spotify và những câu chuyện chưa kể là một cuốn hồi kí dài với nhiều câu chuyện đan xen suốt dọc chiều dài phát triển của Spotify.
                
                Cuốn sách không chỉ mang đến câu chuyện khách quan về hành trình bước tới đỉnh vinh quang của một dự án khởi nghiệp mà mọi doanh nhân biết cảnh giác cũng như mọi gã khổng lồ ở Thung lũng Silicon đều phải sợ hãi khi đối đầu; mà còn đi sâu tìm hiểu quá trình mang tính đột phá của ngành công nghiệp âm nhạc và các nhân vật đằng sau cuộc thập tự chinh âm thanh toàn cầu của gã khổng lồ Thụy Điển.
                
                Cuốn sách không chỉ kể về câu chuyện thành công của đơn vị đã giải quyết vấn nạn vi phạm bản quyền, biến đổi ngành công nghiệp âm nhạc và đưa hoạt động truyền phát trực tuyến trở thành chuẩn mực mới; mà còn mang đến câu chuyện về các cuộc chiến trực tuyến khốc liệt từ đó khắc họa rõ nét sự vươn lên bền bỉ của một doanh nghiệp truyền phát âm trực tuyến trong khi phải chống lại sự công kích từ nhiều phía.
                
                Cuốn sách còn bao gồm cả những đoạn phỏng vấn, hội thoại chưa từng tiết lộ với những nhân vật nổi tiếng như: Mark Zuckerberg, Steve Jobs, Taylor Swift, Jay-Z, Sean Parker, Pony Ma Huateng và Jimmy Iovine về suy nghĩ của họ đối với Spotify.
                
                Chính vì hàm chứa tính thời sự, tính xuyên suốt cùng lượng thông tin khổng lồ mà cuốn sách đã thu hút được sự quan tâm của độc giả cũng như của giới chuyên môn, nhờ đó cuốn sách đã được Netflix mua lại và chuẩn bị dựng thành phim. Bản quyền đã được bán cho hơn 10 quốc gia.
                
                Giới thiệu về tác giả
                
                Sven Carlsson là nhà báo hoạt động tại Stockholm. Anh hiện là phóng viên của Đài phát thanh Thụy Điển. Anh tốt nghiệp thạc sĩ tại Trường Báo chí Columbia (Columbia Jounalism School) và từng làm việc tại tờ Nhật báo Degens Industri và Svenska Dagbladet.
                
                Jonas Leijonhufvud là phóng viên kinh tế ở Thụy Điển từ năm 1998. Ông đã phỏng vấn Jeff Bezos trước khi bong bóng công nghệ vỡ và phỏng vấn nhà snags lập Martin Lorentzon khi Spotify mới ra mắt. Ông tốt ng hiệp hệ Cử nhân ngành Nghệ thuật Truyền thông tại Đại học Arizona (The University of Arizona) và hiện là phóng viên công nghệ tại Dagens Industri, tờ báo kinh doanh hàng đầu của Thụy Điển.
                
                Mã hàng	8935210289285
                Tên Nhà Cung Cấp	Tân Việt
                Tác giả	Sven Carlsson, Jonas Leijonhufvud
                Người Dịch	Thu Hà
                NXB	NXB Dân Trí
                Năm XB	2021
                Trọng lượng (gr)	450
                Kích Thước Bao Bì	23 x 15 x 1.3 cm
                Số trang	410
                Hình thức	Bìa Mềm
                Sản phẩm hiển thị trong	
                Flashsale
                Mã Giảm Giá
                Sách Kinh Tế
                Tân Việt
                RƯỚC DEAL LINH ĐÌNH VUI ĐÓN TRUNG THU
                Sản phẩm bán chạy nhất	Top 100 sản phẩm Nhân vật - Bài Học Kinh doanh bán chạy của tháng
                Giá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...
                Spotify Và Những Chuyện Chưa Kể - Hành Trình Đánh Bại Apple, Google Và Amazon Trong Cuộc Đua Âm Thanh Số Của Nhà Sáng Lập Daniel Ek
                
                Qua lăng kính và ngòi bút của hai nhà báo Thụy Điển Sven Carlsson và Jonas Leijonhufvud, câu chuyện về quá trình hình thành và trỗi dậy đầy ngoạn mục để trở thành gã khổng lồ trong ngành dịch vụ cung cấp âm nhạc kĩ thuật số của Spotify được hiện ra sống động và kịch tính. Spotify và những câu chuyện chưa kể “hấp dẫn như kịch bản một bộ phim điện ảnh”, trong đó “ghi lại đầy đủ câu chuyện về cách công nghệ đã thay đổi âm nhạc và về những người đã biến giấc mơ đó thành hiện thực”.
                
                Mùa thu năm 2005, Daniel Ek lang thang trên con phố Vasastan ở Stockholm, Thuỵ Điển. Anh đang có ý tưởng bí mật về loại hình công ty kiểu mới… Và rồi trong một quán kiểu Anh, Daniel Ek đã gặp cộng sự quan trọng của mình, Martin Lorentzon, một doanh nhân 36 tuổi đến từ Boras, cũng chính là người đã cùng Daniel Ek thắp lên ngọn lửa hiện thực hóa ý tưởng mới mẻ mà táo bạo này. Daniel bắt đầu phát triển ý tưởng về mạng ngang hàng và nội dung chia sẻ, còn Martin thì muốn biến ý tưởng đó thành hiện thực bằng hành động đầu tiên là đưa Tradedoubler lên sàn chứng khoán và bán cổ phiếu của mình. Kể từ đó họ bắt đầu hành trình đánh chiếm Thung lũng Silicon và ngành công nghệ âm nhạc. Hai người họ đã đánh cược tất cả cho ý tưởng tạo nên đế chế nhạc số online ngày nay, một cái gai trong mắt Apple.
                
                Cuộc chiến công nghệ cách đây 10 năm chỉ giữa hai ông lớn Apple iPhone và Android, nhưng Spotify xuất hiện và đã ngay lập tức giành được chiến thắng. Xuất phát điểm là một công ty công nghệ bé nhỏ của Thuỵ Điển, nền tảng nghe nhạc Spotify đã tận dụng chính mối đe doạ từ việc vi phạm bản quyền, tải nhạc lậu để giành được vị trí dẫn đầu giới nhạc số và khiến cho các công ty âm nhạc lừng lẫy thế giới phải kí hợp đồng với mình.
                
                Trải qua bao thăng trầm và biến động, Daniel Ek đã viết nên câu chuyện khởi nghiệp thành công và Spotify ngày nay với hơn 50 triệu bài hát, hơn một triệu podcast và phủ sóng hơn 90 quốc gia cùng lượng người sử dụng đạt 350 triệu vào năm 2021.
                
                Có thể coi Spotify và những câu chuyện chưa kể là một cuốn hồi kí dài với nhiều câu chuyện đan xen suốt dọc chiều dài phát triển của Spotify.
                
                Cuốn sách không chỉ mang đến câu chuyện khách quan về hành trình bước tới đỉnh vinh quang của một dự án khởi nghiệp mà mọi doanh nhân biết cảnh giác cũng như mọi gã khổng lồ ở Thung lũng Silicon đều phải sợ hãi khi đối đầu; mà còn đi sâu tìm hiểu quá trình mang tính đột phá của ngành công nghiệp âm nhạc và các nhân vật đằng sau cuộc thập tự chinh âm thanh toàn cầu của gã khổng lồ Thụy Điển.
                
                Cuốn sách không chỉ kể về câu chuyện thành công của đơn vị đã giải quyết vấn nạn vi phạm bản quyền, biến đổi ngành công nghiệp âm nhạc và đưa hoạt động truyền phát trực tuyến trở thành chuẩn mực mới; mà còn mang đến câu chuyện về các cuộc chiến trực tuyến khốc liệt từ đó khắc họa rõ nét sự vươn lên bền bỉ của một doanh nghiệp truyền phát âm trực tuyến trong khi phải chống lại sự công kích từ nhiều phía.
                
                Cuốn sách còn bao gồm cả những đoạn phỏng vấn, hội thoại chưa từng tiết lộ với những nhân vật nổi tiếng như: Mark Zuckerberg, Steve Jobs, Taylor Swift, Jay-Z, Sean Parker, Pony Ma Huateng và Jimmy Iovine về suy nghĩ của họ đối với Spotify.
                
                Chính vì hàm chứa tính thời sự, tính xuyên suốt cùng lượng thông tin khổng lồ mà cuốn sách đã thu hút được sự quan tâm của độc giả cũng như của giới chuyên môn, nhờ đó cuốn sách đã được Netflix mua lại và chuẩn bị dựng thành phim. Bản quyền đã được bán cho hơn 10 quốc gia.
                
                Giới thiệu về tác giả
                
                Sven Carlsson là nhà báo hoạt động tại Stockholm. Anh hiện là phóng viên của Đài phát thanh Thụy Điển. Anh tốt nghiệp thạc sĩ tại Trường Báo chí Columbia (Columbia Jounalism School) và từng làm việc tại tờ Nhật báo Degens Industri và Svenska Dagbladet.
                
                Jonas Leijonhufvud là phóng viên kinh tế ở Thụy Điển từ năm 1998. Ông đã phỏng vấn Jeff Bezos trước khi bong bóng công nghệ vỡ và phỏng vấn nhà snags lập Martin Lorentzon khi Spotify mới ra mắt. Ông tốt ng hiệp hệ Cử nhân ngành Nghệ thuật Truyền thông tại Đại học Arizona (The University of Arizona) và hiện là phóng viên công nghệ tại Dagens Industri, tờ báo kinh doanh hàng đầu của Thụy Điển.',
                'product_price' => '99000',
                'size' => '18 x 13 cm',
                'translater' => 'Thu Hà',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935210289285.jpg',
                'year_of_manufacture' => '2022',
                'number_of_pages' => '201',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 4,
                'publisher_id' => 7,
                'author_id' => 24,
                'product_name' => 'Lịch Sử Quân Sự - Bách Khoa Thư Các Loại Vũ Khí Định Hình Thế Giới',
                'describe' => 'Lịch Sử Quân Sự - Bách Khoa Thư Các Loại Vũ Khí Định Hình Thế Giới

                Tập hợp đầy đủ các loại binh khí, máy móc, vật dụng quân sự, từ rìu tay đá lửa thời tiền sử tới vệ tinh do thám và máy bay không người lái ngày nay, Lịch sử Quân sự là bách khoa thư toàn diện về lịch sử không ngừng biến thiên của công nghệ chiến tranh.
                
                Những minh họa chi tiết, sống động sẽ giúp độc giả như được tham quan tận mắt những đặc tính quan trọng của hơn 1750 loại vũ khí, giáp trụ, xe cộ và công sự. Tất cả được đặt trong các diễn biến chính được tường thuật rõ ràng của lịch sử chiến tranh, cùng bối cảnh chính trị - xã hội rộng lớn hơn. Kèm theo là những trận đánh nổi tiếng được phân tích trên phương diện vũ khí và chiến lược, nơi những tiến bộ công nghệ quân sự nổi bật trên tấm bản đồ quyền lực đầy biến động của các đế chế.
                
                Lịch sử Quân sự, thành quả chung của nhóm chuyên gia đến từ Bảo tàng Vũ khí Hoàng gia Anh, Viện Smithsonian và các bảo tàng hàng đầu khác, sẽ cung cấp cho bạn đọc một bản tường thuật lý thú về những loại vũ khí và chiến thuật đã làm thay đổi bản chất chiến tranh.
                
                Mã hàng	8936071676726
                Tên Nhà Cung Cấp	Đông A
                Tác giả	DK
                Người Dịch	Nguyễn Minh
                NXB	NXB Dân Trí
                Năm XB	2019
                Trọng lượng (gr)	2400
                Kích Thước Bao Bì	25 x 30 cm
                Số trang	448
                Hình thức	Bìa Cứng
                Sản phẩm hiển thị trong	
                Đông A
                Sản phẩm bán chạy nhất	Top 100 sản phẩm Lịch Sử bán chạy của tháng
                Giá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...
                Lịch Sử Quân Sự - Bách Khoa Thư Các Loại Vũ Khí Định Hình Thế Giới
                
                Tập hợp đầy đủ các loại binh khí, máy móc, vật dụng quân sự, từ rìu tay đá lửa thời tiền sử tới vệ tinh do thám và máy bay không người lái ngày nay, Lịch sử Quân sự là bách khoa thư toàn diện về lịch sử không ngừng biến thiên của công nghệ chiến tranh.
                
                Những minh họa chi tiết, sống động sẽ giúp độc giả như được tham quan tận mắt những đặc tính quan trọng của hơn 1750 loại vũ khí, giáp trụ, xe cộ và công sự. Tất cả được đặt trong các diễn biến chính được tường thuật rõ ràng của lịch sử chiến tranh, cùng bối cảnh chính trị - xã hội rộng lớn hơn. Kèm theo là những trận đánh nổi tiếng được phân tích trên phương diện vũ khí và chiến lược, nơi những tiến bộ công nghệ quân sự nổi bật trên tấm bản đồ quyền lực đầy biến động của các đế chế.
                
                Lịch sử Quân sự, thành quả chung của nhóm chuyên gia đến từ Bảo tàng Vũ khí Hoàng gia Anh, Viện Smithsonian và các bảo tàng hàng đầu khác, sẽ cung cấp cho bạn đọc một bản tường thuật lý thú về những loại vũ khí và chiến thuật đã làm thay đổi bản chất chiến tranh.',
                'product_price' => '396000',
                'size' => '25 x 19 x 10 cm',
                'translater' => 'Nguyễn Minh',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/t/t/tttttttttttttt_1.jpg',
                'year_of_manufacture' => '2022',
                'number_of_pages' => '400',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 11,
                'publisher_id' => 13,
                'author_id' => 23,
                'product_name' => 'Sách Giáo Khoa Bộ Lớp 12 - Sách Bài Học (Bộ 14 Cuốn) (2022)',
                'describe' => 'Bộ sách bao gôm:
                1	Giáo dục Quốc phòng - An ninh 12
                2	Giải tích 12
                3	Hình học 12
                4	Vật lí 12
                5	Hoá học 12
                6	Sinh học 12
                7	Công nghệ 12
                8	Ngữ văn 12/1
                9	Ngữ văn 12/2
                10	 Lịch sử 12
                11	 Địa lí 12
                12 Giáo dục công dân 12
                13	 Tin học 12
                14 Tiếng Anh 12
                Giá sản phẩm trên Bookstore.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...',
                'product_price' => '180000',
                'size' => '24 x 17 x 8.4 cm',
                'translater' => 'Không',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/3/3/3300000015422-1.jpg',
                'year_of_manufacture' => '2022',
                'number_of_pages' => '160 ',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 11,
                'publisher_id' => 13,
                'author_id' => 23,
                'product_name' => 'Sách Giáo Khoa Bộ Lớp 11 - Sách Bài Tập (Bộ 11 Cuốn) (2022)',
                'describe' => '
                STT	Tên sản phẩm
                1	Bài tập Đại số và giải tích 11
                2	Bài tập Hình học 11
                3	Bài tập Vật lí 11
                4	Bài tập Hoá học 11
                5	Bài tập Ngữ văn 11/1
                6	Bài tập Ngữ văn 11/2
                7	Bài tập Tin học 11
                8	Bài tập Tiếng Anh 11
                9	Bài tập Sinh học 11
                10	Bài tập Lịch sử 11
                11	Bài tập Địa lí 11
                
                Giá sản phẩm trên Bookstore.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...',
                'product_price' => '140000',
                'size' => '24 x 17 x 8.4 cm',
                'translater' => 'Không',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/3/3/3300000015415-1.jpg',
                'year_of_manufacture' => '2022',
                'number_of_pages' => '160 ',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 13,
                'publisher_id' => 6,
                'author_id' => 25,
                'product_name' => 'Mozart',
                'describe' => 'Mozart là một công trình nổi bật của nhà âm nhạc học Maynard Solomon, với giọng kể khách quan và dựa trên sự vượt trội về nguồn tư liệu, trong đó có nhiều tư liệu chưa từng xuất hiện trong bất kỳ tiểu sử nào trước đó về nhà soạn nhạc vĩ đại này.

                Cuốn sách đã giúp chúng ta được nhìn thấy người nhạc sĩ vĩ đại ở một góc nhìn khác biệt. Người đọc sẽ không còn thấy một Mozart thần thánh nữa, mà là một Mozart đời thường, một nhạc sĩ cũng phải kinh qua những bế tắc trong cuộc sống.
                
                Cuốn sách nói về các sự kiện, những bước ngoặt từ khi ông sinh ra vào năm 1756 và thời thơ ấu ở Salzburg cho đến thập niên đặc biệt của những buổi biểu diễn nổi tiếng ở các thủ đô châu Âu, nơi ông được các gia đình hoàng gia và khán giả yêu mến, tôn vinh như một thiên tài kỳ lạ. Cuốn sách cũng kể lại các bước thăng trầm của Mozart từ địa vị là người con được yêu thích của Salzburg trong những năm 1770, đến hành trình chinh phục Vienna cùng cuộc hôn nhân ở đó, từ những thăng trầm tài chính cho đến những nỗi sầu muộn ngày càng sâu sắc, cuối cùng kết thúc với sự ra đi ở tuổi còn rất trẻ của ông năm 1791…
                
                Qua phân tích các khía cạnh tâm lý cũng như các mối quan hệ xung quanh đã định hình nên con người và cuộc đời Mozart, cuốn sách đã tái hiện một Mozart rất trần thế với tính cách ngang ngược, sở thích tinh quái; một Mozart luôn bị giằng co giữa những “món nợ” với gia đình, một Mozart đã phải chiến đấu chật vật để thoát khỏi huyền thoại về một thần đồng mà theo đó tài năng là do trời ban… Và như thế, đây là chân dung một Mozart bình dị mà không kém phần vĩ đại, một thiên tài giữa những rắc rối, khổ đau…
                
                Đánh giá/ nhận xét của chuyên gia:
                
                “Maynard Solomon viết với sự duyên dáng của một tiểu thuyết gia, cái nhìn sâu sắc của một triết gia và sự chính xác của một thám tử. Chúng ta biết đến Mozart với tư cách là một thiên tài âm nhạc, nhưng hơn thế nữa, ông là một con người, biết thở và biết suy nghĩ”. - Yo Yo Ma - nghệ sĩ cello bậc thầy của Mỹ
                
                Trích đoạn hay:
                
                Lúc bốn tuổi, Mozart đã dùng quyển sổ âm nhạc của Nannerl, cuốn sách nhanh chóng mang những ghi chú đầy tự hào của Leopold Mozart đề cạnh một số tác phẩm, chẳng hạn, “Wolfgangerl đã học được bản minuet này vào năm bốn tuổi”, hoặc có chỗ ghi chính xác và ý thức sâu sắc về tính lịch sử: “Bản Minuet có phần Trio này đã được Wolfgangerl học trong nửa giờ, lúc chín giờ rưỡi tối ngày 26 tháng 1 năm 1761, một ngày trước sinh nhật năm tuổi của con”.
                
                Họ đã lưu diễn trong ba năm, năm tháng, hai mươi ngày, và đã đi hàng ngàn dặm bằng xe ngựa, dừng lại ở tám mươi tám thành phố và thị trấn (bao gồm cả những chuyến thăm lại), và biểu diễn cho hàng ngàn khán giả. Leopold Mozart đã rời khỏi quê nhà với tư cách một nhạc sĩ giỏi giang, thậm chí đáng chú ý, danh tiếng; vào thời điểm gia đình trở về Salzburg, ông là một nhân vật nổi tiếng. Ông và các con của ông đã viết một chương mới trong lịch sử âm nhạc, và trở nên nổi tiếng khắp châu Âu hơn mọi mong đợi. Trong nhiều thập niên sau đó, những người từng chứng kiến các buổi biểu diễn của Mozart đã nhớ lại chúng như những kỳ tích về tài năng điêu luyện đáng kinh ngạc. (Về Hành trình Vĩ đại)
                
                Bất cứ ai khi đọc các bức thư của Leopold Mozart sẽ sớm nhận ra rằng tiền bạc là một chủ đề được ông quan tâm thường xuyên, thậm chí là mối bận tâm sâu sắc. Giá cả, chiết khấu, lãi suất, tỉ giá hối đoái – mọi loại giao dịch đều là chuyên môn của ông, và ông cũng không cần phải nhường đất cho bất kỳ nhà toán học nào về khả năng tính toán thành thạo của mình. Ông nắm rõ chi phí của tất cả mọi thứ và thuyết giảng kinh tế nhiệt thành như khi ông thể hiện lòng sùng đạo, khuyến khích gia đình tiết kiệm tiền cho mọi chi phí, dù là khoản nhỏ đến cỡ nào. (chương 4)
                
                Tại Ý, Leopold đã hoàn thành mục tiêu chính mà ông đã đặt ra hai năm trước đó: tạo lập nên danh tiếng của Mozart với tư cách là một nhà soạn nhạc nghiêm túc, xứng đáng với các ủy thác opera và có thể được cân nhắc là một kapellmeister tại một triều đình lớn. Đồng thời, với nghị lực vô biên và kỹ năng ngoại giao phi thường, Leopold đã khai thác mọi cơ hội để phô bày tài nghệ chơi đàn phím của con trai cho những khán giả ngưỡng mộ, bao gồm các nhạc sĩ, người yêu nhạc và những người sành nhạc. Đó là một khoảng thời gian may mắn trong quá trình phát triển của Mozart: cậu chưa hoàn toàn vượt xa những năm tháng làm một đứa trẻ kỳ diệu của mình và do đó được chào đón ở khắp mọi nơi như một thần đồng; ngoài ra, cậu đã bước đầu phát huy khả năng của mình với tư cách là một nhà soạn nhạc trưởng thành. Dù vẫn còn chưa thiết lập được phong cách cá nhân hoặc học cách mở rộng ranh giới truyền thống, nhưng cậu đã sáng tác các tác phẩm đặc trưng và thậm chí là mẫu mực trong các phong cách và thể loại đương thời, bao gồm opera seria, thể loại được đánh giá là ở ngưỡng cao nhất thời bấy giờ. Việc quần chúng công nhận tài năng của Mozart như một nhà soạn nhạc, và khả năng biểu diễn bậc thầy của cậu, đã khiến chuyến đi Ý trở thành đỉnh cao trong sự nghiệp của Mozart cho đến thời điểm đó. Việc địa điểm là Ý, trung tâm của đời sống âm nhạc châu Âu, cũng đã biến một chiến thắng cá nhân thành một sự kiện lịch sử, phù hợp với sự dịch chuyển sức ảnh hưởng của trường phái cổ điển từ Ý về phương bắc trong lịch sử âm nhạc.
                
                Với Mozart, Salzburg luôn là nhà. Hồi lên bảy, có hôm cậu thức dậy vào một buổi sáng ở một thành phố xa lạ và bắt đầu khóc. […] Tuy nhiên, dường như ngay lúc trở về từ Milan năm 1773, Mozart đã khao khát rời khỏi Salzburg, như chúng ta được biết qua thư từ gia đình. Có thể Mozart đã xem những năm ở Salzburg có tính chất quan trọng như những năm chuyển tiếp: Mozart đã bồn chồn, háo hức để tiếp tục các hành trình của mình, đã sẵn sàng đóng gói đồ đạc của mình ngay khi có cơ hội, và bây giờ cậu muốn rời đi vĩnh viễn. Mong muốn này không hề phi lý. Vốn đã tiếp cận với các trung tâm âm nhạc chính của châu Âu, cậu đã nhận thức sâu sắc về sự thiếu sót của Salzburg và đặc biệt cảm thấy sự vắng bóng của bất kỳ nhà hát âm nhạc quan trọng nào ở đó, đặc biệt là sau năm 1775, khi nhà hát cung đình đóng cửa và thay vào đó là, nhà hát Ballhaus tại Hannibalplatz, hầu như chỉ dành riêng cho các đoàn kịch ghé thăm. Mozart cảm thấy các cơ hội cho mình tại Salzburg, cả về sự sáng tạo lẫn phần thưởng tài chính, đã không còn. Mozart đã liên tục thúc ép cha mình để được rời khỏi Salzburg. Nhưng tất nhiên, Leopold Mozart đã phản đối mạnh mẽ, vì ông không thể tán thành khả năng họ bị chia cắt.
                
                Âm nhạc của Mozart đã được gọt đi công sức của ông tạo dựng khi thành phẩm, những máu và đau thương từng thăng hoa trong quá trình sáng tạo đã được lau sạch. Công sức sáng tạo của Mozart được coi là sản phẩm do sức mạnh từ bên ngoài; ông được coi là một công cụ tiếp nhận, có tính trung lập hoặc là mạch chảy của một thế lực lớn lao, có lẽ mang tính thần thánh; ông được cho là đã viết nhạc một cách tự động vì đó là bản năng, để tạo ra âm nhạc như một con tằm quay tơ, để đưa ra những kiệt tác từ tay áo mà không cần nỗ lực hay ý chí. (chương 8)
                
                Theo tôi hiểu, Mozart đã không được phép tự mình trở thành một nhạc sĩ tự do vì những điều không thể lường trước và tình hình tài chính bấp bênh của công việc đó sẽ phá hỏng kế hoạch lớn của Leopold Mozart. Hơn nữa, điều đó có nghĩa là Mozart sẽ rời khỏi gia đình trong hoàn cảnh không được giám sát, khiến Mozart có thể bỏ bê nghĩa vụ gia đình. Tất nhiên, khả năng tồi tệ nhất là Mozart có thể sẽ kết hôn, và do đó sẽ cam kết dốc hết lòng trung thành và thu nhập cho vợ con; đó là lý do tại sao sự gắn bó bất ngờ của Mozart với gia đình Weber đã khơi dậy nỗi lo lắng sâu thẳm nhất của cha mẹ mình. (chương 9)
                
                Khi rời khỏi Leopold Mozart, dường như Mozart đã từ bỏ việc đóng giả sự toàn năng của chính mình, thừa nhận rằng khả năng giúp đỡ cha của bản thân mình cũng có giới hạn. Một cách quyết liệt, việc ra đi của Mozart là sự khẳng định mạnh mẽ, rằng Leopold đã trở thành một cá nhân độc lập, tự đứng trên đôi chân của mình, tự mình kiếm sống, từ bỏ sự lệ thuộc nhục nhã vào con trai. Đồng thời, tất nhiên, Mozart đã xác nhận chu kỳ của các thế hệ, sự tất yếu của việc cha mẹ qua đời, sự cần thiết khi con cái rời khỏi nhà, bước ra thế giới, trần trụi và sợ hãi, đánh đổi sự bảo vệ của tổ ấm với các biểu tượng cho thỏa mãn cá nhân và thành tựu sáng tạo. Leopold Mozart lẽ ra đã phải hiểu rõ, vì cuối cùng, con trai ông đã thực hiện điều này không khác gì ông khi xưa: từ bỏ sự phụ thuộc vào gia đình và tìm kiếm vị trí của mình như một cá nhân sáng tạo ở một thành phố xa xôi.
                
                Câu Quote hay:
                
                Ngay từ trước khi Mozart lên năm tuổi, Leopold Mozart đã có thể nhìn ra rằng tài năng âm nhạc của con trai ông sẽ là một công cụ cho những tham vọng của ông, và là thứ có thể làm nguôi ngoai cảm giác bất công bùng cháy trong ông bởi hoàn cảnh trước đây. (về Leopold Mozart)
                
                Leopold Mozart đã nhanh chóng hiểu được tài năng phi thường của con trai mình với tư cách một nghệ sĩ đàn phím và hiểu ý nghĩa của điều đó trong việc định hình lại cuộc sống của gia đình.
                
                Trong suốt cuộc đời, dễ thấy những lá thư của Mozart luôn khẳng định tình cảm vĩnh cửu không lay chuyển dành cho cha, ngay cả khi quan hệ giữa họ căng thẳng nhất.
                
                Mong muốn được công nhận của Mozart đáng lẽ có thể đã dẫn đến sự phục tùng hoàn toàn, thậm chí là sự khúm núm. Nhưng thay vào đó, cậu được thúc đẩy vượt xa những gì được yêu cầu, để vượt trội bằng mọi giá. Cậu đã cảm nhận được sức mạnh của âm nhạc – mang đến sự chấp thuận và tình yêu, khơi gợi sự ngưỡng mộ và tán thưởng, thu về tiền và nhiều quà tặng. Đây là một cơ chế kỳ diệu, mang lại cho cậu một cảm giác thành công, vì đó là một phương cách gần như không giới hạn để phát triển và phô bày thiên tư của cậu.
                
                Có lẽ bởi vì bị say mê bởi những quyền hạn này của âm nhạc, Mozart đã muốn tiến triển nhanh chóng, thậm chí còn nhanh hơn cả mong muốn của cha mình.
                
                Sẽ không có gì ngạc nhiên nếu Mozart khát mong một cõi quyền uy của riêng mình, qua đó có thể thấy rằng, mong muốn thể hiện tự do cá tính của chính Mozart có thể đã bắt đầu khuấy động ngay từ khi còn rất nhỏ.
                
                Vì vậy, vào ngày 23 tháng 9, Mozart, cùng với mẹ
                của mình, đã lên đường đến miền nam nước Đức và sau đó tới Paris để tìm kiếm một vị trí mới. Salzburg đã mất đi đứa con trai yêu quý.
                
                Mục tiêu thực sự của gia đình lúc đó, không phải là kiếm được nhiều tiền hay vinh quang từ hai đứa trẻ tài năng, mà là hỗ trợ về cảm xúc và phục tùng cho thành viên đòi hỏi nhất, là Leopold Mozart. (chương 13)
                
                Cuối cùng, ở tuổi 25, Mozart đã đứng trên đôi chân của chính mình, cạn kiệt cảm xúc nhưng háo hức để thể hiện khí chất của bản thân.
                
                Về tác giả:
                
                Sinh ngày 5.1.1930 tại Manhattan, Hoa Kỳ.
                
                Maynard Solomon là người đồng sáng lập của Vanguard Records đồng thời từng là một nhà sản xuất âm nhạc. Ông được biết đến với nhiều nghiên cứu tiểu sử về các nhà soạn nhạc cổ điển của Vienna, đặc biệt là Beethoven, Mozart và Schubert.
                
                Ngày 28 tháng 9 năm 2020 vừa qua, ông đã qua đời tại nhà riêng ở Manhattan.
                
                Mã hàng	8935270702946
                Tên Nhà Cung Cấp	Alpha Books
                Tác giả	Maynard Solomon
                Người Dịch	Mai Đức Hạnh, Nguyễn Anh Tùng
                NXB	NXB Dân Trí
                Năm XB	2020
                Trọng lượng (gr)	1200
                Kích Thước Bao Bì	24 x 16 cm
                Số trang	960
                Hình thức	Bìa Cứng
                Sản phẩm hiển thị trong	
                Tuyển Tập Sách Omega
                Sản phẩm bán chạy nhất	Top 100 sản phẩm Nghệ Thuật - Giải Trí bán chạy của tháng
                Giá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...
                Mozart là một công trình nổi bật của nhà âm nhạc học Maynard Solomon, với giọng kể khách quan và dựa trên sự vượt trội về nguồn tư liệu, trong đó có nhiều tư liệu chưa từng xuất hiện trong bất kỳ tiểu sử nào trước đó về nhà soạn nhạc vĩ đại này.
                
                Cuốn sách đã giúp chúng ta được nhìn thấy người nhạc sĩ vĩ đại ở một góc nhìn khác biệt. Người đọc sẽ không còn thấy một Mozart thần thánh nữa, mà là một Mozart đời thường, một nhạc sĩ cũng phải kinh qua những bế tắc trong cuộc sống.
                
                Cuốn sách nói về các sự kiện, những bước ngoặt từ khi ông sinh ra vào năm 1756 và thời thơ ấu ở Salzburg cho đến thập niên đặc biệt của những buổi biểu diễn nổi tiếng ở các thủ đô châu Âu, nơi ông được các gia đình hoàng gia và khán giả yêu mến, tôn vinh như một thiên tài kỳ lạ. Cuốn sách cũng kể lại các bước thăng trầm của Mozart từ địa vị là người con được yêu thích của Salzburg trong những năm 1770, đến hành trình chinh phục Vienna cùng cuộc hôn nhân ở đó, từ những thăng trầm tài chính cho đến những nỗi sầu muộn ngày càng sâu sắc, cuối cùng kết thúc với sự ra đi ở tuổi còn rất trẻ của ông năm 1791…
                
                Qua phân tích các khía cạnh tâm lý cũng như các mối quan hệ xung quanh đã định hình nên con người và cuộc đời Mozart, cuốn sách đã tái hiện một Mozart rất trần thế với tính cách ngang ngược, sở thích tinh quái; một Mozart luôn bị giằng co giữa những “món nợ” với gia đình, một Mozart đã phải chiến đấu chật vật để thoát khỏi huyền thoại về một thần đồng mà theo đó tài năng là do trời ban… Và như thế, đây là chân dung một Mozart bình dị mà không kém phần vĩ đại, một thiên tài giữa những rắc rối, khổ đau…
                
                Đánh giá/ nhận xét của chuyên gia:
                
                “Maynard Solomon viết với sự duyên dáng của một tiểu thuyết gia, cái nhìn sâu sắc của một triết gia và sự chính xác của một thám tử. Chúng ta biết đến Mozart với tư cách là một thiên tài âm nhạc, nhưng hơn thế nữa, ông là một con người, biết thở và biết suy nghĩ”. - Yo Yo Ma - nghệ sĩ cello bậc thầy của Mỹ
                
                Trích đoạn hay:
                
                Lúc bốn tuổi, Mozart đã dùng quyển sổ âm nhạc của Nannerl, cuốn sách nhanh chóng mang những ghi chú đầy tự hào của Leopold Mozart đề cạnh một số tác phẩm, chẳng hạn, “Wolfgangerl đã học được bản minuet này vào năm bốn tuổi”, hoặc có chỗ ghi chính xác và ý thức sâu sắc về tính lịch sử: “Bản Minuet có phần Trio này đã được Wolfgangerl học trong nửa giờ, lúc chín giờ rưỡi tối ngày 26 tháng 1 năm 1761, một ngày trước sinh nhật năm tuổi của con”.
                
                Họ đã lưu diễn trong ba năm, năm tháng, hai mươi ngày, và đã đi hàng ngàn dặm bằng xe ngựa, dừng lại ở tám mươi tám thành phố và thị trấn (bao gồm cả những chuyến thăm lại), và biểu diễn cho hàng ngàn khán giả. Leopold Mozart đã rời khỏi quê nhà với tư cách một nhạc sĩ giỏi giang, thậm chí đáng chú ý, danh tiếng; vào thời điểm gia đình trở về Salzburg, ông là một nhân vật nổi tiếng. Ông và các con của ông đã viết một chương mới trong lịch sử âm nhạc, và trở nên nổi tiếng khắp châu Âu hơn mọi mong đợi. Trong nhiều thập niên sau đó, những người từng chứng kiến các buổi biểu diễn của Mozart đã nhớ lại chúng như những kỳ tích về tài năng điêu luyện đáng kinh ngạc. (Về Hành trình Vĩ đại)
                
                Bất cứ ai khi đọc các bức thư của Leopold Mozart sẽ sớm nhận ra rằng tiền bạc là một chủ đề được ông quan tâm thường xuyên, thậm chí là mối bận tâm sâu sắc. Giá cả, chiết khấu, lãi suất, tỉ giá hối đoái – mọi loại giao dịch đều là chuyên môn của ông, và ông cũng không cần phải nhường đất cho bất kỳ nhà toán học nào về khả năng tính toán thành thạo của mình. Ông nắm rõ chi phí của tất cả mọi thứ và thuyết giảng kinh tế nhiệt thành như khi ông thể hiện lòng sùng đạo, khuyến khích gia đình tiết kiệm tiền cho mọi chi phí, dù là khoản nhỏ đến cỡ nào. (chương 4)
                
                Tại Ý, Leopold đã hoàn thành mục tiêu chính mà ông đã đặt ra hai năm trước đó: tạo lập nên danh tiếng của Mozart với tư cách là một nhà soạn nhạc nghiêm túc, xứng đáng với các ủy thác opera và có thể được cân nhắc là một kapellmeister tại một triều đình lớn. Đồng thời, với nghị lực vô biên và kỹ năng ngoại giao phi thường, Leopold đã khai thác mọi cơ hội để phô bày tài nghệ chơi đàn phím của con trai cho những khán giả ngưỡng mộ, bao gồm các nhạc sĩ, người yêu nhạc và những người sành nhạc. Đó là một khoảng thời gian may mắn trong quá trình phát triển của Mozart: cậu chưa hoàn toàn vượt xa những năm tháng làm một đứa trẻ kỳ diệu của mình và do đó được chào đón ở khắp mọi nơi như một thần đồng; ngoài ra, cậu đã bước đầu phát huy khả năng của mình với tư cách là một nhà soạn nhạc trưởng thành. Dù vẫn còn chưa thiết lập được phong cách cá nhân hoặc học cách mở rộng ranh giới truyền thống, nhưng cậu đã sáng tác các tác phẩm đặc trưng và thậm chí là mẫu mực trong các phong cách và thể loại đương thời, bao gồm opera seria, thể loại được đánh giá là ở ngưỡng cao nhất thời bấy giờ. Việc quần chúng công nhận tài năng của Mozart như một nhà soạn nhạc, và khả năng biểu diễn bậc thầy của cậu, đã khiến chuyến đi Ý trở thành đỉnh cao trong sự nghiệp của Mozart cho đến thời điểm đó. Việc địa điểm là Ý, trung tâm của đời sống âm nhạc châu Âu, cũng đã biến một chiến thắng cá nhân thành một sự kiện lịch sử, phù hợp với sự dịch chuyển sức ảnh hưởng của trường phái cổ điển từ Ý về phương bắc trong lịch sử âm nhạc.
                
                Với Mozart, Salzburg luôn là nhà. Hồi lên bảy, có hôm cậu thức dậy vào một buổi sáng ở một thành phố xa lạ và bắt đầu khóc. […] Tuy nhiên, dường như ngay lúc trở về từ Milan năm 1773, Mozart đã khao khát rời khỏi Salzburg, như chúng ta được biết qua thư từ gia đình. Có thể Mozart đã xem những năm ở Salzburg có tính chất quan trọng như những năm chuyển tiếp: Mozart đã bồn chồn, háo hức để tiếp tục các hành trình của mình, đã sẵn sàng đóng gói đồ đạc của mình ngay khi có cơ hội, và bây giờ cậu muốn rời đi vĩnh viễn. Mong muốn này không hề phi lý. Vốn đã tiếp cận với các trung tâm âm nhạc chính của châu Âu, cậu đã nhận thức sâu sắc về sự thiếu sót của Salzburg và đặc biệt cảm thấy sự vắng bóng của bất kỳ nhà hát âm nhạc quan trọng nào ở đó, đặc biệt là sau năm 1775, khi nhà hát cung đình đóng cửa và thay vào đó là, nhà hát Ballhaus tại Hannibalplatz, hầu như chỉ dành riêng cho các đoàn kịch ghé thăm. Mozart cảm thấy các cơ hội cho mình tại Salzburg, cả về sự sáng tạo lẫn phần thưởng tài chính, đã không còn. Mozart đã liên tục thúc ép cha mình để được rời khỏi Salzburg. Nhưng tất nhiên, Leopold Mozart đã phản đối mạnh mẽ, vì ông không thể tán thành khả năng họ bị chia cắt.
                
                Âm nhạc của Mozart đã được gọt đi công sức của ông tạo dựng khi thành phẩm, những máu và đau thương từng thăng hoa trong quá trình sáng tạo đã được lau sạch. Công sức sáng tạo của Mozart được coi là sản phẩm do sức mạnh từ bên ngoài; ông được coi là một công cụ tiếp nhận, có tính trung lập hoặc là mạch chảy của một thế lực lớn lao, có lẽ mang tính thần thánh; ông được cho là đã viết nhạc một cách tự động vì đó là bản năng, để tạo ra âm nhạc như một con tằm quay tơ, để đưa ra những kiệt tác từ tay áo mà không cần nỗ lực hay ý chí. (chương 8)
                
                Theo tôi hiểu, Mozart đã không được phép tự mình trở thành một nhạc sĩ tự do vì những điều không thể lường trước và tình hình tài chính bấp bênh của công việc đó sẽ phá hỏng kế hoạch lớn của Leopold Mozart. Hơn nữa, điều đó có nghĩa là Mozart sẽ rời khỏi gia đình trong hoàn cảnh không được giám sát, khiến Mozart có thể bỏ bê nghĩa vụ gia đình. Tất nhiên, khả năng tồi tệ nhất là Mozart có thể sẽ kết hôn, và do đó sẽ cam kết dốc hết lòng trung thành và thu nhập cho vợ con; đó là lý do tại sao sự gắn bó bất ngờ của Mozart với gia đình Weber đã khơi dậy nỗi lo lắng sâu thẳm nhất của cha mẹ mình. (chương 9)
                
                Khi rời khỏi Leopold Mozart, dường như Mozart đã từ bỏ việc đóng giả sự toàn năng của chính mình, thừa nhận rằng khả năng giúp đỡ cha của bản thân mình cũng có giới hạn. Một cách quyết liệt, việc ra đi của Mozart là sự khẳng định mạnh mẽ, rằng Leopold đã trở thành một cá nhân độc lập, tự đứng trên đôi chân của mình, tự mình kiếm sống, từ bỏ sự lệ thuộc nhục nhã vào con trai. Đồng thời, tất nhiên, Mozart đã xác nhận chu kỳ của các thế hệ, sự tất yếu của việc cha mẹ qua đời, sự cần thiết khi con cái rời khỏi nhà, bước ra thế giới, trần trụi và sợ hãi, đánh đổi sự bảo vệ của tổ ấm với các biểu tượng cho thỏa mãn cá nhân và thành tựu sáng tạo. Leopold Mozart lẽ ra đã phải hiểu rõ, vì cuối cùng, con trai ông đã thực hiện điều này không khác gì ông khi xưa: từ bỏ sự phụ thuộc vào gia đình và tìm kiếm vị trí của mình như một cá nhân sáng tạo ở một thành phố xa xôi.
                
                Câu Quote hay:
                
                Ngay từ trước khi Mozart lên năm tuổi, Leopold Mozart đã có thể nhìn ra rằng tài năng âm nhạc của con trai ông sẽ là một công cụ cho những tham vọng của ông, và là thứ có thể làm nguôi ngoai cảm giác bất công bùng cháy trong ông bởi hoàn cảnh trước đây. (về Leopold Mozart)
                
                Leopold Mozart đã nhanh chóng hiểu được tài năng phi thường của con trai mình với tư cách một nghệ sĩ đàn phím và hiểu ý nghĩa của điều đó trong việc định hình lại cuộc sống của gia đình.
                
                Trong suốt cuộc đời, dễ thấy những lá thư của Mozart luôn khẳng định tình cảm vĩnh cửu không lay chuyển dành cho cha, ngay cả khi quan hệ giữa họ căng thẳng nhất.
                
                Mong muốn được công nhận của Mozart đáng lẽ có thể đã dẫn đến sự phục tùng hoàn toàn, thậm chí là sự khúm núm. Nhưng thay vào đó, cậu được thúc đẩy vượt xa những gì được yêu cầu, để vượt trội bằng mọi giá. Cậu đã cảm nhận được sức mạnh của âm nhạc – mang đến sự chấp thuận và tình yêu, khơi gợi sự ngưỡng mộ và tán thưởng, thu về tiền và nhiều quà tặng. Đây là một cơ chế kỳ diệu, mang lại cho cậu một cảm giác thành công, vì đó là một phương cách gần như không giới hạn để phát triển và phô bày thiên tư của cậu.
                
                Có lẽ bởi vì bị say mê bởi những quyền hạn này của âm nhạc, Mozart đã muốn tiến triển nhanh chóng, thậm chí còn nhanh hơn cả mong muốn của cha mình.
                
                Sẽ không có gì ngạc nhiên nếu Mozart khát mong một cõi quyền uy của riêng mình, qua đó có thể thấy rằng, mong muốn thể hiện tự do cá tính của chính Mozart có thể đã bắt đầu khuấy động ngay từ khi còn rất nhỏ.
                
                Vì vậy, vào ngày 23 tháng 9, Mozart, cùng với mẹ
                của mình, đã lên đường đến miền nam nước Đức và sau đó tới Paris để tìm kiếm một vị trí mới. Salzburg đã mất đi đứa con trai yêu quý.
                
                Mục tiêu thực sự của gia đình lúc đó, không phải là kiếm được nhiều tiền hay vinh quang từ hai đứa trẻ tài năng, mà là hỗ trợ về cảm xúc và phục tùng cho thành viên đòi hỏi nhất, là Leopold Mozart. (chương 13)
                
                Cuối cùng, ở tuổi 25, Mozart đã đứng trên đôi chân của chính mình, cạn kiệt cảm xúc nhưng háo hức để thể hiện khí chất của bản thân.
                
                Về tác giả:
                
                Sinh ngày 5.1.1930 tại Manhattan, Hoa Kỳ.
                
                Maynard Solomon là người đồng sáng lập của Vanguard Records đồng thời từng là một nhà sản xuất âm nhạc. Ông được biết đến với nhiều nghiên cứu tiểu sử về các nhà soạn nhạc cổ điển của Vienna, đặc biệt là Beethoven, Mozart và Schubert.
                
                Ngày 28 tháng 9 năm 2020 vừa qua, ông đã qua đời tại nhà riêng ở Manhattan.',
                'product_price' => '450000',
                'size' => '25 x 19 x 10 cm',
                'translater' => 'Mai Đức Hạnh, Nguyễn Anh Tùng',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_216019.jpg',
                'year_of_manufacture' => '2019',
                'number_of_pages' => '600',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 14,
                'publisher_id' => 8,
                'author_id' => 25,
                'product_name' => 'Bộ Xếp Hình Puzzle - Ravensburger RV130221 - Underwater Adventure (300 Mảnh Ghép)',
                'describe' => 'Bộ Xếp Hình Puzzle - Ravensburger RV130221 - Underwater Adventure (300 Mảnh Ghép)',
                'product_price' => '449000',
                'size' => '33 x 22.5 x 3.5 cm',
                'translater' => 'Đồ chơi',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/4/0/4005556130221.jpg',
                'year_of_manufacture' => '2020',
                'number_of_pages' => '0',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 15,
                'publisher_id' => 7,
                'author_id' => 25,
                'product_name' => 'Máy Tính Casio FX 580 VN X',
                'describe' => 'Máy Tính Casio FX580VN X thuộc dòng máy tính khoa học ClassWiz, được hãng máy tính Casio Nhật Bản sản xuất dành riêng cho nền giáo dục Việt. Sản phẩm tích hợp tới 521 tính năng, trong đó có rất nhiều tính năng mà các dòng máy tính khoa học trên thị trường hiện nay không có được.

                Casio fx-580VN X được phép đưa vào phòng thi
                
                Với mong muốn có một máy tính cầm tay phù hợp với học sinh, sinh viên Việt Nam, Casio đã cho ra đời fx-580VN X sau một thời gian dài nghiên cứu. Sản phẩm đã lọt vào danh sách những máy tính cầm tay được đưa vào phòng thi theo công văn số 1568/BGDĐT-CNTT ngày 19/4/2018.
                
                Tốc độ xử lý nhanh gấp 4 lần, giảm thời gian tính toán xuống mức tối thiểu
                
                So với các dòng máy tính cầm tay trên thị trường thì Casio fx-580VN X có tốc độ xử lý nhanh nhất, gấp 4 lần nhờ sở hữu bộ xử lý hiệu suất cao. Thời gian thực hiện phép tính giảm xuống thấp nhất, rất tiện dụng khi sử dụng trong lớp học và đặc biệt trong các kỳ thi trắc nghiệm.
                
                521 tính năng, nhiều tính năng mà các máy tính khác không có
                
                Trong danh sách những dòng máy tính được Bộ Giáo dục và Đào tạo cho phép sử dụng trong các kỳ thi đến thời điểm này thì Casio fx-580VN X là chiếc máy tính có nhiều tính năng nhất, lên tới 521 tính năng.
                
                Trong đó, có rất nhiều tính năng mà các dòng máy tính trên thị trường chưa có được như:
                
                - Giải phương trình bậc 4
                
                - Giải bất phương trình bậc 4
                
                - Giải hệ phương trình bậc nhất 4 ẩn
                
                - 4 biến nhớ vectơ
                
                - Liệt kê tối đa 45 dòng giá trị cho bảng tính table
                
                - Tìm cực trị của hàm số bậc 3
                
                - Kiểm tra số nguyên tố có 4 chữ số có Logarit và cơ số bất kỳ
                
                - Báo vô nghiệm trong giải phương trình bậc 2
                
                - Lưu thương và dư trong phép chia
                
                - Kiểm tra đúng/sai…
                
                Ngoài ra, máy tính Casio fx 580VN X nói riêng và dòng máy ClassWiz nói chung có chức năng hiệu suất cao mà các dòng khác không có được đó là 2 tính năng: sử dụng bảng tính và phép tính ma trận 4 x 4. Đây là chức năng mà hãng máy tính Casio mới cải tiến mang lại nhiều lợi ích vượt trội cho người dùng.
                
                Từ khi Casio fx-580VN X ra đời, người dùng không cần phải tìm lại, xác nhận từng giá trị như các máy đời trước. Bởi “siêu phẩm” có thêm chức năng hiển thị danh sách các kết quả tính toán hàm và biến lưu trong bộ nhớ. Tính năng này vô cùng hữu dụng giúp rút gọn thời gian, giảm thao tác bấm nút và người dùng không phải nhớ quá nhiều giá trị trong khi làm toán.
                
                Mua một lần, dùng nhiều cấp học
                
                Máy tính Casio fx-580VN X giải được rất nhiều dạng toán thuộc các cấp học: Trung học cơ sở, trung học phổ thông và đại học.
                
                Hỗ trợ đắc lực giải toán cao cấp ở đại học
                
                Máy tính Casio fx 580VN X còn sở hữu năng lực điện toán cao có thể hỗ trợ nhiều phép toán cao cấp gồm:
                
                Tính bảng tính: Rất hữu ích cho việc học thống kê một cách đơn giản. Chức năng này có thêm khả năng: nhập công thức đệ quy, áp dụng giả thuyết Riemann tính toán cao cấp.
                Tính ma trận 4 x 4: một cách đơn giản và cho kết quả chính xác nhất. Còn các máy tính khác chỉ có thể giải được ma trận cấp 3, còn cấp 4 thì phải tính tay.
                Tính phương trình với bốn ẩn số
                Phương trình bậc hai
                Khả năng tính phân phối thống kê nâng cao: không phải máy tính nào cũng có được như: Xác suất nhị thức; phân phối tích lũy nhị thức, mật độ xác suất bình thường, phân phối tích lũy chuẩn, phân phối tích lũy chuẩn nghịch đảo, xác suất Poisson, phân phối tích lũy Poisson…
                Ngoài ra, máy tính Casio fx580VN X còn được tích hợp thêm tính năng tính tỷ lệ RATIO. Từ khi có Casio fx580 VNX bạn sẽ không cần phải tính tay các dạng toán, hóa có mức độ khó khá cao như: tính tỉ số, số mol, tam suất...
                Dung lượng bộ nhớ lớn gấp 2 lần
                
                Máy tính Casio fx 580VN X có dung lượng bộ nhớ lớn gấp 2 lần so với các dòng máy trước giúp tốc độ tính toán cực nhanh, chỉ trong tích tắc. Dung lượng bộ nhớ của siêu phẩm là một con số vô cùng ấn tượng, không phải chiếc máy tính khoa học cầm tay nào cũng có thể làm được.
                
                Độ phân giải gấp 4 lần, hiển thị đầy đủ phép tính
                
                Chưa dừng lại ở đó, “siêu phẩm kỳ thi” còn sở hữu màn hình LCD có độ phân giải 192 x 63 điểm, cao gấp 4 lần so với các dòng máy trước đó giúp hiển thị rõ ràng các hệ phương trình và nội dung. Người dùng rất dễ dàng xem công thức phép tính, biểu tượng toán học một cách dễ dàng và đầy đủ.
                
                Sản phẩm có thể hiển thị số lượng ký tự gấp 2 lần ở kích thước bình thường và 6 lần ở kích thước nhỏ trên màn hình so với những dòng máy tính khoa học ES Plus trước đó.
                
                Người dùng có thể dễ dàng nhìn thấy các phép toán hiển thị trên màn hình trong mọi điều kiện ánh sáng. Màn hình còn LCD tiêu tốn ít dung lượng pin, tối ưu góc xem thẳng phía trên. Màn hình có thể tạo ra hiệu ứng mờ để giúp người dùng hạn chế tình trạng mỏi mắt khi sử dụng lâu dài.
                
                Chưa dừng lại ở đó, máy tính Casio fx580VN X được trang bị các chức năng bảng tính cơ bản, bạn có thể thao tác được bảng tính lên tới 5 cột, 45 hàng, chứa được tối đa 170 mục dữ liệu. Chức năng bảng tính này rất hiếm dòng máy hiện nay có được. Nhờ vậy bạn sẽ không phải lo lắng khi nhập phép tính quá dài hay khó đọc như các dòng máy đời trước, tăng hiệu quả tính toán nhất là trong các kỳ thi quan trọng.
                
                Có ngôn ngữ tiếng Việt vô cùng tiện dụng
                
                Vì là “siêu phẩm” dành riêng cho thế hệ học sinh, sinh viên Việt Nam nên máy tính Casio fx-580VN X có thêm phiên bản tiếng Việt.
                
                Còn phiên bản tiếng Anh thì ở dạng đầy đủ chứ không viết tắt nên rất dễ hiểu, giúp nâng cao khả năng ngoại ngữ khi sử dụng máy. Màn hình menu được thể hiện bằng các icon dễ hiểu và chọn phép tính nhanh chóng hơn các dòng máy trước.
                
                Chất liệu bề mặt cao cấp, vân nổi 3D
                
                Thân máy Casio fx-580VN X được thiết kế theo phong cách thanh lịch, vỏ trượt chắc chắn. Các họa tiết hình học được phối màu tươi sáng vừa dễ nhìn lại tạo nên vẻ đẹp riêng cho sản phẩm.
                
                Bàn phím được kiết hợp: phím làm bằng plastic cực nhạy và phím kim loại tạo cảm giác sang trọng, lại tăng độ bền.
                
                Giao diện dễ hiểu nhưng kiểu dáng hiện đại, tiên tiến
                
                Tất cả các ký hiểu, biểu tượng trên máy tính Casio fx-580VN X được hiển thị rõ ràng trên màn hình máy tính. Chỉ cần chọn biểu tượng trên menu, người dùng có thể dễ dàng chọn chức năng, chế độ mong muốn rất nhanh chóng hơn các dòng máy khác.
                
                Các công thức toán học, các ký hiệu biểu tượng toán học trên Casio fx-580VN X có định dạng giống hệt với sách giáo khoa nên rất dễ hiểu. Đây là một cải tiến hoàn toàn mới của dòng máy ClassWiz so với dòng MS.
                
                “Trợ thủ” phải đưa vào phòng thi nhất
                
                Chính những tính năng nổi trội nên máy tính Casio fx-580VN X được đánh giá là công cụ nên đưa vào phòng thi nhất cho các môn toán, lý, hóa, sinh. Có Casio fx-580VN X, học sinh, sinh viên sẽ cảm thấy yên tâm, dễ dàng “gặt hái” điểm cao trong các kỳ thi quan trọng, nhất là thi trắc nghiệm.
                
                Kích thước máy tính: 16.5 x 8 x 1 cm',
                'product_price' => '719000',
                'size' => '17 x 8.4 x 2.5 cm',
                'translater' => 'Không',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_8906.jpg',
                'year_of_manufacture' => '2020',
                'number_of_pages' => '0',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 16,
                'publisher_id' => 8,
                'author_id' => 25,
                'product_name' => 'Móc Khóa Bu Bu - Đôi Dép - Mẫu 26 - Chanel - Màu Vàng',
                'describe' => 'Móc Khóa Bu Bu - Đôi Dép - Mẫu 26 - Chanel - Màu Vàng được làm từ chất liệu nhựa an toàn cho người sử dụng.

                Móc khóa có kích thước vừa vặn trang trí đáng yêu, có thể cho vào balo hoặc túi xách dễ dàng.
                
                Móc khóa giúp bạn bảo quản và cất giữ chìa khóa dễ dàng, không lo rơi rớt, thất lạc.
                
                Sản phẩm có thể làm quà tặng cho bạn bè và người thân, là món đồ hấp dẫn không thể bỏ qua, đặc biệt là các bạn nữ.',
                'product_price' => '24000',
                'size' => '10 x 5 x 3 cm',
                'translater' => 'Không',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/1/8/1801020002994-mau9-_1_.jpg',
                'year_of_manufacture' => '2022',
                'number_of_pages' => '0',
            ],
            [
                'ac_id' =>  1,
                'cate_id' => 17,
                'publisher_id' => 4,
                'author_id' => 25,
                'product_name' => 'Khay Đựng Văn Phòng Phẩm - Toppoint HY2450 - Màu Đen',
                'describe' => 'Khay Đựng Văn Phòng Phẩm - Toppoint HY2450

                Sản phẩm được làm từ chất liệu nhẹ, có khả năng chịu lực tốt, ít bám bụi, dễ vệ sinh lau chùi.
                
                Các chi tiết được mài nhẵn, không có góc cạnh sắc nhọn, đảm bảo chất lượng, an toàn, tính thẩm mỹ.
                
                Bề mặt khay có các khe hở, giúp lưu thông không khí, tránh tình trạng ẩm mốc.
                
                Khay được chia thành nhiều ngăn, giúp bạn đựng và phân loại được nhiều vật dụng khác nhau để nơi học tập, làm việc luôn chuyên nghiệp và gọn gàng.
                
                Sản phẩm tiện dụng, thích hợp dùng trong các văn phòng công sở, trường học để bảo quản, phân loại các đồ dùng được ngăn nắp.
                
                Mã hàng	8936050022230-mau1
                Nhà Cung Cấp	Cty Đỉnh Điểm
                Thương Hiệu	Toppoint
                Xuất Xứ Thương Hiệu	Thương Hiệu Thái Lan
                Nơi Gia Công & Sản Xuất	Trung Quốc
                Màu sắc	Đen
                Chất liệu	Kim Loại
                Trọng lượng (gr)	330
                Kích Thước Bao Bì	23 x 11.5 x 10 cm
                Sản phẩm hiển thị trong	
                Văn Phòng Phẩm Đỉnh Điểm
                Sản phẩm bán chạy nhất	Top 100 sản phẩm Cắm Bút bán chạy của tháng
                Giá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...
                Khay Đựng Văn Phòng Phẩm - Toppoint HY2450
                
                Sản phẩm được làm từ chất liệu nhẹ, có khả năng chịu lực tốt, ít bám bụi, dễ vệ sinh lau chùi.
                
                Các chi tiết được mài nhẵn, không có góc cạnh sắc nhọn, đảm bảo chất lượng, an toàn, tính thẩm mỹ.
                
                Bề mặt khay có các khe hở, giúp lưu thông không khí, tránh tình trạng ẩm mốc.
                
                Khay được chia thành nhiều ngăn, giúp bạn đựng và phân loại được nhiều vật dụng khác nhau để nơi học tập, làm việc luôn chuyên nghiệp và gọn gàng.
                
                Sản phẩm tiện dụng, thích hợp dùng trong các văn phòng công sở, trường học để bảo quản, phân loại các đồ dùng được ngăn nắp.',
                'product_price' => '233000',
                'size' => '23 x 11.5 x 10 cm',
                'translater' => 'Không',
                'image' => 'https://cdn0.fahasa.com/media/catalog/product/8/9/8936050022230-mau1.jpg',
                'year_of_manufacture' => '2022',
                'number_of_pages' => '0',
            ],
        );
        DB::table('products')->insert($data);
    }
}

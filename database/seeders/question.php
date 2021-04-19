<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class question extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $question_html = array(
            'Tiêu đề hồ sơ là gì? Tại sao nên ghi tiêu để hồ sơ đăng tuyển?',
            'Cách nào để nhận biết hồ sơ của tôi đã được duyệt(chấp nhận) và đăng lên website?',
            'Hướng dẫn đăng hồ sơ của mình lên FindJobs.vn',
            'Hướng dẫn cách nộp hồ sơ trực tuyến:',
            'Làm cách nào để có thể lưu một số công việc thích hợp?',
            'Sử dụng công cụ tìm việc theo ngành nghề như thế nào?',
            'Làm thể nào để tìm việc trên FindJobs.vn có hiệu quả?',
            'Tôi phải làm gì nếu muốn thay đổi mật khẩu hay tên đăng nhập Email/Login ID?',
            'Làm cách nào để sử dụng lại account(Email/Login ID) khi quên mật khẩu của mình?',
            'Hướng dẫn cách tìm kiếm chính xác hơn bằng chức năng Tìm kiếm:',
            'Làm thế nào để tạo tài khoản sử dụng trên FindJobs.vn?',
            'Nếu không tạo account trên FindJobs.vn. Tôi có thể tìm được việc làm trên FindJobs.vn đựợc không?',
        );

        $answer_html = array(
            '<ul class="m-0">        <li class="guide-faq">Tiêu đề hồ sơ là nơi bạn ghi vi trí bạn muốn ứng tuyển để các nhà tuyển dụng có thể tìm kiếm bạn một cách nhanh nhất. Vì nó là một trong những điều kiện tìm thấy được thể hiện trên trang kết quả tìm kiếm của nhà tuyển dụng. Tiêu đề của bạn giúp nhà tuyển dụng hình dung ra bạn là ai và tìm kiếm việc gì.</li>   </ul>',
            '<p class="document-faq ml-1">Sau khi bạn đã điền những thông tin đầy đủ theo các bước tạo hồ sơ,  nhấn nút <b>Chấp nhận</b> để đăng hồ sơ, bạn hãy đợi trang xác nhận hiện ra để đảm bảo hồ sơ đã được gửi vào hệ thống.Trong vòng 24h, hồ sơ của bạn sẽ được CareerLink duyệt và đưa lên website. CareerLink có quyền từ chối hoặc xóa các hồ sơ có nội dung không đạt yêu cầu mà không thông báo trước.</p><p class="guide-faq text-info ml-2">Việc kiểm tra trạng thái hồ sơ như thế nào?</p>    <ul class="m-0">        <li class="guide-faq">Trên trang chủ Careerlink.vn, chọn mục <b>Hồ sơ</b>.</li>        <li class="guide-faq">Nhập tên truy cậpEmail/ Login ID và mật khẩu của bạn.</li>        <li class="guide-faq">Bạn sẽ thấy xuất hiện trang <b>Quản lý hồ sơ</b>.</li>        <li class="guide-faq">Trong danh sách hồ sơ của bạn trong phần <b>Quản lý hồ sơ</b>, bạn có thể xem trạng thái hồ sơ được hiển thị, có thể chọn Sửa để chỉnh sửa lại hồ sơ, chọn để thay đổi trang thái hay xóa những nếu bạn muốn.</li>    </ul>',
            '<ul class="m-0">        <li class="guide-faq">Tạo 1 địa chỉ Account  theo mục 2 (2.Làm thế nào để tạo tài khoản sử dụng trên CareerLink.vn?)</li>        <li class="guide-faq">Trên trang chủ CareerLink.vn, nhấn vào <b>Hồ sơ</b> trên menu chính.</li>        <li class="guide-faq">Chọn mục Tủ hồ sơ bạn sẽ thấy xuất hiện nút <b>Tạo hồ sơ</b> xin việc mới, chọn nút Tạo hồ sơ xin việc mới bạn sẽ thấy xuất hiện trang Đăng hồ sơ mới.</li>        <li class="guide-faq">Có 5 bước thực hiện một hồ sơ xin việc. Bạn hãy: Điền thông tin lần luợt vào mẫu theo yêu cầu và chọn <b>Tiếp tục</b>.</li>        <li class="guide-faq">Tiếp tục thực hiện cho đến bước 5.</li>        <li class="guide-faq">Chọn nút <b>Chấp nhận</b> để kết thúc phần đăng hồ sơ của bạn.</li>    </ul>',
            '<ul class="m-0">        <li class="guide-faq">Nếu bạn quan tâm đến một vị trí nào đó, bạn có thể nhấn vào chức danh để xem chi tiết về vị trí đó. Nếu muốn nộp hồ sơ, bạn có thể lựa chọn cách gởi hồ sơ trực tuyến hay gởi theo cách thông thường.</li>        <li class="guide-faq">Để gởi hồ sơ trực tuyến, bạn hãy làm theo các bước sau:</li>        <li class="guide-faq">Nhấn vào nút <b>Nộp trực tuyến</b>. (dùng cho ứng viên đã tạo hồ sơ tìm việc trực tuyến trên CareerLink.vn)</li>        <li class="guide-faq">Chọn hồ sơ bạn đã có trên CareerLink.vn. Nếu bạn có một hồ sơ duy nhất, hồ sơ đó sẽ được chọn sẵn.</li>        <li class=\"guide-faq\">Nếu bạn không có hồ sơ trên CareerLink.vn bạn có thể hồ sơ theo cách thông thường hoặc bấm vào nút Nộp đơn thông qua email, bạn soạn email để gửi đến Nhà tuyển dụng theo địa chỉ mà họ cung cấp trong thông báo tuyển dụng. Trong chủ đề email (subject), bạn ghi rõ là nộp hồ sơ cho vị trí nào, sau đó đính kèm hồ sơ của bạn trong phần Attach file và gửi đi.</li>    </ul>',
            '<ul class="m-0">        <li class="guide-faq">Trên trang Kết quả tìm kiếm, đánh dấu chọn vào ô bên phải của vị trí bạn quan tâm và nhấn nút <b>Lưu công việc</b>.</li>        <li class="guide-faq">Để xem tất cả công việc đã lưu, bạn vào mục <b>Hồ sơ<b>, sau đó chọn <b>Công viêc đã lưu</b>. Bạn click vào mục tìm việc nào bạn muốn tham khảo.</li>    </ul>',
            '<ul class="m-0">        <li class="guide-faq">Nếu bạn quan tâm đến một lĩnh vực cụ thể nào đó, bạn có thể tìm việc theo ngành nghề.</li>        <li class="guide-faq">Bạn hãy nhấn vào <b>Tìm Việc</b> trên menu chính, sau đó chọn <b>Tìm theo ngành nghề</b>.</li>        <li class="guide-faq">Chọn ngành bạn quan tâm để xem tất cả các công việc đang được đăng trên Careerlink.vn            thuộc về lĩnh vực đó.        </li>        <li class="guide-faq">Bạn còn có thể tìm bằng chức năng <b>Tìm nhanh</b> hoặc tìm kiếm chọn lọc hơn với chức năng <b>Tìm                kiếm Nâng cao</b>.        </li>    </ul>',
            '<ul class="m-0">        <li class="guide-faq">Trước hết, bạn có thể vào mục <b>Tìm Việc Làm Nhanh</b> trên trang chủ CareerLink.vn,            nhập vào từ khóa liên quan đến công việc bạn mong muốn, sau đó nhấn nút <b>Tìm Kiếm</b> hoặc nhấn phím <b>Enter</b>. Bạn cũng có thể chọn ngành nghề và địa điểm phù hợp để có kết quả tìm kiếm được chọn lọc hơn.</li>    </ul>',
            '<ul class="m-0">        <li class="guide-faq">Nhập tên truy cập Email/Login ID và mật khẩu của bạn vào.</li>        <li class="guide-faq">Nhấn vào <span class="text-info">My CareerLink</span>, ở mục <b>Tài Khoản của tôi</b>: Chọn đường link mà bạn muốn thực hiện: <b>Thay đổi mật khẩu , Thay đổi tên đăng nhập ,  Xem tài khoản , Đổi thông tin tài khoản ...</b> và làm theo các bước và chúng tôi đã thiết lập sẵn.</li>    </ul>',
            '<ul class="m-0">        <li class="guide-faq">Để lấy lại mật khẩu, bạn hãy làm theo hướng dẫn sau:</li>        <li class="guide-faq">Trên trang đăng nhập, nhấn vào <span class="text-info">Bạn đã quên mật khẩu?</span></li>        <li class="guide-faq">Nhập địa chỉ Email /Login ID  rồi nhấn nút <b>Chấp Nhận</b> bạn sẽ nhận được email hướng dẫn của chúng tôi.</li>        <li class="guide-faq">Bạn hãy kiểm tra trong hộp Mail của bạn( Mail Box) để biết về mật khẩu đã quên.</li>    </ul>',
            '<ul class="m-0">        <li class="guide-faq">Để lấy lại mật khẩu, bạn hãy làm theo hướng dẫn sau:</li>        <li class="guide-faq">Trên trang đăng nhập, nhấn vào <span class="text-info">Bạn đã quên mật khẩu?</span></li>        <li class="guide-faq">Nhập địa chỉ Email /Login ID  rồi nhấn nút <b>Chấp Nhận</b> bạn sẽ nhận được email hướng dẫn của chúng tôi.</li>        <li class="guide-faq">Bạn hãy kiểm tra trong hộp Mail của bạn( Mail Box) để biết về mật khẩu đã quên.</li>    </ul>',
            '<p class="guide-faq text-info">Bạn hãy thực hiện theo các bước sau để đăng ký một tài khoản miễn phí:</p>    <ul class="m-0">        <li class="guide-faq">Trên trang chủ <span class="text-primary">CareeLlink.vn</span> nhấn vào <b>Đăng ký</b>.</li>        <li class="guide-faq">Sau khi điền đầy đủ thông tin được yêu cầu, bạn nhấn vào nút <b>Chấp nhận</b></li>        <li class="guide-faq">Khi trang thông báo yêu cầu kích hoạt tài khoản hiện ra, một email hướng dẫn kích hoạt đã được gửi vào địa chỉ email của bạn Bạn hãy mở email, kiểm tra trong hộp Mail(Inbox) mà chúng tôi gửi đến và nhấn vào đường link trong email để kích hoạt tài khoản sử dụng.</li>        <li class="guide-faq">Sau khi kích hoạt thành công, tài khoản của bạn sẽ sử dụng được ngay.</li>    </ul>    <p class="document-faq ml-4">Chú ý: Email/Login ID phải là địa chỉ có thật vì chúng tôi sẽ gởi thông tin xin xác nhận lại trong hộp Mail Box.    </p>',
            '<ul class="m-0">        <li class="guide-faq">Câu trả lời luôn luôn là có. CareerLink là một trang Website cung cấp dịch vụ việc làm miễn phí cho người lao động mà không cần đăng ký tài khoản.</li>    </ul>',
        );

        for($i=0;$i<count($question_html);$i++) {
            DB::table('questions')->insert([
                'answer_html' => $answer_html[$i],
                'question_html' => $question_html[$i],
            ]);
        }
    }
}

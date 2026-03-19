import re

file_path = 'c:/xampp/htdocs/doan-thi-diem/thong-tin-tuyen-sinh-tieu-hoc.php'

with open(file_path, 'r', encoding='utf-8') as f:
    html = f.read()

# Title
html = html.replace('<title>Tuyen sinh Tieu hoc - Meyschool Doan Thi Diem</title>', '<title>Tuyển sinh Tiểu học - Meyschool Đoàn Thị Điểm</title>')

# Hero section
html = html.replace('Tuyen sinh 2026-2027 . Khoi Tieu hoc', 'Tuyển sinh 2026-2027 • Khối Tiểu học')
html = html.replace('Mot khoi dau dep, du am ap de tre tu tin lon len.', 'Một khởi đầu đẹp, đủ ấm áp để trẻ tự tin lớn lên.')
html = html.replace('Trang nay lay cam hung tu tone xanh vang cua trang chu nhung duoc dung theo mot bo cuc rieng cho\n                        Tieu hoc: mem hon, ro thong tin hon va moi section mang mot tinh cach khac nhau.', 'Chào mừng quý phụ huynh đến với Meyschool Đoàn Thị Điểm. Chúng tôi kiến tạo môi trường học tập hạnh phúc, nuôi dưỡng những công dân toàn cầu với nền tảng trí tuệ, thể chất và nhân cách vững chắc ngay từ những năm tháng đầu đời.')
html = html.replace('Dang ky tu van', 'Đăng ký tư vấn')
html = html.replace('Dang ky tham quan', 'Đăng ký tham quan')
html = html.replace('<b>4</b><span>buoc trong quy trinh tuyen sinh</span>', '<b>4</b><span>bước trong quy trình tuyển sinh</span>')
html = html.replace('<b>1:1</b><span>tu van rieng cho tung gia dinh</span>', '<b>1:1</b><span>tư vấn riêng cho từng gia đình</span>')
html = html.replace('<b>2026</b><span>mua tuyen sinh lop 1 va chuyen cap</span>', '<b>2026</b><span>mùa chuyển cấp và tuyển sinh lớp 1</span>')
html = html.replace('alt="Tuyen sinh Tieu hoc"', 'alt="Tuyển sinh Tiểu học"')

# Anchor bar
html = html.replace('>Tam nhin<', '>Tầm nhìn<')
html = html.replace('>Mot ngay o truong<', '>Một ngày ở trường<')
html = html.replace('>Thong tin<', '>Thông tin<')
html = html.replace('>Quy trinh<', '>Quy trình<')
html = html.replace('>Ho so<', '>Hồ sơ<')
html = html.replace('>Lien he<', '>Liên hệ<')

# Tam nhin
html = html.replace('Thong diep tu nha truong', 'Thông điệp từ nhà trường')
html = html.replace('Moi em nho deu can mot moi truong vua co ky luat, vua co su diu dang.', 'Mỗi em nhỏ đều cần một môi trường vừa có kỷ luật, vừa có sự dịu dàng.')
html = html.replace('O bac Tieu hoc, dieu phu huynh tim kiem khong chi la mot chuong trinh hoc tot ma la mot noi cho\n                        con cam thay an toan, duoc ton trong va duoc dan dat moi ngay. Meyschool Doan Thi Diem theo duoi\n                        su can bang giua nen nep hoc thuat, trai nghiem va ket noi voi gia dinh.', 'Ở bậc Tiểu học, điều phụ huynh tìm kiếm không chỉ là một chương trình học tốt mà là một không gian cho con cảm thấy an toàn, được tôn trọng và được dẫn dắt mỗi ngày. Meyschool Đoàn Thị Điểm theo đuổi sự cân bằng giữa nền nếp học thuật, trải nghiệm sáng tạo và sự gắn kết bền chặt với gia đình.')
html = html.replace('Vi vay section nay duoc thiet ke nhu mot loi chao mo dau, mem va co chieu sau hon, khong giong\n                        mot khoi noi dung thong tin thuong thay.', 'Chúng tôi tập trung vào việc khơi dậy sự tò mò vô tận của trẻ, giúp các con chủ động khám phá và phát triển những giá trị cốt lõi từ bên trong.')
html = html.replace('<strong>Meyschool Doan Thi Diem</strong>Khoi Tieu hoc huong toi mot khoi dau\n                        hoc tap nen nep, hanh phuc va ben vung.', '<strong>Meyschool Đoàn Thị Điểm</strong>Khối Tiểu học hướng tới một khởi đầu học tập nền nếp, hạnh phúc và bền vững.')

# Hanh trinh
html = html.replace('Trai nghiem hoc duong', 'Trải nghiệm học đường')
html = html.replace('Moi section la mot lat cat rieng ve doi song Tieu hoc.', 'Mỗi ngày đến trường là một hành trình thú vị.')
html = html.replace('Ba khoi duoi day khong lap card thong thuong. Chung duoc xu ly nhu mot chuoi canh, de phu huynh\n                        nhin thay khong khi hoc tap, van dong va ket noi gia dinh.', 'Tại Meyschool Đoàn Thị Điểm, học sinh Tiểu học được thoả sức khám phá qua các chuỗi hoạt động sôi nổi, xen kẽ linh hoạt giữa học tập lý thuyết, vận động thể chất và vui chơi sáng tạo.')

html = html.replace('Buoi sang', 'Buổi sáng')
html = html.replace('Hoc bang su chu dong', 'Học bằng sự chủ động')
html = html.replace('Tre dat cau hoi, trinh bay y tuong va hoc theo nhip cua rieng minh.', 'Trẻ tự học cách đặt câu hỏi, thảo luận đưa ra ý tưởng và phát triển tư duy một cách tự nhiên.')

html = html.replace('Giua ngay', 'Giữa ngày')
html = html.replace('Nhip song co chuyen dong', 'Nhịp sống có chuyển động')
html = html.replace('Am nhac, the chat va trai nghiem giup tre can bang cam xuc.', 'Các môn văn năng, Mỹ thuật, Thể chất giúp các bạn nhỏ thỏa sức tung bay và giải phóng năng lượng tích cực.')

html = html.replace('Cuoi ngay', 'Cuối ngày')
html = html.replace('Gia dinh luon dong hanh', 'Gia đình luôn đồng hành')
html = html.replace('Thong tin tien bo duoc phan hoi ro rang de phu huynh khong dung ngoai hanh trinh cua con.', 'Những tiến bộ trong ngày được tổng hợp và phản hồi chi tiết để bố mẹ luôn đồng hành cùng con trẻ.')

# Thong tin cot loi
html = html.replace('Thong tin cot loi', 'Thông tin cốt lõi')
html = html.replace('Thong tin tuyen sinh duoc chia thanh nhung khoi de quet va de nho.', 'Nắm bắt nhanh các thông tin và thể lệ tuyển sinh cho lộ trình năm học mới.')
html = html.replace('Muc nay dung theo dang editorial card, moi khoi mot vai tro rieng thay vi mot danh sach dai va\n                        don dieu.', 'Các mốc thời gian, hồ sơ năng lực và quy chế tài chính được cập nhật đầy đủ, ngắn gọn để phụ huynh nắm bắt thuận lợi nhất.')

html = html.replace('<h3>Doi tuong</h3>', '<h3>Đối tượng</h3>')
html = html.replace('<li>Hoc sinh vao lop 1, sinh nam 2019, du 6 tuoi trong nam hoc 2026-2027.</li>', '<li>Học sinh thi vào lớp 1, sinh năm 2019, đủ 6 tuổi trong năm học 2026-2027.</li>')
html = html.replace('<li>Hoc sinh lop 2-5 co nhu cau chuyen cap, chuyen truong.</li>', '<li>Học sinh bổ sung lớp 2-5 có định hướng chuyển trường theo nhu cầu.</li>')
html = html.replace('<li>Nha truong tu van rieng theo tung nhom hoc sinh.</li>', '<li>Sức khỏe thể chất tốt và phát triển tâm sinh lý, kỹ năng bình thường.</li>')

html = html.replace('<h3>Thoi gian</h3>', '<h3>Thời gian</h3>')
html = html.replace('<li>Dot 1: 15/02/2026 - 30/03/2026.</li>', '<li>Đợt 1: 15/02/2026 - 30/03/2026.</li>')
html = html.replace('<li>Dot 2: 01/04/2026 - 30/06/2026.</li>', '<li>Đợt 2: 01/04/2026 - 30/06/2026.</li>')
html = html.replace('<li>Dot bo sung: 01/07/2026 - 15/08/2026 neu con chi tieu.</li>', '<li>Đợt bổ sung: 01/07/2026 - 15/08/2026 nếu vẫn còn chỉ tiêu.</li>')

html = html.replace('<h3>Ho so</h3>', '<h3>Hồ sơ</h3>')
html = html.replace('<li>Don dang ky theo mau cua nha truong.</li>', '<li>Lá đơn đăng ký tuyển sinh theo mẫu in của nhà trường.</li>')
html = html.replace('<li>Ban sao giay khai sinh va giay to cu tru hop le.</li>', '<li>Hồ sơ về khai sinh và thông tin nơi cư trú hiện tại thật hợp lệ.</li>')
html = html.replace('<li>02 anh 3x4 va hoc ba gan nhat neu chuyen cap.</li>', '<li>Cung cấp 02 thẻ ảnh 3x4 và kèm theo học bạ gần nhất.</li>')

html = html.replace('<h3>Hoc phi</h3>', '<h3>Khảo sát</h3>')
html = html.replace('<li>Hoc phi co ban: 85.000.000 VND/nam hoc.</li>', '<li>Học sinh sẽ thực hiện bài kiểm tra theo hệ thống và hoạt động đo lường kỹ năng.</li>')
html = html.replace('<li>Phi ban tru: 15.000.000 VND/nam hoc.</li>', '<li>Đánh giá chi tiết năng lực và trao đổi tương tác 1:1 trực tiếp qua các trò chơi nhỏ.</li>')
html = html.replace('<li>Giam 5% cho anh chi em va 10% khi dong theo nam.</li>', '<li>Trả kết quả trực tiếp cho quý phụ huynh trong vòng từ 05 đến 07 ngày làm việc.</li>')

# Capabilities
html = html.replace('Nang luc 01', 'Năng lực 01')
html = html.replace('Tu hoc co huong dan', 'Tự học có hướng dẫn')
html = html.replace('Tre duoc ren thoi quen chuan bi bai, hoan thanh nhiem vu va chu dong hon tung ngay.', 'Trẻ luôn được rèn luyện thói quen tự giải quyết, hiểu nhiệm vụ và học tính chủ động hàng ngày.')

html = html.replace('Nang luc 02', 'Năng lực 02')
html = html.replace('Ngon ngu va bieu dat', 'Ngôn ngữ và truyền đạt')
html = html.replace('Kha nang noi, viet va trinh bay duoc nuoi duong qua nhieu hoat dong nho.', 'Nâng cao sự dạn dĩ khi đứng nói, trình bày luận điểm lưu loát qua nhiều hoạt động phản biện.')

html = html.replace('Nang luc 03', 'Năng lực 03')
html = html.replace('Can bang cam xuc', 'Cân bằng cảm xúc')
html = html.replace('Khong gian hoc tap an toan tam ly giup tre thay minh duoc ton trong.', 'Mọi trẻ em đều cần môi trường an toàn tâm lý, không bạo lực học đường để biểu đạt cá tính.')

html = html.replace('Nang luc 04', 'Năng lực 04')
html = html.replace('Ket noi voi doi song', 'Kết nối với đời sống')
html = html.replace('Du an va trai nghiem giup tre hieu rang viec hoc luon gan voi the gioi that.', 'Thông qua dự án thực địa giúp cho học sinh nhận biết rằng mọi bài học đều gắn kết thế giới.')

# Quy trình tuyển sinh
html = html.replace('Quy trinh tuyen sinh', 'Quy trình xét tuyển')
html = html.replace('Lo trinh ngan gon, minh bach va than thien voi phu huynh.', 'Lộ trình nộp hồ sơ, đăng ký ghi danh minh bạch và tiện bước.')
html = html.replace('Phan nay duoc trinh bay nhu mot timeline de de theo doi ngay tu lan xem dau tien.', 'Quá trình ứng tuyển được thiết kế thân thiện, dễ nắm bắt và giúp phụ huynh bớt phần lo lắng khi chọn trường cho năm đầu tiên của trẻ.')

html = html.replace('<h3>Dang ky tu van</h3>', '<h3>Đăng ký tư vấn</h3>')
html = html.replace('Phu huynh dien form online hoac goi hotline de nhan tu van phu hop.', 'Bố mẹ điền biểu mẫu cung cấp online hoặc liên hệ đường dây nóng để nhận tư vấn phù hợp nhất.')
html = html.replace('<h3>Nop ho so</h3>', '<h3>Nộp hồ sơ</h3>')
html = html.replace('Nha truong tiep nhan ho so co ban va hen lich trao doi hoac danh gia.', 'Phân ban tuyển sinh sẽ tiếp nhận hồ sơ xét duyệt ban đầu, sau đó sắp xếp lịch phản hồi đánh giá.')
html = html.replace('<h3>Danh gia phu hop</h3>', '<h3>Đánh giá năng lực</h3>')
html = html.replace('Hoc sinh tham gia buoi lam quen, quan sat nang luc va trao doi cung phu huynh.', 'Học sinh trải nghiệm những bài test vận động thể chất, làm quen trò chơi tư duy cùng thầy cô.')
html = html.replace('<h3>Hoan tat nhap hoc</h3>', '<h3>Hoàn tất thủ tục</h3>')
html = html.replace('Gia dinh nhan thong bao va hoan thien cac buoc thu tuc nhap hoc.', 'Sau khi được thông báo đạt chuẩn, phụ huynh sẽ cần tiến hành đóng phí nhập học dự tuyển để giữ lại vị trí vào lớp.')

# Ho so
html = html.replace('Gia dinh can chuan bi', 'Gia đình cần chuẩn bị')
html = html.replace('<h3>Ho so tuyen sinh</h3>', '<h3>Hồ sơ nhập học</h3>')
html = html.replace('<li>Don dang ky tuyen sinh theo bieu mau cua nha truong.</li>', '<li>Đơn đăng ký nguyện vọng vào trường theo biểu mẫu quy định.</li>')
html = html.replace('<li>Ban sao giay khai sinh co cong chung hoac doi chieu ban goc.</li>', '<li>Bản sao có công chứng tờ khai sinh chuẩn để lưu thông tin.</li>')
html = html.replace('<li>Giay to cu tru cua hoc sinh va phu huynh.</li>', '<li>Bản xác nhận nơi cư trú chứng thực của cả cha mẹ và các em.</li>')
html = html.replace('<li>02 anh 3x4 chuan bi trong 6 thang gan nhat.</li>', '<li>Ngoài ra cần nộp thêm số lượng 02 tấm hình in size tỷ lệ 3x4.</li>')
html = html.replace('<li>Hoc ba hoac nhan xet hoc tap doi voi hoc sinh chuyen cap.</li>', '<li>Học bạ chính quy trước đó dùng cho diện muốn chuyển trường.</li>')

html = html.replace('Thong tin tai chinh', 'Thông tin tài chính')
html = html.replace('<h3>Chinh sach hoc phi</h3>', '<h3>Thỏa thuận kinh phí</h3>')
html = html.replace('<strong>Hoc phi</strong>', '<strong>Học phí</strong>')
html = html.replace('85.000.000 VND/nam hoc cho chuong trinh co\n                                ban.', 'Sẽ được phòng Tài Vụ tư vấn chi tiết, đảm bảo cam kết mọi khoản thu chi cực kỳ rõ ràng.')
html = html.replace('<strong>Ban tru</strong>', '<strong>Bán trú</strong>')
html = html.replace('15.000.000 VND/nam hoc, ap dung theo chinh\n                                sach hien hanh.', 'Góp phần chi trả vào sinh hoạt ăn trưa, quà xế và tất cả dịch vụ chắm sóc sức khỏe y tế.')
html = html.replace('<strong>Uu dai</strong>', '<strong>Ưu đãi</strong>')
html = html.replace('Giam 5% cho anh chi em cung hoc va giam 10%\n                                khi dong hoc phi ca nam.', 'Giảm phần trăm chiết khấu ngay thi thanh toán theo kỳ, gia đình cho hai anh em học cùng lúc.')
html = html.replace('<strong>Ho tro</strong>', '<strong>Hỗ trợ</strong>')
html = html.replace('Bo phan tuyen sinh tu van truc tiep cac\n                                khoan phi va lo trinh thanh toan.', 'Tổng đài viên giải đáp tận răng, chu đáo và chỉ dẫn đa dạng những phương pháp trả các đợt phí.')

# Khong gian
html = html.replace('Khong khi nha truong', 'Không gian trường học')
html = html.replace('Moodboard hinh anh mem, gan gui va dung tinh than Tieu hoc.', 'Nơi mọi tài năng nhí đều có đủ môi trường và không gian để lan tỏa đam mê.')
html = html.replace('Gallery duoc dan nhu mot ban moodboard de moi section van co net rieng ma tong the khong bi roi.', 'Khám phá sự sinh động về hình ảnh từ rất nhiều sự kiện lớn nhỏ thuộc hệ mầm non - tiểu học qua việc nhìn ngắm chùm ảnh thu nhỏ cực đẹp sau đây.')

# Lien he 
html = html.replace('Lien he tuyen sinh', 'Thông tin liên lạc')
html = html.replace('San sang cho mot buoi tu van cu extreme, ro rang va dung nhu cau cua gia dinh.', 'Luôn luôn sẵn sàng cho từng cuộc gặp gỡ, trao đổi tư vấn cụ thể bám sát nguyện vọng từ cha mẹ.')
html = html.replace('San sang cho mot buoi tu van cu the, ro rang va dung nhu cau cua gia dinh.', 'Luôn luôn sẵn sàng cho từng cuộc gặp gỡ, trao đổi tư vấn cụ thể bám sát nguyện vọng từ cha mẹ.')

html = html.replace('Neu phu huynh muon xem thuc te moi truong hoc tap, tim hieu ho so hoac can lo trinh phu\n                                hop cho con, doi ngu tuyen sinh co the ho tro truc tiep moi ngay.', 'Nếu quý khách mong mỏi có một góc nhìn chính xác vào cuộc sống nội khu, hoặc cần biết thêm về điều kiện dự tuyển, phòng ghi danh rất vui lòng sẽ giúp sức suốt bảy ngày trong tuần.')
html = html.replace('Goi 0934 525 889', 'Gọi 0934 525 889')
html = html.replace('Tu van tuyen sinh va dat lich tham quan truong.', 'Dịch vụ hồi đáp, gọi nhanh hỗ trợ xin xếp lịch khám phá tham quan cơ sở vật chất ngay trong ngày.')
html = html.replace('Tiep nhan cau hoi ve ho so, hoc phi va chi tieu tuyen sinh.', 'Kênh email điện tử dùng gửi và nhận tập tài liệu, tiếp đón những câu hỏi quanh nội dung tuyển sinh.')
html = html.replace('Dia chi', 'Địa chỉ')
html = html.replace('KDT Trung Van', 'Khu đô thị Trung Văn')
html = html.replace('Nam Tu Liem, Ha Noi.', 'Nam Từ Liêm, Thành phố Hà Nội.')

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(html)

print("Done replacing.")

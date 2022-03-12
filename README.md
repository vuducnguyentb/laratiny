**Install Laravel ui**
composer require laravel/ui
php artisan ui bootstrap --auth
npm install && npm run dev

**Install Laravel File Manager**
composer require unisharp/laravel-filemanager
 php artisan vendor:publish --tag=lfm_config
 php artisan vendor:publish --tag=lfm_public
 php artisan storage:link
 
**** Install the laravel file manager package from unisharp****(Unisharp cung cấp một số tính năng chính như tích hợp CKeditor & TinyMCE, tải lên validatin, Cắt & Thay đổi kích thước của Hình ảnh và các tính năng khác. Để bắt đầu sử dụng gói trình quản lý tệp laravel trên TinyMCE 5 trong laravel, vui lòng chạy các lệnh trên theo trình tự.)
php artisan vendor:publish --tag=lfm_config
php artisan vendor:publish --tag=lfm_public


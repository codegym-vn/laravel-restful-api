# Laravel-restful-api
#### Ứng dụng Lẩvel sử dụng RESTful API để thêm, xóa, sửa một đối tượng khách hàng.
## Các bước khởi chạy

#### Cài đặt composer
``composer install``

#### Tạo file .env từ file .env mẫu
``mv .env.example .env``

#### Cấu hình biến môi trường trong file .env
``DB_DATABASE=``
``DB_USERNAME=``
``DB_PASSWORD= ``

#### Tạo key cho ứng dụng
``php artisan key:generate``

#### Chạy migration khởi tạo Database 
``php artisan migrate``

#### Chạy project laravel trên địa chỉ http://localhost:8000 với câu lệnh
``php artisan serve``

#### Sử dụng PostMan để gọi đến các API
`` - GET - http://localhost:8000/api/customers/ - Để lấy toàn bộ khách hàng.``
####
`` - GET - http://localhost:8000/api/customers/{customer-ID} - Để lấy ra khách hàng theo ID.``
####
`` - POST - http://localhost:8000/api/customers/ - Với dữ liệu gửi kèm là chuỗi JSON: {"first_name":"","last_name":""} - Để tạo mới khách hàng.``
####
`` - PUT - http://localhost:8000/api/customers/{customer-ID} - Với dữ liệu gửi kèm là chuỗi JSON: {"first_name":"","last_name":""} - Để cập nhật khách hàng theo ID.``
####
`` - DELETE - http://localhost:8000/api/customers/{customer-ID} - Để xóa khách hàng theo ID.``
# 
Mã nguồn Laravel-restful-api được sử dụng để thực hành tại [CodeGym](https://codegym.vn)

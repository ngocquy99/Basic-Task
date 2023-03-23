<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
















-- KIEN THUC --

composer install : sau khi clone can intsall composer de lay libary

 \xampp\php\ext\bz2 : error  
cach fix : https://www.youtube.com/watch?v=xP07_EqywRQ

.env : tao 1 file moi truong 

[] :mang array

// routing
Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');
route : tao ra 1 duong dan url
post : phuong thuc (get,....)
/register : url dat ten cho route
RegisterController::class : controller (thuc hien cau lenh hoac logic trong controller )
	- 1 controller co the chua nhieu function
	- 
'register': function thuoc controller , function nay chua nhung logic cua controller
	- update(Request $request){}
		- request : yeu cau 
->name('register.perform'): ten viet tat cua route 

neu variable bi undefined xem da hien thi dung view chua

$users =User::where('id','>=','1')->get();
User : bang user
where : cau dieu kien
$users : bien lay ra thong tin tu bang User theo dieu kien tim kiem 

overview : tu view hien thi cho khach hang se theo yeu cau (delete, update,...) dan den duong truyen dan route, route se tro den controller




-- Yêu cầu những chức năng cần thêm -- 

trong update thay đổi từ yêu cầu id sang yêu cầu email hoặc username  ---  vẫn chưa hoàn thành
FIX password hoặc username hoặc email sau khi update không thể login được  --- chưa làm được men
paginate trang user table  ---  đã paginate số bảng ghi là 15, nhưng chưa dùng được users->link và chưa add link vào nút pre và next


Cronjob    --- ĐANG LÀM CÁI NÀY (link : https://laravel.com/docs/9.x/mail#sending-mail )



Cronjob gửi message 



yêu cầu add-on :
user đã register và login chỉ được fix và update thông tin của mình
thêm nút để đi đến trang update sau khi đã tạo view riêng
thêm thông tin cho about trong navbar
check cách display username trên navbar




--  THẮC MẮC -- 
logincontroller có authenticated thì sau update có cần có   ??????


-- DONE -- 

thêm sdt, gender, quê quán vào update   --- đã update được, nhưng chưa register thêm được sđt và quê quán vào database


tao controller rieng cho update  --- done
tao bang hien thi toan bo user tren web --- done
name sau khi update chưa hiện lên myAdmin, fix đi  --- done
add boostrap  --- done
sau khi update thành công redirect sang dashboard  --- done
tạo thêm update authen điều kiện khi update như là mật khẩu 8 số, ....  --- done
tạo controller view riêng cho user page lấy thông tin từ database user tạo ra bảng   ---  done
thêm nút đi đến trang all users table và home  --- done
sửa quê quán place of birth của register sang datalist form control bootstrap  --- done
search user function  --- done
tạo view riêng cho update  --- done
thêm nút để đi đến trang update sau khi đã tạo view riêng   --- done














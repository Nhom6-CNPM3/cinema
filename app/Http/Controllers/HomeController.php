<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Seat;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        // Lấy tất cả các phim từ database
        $movies = Movie::all();

        // Trả về view 'movies.index' và truyền biến 'movies' chứa danh sách phim
        return view('frontend.index', compact('movies'));
    }

    public function showLoginForm()
    {
        return view('frontend.login');
    }

    public function login(Request $request)
{
    // Validate form data
    $request->validate([
        'email' => 'required|string',
        'password' => 'required|string',
    ]);

    // Lấy thông tin đăng nhập từ request
    $credentials = $request->only('email', 'password');

    // Thực hiện đăng nhập
    if (Auth::attempt($credentials)) {
        // Nếu đăng nhập thành công, chuyển hướng về trang nào đó (ví dụ: trang chính)
        return redirect()->intended('/');
    }

    // Nếu đăng nhập không thành công, chuyển hướng về trang đăng nhập với thông báo lỗi
    return redirect()->route('login')->with('error', 'Email hoặc mật khẩu không đúng.');
}
public function logout()
{
    Auth::logout(); // Thực hiện đăng xuất
    return view('frontend.login');
}
    public function showRegisterForm()
    {
        return view('frontend.register');
    }

    public function register(Request $request)
    {
        // Validate form data
        $request->validate([
            'username' => 'required|string|max:255|unique:tbusers',
            'email' => 'required|string|email|max:255|unique:tbusers',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Tạo người dùng mới trong cơ sở dữ liệu
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Đăng nhập người dùng mới sau khi đăng ký thành công
        Auth::login($user);

        // Chuyển hướng về trang sau khi đăng ký thành công
        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
    }

    public function showMovies()
    {
        $movies = Movie::all();
        return view('frontend.movies', compact('movies'));
    }

    public function showMovieDetail($id)
    {
        $movie = Movie::find($id);

        // Lấy các lịch chiếu của phim với thông tin rạp và phòng
        $schedules = DB::table('tblichchieu')
                        ->join('tbrap', 'tblichchieu.id_rap', '=', 'tbrap.id_rap')
                        ->join('tbphong', 'tblichchieu.id_phong', '=', 'tbphong.id_phong')
                        ->select('tblichchieu.*', 'tbrap.tenrap', 'tbphong.tenphong')
                        ->where('tblichchieu.id_phim', $id)
                        ->get();

        // Lấy thông tin về combo food
        $comboFoods = Food::all();

        // Lấy danh sách ghế
        $seats = Seat::all();

        // Lấy các phim khác
        $relatedMovies = Movie::where('id_phim', '!=', $id)->limit(4)->get();
        $user_id = Auth::user()->id_user;

        return view('frontend.movie_detail', compact('movie', 'schedules', 'relatedMovies', 'comboFoods', 'seats', 'user_id'));
    }

    public function showBlogs()
    {
        $blogs = Blog::all();
        return view('frontend.blogs', compact('blogs'));
    }

    public function showBlogDetail($id)
    {
        $blog = Blog::find($id);
        return view('frontend.blog_detail', compact('blog'));
    }

    public function showBuyTicket()
    {
        // Lấy thông tin từ request
        $selectedScheduleId = request('selectedScheduleId');
        $selectedRoomId = request('selectedRoomId');
        $selectedSeatId = request('selectedSeatId');
        $selectedComboFoodId = request('comboFood');

        // Lấy ID của người dùng hiện tại
        $userId = Auth::user()->id_user;

        // Tạo một bản ghi mới trong bảng Ticket
        $ticket = new Ticket();
        $ticket->id_lichchieu = $selectedScheduleId;
        $ticket->id_user = $userId;
        $ticket->id_ghe = $selectedSeatId;
        $ticket->id_combo = $selectedComboFoodId;
        $ticket->save();

        return redirect()->back();
    }

    public function showUserTickets()
    {
        // Lấy ID của người dùng hiện tại
        $userId = Auth::user()->id_user;

        // Lấy danh sách các vé của người dùng từ cơ sở dữ liệu và phân trang
       // Truy vấn lấy danh sách các vé của người dùng có trạng thái thanh toán là "pending"
    $userTicketsQuery = Ticket::join('tblichchieu', 'tbve.id_lichchieu', '=', 'tblichchieu.id_lichchieu')
    ->join('tbphim', 'tblichchieu.id_phim', '=', 'tbphim.id_phim')
    ->join('tbrap', 'tblichchieu.id_rap', '=', 'tbrap.id_rap')
    ->join('tbghe', 'tbve.id_ghe', '=', 'tbghe.id_ghe')
    ->join('tbphong', 'tblichchieu.id_phong', '=', 'tbphong.id_phong')
    ->leftJoin('tbcombo', 'tbve.id_combo', '=', 'tbcombo.id_combo')
    ->where('tbve.id_user', $userId)
    ->where('tbve.payments', 'pending') // Chỉ lấy vé chưa thanh toán
    ->select('tbve.*', 'tbphim.atenphim', 'tbphim.hinhanh', 'tbrap.tenrap', 'tbphong.tenphong', 'tblichchieu.ngay', 'tblichchieu.gio', 'tbghe.soghe', 'tbcombo.tencombo', 'tbcombo.gia');

// Lấy danh sách các vé
$userTickets = $userTicketsQuery->get();
// Tính tổng tiền của các vé chưa thanh toán
$totalPendingPayments = $userTickets->sum(function ($ticket) {
return $ticket->gia; // Giả sử giá của vé được lấy từ trường 'gia'
});



        // Trả về view frontend.ticket với danh sách các vé của người dùng đã phân trang
        return view('frontend.ticket', compact('userTickets', 'totalPendingPayments'));
    }

    public function payment()
    {
        // Lấy ID của người dùng hiện tại
        $userId = Auth::user()->id_user;

        // Lấy danh sách các vé của người dùng đang đăng nhập từ cơ sở dữ liệu
        $userTickets = Ticket::where('id_user', $userId)
            ->where('payments', 'pending')
            ->get();

        // Cập nhật trạng thái thanh toán của các vé thành 'paid'
        foreach ($userTickets as $ticket) {
            $ticket->payments = 'paid';
            $ticket->save();
        }

        // Chuyển hướng người dùng về trang nào đó sau khi thanh toán thành công
        return redirect()->route('home')->with('success', 'Thanh toán thành công.');
    }

}

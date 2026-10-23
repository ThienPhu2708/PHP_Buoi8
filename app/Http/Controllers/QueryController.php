<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Student;

class QueryController extends Controller
{
    public function index()
    {
        // 1. Sản phẩm có giá > 100000
        $expensive = Product::with('category')->where('price', '>', 100000)->get();

        // 2. Số sản phẩm mỗi danh mục
        $categories = Category::withCount('products')->get();

        // 3. Sinh viên kèm số môn học đã đăng ký
        $students = Student::withCount('courses')->get();

        return view('queries.index', compact('expensive', 'categories', 'students'));
    }
}

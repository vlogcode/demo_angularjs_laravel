<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiController extends Controller
{

    public function danhsach() {
        // Sử dụng Query Builder
        // Query top 3 loại sản phẩm (có sản phẩm) mới nhất
        $ds = DB::table('users')->get();

        return response()->json(array(
            'code'  => 200,
            'result' => $ds,
        ));
    }
}

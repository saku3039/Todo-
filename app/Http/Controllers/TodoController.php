<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(Todo $todo)//インポートしたPostをインスタンス化して$postとして使用。
{
    return $todo->get();//$postの中身を戻り値にする。
}
}

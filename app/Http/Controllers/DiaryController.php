<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $diaries = Diary::where('user_id', $user_id)->orderBy('date', 'asc')->get();
        dd($diaries, $user_id);
        // return view('diary.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 先驗證是否當天已存在資料，若當天已存在，直接轉去 edit

        $user_id = Auth::id();
        $today = Carbon::now()->toDateString();
        $if = Diary::where('user_id', $user_id)->where('date', $today)->pluck('date');
        if ($if) {
            return redirect()->action('DiaryController@edit', ['date' => $today]);
        } else {
            return view('diary.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 只取得需要填入資料庫的欄位
        $data = $request->only(['user_id', 'name', 'date', 'feelings', 'feeling_point_average', 'feeling_point_max', 'feeling_point_min', 'weather_id', 'temperature', 'feellike', 'exercise', 'eat', 'drink', 'weight', 'pressure', 'symptom_id', 'period', 'autolesionA', 'autolesionB', 'autolesionC']);

        // 將 feelings 的 checkbox 欄位轉換為字串
        $feelings = implode(',', $request->input('feelings', []));
        $data['feelings'] = $feelings;

        // 將 weather_id 的 checkbox 欄位轉換為字串
        $weather_id = implode(',', $request->input('weather_id', []));
        $data['weather_id'] = $weather_id;

        // 將 symptom_id 的 checkbox 欄位轉換為字串
        $symptom_id = implode(',', $request->input('symptom_id', []));
        $data['symptom_id'] = $symptom_id;

        // 執行資料庫存儲
        Diary::create($data);

        // dd($request->all());
        // Diary::create($request->all());
        // 取出所有欄位資料後新增
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id, $date)
    {
        return view('diary.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id, $date)
    {
        return view('diary.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id, $date)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id, $date)
    {
        //
    }
}
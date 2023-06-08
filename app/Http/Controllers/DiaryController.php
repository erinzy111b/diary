<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

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
        // 若出錯了，相同帳號在同一個日期存在兩篇日記。
        // 要怎麼樣才能每個日期只取第一篇日記呢？
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
        if ($if == null) {
            return view('diary.create');
            // return redirect()->action('DiaryController@edit', ['date' => $today]);
        } else {
            // return view('diary.create');
            // return redirect()->action('DiaryController@edit', ['user_id' => $user_id, 'date' => $today]);
            return redirect()->route('diary.edit', ['user_id' => $user_id, 'date' => $today]);

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
        // 需驗證是否具有本人或管理員身分，才可進入頁面
        // 用username去找還是userid去找比較好啊
        // 還是應該增加一個usercode的欄位，放隱藏的不重複編號啊
        // 總覺得用id有可能會出意外，hen怕
        if ($user_id == Auth::id() || Auth::id() == '1'
        ) {
            return view('diary.edit');
        } else {
            return "權限不符，請登入正確帳號";
        }

        // 還是都可以進去，但驗證完身分後才導入正確資料？

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
        // 在 store 那邊要下條件！
        // 儲存時若當天已有日記存在，提示一下
        // 可選覆蓋（不就是編輯嗎？）或不新增 // store 那邊改，不是 update 這裡要改
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

    public function override()
    {

        // 好像沒必要欸，有 update 就夠了
        // 但是 update 是更新，是由舊資料去修改，雖然大部分過程和結果一樣，但好像還是有點差異
    }

    // public function redirectToEdit()
    // {
    //     //
    // }

    /**
     * 解密用方法，因不想讓人直接經由網址進入他人編輯頁面，
     * 故將來自使用者的 user_id 與 date 請求加密，顯示於網址上，
     * 待伺服器接收網址後綴再解密，並轉向 edit 。
     *
     */
    public function encrypt($diary_edit_encrypted)
    {
        $diary_edit_decrypted = Crypt::decryptString($diary_edit_encrypted);
        // var_dump($diary_edit_decrypted);
        $params = explode('&', $diary_edit_decrypted);
        foreach ($params as $param) {
            list($key, $value) = explode('=', $param);
            if ($key === 'user_id') {
                $user_id = $value;
            } elseif ($key === 'date') {
                $date = $value;
            }
        }
        // return redirect()->action('DiaryController@edit');
    }
}
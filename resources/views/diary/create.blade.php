<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
        {!! Form::open(['route'=>'diary.store', 'method'=>'POST']) !!}
        {!! Form::hidden('user_id', Auth::user()->id) !!}
        {{-- {!! Form::text('user_id') !!} --}}

        {!! Form::label('date', '日期', []) !!}
        {!! Form::date('date', \Carbon\Carbon::now()) !!}<br><br>

        情緒：<br>
        {!! Form::checkbox('feelings[]', 5, false) !!}
        {!! Form::label('feelings[]', '開心', []) !!}
        {!! Form::checkbox('feelings[]', 6, false) !!}
        {!! Form::label('feelings[]', '難過', []) !!}
        {!! Form::checkbox('feelings[]', 7, false) !!}
        {!! Form::label('feelings[]', '放鬆', []) !!}
        {!! Form::checkbox('feelings[]', 8, false) !!}
        {!! Form::label('feelings[]', '擔憂', []) !!}<br><br>

        當日心情指數：<br>
        {{-- 擇一填寫，若全填就以平均為主，最高最低在收入資料庫時自動計算並填入平均，若高低只填一項，另一項自動填入一樣的數值--}}
        {{-- bonus 比昨天高 比昨天低 和昨天一樣--}}
        {!! Form::label('feeling_point_average', '平均', []) !!}
        {!! Form::selectRangeWithInterval('feeling_point_average', 0, 100, 5, 80, ['class' => 'form-control']) !!}<br>
        {!! Form::label('feeling_point_max', '最高', []) !!}
        {!! Form::text('feeling_point_max', null) !!}
        {!! Form::label('feeling_point_min', '最低', []) !!}
        {!! Form::text('feeling_point_min', null) !!}<br><br>

        天氣：<br>
        {!! Form::checkbox('weather_id[]', 1, false) !!}
        {!! Form::label('weather_id[]', '晴天', []) !!}
        {!! Form::checkbox('weather_id[]', 2, false) !!}
        {!! Form::label('weather_id[]', '多雲', []) !!}
        {!! Form::checkbox('weather_id[]', 3, false) !!}
        {!! Form::label('weather_id[]', '陰天', []) !!}
        {!! Form::checkbox('weather_id[]', 4, false) !!}
        {!! Form::label('weather_id[]', '下雨', []) !!}<br><br>

        {!! Form::label('temperature', '溫度', []) !!}
        {!! Form::text('temperature', null) !!}<br><br>

        {!! Form::label('feellike', '體感', []) !!}
        {!! Form::select('feellike', ['1'=>'寒冷','2'=>'涼爽','3'=>'普通','4'=>'悶熱','5'=>'炎熱'],'3') !!}<br><br>

        {!! Form::label('exercise', '運動', []) !!}
        {!! Form::select('exercise', ['1'=>'無','2'=>'少量','3'=>'適中','4'=>'加強','5'=>'劇烈'],'1') !!}<br><br>

        {!! Form::label('eat', '進食量', []) !!}
        {!! Form::select('eat', ['1'=>'過少','2'=>'偏少','3'=>'適中','4'=>'偏多','5'=>'過多'],'3') !!}<br><br>

        {!! Form::label('drink', '飲水量', []) !!}
        {!! Form::select('drink', ['1'=>'過少','2'=>'偏少','3'=>'適中','4'=>'偏多','5'=>'過多'],'3') !!}<br><br>

        {!! Form::label('weight', '體重', []) !!}
        {{-- bonus 與昨天一樣--}}
        {!! Form::text('weight', null) !!}<br><br>

        {!! Form::label('pressure', '壓力源', []) !!}
        {!! Form::text('pressure', null) !!}<br><br>

        不適症狀：<br>
        {!! Form::checkbox('symptom_id[]', 1, false) !!}
        {!! Form::label('symptom_id[]', '咳嗽', []) !!}
        {!! Form::checkbox('symptom_id[]', 2, false) !!}
        {!! Form::label('symptom_id[]', '喉嚨痛', []) !!}
        {!! Form::checkbox('symptom_id[]', 3, false) !!}
        {!! Form::label('symptom_id[]', '肚子痛', []) !!}
        {!! Form::checkbox('symptom_id[]', 4, false) !!}
        {!! Form::label('symptom_id[]', '發燒', []) !!}
        {!! Form::checkbox('symptom_id[]', 5, false) !!}
        {!! Form::label('symptom_id[]', '頭痛', []) !!}
        {!! Form::checkbox('symptom_id[]', 6, false) !!}
        {!! Form::label('symptom_id[]', '嘔吐', []) !!}<br><br>

        生理期：
        {!! Form::label('period', '是', []) !!}
        {!! Form::radio('period', 1, false) !!}
        {!! Form::label('period', '否', []) !!}
        {!! Form::radio('period', 2, true) !!}<br><br>

        自傷念頭：
        {!! Form::label('autolesionA', '有', []) !!}
        {!! Form::radio('autolesionA', 1, false) !!}
        {!! Form::label('autolesionA', '無', []) !!}
        {!! Form::radio('autolesionA', 2, true) !!}<br>
        自傷計畫：
        {!! Form::label('autolesionB', '有', []) !!}
        {!! Form::radio('autolesionB', 1, false) !!}
        {!! Form::label('autolesionB', '無', []) !!}
        {!! Form::radio('autolesionB', 2, true) !!}<br>
        自傷行為：
        {!! Form::label('autolesionC', '有', []) !!}
        {!! Form::radio('autolesionC', 1, false) !!}
        {!! Form::label('autolesionC', '無', []) !!}
        {!! Form::radio('autolesionC', 2, true) !!}<br><br>

        {!! Form::submit('儲存', []) !!}
        {!! Form::reset('重置', []) !!}

        {!! Form::token() !!}

        {!! Form::close() !!}
</body>
</html>

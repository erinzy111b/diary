<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      var counter = 1;
      $("#addButton").click(function() {
        counter++;
        var newRow = $("<div class='row'>" +
          "<div class='col'>" +
          "<label for='sense_" + counter + "'>體感</label>" +
          "<select name='sense_" + counter + "' id='sense_" + counter + "'>" +
          "<option value='1'>視覺</option>" +
          "<option value='2'>聽覺</option>" +
          "<option value='3'>觸覺</option>" +
          "<option value='4'>味覺</option>" +
          "<option value='5'>嗅覺</option>" +
          "</select>" +
          "</div>" +
          "<div class='col'>" +
          "<label for='content_" + counter + "'>內容</label>" +
          "<input type='text' name='content_" + counter + "' id='content_" + counter + "'/>" +
          "</div>" +
          "</div>");
        $("#inputRows").append(newRow);
      });
    });
  </script>
</head>
<body>
  {!! Form::open(['route'=>'test.store', 'method'=>'POST']) !!}
  {!! Form::hidden('user_id', Auth::user()->id) !!}
  {{-- {!! Form::text('user_id') !!} --}}

  <div id="inputRows">
    <div class="row">
      <div class="col">
        {!! Form::label('date', '日期', []) !!}
        {!! Form::date('date', \Carbon\Carbon::now()) !!}
      </div>
    </div>

    <div class="row">
      <div class="col">
        {!! Form::label('sense', '體感', []) !!}
        {!! Form::select('sense_1', ['1'=>'視覺','2'=>'聽覺','3'=>'觸覺','4'=>'味覺','5'=>'嗅覺'],'3') !!}
      </div>
      <div class="col">
        {!! Form::label('content', '內容', []) !!}
        {!! Form::text('content_1', null) !!}
      </div>
    </div>
  </div>

  <br>
  <button type="button" id="addButton">再填一項</button>

  <br><br>
  {!! Form::submit('儲存', []) !!}
  {!! Form::reset('重置', []) !!}

  {!! Form::token() !!}

  {!! Form::close() !!}
</body>
</html>

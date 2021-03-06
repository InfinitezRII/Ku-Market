<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
    @font-face {
        font-family:'THSarabunNew';
        font-style: normal;
        font-weight: normal;
        src:url("{{ public_path('fonts/THSarabunNew.ttf')}}")format('truetype');
    }
    @font-face {
        font-family:'THSarabunNew';
        font-style: normal;
        font-weight: bold;
        src:url("{{ public_path('fonts/THSarabunNew Bold.ttf')}}")format('truetype');
    }
    @font-face {
        font-family:'THSarabunNew';
        font-style: italic;
        font-weight: normal;
        src:url("{{ public_path('fonts/THSarabunNew Italic.ttf')}}")format('truetype');
    }
    @font-face {
        font-family:'THSarabunNew';
        font-style: italic;
        font-weight: bold;
        src:url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf')}}")format('truetype');
        
    }
    body{
        font-family: "THSarabunNew";
    }
    table{
        border-collapse: collapse;
    }
    td,th{
        border: 1px solid;
    }
    ui.celled.table
      {
        border-collapse: collapse;
        width: 100%;
        height: 50;
      }
      .ui.celled.table, .ptd, .pth,.ptr {
        padding: 5px;
      }
      .pth,.ptd {text-align: left;
        width: 30%;
        padding: 15px;
      }
      .center {text-align: center;
      }
    </style>
</head>

<body>

<div div class="card" style="text-align:center">
    <div style="margin:10px;overflow:auto;">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <h1 align="center">ตลาด KU</h1>
    <h2 align="center">
    @foreach($times as $time)
            @if($time->day_ku_night == 'Sun')
              ประจำวันที่
              <?php
              $Day = "Sunday";
              $dateDay = "next ".$Day;
              if(date('D') == 'Sun')
                echo date('D-d-M-Y', strtotime("now"));
              else
                echo date('D-d-M-Y', strtotime($dateDay));
              ?>
            @endif
            @if($time->day_ku_night == 'Mon')
              ประจำวันที่
              <?php
              $Day = "Monday";
              $dateDay = "next ".$Day;
              if(date('D') == 'Mon')
                echo date('D-d-M-Y', strtotime("now"));
              else
                echo date('D-d-M-Y', strtotime($dateDay));
              ?>
            @endif
            @if($time->day_ku_night == 'Tue')
              ประจำวันที่
              <?php
              $Day = "Tuesday";
              $dateDay = "next ".$Day;
              if(date('D') == 'Tue')
                echo date('D-d-M-Y', strtotime("now"));
              else
                echo date('D-d-M-Y', strtotime($dateDay));
              ?>
            @endif
            @if($time->day_ku_night == 'Wed')
              ประจำวันที่
              <?php
              $Day = "Wednesday";
              $dateDay = "next ".$Day;
              if(date('D') == 'Wed')
                echo date('D-d-M-Y', strtotime("now"));
              else
                echo date('D-d-M-Y', strtotime($dateDay));
              ?>
            @endif
            @if($time->day_ku_night == 'Thu')
              ประจำวันที่
              <?php
              $Day = "Thursday";
              $dateDay = "next ".$Day;
              if(date('D') == 'Thu')
                echo date('D-d-M-Y', strtotime("now"));
              else
                echo date('D-d-M-Y', strtotime($dateDay));
              ?>
            @endif
            @if($time->day_ku_night == 'Fri')
              ประจำวันที่
              <?php
              $Day = "Friday";
              $dateDay = "next ".$Day;
              if(date('D') == 'Fri')
                echo date('D-d-M-Y', strtotime("now"));
              else
                echo date('D-d-M-Y', strtotime($dateDay));
              ?>
            @endif
            @if($time->day_ku_night == 'Sat')
              ประจำวันที่
              <?php
              $Day = "Saturday";
              $dateDay = "next ".$Day;
              if(date('D') == 'Sat')
                echo date('D-d-M-Y', strtotime("now"));
              else
                echo date('D-d-M-Y', strtotime($dateDay));
              ?>
            @endif
      @endforeach
  </h2>
    <table border="1" width = "100%">
    <thead>
    <tr>
        <th align="center" width="5%">ล๊อกที่</th>
        <th align="center" width="15%">ชื่อ-นามสกุล</th>
        <th align="center" >ใช้ไฟ</th>
        <th align="center" width="12%">ขาจร</th>
        <th align="center" >เบอร์โทรศัพท์</th>
        <th align="center" >ประเภทสินค้า</th>
        <th align="center" >เล่มที่/เลขที่</th>
        <th align="center" >จำนวนเงิน</th>
        <th align="center" >สถานะ</th>
        <th align="center" >หมายเหตุ</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($User as $u)
            @if($u->isAdmin != 1)
                @if($u->name == NULL)
                  <tr>
                    <td align="center">{{$u['lock']}}</td>
                    <td>{{$u['name']}}  {{$u['surname']}}</td>
                    <td> </td>
                    <td> </td>
                    <td>{{$u['tel']}}</td>
                    <td>{{$u['store_name']}}</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                  </tr>
                @else
                  @if($u->ban != 1)
                        @if($u->come == 1)
                            <tr>
                            <td align="center">{{$u['lock']}}</td>
                            <td>{{$u['name']}}  {{$u['surname']}}</td>
                            <td> </td>
                            <td> </td>
                            <td>{{$u['tel']}}</td>
                            <td>{{$u['store_name']}}</td>
                            <td> </td>
                            <td> </td>
                            <td align="center"> มา </td>
                            <td> </td>
                            </tr>
                        @else
                            <tr>
                            <td align="center">{{$u['lock']}}</td>
                            <td>{{$u['name']}}  {{$u['surname']}}</td>
                            <td> </td>
                            <td> </td>
                            <td>{{$u['tel']}}</td>
                            <td>{{$u['store_name']}}</td>
                            <td> </td>
                            <td> </td>
                            <td align="center"> ไม่มา </td>
                            <td> </td>
                            </tr>
                        @endif
                  @else
                      <tr>
                      <td align="center">{{$u['lock']}}</td>
                      <td>{{$u['name']}}  {{$u['surname']}}</td>
                      <td> </td>
                      <td> </td>
                      <td>{{$u['tel']}}</td>
                      <td>{{$u['store_name']}}</td>
                      <td> </td>
                      <td> </td>
                      <td align="center"> ถูกระงับการใช้งาน </td>
                      <td> </td>
                      </tr>
                  @endif
              @endif
            @endif
        @endforeach
    </tbody>
    </table>
</body>
</html>



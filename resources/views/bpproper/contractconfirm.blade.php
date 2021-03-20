@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" >
                <div class="card-header" style="text-align:center">登録完了しました</div>

                <div class="card-body">
                <table class="table table-striped">
                @foreach ($results as $result)
                    <tr><td>社員番号</td><td>{{$result->empno}}</td></tr>
                    <tr><td>社員名前</td><td>{{$result->name}}</td></tr>
                    <tr><td>メールアドレス</td><td>{{$result->email}}</td></tr>
                    <tr><td>種別</td><td>@if ($result->typeflag === 0)プロパ
                                         @else　BP
                                         @endif</td></tr>
                    <tr><td>社内・社外</td><td>@if ($result->status_flag === 0)本社
                                         @else　社外
                                         @endif</td></tr>
                    <tr><td>所属</td><td>{{$result->dep}}</td></tr>
                    <tr><td>契約先会社名</td><td>{{$result->contract_comp}}</td></tr>
                    <tr><td>契約先部署名</td><td>{{$result->contract_dep}}</td></tr>
                    <tr><td>契約開始日</td><td>{{$result->contract_start_date}}　～　契約終了日　{{$result->contract_end_date}}</td></tr>
                    <tr><td>プロパ入社日</td><td>{{$result->brc_staff_start_date }}</td></tr>
                @endforeach
                </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
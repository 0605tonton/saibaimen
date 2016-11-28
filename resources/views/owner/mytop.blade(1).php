{{-- resources/views/owner/mytop.blade.php --}}
@extends('owner')
@section('content')
    　My Farm
    <table class="table table-responsive">
        <tr>
            <td>
                サンエスファーム
                <div class="bg-warning">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </div>
                気温：20度、湿度：60%
            </td>
            <td>
                観察日記<br/>
                ＜前の日　　　　　　　　次の日＞
                <hr />
                <div class="text-center">11月1日(月)</div>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
            </td>
        </tr>
        <tr>
            <td colspan="2">
                生産者レポート
                <br/>
                　2016.11.01　サンエスファーム　今村さん<br />
                　　今日は気温が高いので、冷房を入れています。
            </td>
        </tr>
        <tr>
            <td width="50%">
                <button class="btn-block btn-info">収穫体験に行く</button>
            </td>
            <td>
                <button class="btn-block btn-primary">送付を依頼する</button>
            </td>
        </tr>
    </table>
@endsection
{{-- resources/views/owner/login.blade.php --}}
@extends('owner')
@section('content')
    <div class="bg-success">
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <div class="text-center"><h3>広告スライダー</h3></div>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

    </div>
    <div class="text-center">
        <br />
        <h3>サンプル一覧</h3>
        <br />
        <p>
            まずはサンプル商品をお楽しみください。
        </p>
        <br />
    </div>
    <table class="table table-borderless">
        <tr>
            <td><a href="{{ url('farmer/sample') }}"><img class="img-responsive" src="img/sample001.jpg"/></a>
            </td>
            <td><a href="{{ url('farmer/sample') }}"><img class="img-responsive" src="img/sample002.jpg"/></a>
            </td>
            <td><a href="{{ url('farmer/sample') }}"><img class="img-responsive" src="img/sample003.jpg"/></a>
            </td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td><a href="{{ url('farmer/sample') }}"><img class="img-responsive" src="img/sample004.jpg"/></a>
            </td>
            <td><a href="{{ url('farmer/sample') }}"><img class="img-responsive" src="img/sample005.jpg"/></a>
            </td>
            <td><a href="{{ url('farmer/sample') }}"><img class="img-responsive" src="img/sample006.png"/></a>
            </td>
        </tr>
    </table>
@endsection

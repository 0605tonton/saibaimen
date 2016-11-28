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
        <br/>
        <br/>
        <br/>
        <div class="bg-success-title">&nbsp;</div>
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
    <div class="text-center">
        <br />
        <h3>クラウドファームとは？</h3>
        <br />
        <p>
		クラウドファームの会員になると、色々な農場の小口オーナーになって農産物が育つ過程を観察することができます。<br>
		農産物が収穫時期になったら、体験収穫へGO！　残念ながら収穫に行けない人には採れたての作物をお届け！<br>
		<br>
		椎茸の菌床ひとつ、パイナップルひと株、果樹一本等、まずは下に表示されている取り扱い品目をご確認ください。
        </p>
        <br />
    </div>
    <table class="table table-borderless">
        <tr>
            <td><a href="{{ url('farmer/sample') }}"><img class="img-responsive" src="img/shitake.jpg"/></a>
            </td>
            <td><a href="{{ url('farmer/sample') }}"><img class="img-responsive" src="img/pineapple.jpg"/></a>
            </td>
            <td><a href="{{ url('farmer/sample') }}"><img class="img-responsive" src="img/shitake.jpg"/></a>
            </td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td><a href="{{ url('farmer/sample') }}"><img class="img-responsive" src="img/pineapple.jpg"/></a>
            </td>
            <td><a href="{{ url('farmer/sample') }}"><img class="img-responsive" src="img/shitake.jpg"/></a>
            </td>
            <td><a href="{{ url('farmer/sample') }}"><img class="img-responsive" src="img/pineapple.jpg"/></a>
            </td>
        </tr>
    </table>
@endsection

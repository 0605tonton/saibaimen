{{-- resources/views/owner/mytop.blade.php --}}
@extends('owner')
@section('content')
    <div class="h3">サンエスファーム</div>
    <div class="content-block">
        <div class="left-block">
            <div class="title-box">
                <div class="text-center">きょう の ようす</div>
            </div>
            <div class="animation-box">
                <div class="hs-wrapper">
	            <?php $i=0 ?>
                    @foreach($urls as $url)
                        <img src={{ $url }} width="100%" alt={{ $url }} />
		        @if ($i > 8)
		            @break
		        @endif
		        <?php $i++ ?>
                    @endforeach 
                <div class="control-box">
                    <a class="left-button" href="#">前の日</a>
                    <a class="right-button" href="#">次の日</a>
                </div>
            </div>
        </div>
    	<div class="right-block">
       	    <div class="title-box">
                <div class="text-center">観察日記</div>
            </div>
        </div>
        <div class="bottom-block">
            <div class="farmer-report">
                生産者レポート
                <br/>
                　2016.11.01　サンエスファーム　今村さん<br />
                　　今日は気温が高いので、冷房を入れています。<br />
                <br />
                <button class="btn-block btn-info">収穫体験に行く</button>
                <button class="btn-block btn-primary">送付を依頼する</button>
            </div>
        </div>
    </div>

@endsection

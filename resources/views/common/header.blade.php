{{-- resources/views/owner/header.blade.php --}}
<header id="header">
    <nav class="navbar navbar-default">
        <div class="container">
            <a class="navbar-brand" id="logo" href="/">
	    <img src="/img/header_title.png">
            </a>
	    <!--
            <a class="navbar-brand" id="logo" href="/">
                My Farm
            </a>
	    -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right hidden-sm">
                    @if ($loginFlag)
                        <li><a href="{{ url('owner/mytop') }}">マイトップ</a></li>
                        <li><a href="{{ url('owner/dialy') }}">観察日記</a></li>
                        <li><a href="{{ url('owner/logout') }}">ログアウト</a></li>
                    @else
                        <li><a href="{{ url('myfarm/concept') }}">クラウドファームについて</a></li>
                        <li><a href="{{ url('myfarm/use') }}">使い方</a></li>
                        <li><a href="{{ url('owner/login') }}">ログイン</a></li>
                        <li><a href="{{ url('owner/register') }}">ユーザ登録</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</header><!-- #header -->

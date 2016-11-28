{{-- resources/views/owner/login.blade.php --}}
@extends('owner')
@section('content')
    <div class="page-header">
        <div class="container">
            <h2>Login</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Error!</strong>　ログインできませんでした。
                        </div>
                    @endif

                    <div class="form-horizontal">
                        {!! Form::open() !!}
                        <div class="form-group">
                            {!! Form::label('email', 'メールアドレス', array('class' => 'col-md-3 text-right')) !!}
                            <div class="col-md-9">
                                {!! Form::input('email','email','', array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'パスワード', array('class' => 'col-md-3 text-right')) !!}
                            <div class="col-md-9">
                                {!! Form::input('password','password','', array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-9">
                                {!! Form::input('checkbox','remember',null,array('id'=>'remember')) !!}　{!! Form::label('remember', 'パスワードを記憶する') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-9">
                                {!! Form::submit('ログイン', array('class' => 'btn btn-primary')) !!}<br><br>
                                <a href="{{ url('password/email') }}">パスワードを再発行する</a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-9">
                                <a href="{{ url('/login/facebook') }}"><img src="/img/fb.png" width="40" height="40">&nbsp;&nbsp;Facebookでログイン</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-9">
                                <a href="{{ url('/login/google') }}"><img src="/img/google.png"  width="53" height="40">&nbsp;&nbsp;Googleでログイン</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
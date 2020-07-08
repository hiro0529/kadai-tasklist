@extends('layouts.app')

@section('content')
    @if (Auth::check())
                {{-- 投稿一覧 --}}
                @include('tasks.index')
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>登録ページ</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
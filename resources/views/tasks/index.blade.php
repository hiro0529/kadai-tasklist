@extends('layouts.app')

@section('content')

 <h1>ステータス一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                     <th>詳細</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    {{-- ステータス詳細ページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
   {{-- ステータス作成ページへのリンク --}}
    {!! link_to_route('tasks.create', '新規ステータスの投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection
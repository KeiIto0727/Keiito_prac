@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        {!! Form::open(['route' => 'timeline', 'method' => 'POST']) !!}
            {{ csrf_field() }}
            <div class="row mb-4">
                {{ Form::text('tweet', null, ['class' => 'form-control col-9 mr-auto']) }}
                {{ Form::submit('ツイート', ['class' => 'btn btn-primary col-2']) }}
            </div>
            {{-- エラー表示 ここから --}}
            @if ($errors->has('tweet'))
                <p class="alert alert-danger">{{ $errors->first('tweet') }}</p>
            @endif
            {{-- エラー表示 ここまで --}}
            {!! Form::close() !!}
    </div>
@endsection

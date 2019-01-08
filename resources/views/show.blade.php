@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')
@section('title', 'demo-laravel-crud')
@section('content')

<div class="container">
    <h1>K字版</h1>
    <form  action="{{ url('show') }}" method="post">
      @csrf {{-- CSRF保護 --}}
      @method('POST') {{-- 疑似フォームメソッド --}}
      <div class="form-group">
        <div class="row">
          <div class="col-2">
            <p>タイトル：</p>
          </div>
          <div class="col-10">
            <input id="postTitle" type="text" class="form-control" name="postTitle">
          </div>
          <div class="col-2">
            <p>本文：</p>
          </div>
          <div class="col-10">
        <input id="postText" type="text" class="form-control" name="postText">
          </div>
        </div>


        <div class="row">
          <div class="col-2">
            <p>Select Color:</p>
          </div>
          <div class="col-4">
            <select id="postColor" type="text" class="form-control" name="postColor">
              <option value="BLACK">BLACK</option>
              <option value="BLUE">BLUE</option>
              <option value="RED">RED</option>
              <option value="GREEN">GREEN</option>
              <option value="#8A2BE2">VIOLET</option>
            </select>
          </div>
          <div class="col-2">
            <p>Select PPPP:</p>
          </div>
          <div class="col-4">
            <select id="postIP" type="text" class="form-control" name="postIP">
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
          </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">{{ __('送信') }}</button>
      </div>
    </form>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('No') }}</th>
                    <th>{{ __('タイトル') }}</th>
                    <th>{{ __('本文') }}</th>
                    <th>{{ __('投稿時刻') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->postID }}</td>
                    <td style="color:{{ $post->postColor }};">{{ $post->postTitle }}</td>
                    <td style="color:{{ $post->postColor }};">{{ $post->postText }}</td>
                    <td>{{ $post->created_at }}</td>
                 </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

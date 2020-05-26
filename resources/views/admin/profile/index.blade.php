@extends('layouts.admin')
@section('title', 'プロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <h2>プロフィール</h2>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <a href="{{ action('Admin\ProfileController@edit', ['id' => $profile->id]) }}" role="button" class="btn btn-primary">編集</a>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <tbody>
                            <tr>
                                <th width="20%">名前</th>
                                <td>{{ $profile->name }}</td>
                            </tr>
                            <tr>
                                <th width="20%">性別</th>
                                <td>{{ $profile->gender == 1 ? "男性" : "女性" }}</td>
                            </tr>
                            <tr>
                                <th width="20%">趣味</th>
                                <td>{{ $profile->hobby }}</td>
                            </tr>
                            <tr>
                                <th width="20%">自己紹介</th>
                                <td>{{ $profile->introduction }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.front')
@section('title', 'プロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <h2>プロフィール</h2>
        </div>
        <div class="row">
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    @if ($profiles != NULL)
                        <table class="table table-bordered table-primary">
                            <thead>
                                <tr>
                                    <th width="10%">id</th>
                                    <th width="20%">名前</th>
                                    <th width="20%">性別</th>
                                    <th width="20%">趣味</th>
                                    <th width="30%">自己紹介</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($profiles as $profile)
                                    <tr>
                                        <td>{{ $profile->id }}</td>
                                        <td>{{ $profile->name }}</td>
                                        <td>{{ $profile->gender == 1 ? "男性" : "女性" }}</td>
                                        <td>{{ str_limit($profile->hobby, 100) }}</td>
                                        <td>{{ str_limit($profile->introduction, 100) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
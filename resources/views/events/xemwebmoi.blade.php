@extends('layouts.app')

@section('content')

    <div style="width: 400px; max-width: 100%">
        <h3>Statistics</h3>
        <table class="table table-bordered">
            <tr>
                <td>Visitors</td>
                <td>{{$log['vistors']}}</td>
            </tr>
            <tr>
                <td>Logged (Using existed account)</td>
                <td>{{$log['logged']}}</td>
            </tr>
            <tr>
                <td>Registered new account</td>
                <td>{{$log['registered']}}</td>
            </tr>
            <tr>
                <td>Played game</td>
                <td>{{$log['played']}}</td>
            </tr>
            <tr>
                <td>Submitted</td>
                <td>{{$log['submitted']}}</td>
            </tr>
            <tr>
                <td>Facebook Ref</td>
                <td>{{$log['facebookRef']}}</td>
            </tr>
        </table>
    </div>



<div class="list">
    <h3>Game records</h3>
    <a class="btn btn-success" href="/download-report/xem-web-moi">Download</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Facebook</th>
                <th>Lucky Number</th>
                <th>Feedback</th>
                <th>Is correct?</th>
                <th>Entered time</th>
                <th>Started time</th>
                <th>Submmited time</th>
                <th>Ref</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr class="{{$item->is_correct ? 'table-success': ''}}">
                    <td>{{$item->user_id}}</td>
                    <td>{{$item->full_name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->facebook}}</td>
                    <td>{{$item->lucky_number}}</td>
                    <td>{{$item->comment}}</td>
                    <td>{{$item->is_correct}}</td>
                    <td>{{date("H:i d-m-y",$item->time_enter)}}</td>
                    <td>{{date("H:i d-m-y",$item->time_start)}}</td>
                    <td>{{date("H:i d-m-y",$item->time_submit)}}</td>
                    <td>{{$item->ref}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@extends('layout')

@section('content')
    <div class="container">
        <table style="width:100%">
            <div class="row">
                <div class="col-sm">
                    name
                </div>
                <div class="col-sm">
                    BIK
                </div>
                <div class="col-sm">
                    city
                </div>
                <div class="col-sm">
                    address
                </div>
                <div class="col-sm">
                    phone
                </div>
            </div>
            <tr>
                <th>name</th>
                <th>BIK</th>
                <th>city</th>
                <th>address</th>
                <th>phone</th>
            </tr>
            @foreach($banks as $bank)
                <tr>
                    <td>{{$bank->name}}</td>
                    <td>{{$bank->BIK}}</td>
                    <td>{{$bank->city}}</td>
                    <td>{{$bank->address}}</td>
                    <td>{{$bank->phone}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection


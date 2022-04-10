@extends('layouts.app')

@section('content')

<style>
    h3{
        margin-top:5rem;
        color:#ffffff;
        font-weight: 900;
    }
    table tr{
        color:#c0b9b9;
        text-align:center;
    }
    .table-hover{
        color:#bb8f2c;
    }
    .table-striped tbody tr:nth-of-type(odd) {
    background-color: #efa600b3;
    }
    svg.w-5.h-5 {
        width: 20px;
    }
    nav {
        display: flex;
        justify-content: end;
    }
    .hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between {
        display: flex;
    }
    .flex.justify-between.flex-1.sm\:hidden {
        display: none;
    }
    p.text-sm.text-gray-700.leading-5 {
        margin: 0 2rem 0 0;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <h3 class="text-center">الإشتراك في النشرة الإخبارية</h3>
            <table class="table table-striped table-hover mt-4">
                <tr>
                    <th>Email</th>
                    <th>data</th>
                </tr>
                @foreach($newsData as $new)
                    <tr>
                        <td>{{$new->email}}</td>
                        <td>{{$new->created_at}}</td>
                    </tr>
                @endforeach
                <tfoot>
                    <tr>
                    </tr>
                </tfoot>
            </table>

            <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection

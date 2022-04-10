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
    
.table-striped>tbody>tr:nth-of-type(odd)>* {
    color: #e8eaf6;
}
</style>

    <h3 class="text-center">بيانات التسجيل </h3>
    <table class="table table-striped table-hover mt-4">
        <tr>
            <th>name</th>
            <th>phone</th>
            <th>data</th>
        </tr>
        @foreach($registering as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->created_at}}</td>
            </tr>
        @endforeach
         <tfoot>
            <tr>
            <td colspan="3">{{ $registering->links() }}</td>
            </tr>
        </tfoot>
    </table>


@endsection

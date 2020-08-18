@extends('welcome')
@section('title','Staff')
@section('content')
    <div class="col-12">
        <div class="row-12">
            <h1>Staff Management</h1>
        </div>

        <form action="{{route('staffs.search')}}" method="get">
            @csrf
            <input type="text" placeholder="Search" name="keyword">
            <input type="submit" value="Search">
        </form>
        <div class="col-12">
            @if(\Illuminate\Support\Facades\Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>{{ \Illuminate\Support\Facades\Session::get('success') }}
                </p>
            @endif
        </div>
        <table class="table table-striped">
            <thead>
            <tr style="background-color: #636b6f">
                <th style="color: orange" scope="col">STT</th>
                <th style="color: orange" scope="col">Group code</th>
                <th style="color: orange" scope="col">Name</th>
                <th style="color: orange" scope="col">BirthDay</th>
                <th style="color: orange" scope="col">Gender</th>
                <th style="color: orange" scope="col">Phone</th>
                <th style="color: orange" scope="col">CMND</th>
                <th style="color: orange" scope="col">Email</th>
                <th style="color: orange" scope="col">address</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(count($staff)==0)
                <tr><td colspan="4">Khong co du lieu</td></tr>
            @else
                @foreach($staff as $key => $value)
                    <tr>

                        <th scope="row">{{++$key}}</th>
                        <td>{{$value->name}}</td>
                        <td>{{$value->birthDay}}</td>
                        <td>{{$value->gender}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->cmnd}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->address}}</td>
                        <td><textarea>{{$value->desc}}</textarea></td>
                        <td><a href="{{route('staffs.edit', $value->id)}}" class="btn btn-primay" style="background-color: orange">Edit</a></td>
                        <td><a href="{{route('staffs.destroy', $value->id)}}" class="btn btn-primary" style="background-color: orangered" onclick="return confirm('Do you want to delete your staff?')">Delete</a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <a class="btn btn-primary" id="create" href="{{route('staffs.create')}}">Thêm mới</a>
        <a class="btn btn-primary" href="{{route('group.index')}}">Switch Group Information</a>
    </div>
<div id="show">

</div>
@endsection
<script>
    $(document).ready(function () {
        $.ajax({

        })
    });
    // $("#create").click(function () {
    //     $.get("create.blade.php", function (data) {
    //         $("#show").html(data);
    //     });
    // });
</script>

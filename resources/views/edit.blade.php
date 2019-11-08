@extends('welcome')

@section('title', 'Cập nhật công viêc')


@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <a style="color: red">{{$error}}<br></a>
        @endforeach
    @endif
    <div class="row">

        <div class="col-md-12">

            <h2>Editing staff information</h2>

        </div>

        <div class="col-md-12">

            <form method="post" action="{{ route('staffs.update', $staff->id) }}" >

                @csrf

                <div class="form-group">

                    <label>Group:</label>

                    <input type="text" class="form-control" name="group" value="{{ $staff->group }}">

                </div>

                <div class="form-group">

                    <label>Name</label>

                    <input type="text" class="form-control" rows="3" name="name" value="{{ $staff->name }}" required>

                </div>
                <div class="form-group">

                    <label>Date of birth</label>

                    <input type="date" name="birthDay" class="form-control"  value="{{ $staff->birthDay }}">

                </div>
                <div class="form-group">

                    <label>Gender</label>

                    <input type="text" class="form-control" rows="3" name="gender" value="{{ $staff->gender }}"  >>

                </div>
                <div class="form-group">

                    <label>Phone Number</label>

                    <input type="text" class="form-control" rows="3" name="phone"  value="{{$staff->phone }}">

                </div>
                <div class="form-group">

                    <label>CMND</label>

                    <input type="text" class="form-control" rows="3" name="cmnd" value="{{ $staff->cmnd }}">

                </div>

                <div class="form-group">

                    <label>Email</label>

                    <input type="text" class="form-control" rows="3" name="email" value="{{ $staff->email }}">

                </div>

                <div class="form-group">

                    <label>Address</label>

                    <input type="text" class="form-control" rows="3" name="address" value="{{ $staff->cmnd}}">

                </div>


                <button type="submit" class="btn btn-primary">Confirm Edit</button>

                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>

            </form>

        </div>

    </div>


@endsection

@extends('welcome')

@section('title', 'Add new staff')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 style="color: orangered">Add new staff</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('staffs.store') }}">
                @csrf
                <div class="form-group">
                    <label >Group</label>
                    <input type="text" class=" form-control @error('group') is-invalid @enderror" name="group" >
                    @error('group')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">

                    <label >Name</label>

                    <input type="text" class="form-control  @error('name') is-invalid @enderror" rows="3" name="name" >
                    @error('name')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">

                    <label for="exampleFormControlFile1">Date of birth</label>

                    <input type="date" name="birthDay" class="form-control">

                </div>

                <div class="form-group">

                    <label >Gender</label>

                    <input type="text" class="form-control  @error('gender') is-invalid @enderror" rows="3" name="gender" >
                    @error('gender')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">

                    <label >Phone</label>

                    <input type="text" class="form-control  @error('phone') is-invalid @enderror" rows="3" name="phone" >
                    @error('phone')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">

                    <label >CMND</label>

                    <input type="text" class="form-control  @error('cmnd') is-invalid @enderror" rows="3" name="cmnd" >
                    @error('cmnd')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">

                    <label >Email</label>

                    <input type="text" class="form-control  @error('email') is-invalid @enderror" rows="3" name="email" >
                    @error('email')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">

                    <label >Address</label>

                    <input type="text" class="form-control  @error('address') is-invalid @enderror" rows="3" name="address" >
                    @error('address')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label >Desc</label>
                    <textarea id="editor"  class="form-control  @error('desc') is-invalid @enderror" rows="3" name="desc" ></textarea>
                    @error('desc')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>
                <button type="button" id="store" class="btn btn-primary">Add now!</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
@endsection


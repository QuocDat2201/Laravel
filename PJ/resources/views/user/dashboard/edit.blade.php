@extends('user.layout.layout')
@section('content')
<style>
    .edit-form {
        width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .edit-form label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .edit-form input[type="text"],
    .edit-form input[type="email"],
    .edit-form textarea {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .edit-form button[type="submit"] {
        padding: 8px 15px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .edit-form button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
<link rel="stylesheet" href="{{asset('admin/css')}}/bootstrap.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="color:#000000; " align="center">Infomation</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div style="width:100%;height:190px">
                <img align="center" src="{{asset('user/img/avatar')}}/{{$user[0]->photo}}" alt="" style="width: 500px;height:150px; display:block;margin-left: auto; margin-right: auto;">

            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8"><img align="center" src="{{asset('user/img/avatar')}}/{{$user[0]->photo}}" alt="" style="width: 100px;height:100px; display:block;color: #fff;
                                    position: absolute;bottom:20px">
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="clo-md-5"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 align="center"><b>{{session('username')}}</b></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="edit-form">
                <form method="post" action="{{url('/save')}}/{{$user[0]->id}}" enctype="multipart/form-data">
                    @csrf
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ $user[0]->name }}">

                    <label for="age">Age:</label>
                    <input type="text" id="age" name="age" value="{{ $user[0]->age }}">

                    <label for="sex">Gender:</label>
                    <select name="gender" id="sex" class="form-control form-control-sm">
                        <option value="">Select your Gender</option>
                        <option value="1">Male</option>
                        <option value="0">Female</option>
                    </select>
                    
                    <label for="address">Address:</label>
                    <textarea id="address" name="address">{{ $user[0]->address }}</textarea>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ $user[0]->email }}">

                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" value="{{ $user[0]->phone }}">

                    <label for="Photo">Photo:</label>
                    <input type="file" id="Photo" name="Photo" accept="image/*">

                    <br><br>

                    <button type="submit">Save</button>
                    <tr>
                        <td>
                            <input type="hidden" name="user_id" value="{{$user[0]->id}}">
                            <input type="hidden" name="current_photo" value="{{$user[0]->photo}}">
                        </td>
                    </tr>
                </form>
            </div>

        </div>
        <div class="col-md-3"></div>
    </div>

    {{-- <h4 align="center"><b> 
            <div style="width:500px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <table border="1">
                                <tr>
                                    <td class="td">NAME</td>
                                    <td>nguyuen thanh</td>
                                </tr>
                                <tr>
                                    <td>Age</td>
                                    <td>18</td>

                                </tr>
                                <tr width="500px">
                                    <td>ADDRESS</td>
                                    <td rowspan="2">
                                        kjdshv,vfnsw,fsdsadssadsadsadsdsadsadsadsadsadsadsan
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div> --}}
</div>
@endsection
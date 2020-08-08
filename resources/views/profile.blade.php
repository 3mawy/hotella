@extends('layouts.master')
@section('content')
    <div class="container-fluid bg-img bg-overlay" style=" padding-top: 125px; padding-bottom: 15px; background-image: url(http://hotella.test/frontend/img/bg-img/hero-1.jpg);">
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="{{ Auth::user()->avatar }}" alt="profile image"/>
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>{{ Auth::user()->name }}</h5>
                        <h6>{{ Auth::user()->bio }}</h6>
                    </div>
                </div>
                <div class="col-md-2 pb-2" style="text-align: center;">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-12">
                <nav class="single-listing-nav">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="bookings-tab" data-toggle="tab" href="#bookings" role="tab" aria-controls="bookings" aria-selected="false">Bookings</a>
                        </li>
                    </ul>
                </nav>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                        <div class="overview-content mt-50">
                            <h4>Personal information</h4>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <h6>Name: {{Auth::user()->name}}</h6>
                                    <h6>Address: {{Auth::user()->address}}</h6>
                                    <h6>Phone: {{Auth::user()->phone}}</h6>
                                    <h6>Bookings made: {{Auth::user()->bookings->count()}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="bookings" role="tabpanel" aria-labelledby="bookings-tab">
                        <div class="listing-menu-area mt-50">
                            @foreach ($bookings as $booking)
                            <div class="row single-listing-menu ">
                                <div class="col-sm-4 col-12">
                                    <img style="height: 130px; object-fit: cover" src="{{$booking->room->img}}" alt="room img">
                                </div>
                                <div class="col-sm-5 pt-3 col-12">
                                    <div class="listing-menu-title">
                                        <h6>Hotel Name: {{$booking->hotel->name}}</h6>
                                    </div>
                                    <div class="listing-menu-price pt-3">
                                        <h6>Cost: {{$booking->room->price}}$</h6>
                                    </div>
                                    <div class="listing-menu-price pt-3">
                                        <h6>Created at: {{$booking->created_at}}</h6>
                                    </div>
                                </div>
                                <div class="col-sm-3 pt-3 col-12">
                                    <p>Check in: {{$booking->date_from}}</p>
                                    <p>Check out: {{$booking->date_to}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('style')
    .emp-profile{
    padding: 3%;
    border-radius: 0.5rem;
    background: #fff;
    }
    .profile-img{
    text-align: center;
    }
    .profile-img img{
    width: 70%;
    height: 100%;
    }
    .profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
    }
    .profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
    }
    .profile-head h5{
    color: #333;
    }
    .profile-head h6{
    color: #ef8c5b;
    }
    .profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
    }
    .proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
    }
    .proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
    }
    .profile-head .nav-tabs{
    margin-bottom:5%;
    }
    .profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
    }
    .profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
    }
    .profile-work{
    padding: 14%;
    margin-top: -15%;
    }
    .profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
    }
    .profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
    }
    .profile-work ul{
    list-style: none;
    }

@endsection

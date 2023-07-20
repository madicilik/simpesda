@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="container">
        <div class="panel-header bg-secondary">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div class="page-header">
                        <h4 class="page-title text-white">Profil Saya</h4>
                        <ul class="breadcrumbs text-white">
                            <li class="nav-home">
                                <a class="text-white" href="/">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a class="text-white" href="/profile">Profil Saya</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-inner mt--5">
            <div class="row">
                <div class="col">

                    <div class="card card-profile">
                        <div class="card-header">
                            <div class="profile-picture">
                                <div class="avatar avatar-xxl">
                                    @if (Auth::user()->avatar == null)
                                    <img class="avatar-img rounded" src="{{ asset('img/default-avatar.png') }}" alt="Card image cap">
                                    @else
                                    <img class="avatar-img rounded" src="{{ asset('img/usr/' . Auth::user()->avatar) }}" alt="Card image cap">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-profile text-center">
                                <div class="name">
                                    <b>{{ Auth::user()->name }}</b> (<b>@</b><b>{{ Auth::user()->username }}</b>)
                                </div>
                                <div class="job">{{ $roleName }}</div>
                                <div class="desc">{{ Auth::user()->description }}</div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Jenis Kelamin</label>
                                        @if (Auth::user()->gender == 'Male')
                                        <label class="form-control">Laki-Laki</label>
                                        @else
                                        <label class="form-control">Perempuan</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Tanggal Lahir</label>
                                        <label class="form-control">{{ Auth::user()->birthdate }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
@endsection

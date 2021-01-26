@include('custom.header')
<!--
 * Created by PhpStorm.
 * User: Mahe
 * Date: 10-Feb-20
 * Time: 11:50 AM

-->

@yield('content')

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('doctor.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Teacher Profile</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title"> {{ $user->name }} Home Page</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
<!-- Page Content -->
<div class="content">
    <div class="container">

        <!-- Doctor Widget -->
        <div class="card">
            <div class="card-body">
                <div class="doctor-widget">
                    <div class="doc-info-left">
                        <div class="doctor-img">
                            @if ($user->profile_image == "default.png")
                                <img src="{{ asset('/') }}default/default.png" alt="User Image"
                                     style="width: 150px; max-width: 100%">
                            @else
                                <img src="{{ asset('storage') }}/{{ $user->profile_image }}" class="img-fluid"
                                     alt="User Image">
                            @endif
                        </div>
                        <div class="doc-info-cont">
                            <h4 class="doc-name">{{ $user->name }}</h4>
                            <p class="doc-department"><img
                                    src="{{ asset('/') }}frontend/assets/img/specialities/specialities-01.png"
                                    class="img-fluid" alt="Speciality">{{ $user->Teacher->Category->category_name }}</p>

                            <div class="clinic-details">
                                <p class="doc-location"><i
                                        class="fas fa-map-marker-alt"></i> {{ $user->Teacher->Area->area_name }}

                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="doc-info-right">
                        <div class="clini-infos">
                            <ul>
                                <li><i class="fas fa-map-marker-alt"></i> {{ $user->Teacher->Area->area_name }} Area
                                </li>
                                <li><i class="fas fa-sms"></i> {{ $user->phn_number }}</li>
                                <li><i class="fas fa-at"></i> {{ $user->email }}</li>
                            </ul>
                        </div>
                        @auth
                            <div class="clinic-booking">
                                <a class="apt-btn" href="{{ route('bookingInfoSubmitPage' , $user->id) }}">Book For CoSpace Hub</a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>

            <div class="card text-center">
                <div class="card-header">
                    <div class="card-header">
                        <h4 align="center" class="card-title" style="background-color: darkcyan; color: white;">
                            CoSpace Booking Chart</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Space Title</th>
                                <th>Space Size</th>
                                <th>Space Price</th>
                                <th>Space Area</th>
                                <th>Space Category</th>
                                <th>Space Imaage</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($schedules as $schedule)
                                <tr>
                                    <td>{{ $schedule->space }}</td>
                                    <td>{{ $schedule->space_size }}</td>
                                    <td>{{ $schedule->price }}</td>
                                    <td>{{ $schedule->area->area_name }}</td>
                                    <td>{{ $schedule->category->category_name }}</td>
                                    <td>{{ $schedule->space_images }}</td></tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Doctor Widget -->

        <!-- Doctor Details Tab -->
        <div class="card">
            <div class="card-body pt-0">

                <!-- Tab Menu -->
                <nav class="user-tabs mb-4">
                    <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" href="#doc_overview" data-toggle="tab">Overview</a>
                        </li>

                    </ul>
                </nav>
                <!-- /Tab Menu -->

                <!-- Tab Content -->
                <div class="tab-content pt-0">

                    <!-- Overview Content -->
                    <div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
                        <div class="row">
                            <div class="col-md-12 col-lg-9">

                                <!-- About Details -->
                                <div class="widget about-widget">
                                    <h4 class="widget-title">About Me</h4>
                                    <p> {{ $user->Teacher->about_me }}</p>
                                </div>

                            </div>
                        </div>

                    </div>



                </div>

            </div>


            <!-- /Page Content -->

@include('custom.footer')

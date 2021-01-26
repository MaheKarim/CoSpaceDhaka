@include('custom.header')

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('doctor.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('doctor.dashboard')}}">Dashboard</a>
                        </li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Dashboard</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                <!-- Profile Sidebar -->
            @include('backend.multi-dashboard.doctor._sidebar_doctor')
            <!-- /Profile Sidebar -->
            </div>

            <!-- Start From Here -->

            <div class="col-md-7 col-lg-8 col-xl-9">

                <!-- Basic Information -->

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <div class="content">
                    <form action="{{ route('schedulePost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card contact-card">
                            <div class="card-body">
                                <h4 class="card-title">CoSpace Details</h4>
                                <div class="row form-row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Space Title</label>
                                            <input type="text" class="form-control" name="space" placeholder="ex: CoSpace in Banani">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Space Size</label>
                                            <input type="text" class="form-control" name="space_size" placeholder="1200 sq Feet">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Space Price</label>
                                            <input type="text" class="form-control" name="price" placeholder="90 BDT">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Area Name</label>
                                            <select name="area_name_id" class="form-control select">
                                                @php($areas= \App\Area::all())
                                                @foreach ($areas as $area)
                                                    <option value="{{ $area->id }}">{{$area->area_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Space Category</label>
                                            <select name="category_name_id" class="form-control select">
                                                @php($categories= \App\Category::all())
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Space Image</label>
                                            <input type="file" name="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="submit-section submit-btn-bottom">
                            <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                        </div>
                </div>
                </form>
                <!--Table Start -->
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Space Title
                        </th>
                        <th scope="col">Space Size</th>
                        <th scope="col">Space Price</th>
                        <th scope="col">Space Area</th>
                        <th scope="col">Space Type</th>
                        <th scope="col">Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($schedules as $schedule)

                        <tr>
                            <td>{{ $schedule->space }}</td>
                            <td>{{ $schedule->space_size }}</td>
                            <td>{{ $schedule->price }}</td>
                            <td>{{ $schedule->area->area_name }}</td>
                            <td>{{ $schedule->category->category_name }}</td>
                            <td><img src="{{ asset('uploads/schedule/'.$schedule->image ) }}" width="25px"> </td>
                            <td>
                                <a href="{{ route('deleteSchedule' , $schedule->id) }}" type="button"
                                   data-toggle="tooltip" data-original-title="Remove">
                                    <i class="fas fa-trash-alt"> </i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!--Table End-->
            </div>


        </div>

    </div>
</div>
<!-- /Page Content -->

<!-- End Here -->


</div>
</div>
</div>
<!-- /Page Content -->


<!-- Footer Start -->
@include('custom.footer')

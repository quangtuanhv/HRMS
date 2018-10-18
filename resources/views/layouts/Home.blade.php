@extends('layouts.Master')

@section('main')
<!-- Counts Section -->
<section class="dashboard-counts section-padding">
    <div class="container-fluid">
      <div class="row">
        <!-- Count item widget-->
        <div class="col-xl-4 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-user"></i></div>
            <div class="name"><strong class="text-uppercase">Tổng số nhân viên</strong><span>Last 7 days</span>
              <div class="count-number">25</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class="col-xl-4 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-padnote"></i></div>
            <div class="name"><strong class="text-uppercase">Số chức vụ</strong><span>Last 5 days</span>
              <div class="count-number">400</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class="col-xl-4 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-check"></i></div>
            <div class="name"><strong class="text-uppercase">Số bộ phận</strong><span>Last 2 months</span>
              <div class="count-number">342</div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

@endsection

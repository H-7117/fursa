@extends('layouts.mainlayout')
@section('view')
    <div class="pagetitle">
      <h1>بينات الوظيفه</h1>
     
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
             
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">الاسم ({{ $job->Title }})</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">اسم الوظيفه</div>
                    <div class="col-lg-9 col-md-8">{{ $job->Title }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">اسم القطاع</div>
                    <div class="col-lg-9 col-md-8">{{ $job->departments->Name }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">موقع الوظيفه</div>
                    <div class="col-lg-9 col-md-8">{{ $job->Location }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">نوع الوظيفه</div>
                    <div class="col-lg-9 col-md-8">{{ $job->jobType }}</div>
                  </div>
                 
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">وصف الوظيفه</div>
                    <div class="col-lg-9 col-md-8">{{ $job->jobDescription }}</div>
                  </div>
                 

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

@endsection
@extends('layouts.mainlayout')
@section('view')
    <div class="pagetitle">
      <h1>بينات الشركه</h1>
     
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
             
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">{{ $company->logo }}</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">اسم الشركه</div>
                    <div class="col-lg-9 col-md-8">{{ $company->name }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">البريد الإلكتروني</div>
                    <div class="col-lg-9 col-md-8">{{ $company->EmailAddress }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">البلد</div>
                    <div class="col-lg-9 col-md-8">{{ $company->country }}</div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">المدينه</div>
                    <div class="col-lg-9 col-md-8">{{ $company->city }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">عن الشركه</div>
                    <div class="col-lg-9 col-md-8">{{ $company->aboutCompany}}</div>
                  </div>

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

@endsection
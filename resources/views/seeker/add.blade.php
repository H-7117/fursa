@extends('layouts.mainlayout')
@section('addUser')
<div class="pagetitle">
  <h1>اضافه شركه</h1>

</div><!-- End Page Title -->
<div class="col-xl-12">
    <div class="card p-4">
      <form action="forms/contact.php" method="post" class="php-email-form">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="nameAr" class="form-control" placeholder=" اسم المتقدم بالعربي" required>
          </div>

          <div class="col-md-6 ">
            <input ype="text" name="nameEn" class="form-control" placeholder="اسم المتقدم بلانجليزيه" required>
          </div>
          
          <div class="col-md-6">
            <input type="email" class="form-control" name="subject" placeholder="البريد الالكتروني" required>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" name="subject" placeholder="رقم الهاتف" required>
          </div>

          <div class="col-md-6">
            <input type="text" class="form-control" name="subject" placeholder="الدوله" required>
          </div>

          <div class="col-md-6">
            <input type="text" class="form-control" name="subject" placeholder="المدينه" required>
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="رسالة التوظيف" required></textarea>
          </div>

          <div class="col-md-12 text-center">
         
            <div class="d-flex justify-content-end">
            
                <button class="create ">حفظ</button>
            </div>

          </div>

        </div>
      </form>
    </div>

  </div>
  @endsection
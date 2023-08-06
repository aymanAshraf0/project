@extends('layout.layout')
@section('title')
    Contact Us
@endsection
 @section('content')

<div class="text-center text-light mt-5">
    <h1>تواصل معنا لأي <span style="color:aqua;">استفسار</span></h1>
    <hr>
</div>
<div class="row mt-5 container text-center">
    <div class="col text-light"><h3 style="color: aqua">الهاتف</h3>0550249808</div>
    <div class="col text-light"><a style="text-decoration:aqua; color:white" href="#"><h3 style="color: aqua">البريد الالكتروني</h3>Info@miemar.com.sa</a></div>
    <div class="col text-light"><h3 style="color: aqua">العنوان</h3>الرياض - مكة</div>
</div>
<div class="container">
<form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-light">الاسم</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-light">البريد الالكتروني</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-light">رقم الهاتف</label>
      <input type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-light">اكتب رسالتك</label>
      <textarea class="w-100" name="textarea"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">ارسال</button>
  </form>
</div>
 @endsection

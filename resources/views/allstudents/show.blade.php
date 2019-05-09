@extends('layouts.dasheadfoot')
@section('content') 

<div class="container">
  <div class="row  justify-content-center">
    <div class="col-md-6 text-center mt-5">
    <img src="/images/{{$editstudent->cover_image}}" alt="" class="img-fluid" style="width:100%">  

       
    </div>
    <div class="col-md-6 text-left mt-5">
      <h1>{{$editstudent->f_name}} {{$editstudent->m_name}} {{$editstudent->l_name}} </h1>
      <h3>Class : {{$editstudent->class}}</h3>
      <h3>Gender : {{$editstudent->gender}}</h3>
      <h5>Roll no: {{$editstudent->roll_no}} </h5 >
    </div>
  </div>

  


<h3 class="text-center p-3"> General Info </h3>
<div class="row">
  <div class="col-md-4 text-left">
  <table class="table">
  <tbody>
    <tr><td>Date of Birth : </td><td>{{$editstudent->dob}}</td></tr>
  </tbody>
  <tbody>
    <tr><td> Blood Group : </td><td>{{$editstudent->blood_group}}</td></tr>
  </tbody>
  <tbody>
    <tr><td>Nationality : </td><td>{{$editstudent->nationality}}</td></tr>
  </tbody>
  <tbody>
    <tr><td>Mother Tongue</td><td>{{$editstudent->mother_tongue}}</td></tr>
  </tbody>
  <tbody>
  <tr><td>Gender </td><td>{{$editstudent->gender}}</td></tr>
  </tbody>
  </table>
  </div>

  <div class="col-md-4 text-left">
  <table class="table">
  <tbody>
    <tr><td>Permanent Country </td><td>{{$editstudent->permanent_country}}</td></tr>
  </tbody>
  <tbody>
    <tr><td> Address : </td><td>{{$editstudent->permanent_address}}</td></tr>
  </tbody>
  <tbody>
    <tr><td>City : </td><td>{{$editstudent->permanent_city}} {{$editstudent->permanent_state}} {{$editstudent->permanent_zip}}</td></tr>
  </tbody>
  <tbody>
    <tr><td>Phone :</td><td>{{$editstudent->permanent_phone}}</td></tr>
  </tbody>
  </table>
  </div>
  <div class="col-md-4 text-left">
  <table class="table">
  <tbody>
    <tr><td>Present Country </td><td>{{$editstudent->present_country}}</td></tr>
  </tbody>
  <tbody>
    <tr><td> Address : </td><td>{{$editstudent->present_address}}</td></tr>
  </tbody>
  <tbody>
    <tr><td>City : </td><td>{{$editstudent->present_city}} {{$editstudent->present_state}} {{$editstudent->present_zip}}</td></tr>
  </tbody>
  <tbody>
    <tr><td>Phone :</td><td>{{$editstudent->present_phone}}</td></tr>
  </tbody>
 
  </table>
  </div>

  
  </div>

<h3 class="text-center p-3"> Relationships </h3>
<div class="row">
  <div class="col-md-4 text-left">
  <table class="table">
  <tbody>
    <tr><td>Father Name : </td><td>{{$editstudent->father_name}}</td></tr>
  </tbody>
  <tbody>
    <tr><td> Mobile : </td><td>{{$editstudent->father_mobile_number}}</td></tr>
  </tbody>
  <tbody>
    <tr><td>Profession : </td><td>{{$editstudent->father_profession}}</td></tr>
  </tbody>
  <tbody>
    <tr><td>National ID type :</td><td>{{$editstudent->father_national_id_card_type}}</td></tr>
  </tbody>
  <tbody>
  <tr><td>National ID :</td><td>{{$editstudent->father_national_id_card_number}}</td></tr>
  </tbody>
  </table>
  </div>

  <div class="col-md-4 text-left">
  <table class="table">
  <tbody>
    <tr><td>Mother Name : </td><td>{{$editstudent->mother_name}}</td></tr>
  </tbody>
  <tbody>
    <tr><td> Mobile : </td><td>{{$editstudent->mother_mobile_number}}</td></tr>
  </tbody>
  <tbody>
    <tr><td>Profession : </td><td>{{$editstudent->mother_profession}}</td></tr>
  </tbody>
  <tbody>
    <tr><td>National ID type :</td><td>{{$editstudent->mother_national_id_card_type}}</td></tr>
  </tbody>
  <tbody>
  <tr><td>National ID :</td><td>{{$editstudent->mother_national_id_card_number}}</td></tr>
  </tbody>
  </table>
  </div>

  <div class="col-md-4 text-left">
  <table class="table">
  <tbody>
    <tr><td>Guardian Name : </td><td>{{$editstudent->guardian_name}}</td></tr>
  </tbody>
  <tbody>
    <tr><td> Mobile : </td><td>{{$editstudent->guardian_mobile_number}}</td></tr>
  </tbody>
  <tbody>
    <tr><td>Profession : </td><td>{{$editstudent->guardian_profession}}</td></tr>
  </tbody>
  <tbody>
    <tr><td>National ID type :</td><td>{{$editstudent->guardian_national_id_card_type}}</td></tr>
  </tbody>
  <tbody>
  <tr><td>National ID :</td><td>{{$editstudent->guardian_national_id_card_number}}</td></tr>
  </tbody>
  </table>
  </div>
 </div>
</div>

@endsection











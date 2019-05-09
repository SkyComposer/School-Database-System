@extends('layouts.dasheadfoot') 
@section('content')

<div class="container">
  <div class="row  justify-content-center">
    <div class="col-md-10">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <form method="POST" enctype="multipart/form-data" action="{{route('allstudents.index')}}">
        {{ csrf_field() }}
        <div class="form-row mt-5">
          <div class="form-group col-md-4">
            <label for="inputEmail4">First Name</label>
            <input type="text" name="f_name" class="form-control" id="inputEmail4" placeholder="" required>
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Middle Name</label>
            <input type="text" name="m_name" class="form-control" id="inputPassword4" placeholder="">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Last Name</label>
            <input type="text" name="l_name" class="form-control" id="inputPassword4" placeholder="">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label class="mr-sm-2" for="genders">Gender</label>
            <select class="custom-select mr-sm-2" id="gender" name="gender">
                          <option selected>Choose Your Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Others">Others</option>
                        </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Date of Birth</label>
            <input type="date" class="form-control" id="inputPassword4" name="dob" placeholder="Password">
          </div>
          <div class="form-group col-md-4">
            <label class="mr-sm-2" for="genders">Blood Group</label>
            <select class="custom-select mr-sm-2" id="gender" name="blood_group">
                          <option selected>Choose...</option>
                          <option value="A +ve">A +ve</option>
                          <option value="A -ve">A -ve</option>
                          <option value="B +ve">B +ve</option>
                          <option value="B -ve">B -ve</option>
                          <option value="B +ve">AB +ve</option>
                          <option value="B +ve">AB -ve</option>
                          <option value="B +ve">O +ve</option>
                          <option value="B +ve">O -ve</option>
                        </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="image">Upload image </label>
            <input type="file" name="cover_image">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">Roll Number</label>
            <input type="number" name="roll_no" class="form-control" id="inputAddress" placeholder="Roll No">
          </div>
          <div class="form-group col-md-4">
            <label class="mr-sm-2" for="class group">Class</label>
            <select class="custom-select mr-sm-2" id="class" name="class">
                                  <option selected>Choose...</option>
                                  <option value="Nursery">Nursery</option>
                                  <option value="L.K.G">L.K.G</option>
                                  <option value="U.K.G">U.K.G</option>
                                  <option value="I">I</option>
                                  <option value="II">II</option>
                                  <option value="III">III</option>
                                  <option value="IV">IV</option>
                                  <option value="V">V</option>
                                  <option value="VI">VI</option>
                                  <option value="VII">VII</option>
                                  <option value="VIII">VIII</option>
                                  <option value="IX">IX</option>
                                  <option value="X">X</option>
                                </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputEmail4">Birth Place</label>
            <input type="text" name="birth_place" class="form-control" id="inputEmail4" placeholder="">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Nationality</label>
            <input type="text" name="nationality" class="form-control" id="inputPassword4" placeholder="">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Mother Tongue</label>
            <input type="text" name="mother_tongue" class="form-control" id="inputPassword4" placeholder="">
          </div>
        </div>


        {{-- Contact --}}

        <div class="form-group">
          <label for="inputAddress">Permanent Address</label>
          <input type="text" name="permanent_address" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" name="permanent_city">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control" name="permanent_state">
                      <option selected>Choose...</option>
                      <option value="StateI">StateI</option>
                      <option value="StateI">StateII</option>
                      <option value="StateIII">StateIII</option>
                      <option value="StateIV">StateIV</option>
                      <option value="StateV">StateV</option>
                      <option value="StateVI">StateVI</option>
                      <option value="StateVII">StateVII</option>
                    </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip" name="permanent_zip">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Permanent Country</label>
          <input type="text" name="permanent_country" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress">Permanent Phone</label>
          <input type="text" name="permanent_phone" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress">Present Address</label>
          <input type="text" name="present_address" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" name="present_city" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control" name="present_state">
                          <option selected>Choose...</option>
                          <option value="StateI">StateI</option>
                          <option value="StateI">StateII</option>
                          <option value="StateIII">StateIII</option>
                          <option value="StateIV">StateIV</option>
                          <option value="StateV">StateV</option>
                          <option value="StateVI">StateVI</option>
                          <option value="StateVII">StateVII</option>
                        </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip" name="present_zip">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Present Country</label>
          <input type="text" name="present_country" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress">Present Phone</label>
          <input type="text" name="present_phone" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>


        <div class="form-group">
          <label for="inputAddress">Father's Name</label>
          <input type="text" name="father_name" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress">Mobile Number</label>
          <input type="text" name="father_mobile_number" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputCity">Profession</label>
            <input type="text" name="father_profession" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputZip">National ID card type</label>
            <input type="text" class="form-control" id="inputZip" name="father_national_id_card_type">
          </div>
          <div class="form-group col-md-4">
            <label for="inputZip">Card number</label>
            <input type="text" class="form-control" id="inputZip" name="father_national_id_card_number">
          </div>
        </div>

        <div class="form-group">
          <label for="inputAddress">Mother's Name</label>
          <input type="text" name="mother_name" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress">Mobile Number</label>
          <input type="text" name="mother_mobile_number" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputCity">Profession</label>
            <input type="text" name="mother_profession" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputZip">National ID card type</label>
            <input type="text" class="form-control" id="inputZip" name="mother_national_id_card_type">
          </div>
          <div class="form-group col-md-4">
            <label for="inputZip">Card number</label>
            <input type="text" class="form-control" id="inputZip" name="mother_national_id_card_number">
          </div>
        </div>

        <div class="form-group">
          <label for="inputAddress">Guardian's Name</label>
          <input type="text" name="guardian_name" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress">Guardian Mobile Number</label>
          <input type="text" name="guardian_mobile_number" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputCity">Profession</label>
            <input type="text" name="guardian_profession" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputIDcardtype">National ID card type</label>
            <input type="text" class="form-control" id="inputZip" name="guardian_national_id_card_type">
          </div>
          <div class="form-group col-md-4">
            <label for="inputcardnum">Card number</label>
            <input type="text" class="form-control" id="inputZip" name="guardian_national_id_card_number">
          </div>
        </div>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>
</div>
@endsection
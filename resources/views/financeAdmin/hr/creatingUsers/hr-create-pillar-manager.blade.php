@extends('layouts.lfinanceadmin')

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title text-center">Add new  pillar manager</h4>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

{{--
    <div class="pull-right">
        <a class="btn btn-primary" href="" title="Go back"> <i class="fas fa-backward "></i> </a>
    </div> --}}

        <form method="post"  action="{{ route('employees.store') }}">
            @csrf
            <input type="hidden" value="{{ Auth::user()->user_id }}" name="added_by">
            <input type="hidden" value=0 name="department_id">
            <input type="hidden" value='password' name="password">
            <input type="hidden" value='pending verification' name="acc_status">


            {{-- user personal information --}}
            <div class="row">
                <div class="form-group form-inline col-md-4 input-group-lg">
                    <label for="forFname">First Name: </label>
                    <input type="text" class="form-control" name="fname"
                        value="<?= isset($_POST['fname']) ? $_POST['fname'] : ''; ?>" placeholder="" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forMname">Middle Name: </label>
                    <input type="text" class="form-control" name="mname"
                        value="<?= isset($_POST['mname']) ? $_POST['mname'] : ''; ?>" placeholder="">
                </div>
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forLname">Last Name: </label>
                    <input type="text" class="form-control" name="lname"
                        value="<?= isset($_POST['lname']) ? $_POST['lname'] : ''; ?>" placeholder="">
                </div>
            </div>

           <br />
           <br />
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="fordob">Date of Birth: </label>
                    <input type="date" class="form-control" name="dob"
                        value="<?= isset($_POST['dob']) ? $_POST['dob'] : ''; ?>" placeholder=""
                        required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="formGroupProductName">Gender</label>
                    <select class="form-control" aria-label="Large" id="gender_id" name="gender_id"
                        aria-describedby="inputGroup-sizing-sm">
                        <option value="select">Select</option>
                        @foreach($genders as $gender)
                        <option value="{{$gender->gender_id}}">{{$gender->gender_title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="formartialStatus">Martial Status: </label>
                    <select class="form-control" aria-label="Large" id="martialstatus" name="martialstatus"
                        aria-describedby="inputGroup-sizing-sm">
                        <option value="select">Select</option>
                        <option value="married">Married</option>
                        <option value="widow">Widow</option>
                        <option value="widower">Widower</option>
                        <option value="divorced">Divorced</option>
                        <option value="single">Single</option>
                    </select>
                </div>
                <div class="form-group col-md-4 input-group-lg">
                    <label for="fornationality">Nationality: </label>
                    <select class="form-control" aria-label="Large" id="nationality" name="nationality"
                        aria-describedby="inputGroup-sizing-sm">
                        <option value="select">Select</option>
                        <option value="Tanzanian">Tanzanian</option>
                        <option value="Kenyan">Kenyan</option>
                        <option value="other">Other</option>
                    </select>
                </div>

            </div>

            {{-- user address --}}
            <br />
            <br />
            <br />
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forAddress">Address: </label>
                    <input type="text" class="form-control" name="address"
                        value="<?= isset($_POST['address']) ? $_POST['address'] : ''; ?>" placeholder="" required>
                </div>
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forpn">Phone Number: </label>
                    <input type="text" class="form-control" name="phonenumber"
                        value="<?= isset($_POST['phonenumber']) ? $_POST['phonenumber'] : ''; ?>" placeholder="">
                </div>
            </div>
            <div class="row">

                <div class="form-group col-md-4 input-group-lg">
                    <label for="forKpi_dc_timing">Emegency Contact: </label>
                    <input type="text" class="form-control" name="emegency_contact"
                        value="<?= isset($_POST['emegency_contact']) ? $_POST['emegency_contact'] : ''; ?>" placeholder="">
                </div>
            </div>
            {{-- User type and role --}}
            <br />
            <br />
            <br />
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forDepartment">Select Pillar: </label>
                    <select class="form-control" aria-label="Large" id="pillar_id" name="pillar_id"
                    aria-describedby="inputGroup-sizing-sm">
                    <option value="select">Select user pillar</option>
                    @foreach($pillars as $pillar)
                    <option value="{{$pillar->pillar_id}}">{{$pillar->pillar_title}}</option>
                    @endforeach
                     </select>
              </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="forUserrole">Select pillar Management Role: </label>
                    <select class="form-control" aria-label="Large" id="role" name="role"
                    aria-describedby="inputGroup-sizing-sm">
                    <option value="select">Select Role</option>
                    @foreach($pillarmanagerroles as $pillarmanagerrole)
                    <option value="{{$pillarmanagerrole->role_id}}">{{$pillarmanagerrole->role_title}}</option>
                    @endforeach
                     </select>
              </div>
            </div>


            <div class="row">

                <div class="form-group col-md-4 input-group-lg">
                    <label for="forKpi_dc_timing">Driving Licence Num: </label>
                    <input type="text" class="form-control" name="driving_license"
                        value="<?= isset($_POST['driving_license']) ? $_POST['driving_license'] : ''; ?>" placeholder="">
                </div>

                <div class="form-group col-md-4 input-group-lg">
                    <label for="forKpi_dc_timing">TIN Num: </label>
                    <input type="text" class="form-control" name="tin_number"
                        value="<?= isset($_POST['tin_number']) ? $_POST['tin_number'] : ''; ?>" placeholder="">
                </div>
            </div>

             {{-- user login info --}}


            <div class="row">
                <div class="form-group col-lg-12 input-group-lg">
                    <div class="form-group green-border-focus">
                        <label for="forjobBriefDescription">Pillar managers position description:
                        </label>
                        <textarea class="form-control" name="job_description" rows="10" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 input-group-lg">
                    <label for="forbankusername">Bank Account holders name: </label>
                    <input type="text" class="form-control" name="bankusername"
                        value="<?= isset($_POST['bankusername']) ? $_POST['bankusername'] : ''; ?>" placeholder="">
                </div>

                <div class="form-group col-md-4 input-group-lg">
                    <label for="forbankname">Bank Title: </label>
                    <input type="text" class="form-control" name="bankname"
                        value="<?= isset($_POST['bankname']) ? $_POST['bankname'] : ''; ?>" placeholder="">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 input-group-lg">
                    <label for="forbankaccnumber">Bank Account Number: </label>
                    <input type="text" class="form-control" name="bankaccnumber"
                        value="<?= isset($_POST['bankaccnumber']) ? $_POST['bankaccnumber'] : ''; ?>" placeholder="">
                </div>


                <div class="form-group col-md-4 input-group-lg">
                    <label for="fortotalsalary">Total Salary: </label>
                    <input type="text" class="form-control" name="totalsalary"
                        value="<?= isset($_POST['totalsalary']) ? $_POST['totalsalary'] : ''; ?>" placeholder="">
                </div>


                <div class="form-group col-md-4 input-group-lg">
                    <label for="forposition">Currency Type: </label>
                    <select class="form-control" aria-label="Large" id="currencyType" name="currencyType"
                        aria-describedby="inputGroup-sizing-sm">
                        <option value="select">Select</option>
                        <option value="usd">USD</option>
                        <option value="tzs">TZS</option>

                    </select>
                </div>
            </div>
            <br />
            <br />
            <br />
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                <select class="form-control" aria-label="Large" id="working_type" name="working_type"
                aria-describedby="inputGroup-sizing-sm">
                <option value="select">Working Type</option>
                <option value="full-time">Full-time</option>
                <option value="part-time">Part-time</option>
                <option value="consultant">Consultant</option>
                <option value="temporary">Temporary</option>


            </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                <select class="form-control" aria-label="Large" id="useraccStatus" name="useraccStatus"
                        aria-describedby="inputGroup-sizing-sm">
                        <option value="select">User status</option>
                        <option value="active">Active</option>
                        <option value="pending">Pending</option>

                    </select>
                </div>
            </div>

            <br />
            <br />
            <br />
            <div class="row">
                <div class="form-group col-md-4 input-group-lg">
                    <label for="foremail">{{ __('E-Mail Address') }} </label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>

            <div class="row">
                <div class="form-group col-md-6 input-group-lg">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload User Photo</label>
                        <input type="file" class="form-control-file" id="uploadUserPhoto">
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 input-group-lg">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload User contract</label>
                        <input type="file" class="form-control-file" id="uploadUserContract">
                      </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group offset-md-6 col-md-4 input-group-lg push-right">
                    <button type="submit" class="btn btn-outline-info btn-lg">Create new user</button>
                </div>
                <div class="form-group offset-md-6 col-md-4 input-group-lg pull-right">
                    <button type="button" name="btnCancel" class="btn btn-outline-danger btn-lg">cancel entry</button>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection

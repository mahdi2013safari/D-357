@extends('master')

@section('style')



@endsection
@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Doctor Registration </h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="container">

                    <div class="row">
                        <form method="post" class="form-horizontal" action="/doctors">
                            <div class="col-md-12" style="margin-left: 40px;">
                                {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                                <div class="col-sm-12">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">First name</label>
                                            <input type="text" class="form-control" name="first_name"
                                                   placeholder="Doctor's firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">Last name</label>
                                            <input type="text" class="form-control" name="last_name"
                                                   placeholder="Doctor's last name" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">Father name</label>
                                            <input type="text" class="form-control" name="father_name"
                                                   placeholder="Doctor's father name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">Age</label>
                                            <input type="number" class="form-control" name="age"
                                                   placeholder="Doctor's age">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-12">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class=" control-label">Phone</label>
                                            <input type="text" class="form-control" name="phone" placeholder="Doctor's Phone number" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">Departement</label>
                                            <select class="select2_demo_1 form-control" id="dept" name="department"
                                                    required>
                                                <option value="0">Select Department</option>
                                                <option value="regular basis">regular basis</option>
                                                <option value="Orthodontist">Orthodontist</option>
                                                <option value="Oral and maxillofacial surgeon">Oral and maxillofacial
                                                    surgeon
                                                </option>
                                                <option value="Periodontist">Periodontist</option>
                                                <option value="Prosthodontist">Prosthodontist</option>
                                                <option value="Endodontist">Endodontist</option>
                                                <option value="General">General</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-3">
                                        <div class="form-group"><label class="control-label">Max Patient can visits</label>
                                            <input type="number" class="form-control" name="max_patient" placeholder="Enter Maximum patient can visits" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class=" control-label">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter doctor's email"  required>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class=" control-label">password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter doctor's account password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="margin-top: 18px;">
                                    <div class="col-sm-3 text-center" style="margin-top: 40px">
                                        <div class="form-group">
                                          <label class=" control-label" style="letter-spacing: 2px;line-height: 12px;font-size: 18px">Working Time: <i class="fa fa-arrow-right"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                           <label style="line-height: 35px;"> From </label>
                                           <input type="time" class="form-control" name="start_work_time" style="width: 40%" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                       <div class="form-group">
                                        <label style="line-height: 35px;"> To </label>
                                        <input type="time" class="form-control" name="end_work_time" style="width: 40%" required>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="margin-top: 20px;">
                                    <div class="col-sm-5 text-center" style="margin-top: 22px;">
                                        <div class="form-group">
                                            <div class="col-sm-3"><label class=" control-label">Salary Type:</label></div>
                                            <div class="col-sm-3"><label><input type="radio" name="salary_type" value="percentage" id="per" onclick="perSal()" style="height: 22px;width:22px;" required><i></i>Per%</label></div>
                                            <div class="col-sm-3"><label><input type="radio" name="salary_type" onclick="fixSal()" id="fix" value="fix" style="height: 22px;width:22px;"> <i></i> Fix </label></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5 text-left">
                                        <div class="form-group">
                                            <label class=" control-label" id="label">Salary amount</label>
                                            <input type="number" class="form-control" name="salary_amount" id="sal" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="margin-top: 25px;">
                                <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="col-sm-3"><label class="control-label">Gender:</label></div>
                                    <div class="col-sm-3" style="margin-left: 15px;"><div class="i-checks"><label><input type="radio" value="Male" name="gender"  required><i></i> Male </label></div></div>
                                    <div class="col-sm-3"><div class="i-checks"><label> <input type="radio" value="Female" name="gender" required><i></i> Female </label></div></div>
                                </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-5 text-right">
                                <div class="form-group">
                                        <button class="btn btn-white"  type='reset'>Reset</button>&nbsp;
                                        <button class="btn btn-primary " type="submit" name="submit" value="Save">Save
                                        </button>
                                </div>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

@section('script')
    <script>
        function perSal() {
            document.getElementById('label').innerHTML = 'Salary Percentage';
            document.getElementById('sal').setAttribute('max', 100);
            document.getElementById('sal').setAttribute('placeholder', 'Enter the percentage of salary');
        }

        function fixSal() {
            document.getElementById('label').innerHTML = 'Salary amount';
            document.getElementById('sal').setAttribute('max', 10000000);
            document.getElementById('sal').setAttribute('placeholder', 'Enter the amount  of salary');
        }
    </script>

@endsection


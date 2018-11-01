@extends('master')

@section('style')
    <link href="{{asset('dashboard/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <style rel="stylesheet">
    </style>
@endsection

@section('content')
    {{-- table of patient's x-ray --}}
    <div class="col-lg-12" >
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Using Guide</h5>
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
                <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            {{--Main NavTabs--}}
                            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-home" style="font-size: 35px;"></i><br>Home</a></li>
                            <li><a data-toggle="tab" href="#department"><i class="fa fa-building" style="font-size: 35px;margin-left: 20px"></i><br>Department</a></li>
                            <li><a data-toggle="tab" href="#reception"><i class="fa fa-user" style="font-size: 35px;margin-left: 15px"></i><br>Reception</a></li>
                            <li><a data-toggle="tab" href="#finance"><i class="fa fa-money" style="font-size: 35px;margin-left: 5px"></i><br>Finance</a></li>
                            <li><a data-toggle="tab" href="#setting"><i class="fa fa-cog" style="font-size: 35px;margin-left: 7px"></i><br>Setting</a></li>
                            <li><a data-toggle="tab" href="#contact"><i class="fa fa-phone" style="font-size: 35px;margin-left: 7px"></i><br>Contact</a></li>
                            {{--End of Mian NavTabs--}}
                        </ul>
                        <div class="tab-content">
                            {{--Home Tab--}}
                            <div id="home" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <h1>Home Page Information:</h1>
                                            <div class="row">
                                                <div class="col-sm-12"><p>1-This dashboard is visible to admin of the application and only admin can access it.</p></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>2-In the left side of page there is a menu which list all different part of the application like departments,reception,finance,setting etc.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>3-In the top navigation bar there are name of the clinic that is using this app , date,option for choosing language either English or Dari adn logout button.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>4-Bellow the top navigation bar white boxes show the current user name,number of patients,doctors and those who have appointment for today</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>5-In the middle of the page there are buttons for rapid access to different part of the application.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>6-The form is embedded for quick entery of daily expenses.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" id="dash" onclick="fullSize()" onblur="backToSmall()" style="width: 140px;height:60px;border: none">
                                                <img src="{{asset('img/dash.JPG')}}" style="height: auto;width: 100%;">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--End of HomeTab--}}
                            {{--Department Tab--}}
                            <div id="department" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12 text-center"><h2>Department Information</h2><hr></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tabs-container">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#doctor"><img src="{{asset('img/doctors.PNG')}}" style="width:50px;height: 50px;margin-left: -5px"><br>Doctor</a></li>
                                                    <li><a data-toggle="tab" href="#xray"><img src="{{asset('img/x-ray.PNG')}}" style="width:50px;height: 50px;margin-left: -5px"><br>X-Ray</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                        {{--Doctor Department--}}
                                                        <div id="doctor" class="tab-pane active">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <h1 style="margin-left: 10px;">Doctor Page Information:</h1>
                                                                        <div class="col-sm-12"><p>From Department in sidebar by clicking on <b>Doctor</b> doctor page will appear.<br>
                                                                            This page will take you to three different other pages namely .</p>
                                                                            <ul>
                                                                                <li>Patient List</li>
                                                                                <li>Next Appointment Lis</li>
                                                                                <li>Patient Report</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-10">
                                                                            <div class="row" style="margin-top: 50px;">
                                                                            <div class="col-sm-12">
                                                                                <h3>1-Patient List:</h3>In this page all the patients who are having appointment for the current day will be listed.<br>
                                                                                By clicking on <b>Start Treatment</b> button at the last column doctor can start his/her work with the patient, the information about that page will come later.
                                                                            </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 50px;">
                                                                            <div class="col-sm-12">
                                                                                <h3>2- Next Appointment List:</h3>In this page all the patient who are having appointment for the upcoming days will be listed.<br>
                                                                                You can also find the patient by searching his/her name or date of appointment.
                                                                            </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 50px;">
                                                                            <div class="col-sm-12">
                                                                                <h3>3- Patient Report:</h3> In this page doctor can have report about his/her patient.
                                                                                <br> The report is printable and can be printed.
                                                                            </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 50px;">
                                                                                <h2 style="margin-left: 12px;z-index:-1;">Doctor Operation Page Information</h2>
                                                                            <div class="col-sm-12">
                                                                                <h3>Past History:</h3> If the current patient has already been treated by this doctor his/her previous history will be liste out here.<br>
                                                                                If the problem is with same tooth the treatment can be continued ,otherwise another treatment can take place.
                                                                            </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 50px;">
                                                                                <h2 style="margin-left: 12px;z-index:-1;">Doctor Operation Page Information</h2>
                                                                            <div class="col-sm-12">
                                                                                    <h3>Present History:</h3>In this page doctor can record the new details of patient and send it to finance for making payment. <br>
                                                                                    If Patient needed to x-ray his/her tooth doctor can send his/her tooth details to the x-ray department.
                                                                            </div>
                                                                                <p >Note: In the prescription part doctor can give prescription to his/her patient</p>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-2">
                                                                            <div class="row" style="margin-top: 80px;" title="Click here on image to enlarge it">
                                                                                <div class="col-sm-12">
                                                                                    <button type="button" id="dpl" onclick="dPl()" onblur="DpL()" style="width: 145px;height:50px;border: none">
                                                                                        <img src="{{asset('img/dpl.JPG')}}" style="height: auto;width: 100%;">
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 80px;" title="Click here on image to enlarge it">
                                                                                <div class="col-sm-12">
                                                                                    <button type="button" id="dnal" onclick="Dnal()" onblur="dNal()" style="width: 145px;height:50px;border: none">
                                                                                        <img src="{{asset('img/dnal.JPG')}}" style="height: auto;width: 100%;">
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 60px;" title="Click here on image to enlarge it">
                                                                                <div class="col-sm-12">
                                                                                    <button type="button" id="dpr" onclick="Dpr()" onblur="dPr()" style="width: 145px;height:50px;border: none">
                                                                                        <img src="{{asset('img/dpr.JPG')}}" style="height: 108%;width: 100%;">
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 90px;" title="Click here on image to enlarge it">
                                                                                <div class="col-sm-12">
                                                                                    <button type="button" id="pasth" onclick="Pasth()" onblur="pasTh()"  style="width: 145px;height:50px;border: none">
                                                                                        <img src="{{asset('img/pasth.JPG')}}" style="height: 108%;width: 100%;">
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row" style="margin-top: 110px;" title="Click here on image to enlarge it">
                                                                                <div class="col-sm-12">
                                                                                    <button type="button" id="phistory" onclick="pHistory()" onblur="PHistory()" style="width: 145px;height:50px;border: none">
                                                                                        <img src="{{asset('img/phistory.JPG')}}" style="height: 108%;width: 100%;">
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{--End of Doctor Department--}}
                                                        {{--X-ray Department--}}
                                                        <div id="xray" class="tab-pane">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <h1 style="margin-left: 10px;">X-ray Page Information:</h1>
                                                                    <div class="col-sm-12"><p>From Department in sidebar by clicking on <b>X-Ray</b> X-ray page will appear.<br>
                                                                            This page contains two parts namely .</p>
                                                                        <ul>
                                                                            <li>New Patient</li>
                                                                            <li>Already Done</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-sm-10">
                                                                        <div class="row" style="margin-top: 50px;">
                                                                            <div class="col-sm-12">
                                                                                <h3>1-New Patient:</h3>In this page all the patients who have to take X-ray and have not taken yet will be listed.<br>
                                                                                Number of patients is displaied on top of the table , if there was not patient a text will appear to notify you.
                                                                                By clicking on <b>Details</b> button in  the last column , if patient had not paid X-ray fee you will receive an alert otherwise another page will apper.<br>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-top: 50px;">
                                                                            <div class="col-sm-12">
                                                                                <h4>X-ray Should be done here:</h4>In this page , when patient mad his/her payment for x-ray by changing X-ray status from
                                                                                <b><i>Not</i></b> to <b><i>Yes</i></b> Patient's details will disappear form <b><strong>New Patient</strong></b> list and will be added to <b><strong>Already Done</strong></b> list.<br>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-top: 50px;">
                                                                            <div class="col-sm-12">
                                                                                <h3>2-Already Done:</h3>In this page those patients whose X-ray is already taken and completed will be displayed.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <div class="row" style="margin-top: 80px;" title="Click here on image to enlarge it">
                                                                            <div class="col-sm-12">
                                                                                <button type="button" id="nxray" onclick="Nxray()" onblur="nXray()" style="width: 145px;height:50px;border: none">
                                                                                    <img src="{{asset('img/xray.JPG')}}" style="height: 108%;width: 100%;">
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-top: 80px;" title="Click here on image to enlarge it">
                                                                            <div class="col-sm-12">
                                                                                <button type="button" id="xstatus" onclick="Xstatus()" onblur="xStatus()" style="width: 145px;height:50px;border: none">
                                                                                    <img src="{{asset('img/xstatus.JPG')}}" style="height: 108%;width: 100%;">
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="margin-top: 60px;" title="Click here on image to enlarge it">
                                                                            <div class="col-sm-12">
                                                                                <button type="button" id="donx" onclick="Donx()" onblur="donX()" style="width: 145px;height:50px;border: none">
                                                                                    <img src="{{asset('img/donx.JPG')}}" style="height: 108%;width: 100%;">
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{--End of X-ray Department --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--End of Department Tab--}}
                            {{--Reception Tab--}}
                            <div id="reception" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12 text-center"><h2>Reception Information</h2><hr></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tabs-container">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#dregister"><img src="{{asset('img/doctors.PNG')}}" style="width:40px;height: 40px;margin-left: 10px"><br><span style="margin-left: 15px;">Doctor</span> <br> Registration</a></li>
                                                    <li><a data-toggle="tab" href="#pregister"><img src="{{asset('img/patient.PNG')}}" style="width:40px;height: 40px;margin-left: 11px"><br><span style="margin-left: 15px;">Patient</span> <br>Registration</a></li>
                                                    <li><a data-toggle="tab" href="#plist"><img src="{{asset('img/patient_list.PNG')}}" style="width:60px;height: 50px;margin-left: -6px"><br>Patient<br><span style="margin-left: 10px;">Lsit</span></a></li>
                                                    <li><a data-toggle="tab" href="#preport"><img src="{{asset('img/patient_report.PNG')}}" style="width:60px;height: 50px;margin-left: -5px"><br><span style="margin-left: 10px;">Patient</span><br><span style="margin-left: 10px;">Report</span></a></li>
                                                    <li><a data-toggle="tab" href="#presc"><img src="{{asset('img/prescription.PNG')}}" style="width:50px;height: 50px;margin-left: -5px"><br><span style="margin-left: -18px;">Prescription</span></a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    {{--Doctor Registration--}}
                                                    <div id="dregister" class="tab-pane active">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">Doctor Registration Page Information</h1>
                                                                <div class="col-sm-12">
                                                                    <p>From Sidebar by clicking on <strong><b>Doctro Registration</b></strong> a form will appear to you where you can register existing doctors or any new admited doctor.</p>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>Patient List:</h3> In this form you must insert doctor details like,Name,LastName,FatherName,Age,Department,
                                                                            Time of working ,gender,maximum,email,password for creating account for doctor to be able to use the app, patient that he/she can visit each day,type of salary,amount of salary..etc.<br>
                                                                            After saving it all details will be saved in the database.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="Click here on image to enlarge it">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="dreg" onclick="Dregister()" onblur="dRegister()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/drf.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Doctor Registration--}}
                                                    {{--Patient Registration--}}
                                                    <div id="pregister" class="tab-pane">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">Patient Registration Page Information</h1>
                                                                <div class="col-sm-12"><p>From Sidebar by clicking on <strong><b>Patient Registration</b></strong> in the reception part a form will appear to you where you can register patient. <br>
                                                                    This form consists of three parts or steps.</p>
                                                                    <ul>
                                                                        <li>Doctor Information</li>
                                                                        <li>Patient Personal Information</li>
                                                                        <li>Patient Health Problem</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>1-Doctor Information:</h3> In this form you can choose the doctor for the newcomer patients, the details of doctors in this form are as bellow.<br>
                                                                            Doctor name,period of time in which doctor is present in the clinic , maximum patient he can visit per day, number of patients which have already been registered for that doctor etc.
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>2-Patient Personal Information:</h3> In here patient's personal information should be inserted like name,last name,gender,phone number address etc.
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>3-Patient Health Problem:</h3> In here three things must be spicified.<br>
                                                                            <ul>
                                                                                <li>Prior Treatment for same tooth: Means if the same tooth has already been treated so it's file will be there for ease of process.</li>
                                                                                <li>Anesthetic Problem: Means whether the patient has allergy to anesthetic drugs or not.</li>
                                                                                <li>Other Health Problems: like diabets ,HIV...etc</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="Click here on image to enlarge it">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="preg1" onclick="Pregister1()" onblur="pRegister1()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/prf1.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 80px;" title="Click here on image to enlarge it">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="preg2" onclick="Pregister2()" onblur="pRegister2()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/prf2.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 80px;" title="Click here on image to enlarge it">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="preg3" onclick="Pregister3()" onblur="pRegister3()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/prf3.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Patient Registration --}}
                                                    {{--Patient List--}}
                                                    <div id="plist" class="tab-pane">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">Patient List Page Information:</h1>
                                                                <div class="col-sm-12"><p>From Reception in sidebar by clicking on <b>List of Patient</b> Patient list will appear.<br></p>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>List of Patient:</h3>In this page all the patients will be listed out in <strong>All Patient</strong> tab.<br>
                                                                            By clicking on doctor's name patients of that specified doctor will be shown.<br>
                                                                            Using top navigation bar you can register new patient, list new registered patient of the current day,previous patients having appointment for current day and those who had appointment for current day but had not come.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="Click here on image to enlarge it">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="pl" onclick="Plist()" onblur="pList()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/plist.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Patient List --}}
                                                    {{--Patient Report--}}
                                                    <div id="preport" class="tab-pane">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">Patient Report Page Information:</h1>
                                                                <div class="col-sm-12"><p>From Reception in sidebar by clicking on <b>Patient Report</b> Patient list will appear where you can get report of specific patient.<br></p>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>Patient Report:</h3> From table by clicking on the <strong>Print</strong> button you can print the report of specified patient.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="Click here on image to enlarge it">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="pr" onclick="Preport()" onblur="pReport()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/preport.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Patient Report --}}
                                                    {{--Prescription--}}
                                                    <div id="presc" class="tab-pane">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">Prescription Page Information:</h1>
                                                                <div class="col-sm-12"><p>From Reception in sidebar by clicking on <b>Prescription</b> list of prescription will appear.<br></p>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>Prescription:</h3> This tabel containing patient name , medicine, pattern of usage,number of days etc.<br>
                                                                            By clicking on <strong>Print</strong> button you can print the prescription of specified patient.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="Click here on image to enlarge it">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="pres" onclick="Prescription()" onblur="pRescription()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/prescription.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Prescription --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--End of Reception Tab--}}
                            {{--Finance Tab--}}
                            <div id="finance" class="tab-pane">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12 text-center"><h2>Finance Information</h2><hr></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tabs-container">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#expenditure"><img src="{{asset('img/expense_icon.PNG')}}" style="width:60px;height: 60px;margin-left: 20px"><br><span style="margin-left: 15px;">Expenditure</span></a></li>
                                                    <li><a data-toggle="tab" href="#income"><img src="{{asset('img/income_icon.PNG')}}" style="width:60px;height: 60px;margin-left: 11px"><br><span style="margin-left: 20px;">Income</span></a></li>
                                                    <li><a data-toggle="tab" href="#doctorha"><img src="{{asset('img/doctors.PNG')}}" style="width:60px;height: 60px;margin-left: -6px"><br>Doctors<br></a></li>
                                                    <li><a data-toggle="tab" href="#freport"><img src="{{asset('img/report_finance.PNG')}}" style="width:60px;height: 60px;margin-left: 20px"><br>Financial Report<br></a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    {{--Expenditure--}}
                                                    <div id="expenditure" class="tab-pane active">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">Expenditure Page Information</h1>
                                                                <div class="col-sm-12">
                                                                    <p>From Sidebar by clicking on <strong><b>Expenditure</b></strong> submenu of Finance a page will appear to you where you can see all the expenses taken place in the clinic.</p>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>Expenditure:</h3> In this page all the expenses that have taken place in the clinic will be listed out.<br>
                                                                            The categories are specified to whow for what purpose the money is expended.<br>
                                                                            From edit column you can edit the content of each record and also you can delete it .<br>
                                                                            The box in the topright of the page shows total expenses of the clinic.<br><br>
                                                                            <strong>Note:</strong> Using the topleft button you can add new expenses by filling out the form which will be appeared after clicking on the mentioned button.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="Click here on image to enlarge it">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="exp" onclick="Exp()" onblur="eXp()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/expenditure.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Expenditure--}}
                                                    {{--Income--}}
                                                    <div id="income" class="tab-pane">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">Income Page Information</h1>
                                                                <div class="col-sm-12"><p>From Sidebar by clicking on <strong><b>Income</b></strong> submenu of Finance income page will appear to you that contains three Categories that can be accessed through topnav buttons named as bellow. <br></p>
                                                                    <ul>
                                                                        <li>Patient Income</li>
                                                                        <li>X-ray Income</li>
                                                                        <li>Other Income</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>1-Patient Income:</h3> In this table all the patients will be listed which have been treated but not paid the treatment fee.<br>
                                                                            By clicking on <i>paid</i> button under Paid column a form will pop up where you can insert the amount of money that the patient is paying.<br>
                                                                            Under <i>P_Details</i> column you can see details of patient.<br>
                                                                            On the topright next to NavButtons you can see the total income of all categories.<br>
                                                                            In the topright of the table next to search box there is <i>Show Completed Patient</i> which take you to another table , containing those patients that have paid the treatment fee completely.<br>
                                                                            At that table in the same position there is <i>Show Loan Patient</i> which take you back to the first page.
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>2-X-ray Income:</h3> In this table all the patients will be listed which have been sent for X-ray but not paid the x-ray fee.<br>
                                                                            By clicking on <i>paid</i> button under Paid column a form will pop up where you can insert the amount of money that the patient is paying.<br>
                                                                            Under <i>P_Details</i> column you can see details of patient.<br>
                                                                            In the topright of the table next to search box there is <i>Show Completed X-ray</i> which take you to another table , containing those patients that have paid the X-ray fee completely.<br>
                                                                            At that table in the same position there is <i>Show Incompleted X-ray</i> which take you back to the first page.
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>3-Other Income:</h3> In this table those income will be listed out which have been received from other than the patients and x-ray for example from some institute, bank, organization etc.<br>
                                                                            If you wanted to insert new other expense press the button <i>Add New Income</i> on the topright of the table next to the search box.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="Click here on image to enlarge it">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="pin" onclick="Pin()" onblur="pIn()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/pincome.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 180px;" title="Click here on image to enlarge it">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="xin" onclick="Xin()" onblur="xIn()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/xincome.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 120px;" title="Click here on image to enlarge it">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="oin" onclick="Oin()" onblur="oIn()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/oincome.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Income --}}
                                                    {{--Doctor--}}
                                                    <div id="doctorha" class="tab-pane">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <h1 style="margin-left: 10px;">Doctor Page Information:</h1>
                                                                <div class="col-sm-12"><p>Under Finance in sidebar by clicking on <b>Doctors</b> Doctors table will be displayed.<br></p>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>Doctor List:</h3>By clicking on <b><i>Doctor Salary</i></b> button at the topleft of the page another table will appear
                                                                            that shows doctor's salary that you can understand whos salary is paid and when it paid? how much is left?..etc.<br>
                                                                            In doctor salary page at the topleft there is <i><b>Doctor List</b></i> button which take you back to doctor list.<br>
                                                                            In the doctor list table there is <i><b>PaySalary</b></i> button at the last column of the table that take you where you cna pay doctor's Salary.<br>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 50px;">
                                                                        <div class="col-sm-12">
                                                                            <h3>Salary Payment Page:</h3>By clicking on <b><i>PaySalary</i></b> button at the last column of the table another page will appear
                                                                            that shows doctor's salary type,amount,past remaining...etc.<br>
                                                                            Doctor salary whether it is fix or percentage, will be computed automatically and be displayed at the end of table in small form,based on that you can enter the amount of money that you want to pay to doctor.<br>
                                                                            The last date, when doctor had received salary will be displayed on top of payment box.<br>
                                                                            At the top of table there is date range where you can choose the range of time , between which you are going to pay doctor salary.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="row" style="margin-top: 80px;" title="Click here on image to enlarge it">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="dsp" onclick="Dsp()" onblur="dSp()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/dlist.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top: 100px;" title="Click here on image to enlarge it">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" id="spp" onclick="Spp()" onblur="sPp()" style="width: 145px;height:50px;border: none">
                                                                                <img src="{{asset('img/scomput.JPG')}}" style="height: 108%;width: 100%;">
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--End of Doctor --}}
                                                    {{--Financial Report--}}
                                                    <div id="freport" class="tab-pane">
                                                        <div class="panel-body">

                                                        </div>
                                                    </div>
                                                    {{--End of Financial Report --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--End of finance Tab--}}
                            {{--Setting Tab--}}
                            <div id="setting" class="tab-pane">
                                <div class="panel-body">
                                    <strong>This is setting tab</strong>
                                </div>
                            </div>
                            {{--End of setting Tab--}}
                            {{--Contact Tab--}}
                            <div id="contact" class="tab-pane">
                                <div class="panel-body">
                                    <strong>This is contact tab</strong>
                                </div>
                            </div>
                            {{--End of Contact Tab--}}
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    {{--DashBoard--}}
    <script>
        function fullSize() {
            document.getElementById('dash').style.transform="translate(-435px,70px) scale(7.5,8.4)";
        }
        function backToSmall() {
            document.getElementById('dash').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    {{--End of DashBoard--}}
    {{--Doctor Department--}}
    <script>
        function dPl() {
            document.getElementById('dpl').style.position="relative";
            document.getElementById('dpl').style.zIndex="1";
            document.getElementById('dpl').style.transform="translate(-415px,70px) scale(7.1,8.4)";
        }
        function DpL() {
            document.getElementById('dpl').style.zIndex="0";
            document.getElementById('dpl').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Dnal() {
            document.getElementById('dnal').style.position="relative";
            document.getElementById('dnal').style.zIndex="1";
            document.getElementById('dnal').style.transform="translate(-415px,70px) scale(7.1,8.4)";
        }
        function dNal() {
            document.getElementById('dnal').style.zIndex="0";
            document.getElementById('dnal').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Dpr() {
            document.getElementById('dpr').style.position="relative";
            document.getElementById('dpr').style.zIndex="1";
            document.getElementById('dpr').style.transform="translate(-415px,70px) scale(7.1,8.4)";
        }
        function dPr() {
            document.getElementById('dpr').style.zIndex="0";
            document.getElementById('dpr').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Pasth() {
            document.getElementById('pasth').style.position="relative";
            document.getElementById('pasth').style.zIndex="1";
            document.getElementById('pasth').style.transform="translate(-415px) scale(7.1,8.4)";
        }
        function pasTh() {
            document.getElementById('pasth').style.zIndex="0";
            document.getElementById('pasth').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function pHistory() {
            document.getElementById('phistory').style.position="relative";
            document.getElementById('phistory').style.zIndex="1";
            document.getElementById('phistory').style.transform="translate(-415px,-100px) scale(7.1,8.4)";
        }
        function PHistory() {
            document.getElementById('phistory').style.zIndex="0";
            document.getElementById('phistory').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    {{--End of Doctor Department--}}
    {{--X-ray Department--}}
    <script>
        function Nxray() {
            document.getElementById('nxray').style.position="relative";
            document.getElementById('nxray').style.zIndex="1";
            document.getElementById('nxray').style.transform="translate(-415px,30px) scale(7.1,8.4)";
        }
        function nXray() {
            document.getElementById('nxray').style.zIndex="0";
            document.getElementById('nxray').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Xstatus() {
            document.getElementById('xstatus').style.position="relative";
            document.getElementById('xstatus').style.zIndex="1";
            document.getElementById('xstatus').style.transform="translate(-415px,-100px) scale(7.1,8.4)";
        }
        function xStatus() {
            document.getElementById('xstatus').style.zIndex="0";
            document.getElementById('xstatus').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Donx() {
            document.getElementById('donx').style.position="relative";
            document.getElementById('donx').style.zIndex="1";
            document.getElementById('donx').style.transform="translate(-415px,-100px) scale(7.1,8.4)";
        }
        function donX() {
            document.getElementById('donx').style.zIndex="0";
            document.getElementById('donx').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    {{--End of X-ray Department--}}
    {{--Reception--}}
    <script>
        function Dregister() {
            document.getElementById('dreg').style.position="relative";
            document.getElementById('dreg').style.zIndex="1";
            document.getElementById('dreg').style.transform="translate(-415px,-100px) scale(7.1,8.4)";
        }
        function dRegister() {
            document.getElementById('dreg').style.zIndex="0";
            document.getElementById('dreg').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Pregister1() {
            document.getElementById('preg1').style.position="relative";
            document.getElementById('preg1').style.zIndex="1";
            document.getElementById('preg1').style.transform="translate(-415px,50px) scale(7.1,8.4)";
        }
        function pRegister1() {
            document.getElementById('preg1').style.zIndex="0";
            document.getElementById('preg1').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Pregister2() {
            document.getElementById('preg2').style.position="relative";
            document.getElementById('preg2').style.zIndex="1";
            document.getElementById('preg2').style.transform="translate(-415px,10px) scale(7.1,8.4)";
        }
        function pRegister2() {
            document.getElementById('preg2').style.zIndex="0";
            document.getElementById('preg2').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Pregister3() {
            document.getElementById('preg3').style.position="relative";
            document.getElementById('preg3').style.zIndex="1";
            document.getElementById('preg3').style.transform="translate(-415px,-130px) scale(7.1,8.4)";
        }
        function pRegister3() {
            document.getElementById('preg3').style.zIndex="0";
            document.getElementById('preg3').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Plist() {
            document.getElementById('pl').style.position="relative";
            document.getElementById('pl').style.zIndex="1";
            document.getElementById('pl').style.transform="translate(-415px,-130px) scale(7.1,8.4)";
        }
        function pList() {
            document.getElementById('pl').style.zIndex="0";
            document.getElementById('pl').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Preport() {
            document.getElementById('pr').style.position="relative";
            document.getElementById('pr').style.zIndex="1";
            document.getElementById('pr').style.transform="translate(-415px,-130px) scale(7.1,8.4)";
        }
        function pReport() {
            document.getElementById('pr').style.zIndex="0";
            document.getElementById('pr').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Prescription() {
            document.getElementById('pres').style.position="relative";
            document.getElementById('pres').style.zIndex="1";
            document.getElementById('pres').style.transform="translate(-415px,-130px) scale(7.1,8.4)";
        }
        function pRescription() {
            document.getElementById('pres').style.zIndex="0";
            document.getElementById('pres').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    {{--End of Reception--}}
    {{--Finance--}}
    <script>
        function Exp() {
            document.getElementById('exp').style.position="relative";
            document.getElementById('exp').style.zIndex="1";
            document.getElementById('exp').style.transform="translate(-415px,-130px) scale(7.1,8.4)";
        }
        function eXp() {
            document.getElementById('exp').style.zIndex="0";
            document.getElementById('exp').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Pin() {
            document.getElementById('pin').style.position="relative";
            document.getElementById('pin').style.zIndex="1";
            document.getElementById('pin').style.transform="translate(-415px,20px) scale(7.1,8.4)";
        }
        function pIn() {
            document.getElementById('pin').style.zIndex="0";
            document.getElementById('pin').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Xin() {
            document.getElementById('xin').style.position="relative";
            document.getElementById('xin').style.zIndex="1";
            document.getElementById('xin').style.transform="translate(-415px,-130px) scale(7.1,8.4)";
        }
        function xIn() {
            document.getElementById('xin').style.zIndex="0";
            document.getElementById('xin').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Oin() {
            document.getElementById('oin').style.position="relative";
            document.getElementById('oin').style.zIndex="1";
            document.getElementById('oin').style.transform="translate(-415px,-130px) scale(7.1,8.4)";
        }
        function oIn() {
            document.getElementById('oin').style.zIndex="0";
            document.getElementById('oin').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Dsp() {
            document.getElementById('dsp').style.position="relative";
            document.getElementById('dsp').style.zIndex="1";
            document.getElementById('dsp').style.transform="translate(-415px,30px) scale(7.1,8.4)";
        }
        function dSp() {
            document.getElementById('dsp').style.zIndex="0";
            document.getElementById('dsp').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    <script>
        function Spp() {
            document.getElementById('spp').style.position="relative";
            document.getElementById('spp').style.zIndex="1";
            document.getElementById('spp').style.transform="translate(-415px,-130px) scale(7,9.9)";
        }
        function sPp() {
            document.getElementById('spp').style.zIndex="0";
            document.getElementById('spp').style.transform="translate(0px,0px) scale(1,1)";
        }
    </script>
    {{--End of Finance--}}


@stop

@extends('GeneralMaster')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h2 style="background-color:maroon;color:white;text-align:center;">Registration</h2>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-2"></div>
            <form action="/Home/Registration" method="post" enctype="multipart/form-data">
                <div class="col-sm-4">
                    <label>Witnes Name :</label>
                    <input type="text" class="form-control" placeholder="Please Enter Your Name" name="txtname" />
                    <label>Father's Name :</label>
                    <input type="text" class="form-control" placeholder="Please Enter Your Father's Name" name="txtfname" />
                    <label>Mother Name :</label>
                    <input type="text" class="form-control" placeholder="Please Enter Your Mother Name" name="txtmname" />
                    <label> Gender :</label><br />
                    <select style="width:100%;height:34px;">
                        <option placeholder="Please select your Gender">Please select your Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select><br />
                    <label> Mobile :</label>
                    <input type="text" class="form-control" placeholder="Please Enter Your Mobile Number" name="txtmob" />
                    <label>Email :</label>
                    <input type="text" class="form-control" placeholder="Please Enter Your Email" name="txtemail" />
                    
                    <br />
                    <input type="reset" class="form-control btn-danger" />
                </div>
                <div class="col-sm-4">
                    <label>Aadhar Number :</label>
                    <input type="text" class="form-control" placeholder="Please Enter Your Aadhar Number" name="txtaadhar" />
                    <label>Pin Code:</label>
                    <input type="text" class="form-control" placeholder="Please Enter Pin code" />
                    <br />
                    <label>Address :</label><br />
                    <textarea placeholder="Please Enter Your Address " style="height:72px;width:470px;"></textarea>
                    <br />
                    <label>Password :</label>
                    <input type="text" class="form-control" placeholder="Please Enter Password" name="txtpass" />
                    <label>Confirm Password :</label>
                    <input type="text" class="form-control" placeholder="Please Enter Confirm Password" name="txtcpass" />
                    <br />
                    <input type="submit" class="form-control btn-primary" />
                </div>
            </form>
            <div class="col-sm-2"></div>
        </div>
    </div>
</div>

@endsection()
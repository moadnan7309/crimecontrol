@extends('GeneralMaster')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h2 style="background-color:maroon;color:white;text-align:center;">Contact Us</h2>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12" style="margin-top:50px;">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="/Home/Login" method="post">
                    <label>Email :</label>
                    <input type="text" class="form-control" placeholder="Please Enter Email" name="txtemail" />
                    <label>Contact Number :</label>
                    <input type="text" class="form-control" placeholder="Please Enter Contact Number" name="txtpass" />
                    <label>Location :</label>
                    <input type="text" class="form-control" placeholder="Please Enter Location" name="txtpass" /><br />
                    <input type="submit" class="form-control btn-primary" />
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</div>
@endsection()
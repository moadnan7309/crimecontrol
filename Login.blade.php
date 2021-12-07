@extends('GeneralMaster')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h2 style="background-color:maroon;color:white;text-align:center;">Login</h2>
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
                    <label>User Id :</label>
                    <input type="text" class="form-control" placeholder="Please Enter User Id" name="txtemail" />
                    <label>Password :</label>
                    <input type="text" class="form-control" placeholder="Please Enter Password" name="txtpass" /><br />
                    <input type="submit" class="form-control btn-primary" />
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</div>
@endsection()
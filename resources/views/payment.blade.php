@extends('layouts.app')
@section('content')

    <form method="POST" action="/pay">
        @csrf
        <div class="form-group">
            <label for="cc_name">ชื่อผู้ถือบัตร</label>
            <input type="text"  name="name" >
            <label for="cc_name">นามสกุลผู้ถือ</label>
            <input type="text"  name="lastname" >
        </div>
        <div class="form-group">
            <label>หมายเลขบัตร</label>
            <input type="text"  name="creditID">
        </div>
        <div class="form-group row">
            <label class="col-md-12">บัตรหมดอายุ</label>
            <div class="col-md-4">
                <select class="form-control" name="cc_exp_mo" size="0">
                    <option      value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-control" name="cc_exp_yr" size="0">
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                </select>
            </div>
            <div class="col-md-4">
                <input type="text"  name = "cvv">
            </div>
        </div>



        <hr>
        <div class="form-group row">
            <div class="col-md-6">
                <button type="reset" class="btn btn-default btn-lg btn-block">Cancel</button>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success btn-lg  btn-block">Submit</button>
            </div>
        </div>
    </form>
    </div>
    </div>
@endsection
<!-- /form card cc payment -->

<!--<p class="copyright" style="text-align:center;padding:40px 0;">Developed by <a href="https://uny.ro">UNY WEB DESIGN</a></p>-->
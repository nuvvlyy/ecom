<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = "orders";
    protected $fillable = [
        'order_id','user_id','labor','product','start_county','start_zone','namestart','date_start','telstart','destination_county','destination_zone','namedestination','teldestination','date_destination'
    ];
    public $timestamps = true;
}

/*@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="form-group row">
            <label for="labor" class="col-md-4 col-form-label text-md-right">{{ __('แรงงานยกสินค้า') }}</label>
            <div class="col-md-6">
                <input id="labor" style="width: 45px" type=text" class="labor form-control{{ $errors->has('labor') ? ' is-invalid' : '' }}" name="labor" value="0"  required>
            </div>
        </div>

        <div class="form-group row">
            <label for="car" class="col-md-4 col-form-label text-md-right">{{ __('ชนิดรถบรรทุก') }}</label>
            <div class="col-md-6">
                <input id="car"  type=text" class="car form-control{{ $errors->has('car') ? ' is-invalid' : '' }}" name="car" disabled >
            </div>
        </div>

        <div class="form-group row">
            <label for="product" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทสินค้า ') }}</label>
            <div class="col-md-6">
                <select class="form-control" name="product" id="product" required>
                    <option selected disabled >โปรดเลือก</option>
                    <option value="1" >สินค้ายานยนต์ เช่น น้ำมันใส น้ำมันเครื่อง ยางรถยนต์ แบตเตอรี่ และ อื่น ๆ</option>
                    <option value="2" >สินค้าอาหาร และ เครื่องดื่ม (ไม่ต้องควบคุมอุณหภูมิ)</option>
                    <option value="3" >สินค้าอาหาร และ เครื่องดื่ม (ควบคุมอุณหภูมิ)</option>
                    <option value="4">สินค้าเกษตร เช่น ข้าวสาร น้ำตาล แป้ง ยางพารา และ อื่น ๆ</option>PRIMARY
                    <option value="5">สินค้าเคมีภัณฑ์ เช่น เม็ดพลาสติก</option>
                    <option value="6">สสินค้าแร่ และ พลังงาน เช่น ถ่านหิน แร่ต่าง ๆ</option>
                    <option value="7">สสินค้าวัสดุก่อสร้าง เช่น ปูน เหล็ก กระเบื้อง สุขภัณฑ์</option>
                    <option value="8">สินค้าเกษตร เช่น ข้าวสาร น้ำตาล แป้ง ยางพารา และ อื่น ๆ</option>
                    <option value="9">สสินค้ากระดาษ บรรจุภัณฑ์ เช่น กระดาษม้วน กระดาษลัง</option>
                    <option value="10">สินค้าอุปโภค บริโภค หรือ FMCG</option>
                </select>

                @if ($errors->has('product'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="start" class="col-md-4 col-form-label text-md-right">{{ __('ต้นทาง') }}<p>(กรุณาระบุจังหวัด และ อำเภอ)</p></label>
            <div class="col-md-6">
                <input id="start" type="text" class="form-control from_places" name="start" required >
            </div>
        </div>

        <div class="form-group row">
            <label for="ชื่อผู้ติดต่อ" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อผู้ติดต่อ') }}</label>
            <div class="col-md-6">
                <input id="namestart" type="text" class="form-control" name="namestart" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="destination" class="col-md-4 col-form-label text-md-right">{{ __('ปลายทาง') }}<p>(กรุณาระบุจังหวัด และ อำเภอ)</p></label>
            <div class="col-md-6">
                <input id="destination" type="text" class="form-control to_places" name="destination" required disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="ชื่อผู้ติดต่อ" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อผู้ติดต่อ') }}</label>
            <div class="col-md-6">
                <input id="namedestination" type="text" class="form-control" name="namedestination" required>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button class="btn btn-primary" type="submit" value="Submit">{{ __('submit') }}</button>

            </div>
        </div>
        <div class="form-group row">
            <label for="labor" class="col-md-4 col-form-label text-md-right">{{ __('แรงงานยกสินค้า') }}</label>
            <div class="col-md-6">
                <input id="labor" style="width: 45px" type=text" class="labor form-control{{ $errors->has('labor') ? ' is-invalid' : '' }}" name="labor" value="0"  required>
            </div>
        </div>

        <div class="form-group row">
            <label for="car" class="col-md-4 col-form-label text-md-right">{{ __('ชนิดรถบรรทุก') }}</label>
            <div class="col-md-6">
                <input id="car"  type=text" class="car form-control{{ $errors->has('car') ? ' is-invalid' : '' }}" name="car" disabled >
            </div>
        </div>

        <div class="form-group row">
            <label for="product" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทสินค้า ') }}</label>
            <div class="col-md-6">
                <select class="form-control" name="product" id="product" required>
                    <option selected disabled >โปรดเลือก</option>
                    <option value="1" >สินค้ายานยนต์ เช่น น้ำมันใส น้ำมันเครื่อง ยางรถยนต์ แบตเตอรี่ และ อื่น ๆ</option>
                    <option value="2" >สินค้าอาหาร และ เครื่องดื่ม (ไม่ต้องควบคุมอุณหภูมิ)</option>
                    <option value="3" >สินค้าอาหาร และ เครื่องดื่ม (ควบคุมอุณหภูมิ)</option>
                    <option value="4">สินค้าเกษตร เช่น ข้าวสาร น้ำตาล แป้ง ยางพารา และ อื่น ๆ</option>PRIMARY
                    <option value="5">สินค้าเคมีภัณฑ์ เช่น เม็ดพลาสติก</option>
                    <option value="6">สสินค้าแร่ และ พลังงาน เช่น ถ่านหิน แร่ต่าง ๆ</option>
                    <option value="7">สสินค้าวัสดุก่อสร้าง เช่น ปูน เหล็ก กระเบื้อง สุขภัณฑ์</option>
                    <option value="8">สินค้าเกษตร เช่น ข้าวสาร น้ำตาล แป้ง ยางพารา และ อื่น ๆ</option>
                    <option value="9">สสินค้ากระดาษ บรรจุภัณฑ์ เช่น กระดาษม้วน กระดาษลัง</option>
                    <option value="10">สินค้าอุปโภค บริโภค หรือ FMCG</option>
                </select>

                @if ($errors->has('product'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="start" class="col-md-4 col-form-label text-md-right">{{ __('ต้นทาง') }}<p>(กรุณาระบุจังหวัด และ อำเภอ)</p></label>
            <div class="col-md-6">
                <input id="start" type="text" class="form-control from_places" name="start" required >
            </div>
        </div>

        <div class="form-group row">
            <label for="ชื่อผู้ติดต่อ" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อผู้ติดต่อ') }}</label>
            <div class="col-md-6">
                <input id="namestart" type="text" class="form-control" name="namestart" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="destination" class="col-md-4 col-form-label text-md-right">{{ __('ปลายทาง') }}<p>(กรุณาระบุจังหวัด และ อำเภอ)</p></label>
            <div class="col-md-6">
                <input id="destination" type="text" class="form-control to_places" name="destination" required disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="ชื่อผู้ติดต่อ" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อผู้ติดต่อ') }}</label>
            <div class="col-md-6">
                <input id="namedestination" type="text" class="form-control" name="namedestination" required>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button class="btn btn-primary" type="submit" value="Submit">{{ __('submit') }}</button>

            </div>
        </div>

    </div>
    </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-6 col-md-offset-3">
            <div class="col-md-12">
                <h3> Step 3</h3>
                <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
                <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
            </div>
        </div>
    </div>
    </form>

    </div>
    </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-6 col-md-offset-3">
            <div class="col-md-12">
                <h3> Step 3</h3>
                <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
                <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
            </div>
        </div>
    </div>
    </form>
        <div class="row"><form role="form" action="" method="post">
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-6 col-md-offset-3">
                        <div class="col-md-12">
                            <h3> Step 1</h3>

                            <div class="container">
                                <div class="row m-5">
                                    <div class="col-10 border">

                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="nameoforcompany" class="col-md-4 col-form-label text-md-left">{{ __('ชื่อบริษัท') }}</label>
                                                <input id="nameoforcompany"  type=text" class="labor form-control{{ $errors->has('nameoforcompany') ? ' is-invalid' : '' }}" name="nameoforcompany" value="0"  required >

                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="idoftax" class="col-md-10 col-form-label text-md-left">{{ __('เลขประจำตัวผู้เสียภาษีอากร') }}</label>
                                                <input id="idoftax"  type="text" class="labor form-control{{ $errors->has('idoftax') ? ' is-invalid' : '' }}" name="idoftax" value="0"  required >
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="field" class="col-md-10 col-form-label text-md-left">{{ __('สาขา') }}</label>
                                                <input id="field"  type="text" class="labor form-control{{ $errors->has('field') ? ' is-invalid' : '' }}" name="field"   required >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-10">
                                                <label for="addressofcom" class="col-md-10 col-form-label text-md-left">{{ __('ที่อยู่บริษัท') }}</label>
                                                <input id="addressofcom"  type="text" class="labor form-control{{ $errors->has('addressofcom') ? ' is-invalid' : '' }}" name="addressofcom"  value="ไทย" required >
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="zipcode" class="col-md-10 col-form-label text-md-left">{{ __('สาขา') }}</label>
                                                <input id="zipcode"  type="text" class="labor form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}" name="zipcode"   required >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="country" class="col-md-10 col-form-label text-md-left">{{ __('ประเทศ') }}</label>
                                                <input id="country"  type="text" class="labor form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country"   required >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="city" class="col-md-10 col-form-label text-md-left">{{ __('จังหวัด') }}</label>
                                                <input id="city"  type="text" class="labor form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city"   required >
                                            </div>
                                            {{--<div class="form-group col-md-4">--}}
                                            {{--<label for="inputState">State</label>--}}
                                            {{--<select id="inputState" class="form-control">--}}
                                            {{--<option selected>Choose...</option>--}}
                                            {{--<option>...</option>--}}
                                            {{--</select>--}}
                                            {{--</div>--}}

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="zone" class="col-md-10 col-form-label text-md-left">{{ __('เขต/อำเภอ') }}</label>
                                                <input id="zone"  type="text" class="labor form-control{{ $errors->has('zone') ? ' is-invalid' : '' }}" name="zone"   required >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tel" class="col-md-10 col-form-label text-md-left">{{ __('เบอร์โทรศัพท์') }}</label>
                                                <input id="tel"  type="text" class="labor form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel"   required >
                                            </div>
                                        </div>
                                        {{--<div class="form-group">--}}
                                        {{--<div class="form-check">--}}
                                        {{--<input class="form-check-input" type="checkbox" id="gridCheck">--}}
                                        {{--<label class="form-check-label" for="gridCheck">--}}
                                        {{--Check me out--}}
                                        {{--</label>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        <button type="submit" class="btn btn-primary">Sign in</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-6 col-md-offset-3">
                        <div class="col-md-12">
                            <h3> Step 2</h3>
                           </div>


    </div>
@endsection

@section('scripttype')
<script>
    $(document).ready(function () {
        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn'),
            allPrevBtn = $('.prevBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allPrevBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

            prevStepWizard.removeAttr('disabled').trigger('click');
        });

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script>
@endsection

@section('styletypewhell')
    <style>
        .stepwizard-step p {
            margin-top: 10px;
        }
        .stepwizard-row {
            display: table-row;
        }
        .stepwizard {
            display: table;
            width: 50%;
            position: relative;
        }
        .stepwizard-step button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }
        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-order: 0;
        }
        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }
        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }
    </style>

@endsection*/
@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">

    <form>

    <div class="form-group row">
        <label for="labor" class="col-md-4 col-form-label text-md-right">{{ __('แรงงานยกสินค้า') }}</label>
        <div class="col-md-6">
            <input id="labor" style="width: 60px" type="number" class="labor form-control{{ $errors->has('labor') ? ' is-invalid' : '' }}" name="labor" value="0"  required >
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
        <div class="col-6 ">
        <label for="start_county" class="col-md-4 col-form-label text-md-right">{{ __('ต้นทาง') }}<p>อำเภอ</p></label>
            <input id="start_county" type="text" class="form-control" name="start_county" required >

            <label for="start_zone" class="col-md-4 col-form-label text-md-right">{{ __('จังหวัด') }}</label>
              <input id="start_zone" type="text" class="form-control" name="start_zone" required >
            </div>
        </div>

    <div class="form-group row">
        <label for="ชื่อผู้ติดต่อ" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อผู้ติดต่อ') }}</label>
        <div class="col-md-6">
            <input id="telstart" type="text" class="form-control" name="telstart" required>
        </div>
    </div>
        <div class="form-group row">
            <label for="date_start" class="col-md-4 col-form-label text-md-right">{{ __('วันที่') }}</label>
            <div class="col-md-6">
                <input id="date_start" type="date" class="form-control" name="date_start" required>
            </div>
        </div>

    <div class="form-group row">

        <div class="col-6 ">
            <label for="destination_county" class="col-md-4 col-form-label text-md-right">{{ __('ปลายทาง') }}<p>อำเภอ</p></label>
            <input id="destination_county" type="text" class="form-control" name="destination_county" required >

            <label for="destination_zone" class="col-md-4 col-form-label text-md-right">{{ __('จังหวัด') }}</label>
            <input id="destination_zone" type="text" class="form-control" name="destination_zone" required >
        </div>
        </div>

    <div class="form-group row">
        <label for="ชteldestination" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อผู้ติดต่อ') }}</label>
        <div class="col-md-6">
            <input id="teldestination" type="text" class="form-control" name="teldestination" required>
        </div>
    </div>
        <div class="form-group row">
            <label for="date_start" class="col-md-4 col-form-label text-md-right">{{ __('วันที่') }}</label>
            <div class="col-md-6">
                <input id="date_start" type="date" class="form-control" name="date_start" required>
            </div>
        </div>
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button class="btn btn-primary" type="submit" value="Submit">{{ __('submit') }}</button>

        </div>
    </div>

</form>
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

@endsection
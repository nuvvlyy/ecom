@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 30px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="padding-right:30px; padding-left:30px; padding-bottom:30px;">
                    <h4 style="margin-top: 30px;"><b>ใบเสนอราคา</b></h4>
                    <div class="card-body">
                        <form method="POST" action="/People">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="wide" class="col-md-12 col-form-label text-md-right">{{ __('แรงงานยกสินค้า') }}</label>
                                    <input id="wide" type="text" class="form-control" name="wide" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="product" class="col-md-10 col-form-label text-md-right" >{{ __('ประเภทสินค้า ') }}</label>
                                    <select class="form-control " name="product" id="product" required>
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
                                </div>
                                <div class="col-md-3">
                                    <label for="wide" class="col-md-10 col-form-label text-md-left">วันที่ส่ง</label>
                                    <input id="wide" type="date" class="form-control" name="wide" required>
                                </div>
                            </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="wide" class="col-md-10 col-form-label text-md-left">{{ __('ต้นทาง') }}:อำเภอ</label>
                            <input id="wide" type="text" class="form-control" name="wide" required>
                        </div>
                        <div class="col-md-3">
                            <label for="long" class="col-md-10 col-form-label text-md-left">{{ __('จังหวัด') }}</label>
                            <input id="long" type="text" class="form-control" name="long" required>
                        </div>
                        <div class="col-md-3">
                            <label for="high" class="col-md-10 col-form-label text-md-left">{{ __('ชื่อผู้ติดต่อ') }}</label>
                            <input id="high" type="text" class="form-control" name="high" required>
                        </div>
                        <div class="col-md-3">
                            <label for="weight" class="col-md-10 col-form-label text-md-left">{{ __('เบอร์โทรศัพท์') }}</label>
                            <input id="weight" type="text" class="form-control" name="weight" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="wide" class="col-md-12 col-form-label text-md-left">{{ __('ปลายทาง') }}:อำเภอ</label>
                            <input id="wide" type="text" class="form-control" name="wide" required>
                        </div>
                        <div class="col-md-3">
                            <label for="long" class="col-md-10 col-form-label text-md-left">{{ __('จังหวัด') }}</label>
                            <input id="long" type="text" class="form-control" name="long" required>
                        </div>
                        <div class="col-md-3">
                            <label for="high" class="col-md-10 col-form-label text-md-left">{{ __('ชื่อผู้ติดต่อ') }}</label>
                            <input id="high" type="text" class="form-control" name="high" required>
                        </div>
                        <div class="col-md-3">
                            <label for="weight" class="col-md-10 col-form-label text-md-left">{{ __('เบอร์โทรศัพท์') }}</label>
                            <input id="weight" type="text" class="form-control" name="weight" required>
                        </div>
                    </div>        <div class="form-group row">
                        <div class="col-md-3">
                            <label for="weight" class="col-md-10 col-form-label text-md-right">{{ __('น้ำหนัก') }}</label>
                            <input id="weight" type="text" class="form-control" name="weight" required>
                        </div>
                        <div class="col-md-3">
                            <label for="wide" class="col-md-6 col-form-label text-md-right">{{ __('กว้าง') }}</label>
                            <input id="wide" type="text" class="form-control" name="wide" required>
                        </div>
                        <div class="col-md-3">
                            <label for="long" class="col-md-6 col-form-label text-md-right">{{ __('ยาว') }}</label>
                            <input id="long" type="text" class="form-control" name="long" required>
                        </div>
                        <div class="col-md-3">
                            <label for="high" class="col-md-6 col-form-label text-md-right">{{ __('สูง') }}</label>
                            <input id="high" type="text" class="form-control" name="high" required>
                        </div>
                    </div>
                    {{--'weight','wide','long','high'--}}
                    {{--submit--}}
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button class="btn btn-primary" type="submit" value="Submit">{{ __('submit') }}</button>

                        </div>
                    </div>
                    {{--submit--}}
                    </form>
                </div>
            </div>
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

@endsection
@extends('layouts.app')
@section('content')
    <div class = "container">
        <form  method="POST"  action="/update_order">
            @csrf
            <label>  order_id </label> <br>
            <input  type="text" name="order_id" size ="80">
            <br>
            <label>user_id</label><br>
            <input   type="text" name="user_id"size ="80" >
            <br>

            <label for="type_car">ชนิดรถบรรทุก:</label><br>
            <select  id="type" name="type" >
                <option>กระบะ 4 ล้อหลังคาตู้ทึบควบคุมอุณหภูมิสินค้า</option>
                <option>กระบะ 4 ล้อตะแกรงเหล็ก</option>
                <option>กระบะ 4 ล้อหลังคาคู้ทึบ</option>
                <option>บรรทุก 6 ล้อคอนเทนเนอร์</option>
                <option>บรรทุก 6 ล้อตะแกรงไม้</option>
            </select>
            <br>

            <label>  ราคา</label><br>
            <input   type="text" name="price" size ="80">
            <br>
            <br>
            <input  type="submit" value="Submit">
        </form>
    </div>

@endsection

<!-- HOMEWORK 5 Author : Miss Duangkamon Lueariyasap ID : 65160219 SEC : 1 */ -->
@extends('layouts.HW5_dafault')

@section('title', 'Form')

@section('form')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Workshop #HTML - FORM</h1>
            </div>
        </div>
    </div>
</section>
<div class="card card-primary">
    <div class="card-header bg-blue text-white border-0">
        <h3 class="card-title">ข้อมูลทั่วไป</h3>
    </div>
    <form>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>ชื่อ</label>
                        <div>
                            <input type="text" style="width:450px" placeholder="กรอกชื่อ">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>นามสกุล</label>
                        <div>
                            <input type="text" style="width:450px" placeholder="กรอกนามสกุล">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>วัน/เดือน/ปีเกิด</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleInputYear">อายุ</label>
                        <div>
                            <input type="text" style="width:137px" placeholder="กรอกอายุ">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>เพศ</label>
                    <div class="form-check">
                        <input type="radio" name="radio_gender" checked>
                        <label>ชาย </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="radio_gender" checked>
                        <label>หญิง </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                <div class="form-group">
                    <label for="exampleInputFile">รูป</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">เลือกไฟล์</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text ">อัปโหลด</span>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>ที่อยู่</label>
                    <div><textarea rows ="4" cols="40" placeholder="กรอกที่อยู่"></textarea></div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>สีที่ชอบ</label>
                    <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">เลือกสีที่ชอบ</option>
                    <option>สีแดง</option>
                    <option>สีชมพู</option>
                    <option>สีส้ม</option>
                    <option>สีเหลือง</option>
                    <option>สีเขียว</option>
                    <option>สีฟ้า</option>
                    <option>สีน้ำเงิน</option>
                    <option>สีม่วง</option>
                    <option>สีดำ</option>
                    <option>สีน้ำตาล</option>
                    <option>สีเทา</option>
                    <option>สีขาว</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>แนวเพลงที่ชอบ</label>
                    <div>
                        <div class="form-check">
                        <input type="radio" name="radio_music" checked>
                        <label>เพื่อชีวิต </label>
                        </div>
                        <div class="form-check">
                        <input type="radio" name="radio_music" checked>
                        <label>ลูกทุ่ง</label>
                        </div>
                        <div class="form-check">
                        <input type="radio" name="radio_music" checked>
                        <label>อื่นๆ</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">ยินยอมให้เก็บข้อมูล</label>
            </div>

            <div class="card-body">
                <button type="reset" class="btn btn-info bg-danger text-white">Reset</button>
                <button type="submit" class="btn btn-default float-right bg-success text-white">Submit</button>
            </div>
        </div>
    </form>
@endsection

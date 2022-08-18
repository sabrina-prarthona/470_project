@extends('profilemaster')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-4">
            @php($id =Session::get('user'))
            <h1>Give Your Covid Status</h1>
            <form action="/covidcare" method="POST">
                
                <div class="mb-3">
                @csrf
                    <input type="text" name="patient_id" placeholder="id" value="{{$id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input type="text" name="oximeter_reading" placeholder="Oximeter Reading" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input type="text" name="body_temperature" placeholder="Body Temperature" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input type="text" name="suger_level" placeholder="Suger Level" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <input type="text" name="bp" class="form-control" placeholder="BP" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>
        </div>
    <div>
</div>
@endsection
@extends('layouts.app1')
@section('title','Couriers Edit')
@section('content')

<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
            <form action="{{URL('admin/courier/update/'.$getCour->id)}}" method="get">
                <div class="card-header">
                    <strong>Couriers</strong>
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <label for="namaconsole" class="form-control-label">Couriers</label>
                            <input name="courier_nm" type="text" class="form-control" value="{{$getCour->courier}}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-md">Update</button>
                    <button type="reset" class="btn btn-danger btn-md">Reset</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
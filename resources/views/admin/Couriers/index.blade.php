@extends('layouts.app1')
@section('title','Index Courier')
@section('content')

            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                        <form action="{{ route('courier.store') }}" method="post">
                            @csrf
                            <div class="card-header">
                                <strong>Couriers Form</strong>
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <input name="courier_nm" type="text" placeholder="Masukkan Nama Kurir" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-md">Submit</button>
                                <button type="reset" class="btn btn-danger btn-md">Reset</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Couriers</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name Kurir</th>
                                            <th>Edit | Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1
                                        @endphp

                                        @foreach ($dataCour as $dC)
                                        <tr>
                                            <td>{{$i++}}</td> 
                                            <td>{{$dC->courier}}</td>
                                            <td>
                                                <a href="{{ URL('admin/courier/'.$dC->id.'/edit')}}">Edit</a>

                                                <form method="post" action="{{ URL('admin/courier/'.$dC->id)}}">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->

@endsection
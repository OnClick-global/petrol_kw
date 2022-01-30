@extends('app')
@section('title')
    <div class="d-flex align-items-center flex-wrap mr-2">
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">{{$zone->name}}</h5>
        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
    </div>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-toolbar">
                        <ul class="nav nav-bold nav-pills">

                            @foreach($headers as $key => $row)
                                <li class="nav-item">
                                    <a class="nav-link @if($key == 0) active @endif" data-toggle="tab"
                                       href="#kt_tab_pane_{{$row->id}}">{{$row->name}}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    <div class="tab-content">
                        @foreach($headers as $key => $row)
                            <div class="tab-pane fade @if($key == 0) active show @endif" id="kt_tab_pane_{{$row->id}}"
                                 role="tabpanel" aria-labelledby="kt_tab_pane_{{$row->id}}">
                                @php $zone_data = \App\Models\Sketer_file::where('parent_id',$row->id)->get();  @endphp
                                @if(count($zone_data) >0)
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">file</th>
                                            <th scope="col">change file</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($zone_data as $files_row)

                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{{$files_row->name}}</td>
                                                <td>
                                                    @if($files_row->file != null)
                                                        <a href="{{$files_row->file}}" target="_blank"
                                                           class="btn btn-primary btn-circle"><i class="fa fa-eye"></i></a>
                                                    @else
                                                        <a class="btn btn-danger btn-circle"><i
                                                                class="fa fa-eye"></i></a>
                                                    @endif
                                                </td>
                                                <form action="{{route('sketr_file.update',$files_row->id)}}"
                                                      method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <td>
                                            <span class="label label-inline label-light-primary font-weight-bold">
                                                <input required type="text" value="{{$files_row->name}}" name="file">
                                                <button type="submit" class="btn btn-success">save</button>
                                            </span>
                                                    </td>
                                                </form>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">file</th>
                                            <th scope="col">change file</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{$row->name}}</td>
                                            <td>
                                                @if($row->file != null)
                                                    <a href="{{$row->file}}" target="_blank"
                                                       class="btn btn-primary btn-circle"><i class="fa fa-eye"></i></a>
                                                @else
                                                    <a class="btn btn-danger btn-circle"><i class="fa fa-eye"></i></a>
                                                @endif
                                            </td>
                                            <form action="{{route('sketr_file.update',$row->id)}}" method="post"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <td>
                                            <span class="label label-inline label-light-primary font-weight-bold">
                                                <input required type="text" value="{{$row->file}}" name="file">
                                                <button type="submit" class="btn btn-success">save</button>
                                            </span>
                                                </td>
                                            </form>
                                        </tr>
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection
@section('scripts')

@endsection

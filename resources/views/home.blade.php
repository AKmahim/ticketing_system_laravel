@extends('layouts.admin-layout')

@section('admin_content')

 <!-- Sale & Revenue Start -->
 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary1 rounded d-flex align-items-center justify-content-between p-4">
                {{-- <i class="fa fa-chart-bar fa-3x text-primary for-color"></i> --}}
                {{-- {{ route('generate.csv2') }} --}}
                <a href="{{ route('generate.csv') }}"> <i class="fa-solid fa-download fa-3x text-primary for-color"></i></a>
                <div class="ms-3">
                    <p class="mb-2">Total Registation</p>
                    <h6 class="mb-0">{{ $viewer_amount }} Person</h6>
                </div>
            </div>
        </div>
        
        <div class="col-sm-6 col-xl-6">
            <div class="bg-secondary1 rounded d-flex  align-items-center justify-content-between p-4">
                <h6 class="">Turn ON or OFF Website</h6><br>
                <form action="{{ route('edit-settings') }}" method="POST" class="d-flex">
                    @csrf
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="server_status"  @if ($data->server_status == null)
                        
                    @else
                        checked
                    @endif   type="checkbox" role="switch"
                            id="flexSwitchCheckDefault" style="width: 60px; height:35px">
                        {{-- <label class="form-check-label pt-3 ps-3" for="flexSwitchCheckDefault">ON or OFF</label> --}}
                    </div>
                    <button type="submit" class="btn btn-secondary ms-4">update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->





<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary1 text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Users Details</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-black-50">
                        
                        <th scope="col">ID</th>
                        <th scope="col">Phone No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">NID No.</th>
                        <th scope="col">Occupation</th>


                        
                        <th scope="col">Created</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($viewers as $viewer)
                        <tr>
                            <th scope="row">{{ $viewer->id }}</th>
                            <td> {{$viewer->phone_number}} </td>
                            <td> {{$viewer->name}} </td>
                            <td> {{$viewer->email}} </td>
                            <td> {{$viewer->NID}} </td>
                            <td> {{$viewer->occupation}} </td>

                        
                            <td> {{Carbon\Carbon::parse($viewer->created_at)->diffForHumans()}} </td>
                            
                                    
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
            {{ $viewers->links('pagination::bootstrap-5')  }}
        </div>
    </div>
</div>
<!-- Recent Sales End -->


@endsection

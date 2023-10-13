@extends('layouts.admin-layout')

@section('admin_content')


<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    {{-- <h4 class="text-danger">Total views is the amount of how many person visited this pages </h4> --}}
    <div class="bg-secondary1 text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Page views Details</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-black-50">
                        
                        <th scope="col">Pages Name</th>
                        <th scope="col">Total Views</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($views as $view)
                        <tr class="">
                            
                            <td > {{$view->page_name}} </td>
                            <td class="text-end h2 " style="color: #0093d8"> {{$view->views }} </td>
                            
                                    
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
            
        </div>
    </div>
</div>
<!-- Recent Sales End -->


@endsection

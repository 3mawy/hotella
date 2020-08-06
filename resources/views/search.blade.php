@extends('layouts.master')
@section('content')

    <!-- ***** breadcumb area start ***** -->
<x-_breadcrumb/>
    <!-- ***** breadcumb area end ***** -->


    <div class="flex" id="wrapper">
        <div class="row search-page-tweaks sidebar-wrapper">
            <div id="sidebar" class="col-3 search-filters">
                <x-_sidebar/>
            </div>
            <div class="col-9 search-index " style="background-color: #ffffff;height:auto;" id="page-content-wrapper">
               <x-_card-index :hotels="$hotels" :destination="$destination ?? ''"/>
                <div class=" pagination-fix " style="padding-top: 28vh">
                    {{ $hotels->links() }}
                </div>
            </div>




        </div>

@endsection





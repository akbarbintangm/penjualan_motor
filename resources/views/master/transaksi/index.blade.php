@extends('layouts.app')

@section('pageTitle')
Transaksi Penjualan
@endsection

@section('statusNavItemDashboard')
@endsection
@section('statusNavItemPenjualan')
active
@endsection
@section('statusNavItemPelaporan')
@endsection
@section('statusNavItemMotor')
@endsection
@section('statusNavItemAdmin')
@endsection
@section('statusNavItemUser')
@endsection
@section('statusNavItemAkun')
@endsection
@section('statusNavItemWebsite')
@endsection

@section('collapsedNavDashboard')
@endsection
@section('collapsedNavPenjualan')
nav-link
@endsection
@section('collapsedNavPelaporan')
nav-link collapsed
@endsection
@section('collapsedNavMotor')
nav-link collapsed
@endsection
@section('collapsedNavAdmin')
nav-link collapsed
@endsection
@section('collapsedNavUser')
nav-link collapsed
@endsection
@section('collapsedNavAkun')
nav-link collapsed
@endsection
@section('collapsedNavWebsite')
@endsection

@section('ariaExpanedNavDashboard')
@endsection
@section('ariaExpanedNavPenjualan')
false
@endsection
@section('ariaExpanedNavPelaporan')
true
@endsection
@section('ariaExpanedNavMotor')
true
@endsection
@section('ariaExpanedNavAdmin')
true
@endsection
@section('ariaExpanedNavUser')
true
@endsection
@section('ariaExpanedNavAkun')
true
@endsection
@section('ariaExpanedNavWebsite')
@endsection

@section('collapseShowDashboard')
@endsection
@section('collapseShowPenjualan')
show
@endsection
@section('collapseShowPelaporan')
@endsection
@section('collapseShowMotor')
@endsection
@section('collapseShowAdmin')
@endsection
@section('collapseShowUser')
@endsection
@section('collapseShowAkun')
@endsection
@section('collapseShowWebsite')
@endsection

@section('collapseItemActiveDashboard')
@endsection
@section('collapseItemActivePenjualan')
active
@endsection
@section('collapseItemActivePelaporan')
@endsection
@section('collapseItemActiveMotor')
@endsection
@section('collapseItemActiveAdmin')
@endsection
@section('collapseItemActiveUser')
@endsection
@section('collapseItemActiveAkun')
@endsection
@section('collapseItemActiveWebsite')
@endsection

@section('collapseItemActivePenjualanStart')
active bg-light
@endsection
@section('collapseItemActivePenjualanView')
@endsection
@section('collapseItemActivePelaporanPDF')
@endsection
@section('collapseItemActivePelaporanXLSX')
@endsection
@section('collapseItemActivePelaporanTXT')
@endsection
@section('collapseItemActivePelaporanSQL')
@endsection
@section('collapseItemActiveMotorData')
@endsection
@section('collapseItemActiveMotorDetail')
@endsection
@section('collapseItemActiveAdminData')
@endsection
@section('collapseItemActiveAdminDetail')
@endsection
@section('collapseItemActiveUserData')
@endsection
@section('collapseItemActiveUserDetail')
@endsection
@section('collapseItemActiveAkunData')
@endsection
@section('collapseItemActiveAkunRiwayat')
@endsection
@section('collapseItemActiveAkunLogout')
@endsection

@section('content')
<div id="wrapper">
    @include('layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('layouts.topbar')
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Penjualan</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm disabled"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
</div>
@include('layouts.scrolltotop')
@endsection

@section('script')

@endsection

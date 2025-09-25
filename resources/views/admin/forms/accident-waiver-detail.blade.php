@extends('admin.master')
@section('title','Accident Waiver Detail')
@section('breadcrumb')
    <a href="{{ route('admin.accident') }}" class="btn btn-primary btn-sm">Back</a> 
@endsection
@section('content')
    <div class="col-md-12">
        <!-- Input Fields -->
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">Accident Waiver</span>
            </div>
            <div class="panel-body">
                <!-- Row 1 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong>Name:</strong></label>
                        <p>{{ $waiver->name ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Full Name:</strong></label>
                        <p>{{ $waiver->full_name ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Package:</strong></label>
                        <p>{{ $waiver->package ?? '-' }}</p>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong>Duration:</strong></label>
                        <p>{{ $waiver->duration ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Email:</strong></label>
                        <p>{{ $waiver->email ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Emergency Contact Name:</strong></label>
                        <p>{{ $waiver->ec_name ?? '-' }}</p>
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong>Emergency Contact Relation:</strong></label>
                        <p>{{ $waiver->ec_relation ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Emergency Contact Number:</strong></label>
                        <p>{{ $waiver->ec_number ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Emergency Contact Email:</strong></label>
                        <p>{{ $waiver->ec_email ?? '-' }}</p>
                    </div>
                </div>

                <!-- Row 4 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong>Signature Date:</strong></label>
                        <p>{{ $waiver->sign_date ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Witness Name:</strong></label>
                        <p>{{ $waiver->witness_name ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Witness Date:</strong></label>
                        <p>{{ $waiver->witness_date ?? '-' }}</p>
                    </div>
                </div>

                <!-- Row 5 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong> Signature:</strong></label>
                        @if($waiver->signature)
                            <img src="{{ $waiver->signature }}" alt="Signature" style="border:1px solid #000; max-width:100%; height:auto;">
                        @else
                            <p>-</p>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label><strong>Witness Signature:</strong></label>
                        @if($waiver->witness_signature)
                            <img src="{{ $waiver->witness_signature }}" alt="Witness Signature" style="border:1px solid #000; max-width:100%; height:auto;">
                        @else
                            <p>-</p>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <!-- keep symmetry -->
                        <p>&nbsp;</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection
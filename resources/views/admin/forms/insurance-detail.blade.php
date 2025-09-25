@extends('admin.master')
@section('title','Insurance Detail')
@section('breadcrumb')
<a href="{{ route('admin.insurance') }}" class="btn btn-primary btn-sm">Back</a> 
@endsection
@section('content')

    <div class="col-md-12">
        <!-- Input Fields -->
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">Detail</span>
            </div>
            <div class="panel-body">
                <!-- Row 1 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong>Full Name:</strong></label>
                        <p>{{ $insurance->full_name ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Country:</strong></label>
                        <p>{{ $insurance->country ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Gender:</strong></label>
                        <p>
                            @if($insurance->gender === 'other')
                                {{ $insurance->other_gender ?? 'Other' }}
                            @else
                                {{ ucfirst($insurance->gender) ?? '-' }}
                            @endif
                        </p>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong>Date of Birth:</strong></label>
                        <p>{{ $insurance->date_of_birth ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Email:</strong></label>
                        <p>{{ $insurance->email ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Phone:</strong></label>
                        <p>{{ $insurance->phone ?? '-' }}</p>
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label><strong>Address:</strong></label>
                        <p>{{ $insurance->address ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Zip Code:</strong></label>
                        <p>{{ $insurance->zip_code ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <!-- keep symmetry -->
                        <p>&nbsp;</p>
                    </div>
                </div>

                <!-- Secondary Passport -->
                <!-- <div class="row mb-3">
                    <div class="col-md-12">
                        <label><strong>Secondary Passport: </strong></label><br>
                        @if(!empty($insurance->second_passport))
                            <a href="{{ asset('storage/insurance/passports/' . $insurance->second_passport) }}" target="_blank">
                                <img src="{{ asset('storage/insurance/passports/' . $insurance->second_passport) }}" 
                                    alt="Secondary Passport" 
                                    class="img-thumbnail" 
                                    style="max-height: 150px;">
                            </a>
                        @else
                            <p>-</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label><strong>Uploaded Passports:</strong></label><br>
                        @if($passports && $passports->count() > 0)
                            <div class="d-flex flex-wrap gap-3">
                                @foreach($passports as $passport)
                                    <a href="{{ asset('storage/insurance/passports/' . $passport->file_name) }}" target="_blank">
                                        <img src="{{ asset('storage/insurance/passports/' . $passport->file_name) }}" 
                                            alt="Passport Image" 
                                            class="img-thumbnail" 
                                            style="max-height: 150px;">
                                    </a>
                                @endforeach
                            </div>
                        @else
                            <p>-</p>
                        @endif
                    </div>
                </div> -->

                <!-- Secondary Passport -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label><strong>Secondary Passport: </strong></label><br>
                        @if(!empty($insurance->second_passport))
                            @php
                                $ext = pathinfo($insurance->second_passport, PATHINFO_EXTENSION);
                            @endphp

                            @if(in_array(strtolower($ext), ['jpg','jpeg','png']))
                                <a href="{{ asset('storage/insurance/passports/' . $insurance->second_passport) }}" target="_blank">
                                    <img src="{{ asset('storage/insurance/passports/' . $insurance->second_passport) }}" 
                                        alt="Secondary Passport" 
                                        class="img-thumbnail" 
                                        style="max-height: 150px;">
                                </a>
                            @elseif(strtolower($ext) === 'pdf')
                                <a href="{{ asset('storage/insurance/passports/' . $insurance->second_passport) }}" target="_blank">
                                    📄 {{ $insurance->second_passport }}
                                </a>
                            @endif
                        @else
                            <p>-</p>
                        @endif
                    </div>
                </div>
                <br>

                <!-- Uploaded Passports -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label><strong>Uploaded Passports:</strong></label><br>
                        @if($passports && $passports->count() > 0)
                            {{-- Images --}}
                            <div class="d-flex flex-wrap gap-3 mb-2">
                                @foreach($passports as $passport)
                                    @php
                                        $ext = strtolower(pathinfo($passport->file_name, PATHINFO_EXTENSION));
                                    @endphp

                                    @if(in_array($ext, ['jpg','jpeg','png']))
                                        <a href="{{ asset('storage/insurance/passports/' . $passport->file_name) }}" target="_blank">
                                            <img src="{{ asset('storage/insurance/passports/' . $passport->file_name) }}" 
                                                alt="Passport Image {{ $loop->iteration }}" 
                                                class="img-thumbnail" 
                                                style="max-height: 150px;">
                                        </a>
                                    @endif
                                @endforeach
                            </div>

                            {{-- PDFs --}}
                            <div class="mb-2">
                                @foreach($passports as $passport)
                                    @php
                                        $ext = strtolower(pathinfo($passport->file_name, PATHINFO_EXTENSION));
                                    @endphp

                                    @if($ext === 'pdf')
                                        <a href="{{ asset('storage/insurance/passports/' . $passport->file_name) }}" target="_blank">
                                            📄 {{ $passport->file_name }}
                                        </a><br>
                                    @endif
                                @endforeach
                            </div>

                        @else
                            <p>-</p>
                        @endif

                    </div>
                </div>

                
            </div>
        </div>
    </div>
@endsection
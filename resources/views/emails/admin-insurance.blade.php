<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Seven Summit Treks</title>
        <style>
            table {
                border-collapse: collapse;
                width:100%;
            }
            table, th, td {
                border: 1px solid #ddd;
                padding:8px;
            }
        </style>
    </head>
    <body style="font-family: sans-serif">
        <div style="margin:0 auto; max-width:700px; width:100%;">
            <center>
                <div style="background:#FFF; padding:8px 0px; margin-bottom:5px;">
                    <!--<img src="{{ asset('themes-assets/images/logo.svg') }}" style="width: 25%"/>-->
                    <h3><a href="https://sevensummittreks.com/" target="blank">Seven Summit Treks</a></h3>
                </div>
            </center>
            <h3>Insurance Details:</h3>
            <table cellpadding="8" cellspacing="0" border="1" style="border-collapse: collapse; width:100%;">
                <tr bgcolor="#ddd">
                    <td><strong>Full Name</strong></td>
                    <td>{{ $insurance->full_name }}</td>
                </tr>
                <tr>
                    <td><strong>Country</strong></td>
                    <td>{{ $insurance->country }}</td>
                </tr>
                <tr>
                    <td><strong>Gender</strong></td>
                    <td>{{ $insurance->gender }} {{ $insurance->other_gender ? '(' . $insurance->other_gender . ')' : '' }}</td>
                </tr>
                <tr>
                    <td><strong>Date of Birth</strong></td>
                    <td>{{ $insurance->date_of_birth }}</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>{{ $insurance->email }}</td>
                </tr>
                <tr>
                    <td><strong>Phone</strong></td>
                    <td>{{ $insurance->phone }}</td>
                </tr>
                <tr>
                    <td><strong>Address</strong></td>
                    <td>{{ $insurance->address }}</td>
                </tr>
                <tr>
                    <td><strong>Zip Code</strong></td>
                    <td>{{ $insurance->zip_code }}</td>
                </tr>
            </table>
            <div style="display:flex; flex-wrap:wrap; gap:10px;">

                {{-- Second Passport --}}
                @if($insurance->second_passport)
                    @php
                        $ext = pathinfo($insurance->second_passport, PATHINFO_EXTENSION);
                    @endphp

                    @if(in_array(strtolower($ext), ['jpg','jpeg','png']))
                        <a href="{{ asset('storage/insurance/passports/' . $insurance->second_passport) }}" target="_blank">
                            <img src="{{ asset('storage/insurance/passports/' . $insurance->second_passport) }}" 
                                alt="Second Passport" style="max-width:150px; border:1px solid #000; border-radius:4px;">
                        </a>
                    @elseif(strtolower($ext) === 'pdf')
                        <label for="">PDF: </label>
                        <a href="{{ asset('storage/insurance/passports/' . $insurance->second_passport) }}" target="_blank">
                            📄 {{ $insurance->second_passport }}
                        </a> <br>
                    @endif
                @endif

                {{-- Other passports --}}
                @if($insurance->passports && $insurance->passports->count())

                    {{-- Images --}}
                    <div class="d-flex flex-wrap gap-3 mb-2">
                        @foreach($insurance->passports as $passport)
                            @php
                                $ext = strtolower(pathinfo($passport->file_name, PATHINFO_EXTENSION));
                            @endphp

                            @if(in_array($ext, ['jpg','jpeg','png']))
                                <a href="{{ asset('storage/insurance/passports/' . $passport->file_name) }}" target="_blank">
                                    <img src="{{ asset('storage/insurance/passports/' . $passport->file_name) }}" 
                                        alt="Passport {{ $loop->iteration }}" 
                                        style="max-width:150px; border:1px solid #000; border-radius:4px;">
                                </a>
                            @endif
                        @endforeach
                    </div>

                    {{-- PDFs --}}
                    <div class="mb-2">
                        @foreach($insurance->passports as $passport)
                            @php
                                $ext = strtolower(pathinfo($passport->file_name, PATHINFO_EXTENSION));
                            @endphp

                            @if($ext === 'pdf')
                                <label for="">PDF: </label>
                                <a href="{{ asset('storage/insurance/passports/' . $passport->file_name) }}" target="_blank">
                                    📄 {{ $passport->file_name }}
                                </a><br>
                            @endif
                        @endforeach
                    </div>

                @endif


            </div>
        </div>
    </body>
</html>

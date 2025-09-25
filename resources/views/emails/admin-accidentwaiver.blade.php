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
            <h3>Accident Waiver Details:</h3>
            <table cellpadding="8" cellspacing="0" border="1" style="border-collapse: collapse; width:100%;">
                <tr bgcolor="#ddd">
                    <td><strong>Full Name</strong></td>
                    <td>{{ $accident->full_name }}</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>{{ $accident->email }}</td>
                </tr>
                <tr>
                    <td><strong>Package</strong></td>
                    <td>{{ $accident->package }}</td>
                </tr>
                <tr>
                    <td><strong>Duration</strong></td>
                    <td>{{ $accident->duration }}</td>
                </tr>
                <tr>
                    <td><strong>Emergency Contact Name</strong></td>
                    <td>{{ $accident->ec_name }}</td>
                </tr>
                <tr>
                    <td><strong>Relation</strong></td>
                    <td>{{ $accident->ec_relation }}</td>
                </tr>
                <tr>
                    <td><strong>Contact Number</strong></td>
                    <td>{{ $accident->ec_number }}</td>
                </tr>
                <tr>
                    <td><strong>Contact Email</strong></td>
                    <td>{{ $accident->ec_email }}</td>
                </tr>
                <tr>
                    <td><strong>Signature Date</strong></td>
                    <td>{{ $accident->sign_date }}</td>
                </tr>
                <tr>
                    <td><strong>Witness Name</strong></td>
                    <td>{{ $accident->witness_name }}</td>
                </tr>
                <tr>
                    <td><strong>Witness SIgnature Date</strong></td>
                    <td>{{ $accident->witness_date }}</td>
                </tr>
                <tr>
                    <td><strong>Applicant Signature</strong></td>
                    <td><strong>Witness Signature</strong></td>
                </tr>
                <tr>
                    <td>
                        @if($accident->signature)
                            <img src="{{ $accident->signature }}" alt="Signature" style="max-width:300px; border:1px solid #000;">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if($accident->witness_signature)
                            <img src="{{ $accident->witness_signature }}" alt="Witness Signature" style="max-width:300px; border:1px solid #000;">
                        @else
                            -
                        @endif
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>

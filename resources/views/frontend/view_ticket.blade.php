<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <style type="text/css">
        @media screen {
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 700;
                src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 400;
                src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 700;
                src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
        }

        /* CLIENT-SPECIFIC STYLES */
        
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .box{
            width: 150px
        }
        
    </style>
</head>

<body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
    {{-- main  table --}}
    <table border="1" cellpadding="0" cellspacing="0" width="100%" style="padding: 8px" >
      <tr>
        <td>
            <h1 align='left' style="color: #26AAE1;font-weight: 900;font-size: 44px;padding-left:5px">Free Ticket</h1>
        </td>
        <td colspan="2">
            <h2 align="right" style="background-color: #26AAE1;color: white;font-weight: 500;padding:10px">Please bring COLOR LASER PRINT <br />and mentioned PHOTO ID with you</h2>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center" style="padding-right: 50px;">
            <table border="2" cellpadding="0" cellspacing="0"  style="margin-top: 5px;"  align="center" width="780px" style="height: 300px;">
                {{-- 1st row --}}
                <tr >
                    <td rowspan="" align="center" width="250px">
                        <img src="{{ public_path('frontend/images/gpbanner.png') }}" alt="" srcset="" style="width:100%;height:240px">
                    </td>
                    <td rowspan="" align="center">
                        <img src="{{ public_path('frontend/images/mahim.jpg') }}" alt="" srcset="" style="width:160px;height:180px;padding:2px">
                    </td>

                    <td align="center" >
                        
                        <img src="{{ public_path('frontend/images/QRCode.jpg') }}" alt="" srcset="" style="width:180px;height:200px;padding:20px;">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="" align="center" >
                        <h3>Mirajul Islam</h3>
                        <p>Student</p>
                    </td>
                    <td align="center">
                        <h2>NID</h2>
                        <p>4894198189</p>
                    </td>
                    <td colspan="">
                        <h1 align='center' style="font-size:22px">GATE NO: <span style="color:red;">04</span> </h1>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center" height='40px'>
                        <p style="color: black; font-family:Arial, Helvetica, sans-serif">Venue: Bangladesh Army Stadium, Dhaka ; Date: 20 october 2023 ; Gates open at 12:00 PM</p>
                    </td>
                </tr>

            </table>
        </td>
      </tr>
      <tr>
        <td colspan="3">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding: 8px" >
                <tr>
                    <td colspan="2" align="center" style="padding-top: 4px;">
                        <p style="padding-bottom: 15px;">*** There will be no parking facilities at the venue.</p>
                        <h3 style="color: red;font-size:24px;padding-bottom:10px;">TERMS & CONDITIONS</h3>
                    </td>
                </tr>
                <tr style="font-size:10px;">
                    <td align="center" style="padding-left: 30px">
                        <ol type="1">
                            <li>There will be an initial screening of the ticket at the main
                                gate, followed by scanning of the ticket at the numbered gates of
                                the stadium
                            </li>
                            <li>
                                The QR code must be readable by the scanner. Without a readable
                                QR code, entry into the venue will not be allowed.
                            </li>
                            <li>
                                Gates will open at 12:00 p.m. once entered into the venue, no
                                re-entry will be allowed.
                            </li>
                            <li>
                                Children below the age of 12 (twelve) will not be allowed entry
                                at the event.
                            </li>
                            <li>
                                No outside food or drinks will be allowed. Food will be available
                                at the venue at reasonable prices. Water will also be available.
                            </li>
                            <li>
                                Any kinds of tobacco or tobacco products will not be allowed
                                inside the venue.
                            </li>
                            <li>
                                The organizers reserve the right to close entry at any moment if
                                the capacity is full.
                            </li>
                            <li>
                                The organizers reserve the right to refuse entry or to remove
                                from the premises, people, or persons deemed as a security threat or
                                an element of disturbance.
                            </li>
                        </ol>
                    </td>
                    <td align="center" style="padding-left: 30px">
                        <ol type="1" start="9">
                            <li>CCTV and cameras will be operational at the venue. Attending the
                                event signiﬁes that the ticket holders agree to the ﬁlming and sound
                                recording of themselves as members of the audience with no
                                obligations of any kind on the organizer’s part
                            </li>
                            <li>
                                Cameras of any kind whatsoever (other than those on mobile
                                phones) are strictly prohibited inside the venue. The orga nizers
                                reserve the right to conﬁscate such items
                            </li>
                            <li>
                                Mobile phones must be kept in silent mode during all
                                performances
                            </li>
                            <li>
                                Any kind of electrical devices such as mobile phone chargers,
                                headphones, bluetooth speakers, power banks, electronic cigarettes,
                                and such will not be allowed inside the venue for security purposes
                                and measures.
                            </li>
                            <li>
                                Any kind of bags will not be allowed inside the venue, people
                                carrying bags/bags will be asked to leave the premises immediately.
                                (there will be no facilities for keeping bags at the venue.)
                            </li>
                            <li>
                                Women are speciﬁcally requested to not bring purses larger than
                                10 inches by 6 inches, where they can bring their phones, keys, and
                                money. Any bags larger than this will not be allowed inside.
                            </li>
                        </ol>
                    </td>
                </tr>
                <tr >
                    <td  align="center" colspan="">
                        <h1 style="font-size: 26px;">Organizers : </h1>
                    </td>
                    <td align="left">
                        <img src="{{ public_path('frontend/images/cholo-bangladesh.png') }}" alt="" srcset="" style="width: 150px;height:70px;text-align:center;align:center;margin:0 auto;">

                    </td>
                </tr>
                <tr>
                   <td colspan="3" style="padding-top: 5px;padding-bottom:5px;">
                    <hr style="border: none;border-top: 2px dashed #000000;margin: 20px 20px;">
                    </td> 
                </tr>
            </table>
        </td>
      </tr>
      <tr>
        <td colspan="3">
            <table border="1" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td rowspan="3" align="center">
                        <img src="{{ public_path('frontend/images/mahim.jpg') }}" alt="" srcset="" style="width: 130px;height:130px;padding:10px;">
                    </td>
                    <td width="350px">
                        <h3> Gate: <span style="color:red;">04</span></h3>
                    </td>
                    <td rowspan="3" align="center">
                        <img src="{{ public_path('frontend/images/QRCode.jpg') }}" alt="" srcset="" style="width: 150px;height:130px;">
                    </td>
                </tr>
                <tr >
                    <td>
                        <h3> Name: Mirajul Islam</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3> Phone: 01635227460</h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="padding: 10px;font-size:13px;font-family:Arial, Helvetica, sans-serif">
                        <p> <b style="color: black"> Venue: </b>Bangladesh Army Stadium, Dhaka. Date: 20 october 2023,Gates open at 12:00 PM</p>
                        
                    </td>
                    <td>
                        <h3>
                            Reg ID: 2023
                        </h3>
                    </td>
                </tr>

            </table>
        </td>
      </tr>
      <tr>
        <td  align="center" colspan="2">
            <h1 style="font-size: 26px;">Organizers : </h1>
        </td>
        <td align="center">
            <img src="{{ public_path('frontend/images/cholo-bangladesh.png') }}" alt="" srcset="" style="width: 150px;height:70px;text-align:center;align:center;margin:0 auto;">

        </td>
      </tr>
    </table>


    
</body>

</html>
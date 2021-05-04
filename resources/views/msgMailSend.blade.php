<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @media (max-width: 768px) {
            .table_left {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="email_outer_class" style="width: 95% !important;margin: 0 auto !important;background: #f3215b;;
    padding: 30px;
    border-radius: 5px;">
<div class=" email_format" style="box-shadow: 0 0 10px #404040;padding: 30px;background: #fff;border-radius:5px;">
    <div style="width: 100%;margin: 0 auto;border-radius: 5px 5px 0px 0px;text-align: center;padding: 15px 0px;">
        <img src="https://adbizdirectory.com/assets/img/mail_logo.jpg">
    </div>
    <div class="Mainbox" style="background:#fff;    border-radius: 5px; ;box-shadow:3px 1px 4px 3px #00000042;">
    <div id="mailHead" style="font-size: 17px;color: #000;padding: 10px 20px;text-align: center;border-bottom: 1px solid #ddd">
       
         This is the Job Apply Mail
    </div>
    <div class="table-row" style="width: 100%">
            <div class="table_left">
                <table class="table" style="width: 100%;margin: 30px 0px;padding: 0px 20px;">
                <tbody>
                <tr style="padding: 5px; border-bottom: 1px solid #dee8f7 ;">
                    <th style="border-bottom: 1px solid #fff;padding: 5px 0px;text-align: left;font-weight: 600;
    font-family: inherit;
    color: #000;
    font-size: 16px;
    ">Candidate Name:</th>
                    <td style="border-bottom: 1px solid #fff;padding: 5px 0px;    color: #696969;">{{$data->user_name}}</td>
                </tr>
                <tr style="padding: 5px; border-bottom: 1px solid #dee8f7;">
                    <th style="border-bottom: 1px solid #fff;padding: 5px 0px;text-align: left;font-family: inherit;
    color: #000;
    font-weight: 600;
    font-size: 16px;
    ">Candidate Mail:</th>
                    <td style="border-bottom: 1px solid #fff;padding: 5px 0px;    color: #696969;">{{$data->email}}</td>
                </tr>
                <tr style="padding: 5px; border-bottom: 1px solid #dee8f7;">
                    <th style="border-bottom: 1px solid #fff;padding: 5px 0px;text-align: left;font-family: inherit; color: #000; font-weight: 600; font-size: 16px;">Candidate Contact Number:</th>
                    <td style="border-bottom: 1px solid #fff;padding: 5px 0px;    color: #696969;">{{$data->contact}}</td>
                </tr>
                <tr style="padding: 5px; border-bottom: 1px solid #dee8f7;">
                    <th style="border-bottom: 1px solid #fff;padding: 5px 0px;text-align: left;font-family: inherit; color: #000; font-weight: 600; font-size: 16px;">Candidate Designation:</th>
                    <td style="border-bottom: 1px solid #fff;padding: 5px 0px;    color: #696969;">{{$data->designation}}</td>
                </tr>
                <tr style="padding: 5px; border-bottom: 1px solid #dee8f7;">
                    <th style="border-bottom: 1px solid #fff;padding: 5px 0px;text-align: left;font-family: inherit; color: #000; font-weight: 600; font-size: 16px;">Years Of Experience:</th>
                    <td style="border-bottom: 1px solid #fff;padding: 5px 0px;    color: #696969;">{{$data->years}}</td>
                </tr>
                <tr style="padding: 5px; border-bottom: 1px solid #dee8f7;">
                    <th style="border-bottom: 1px solid #fff;padding: 5px 0px;text-align: left;font-family: inherit; color: #000; font-weight: 600; font-size: 16px;">Education:</th>
                    <td style="border-bottom: 1px solid #fff;padding: 5px 0px;    color: #696969;">{{$data->education}}</td>
                </tr>
                <tr style="padding: 5px; border-bottom: 1px solid #dee8f7;">
                    <th style="border-bottom: 1px solid #fff;padding: 5px 0px;text-align: left;font-family: inherit;
    color: #000;
        font-weight: 600;
    font-size: 16px;
    ">Gender</th>
                    <td style="border-bottom: 1px solid #fff;padding: 5px 0px;    color: #696969;">{{$data->gender}}</td>
                </tr>
                <tr style="padding: 5px; border-bottom: 1px solid #dee8f7;">
                    <th style="border-bottom: 1px solid #fff;padding: 5px 0px;text-align: left;font-family: inherit;
    color: #000;
        font-weight: 600;
    font-size: 16px;
    ">City</th>
                    <td style="border-bottom: 1px solid #fff;padding: 5px 0px;    color: #696969;">{{$data->city}}</td>
                </tr>
                <tr style="padding: 5px; border-bottom: 1px solid #dee8f7;">
                    <th style="border-bottom: 1px solid #fff;padding: 5px 0px;text-align: left;font-family: inherit;
    color: #000;
        font-weight: 600;
    font-size: 16px;
    ">State</th>
                    <td style="border-bottom: 1px solid #fff;padding: 5px 0px;    color: #696969;">{{$data->state}}</td>
                </tr>
                <tr style="padding: 5px; border-bottom: 1px solid #dee8f7;">
                    <th style="border-bottom: 1px solid #fff;padding: 5px 0px;text-align: left;font-family: inherit;
    color: #000;
        font-weight: 600;
    font-size: 16px;
    ">Country</th>
                    <td style="border-bottom: 1px solid #fff;padding: 5px 0px;    color: #696969;">{{$data->country}}</td>
                </tr>
                </tbody>
                </table>
            </div>
            <div class="form_email_content" style="width: 100%;">
                <div class="mailFooter" style="clear: both;text-align: center;font-size: 20px;padding-bottom: 20px;">
                    Thank You
                </div>
                <div class="footer" style=" clear: both;color: #0a0a0a; text-align: center; font-size: 14px; padding: 10px 0px; border-radius: 0px 0px 5px 5px;">
                    Copyright © 2021 All Rights Reserved.
                </div>
            </div>
    </div>
    </div>
</div>
</div>
</body>
</html>
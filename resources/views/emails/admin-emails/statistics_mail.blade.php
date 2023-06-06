<?php


$envelope = $message->embed(public_path() . '/user_files/images/envelope.png');
$phone = $message->embed(public_path() . '/user_files/images/mobile.png');

$path       = Config::get('constants.settings.domainpath');
$linkexpire = Config::get('constants.settings.linkexpire');
//$logo       = asset('img/logo_new.png');
// $emaillogo  = asset('img/email.png');
// $facebook   = asset('img/facebook.png');

$projectname = Config::get('constants.settings.projectname');
$mail = Config::get('constants.settings.enquiry_email');
$domainname = Config::get('constants.settings.domain');

echo $msg = '<!DOCTYPE HTML>

<head>
  <title>Statistic Mail</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style type="text/css">
      table tr {
        display: block;
      }

      table tr th {
        display: block;
      }

      table tr td {
        display: block;
      }

      table tr td table {
        display: block;
      }

      table tr td table tbody {
        display: block;
      }

      table tr td table tr td {
        display: block;
      }
    </style>
</head>
<body style="padding: 10px;background: #efefef;font-family: Poppins, sans-serif;">
  <table cellpadding="0" cellspacing="0" border="0" cellpadding="0" cellspacing="0" align="center" width="600" height="100%" style="background:#000;padding: 0px;color: #fff;text-align: center;position: relative;border-radius: 12px 12px 0 0;">
    <tbody>
      <tr>
        <td>
          <table align="center" width="100%">
            <tbody style="background: #000;padding:0 50px">
              <tr>
                <td>
                  <img src="https://thehscc.co.uk/img/logo-white.webp" style="margin-top:10px">
                </td>
                <td>
                  <p style="color: #fff; margin: 10px 0; line-height: 1.6; text-align: center">'.$content.'</p>
                <p style="color: #fff; margin: 10px 0; line-height: 1.6; text-align: center">'.$mesage.'</p>
                </td>
               
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
  <table cellpadding="0" cellspacing="0" border="0" cellpadding="0" cellspacing="0" align="center" width="600" height="100%" style="background:#ffffff;padding: 0px;color: #000;text-align: center;position: relative;border-radius: 0 0 12px 12px;">
    <tbody>
      <tr>
        <td>
          <table align="center" width="100%">
            <tbody style="background: #ffffff;padding:30px">
              <tr>
                <td>
                  <h6 style="color: #000;font-size: 16px;line-height: 24px;margin: 10px 0;">
                    <span style="color:#2A0E65;font-size:20px">Please note</span>
                    <br> not to share your account details with anyone, <br>because of security purposes.
                  </h6>
                </td>
                <td>
                  <p style="font-size: 16px;line-height: 24px;font-weight: bold;">
                    <span style="display: block;color: #000;font-weight: bold;font-size: 25px;">IMPORTANT</span> If there’s any error in your login credentials or <br> you’d like to change your login details.
                  </p>
                  <p style="font-size: 12px;line-height: 24px;">Please get in touch with our support team at: <b>'.$mail.'</b>
                  </p>
                  <p style="font-weight:600;font-size:20px;text-align:center;line-height: 24px;">Start your investment journey <br> and enjoy huge rewards and incomes. </p>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr style="background:#000;margin:8px 20px;
            color: #fff;
            padding: 15px 50px 6px 15px;border-radius:12px;">
        <!--  <td><h3 style="font-weight: bold;font-size: 30px;margin: 0;">Happy Investing!</h3></td> -->
        <td style="display:flex;flex-direction: row;position: relative;">
          <p style="font-size: 16px;line-height: 25px;">
            <span style="font-weight: bold;font-size: 25px;margin: 0;">Happy Investing!</span>
            <br> HSCC is an investment company that aims to enhance its user’s financial stability and offer them easy and reliable solutions to depend on, for their economic growth.
          </p>
          
        </td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td>
          <ul style="list-style: none;margin: 0;padding: 7px 0;background: #EB292B;border-radius: 0 0 12px 12px;">
            <li style="display: inline-block;font-size: 20px;color: #fff;margin-right: 40px;">
              <img src="' . $phone . '">
              <a href="tel:+447537168069" style="color: #fff;text-decoration: none;">+44 7537 168069</a>
            </li>
            <li style="display: inline-block;font-size: 20px;color: #fff;">
              <img src="' . $envelope . '">
              <a href="mailto:support@hscc.com" target="_blank" style="color: #fff;text-decoration: none;">'.$mail.'</a>
            </li>
          </ul>
        </td>
      </tr>
    </tfoot>
  </table>
</body>

</html>

';


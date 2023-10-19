<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    // MAILER

    public function sendEmail($type, $receiverEmail, $receiverName, $username, $phone, $email)
    {
        // remove Admin word from type
        $formattedType = str_replace('Admin', '', $type);
        $hostURL = env('APP_URL');

        if ($type == 'Contact Us') {
            $name = 'Choice Accountants Pty. Ltd.';
            $subject = 'Thank you for contacting Choice Accountants Pty Ltd!';
            $body = '<html><head></head><body><p>Dear ' . $username . ',</p> <p> Thank you for reaching out to Choice Accountants Pty Ltd. We appreciate your interest in our services. We have received your message and would like to assure you that we are reviewing it carefully. </p> <p> Our dedicated team will be in touch with you shortly to discuss your inquiry and provide the assistance you need. We strive to deliver exceptional service to our valued clients, and we look forward to addressing your requirements. </p> <p> Should you have any urgent matters, please feel free to contact us directly at +61 2 8717 2200 or +61 413 386 703. </p> <p> Thank you once again for choosing Choice Accountants Pty Ltd. </p> <br><br> <p> Best regards, <br> Choice Accountants Pty Ltd  </p>  </body></html>';
        } else if ($type == 'Enquire') {
            $name = 'Choice Accountants Pty. Ltd.';
            $subject = 'Thank you for contacting Choice Accountants Pty Ltd!';
            $body = '<html><head></head><body><p>Dear ' . $username . ',</p> <p> Thank you for reaching out to Choice Accountants Pty Ltd. We appreciate your interest in our services. We have received your message and would like to assure you that we are reviewing it carefully. </p> <p> Our dedicated team will be in touch with you shortly to discuss your inquiry and provide the assistance you need. We strive to deliver exceptional service to our valued clients, and we look forward to addressing your requirements. </p> <p> Should you have any urgent matters, please feel free to contact us directly at +61 2 8717 2200 or +61 413 386 703. </p> <p> Thank you once again for choosing Choice Accountants Pty Ltd. </p> <br><br> <p> Best regards, <br> Choice Accountants Pty Ltd  </p>  </body></html>';
        } else if ($type == 'Contact Us Admin') {
            $name = 'Choice Accountants Pty. Ltd.';
            $subject = 'New Enquiry Received - Choice Accountants Pty Ltd!';
            $body = '<html><head></head><body><p>Dear Admin Team,</p> <p> Congratulations! We have received a new Enquiry through our website. Please find the details below: </p> <p> <b> Name: </b> &nbsp <span> ' . $username . ' </span> <br> <b> Email: </b> &nbsp <span> <a href="mailto:'. $email .'"> ' . $email . ' </a> </span> <br> <b> Contact Number: </b> &nbsp <span> <a href="tel:'. $phone .'"> ' . $phone . '</a> </span> <br> <b> Enquiry Source: </b> &nbsp <span> ' . $formattedType . ' </span> <br> <p> To know more details <a href="'.$hostURL.'/login" > Click here </a> </p>  <br> </p> <br><br> <p> Best regards, <br> Automatic Mail Generator by HYPLAP <br> Choice Accountants Pty Ltd  </p>  </body></html>';
        } else if ($type == 'Enquire Admin') {
            $name = 'Choice Accountants Pty. Ltd.';
            $subject = 'New Enquiry Received - Choice Accountants Pty Ltd!';
            $body = '<html><head></head><body><p>Dear Admin Team,</p> <p> Congratulations! We have received a new Enquiry through our website. Please find the details below: </p> <p> <b> Name: </b> &nbsp <span> ' . $username . ' </span> <br> <b> Contact Email: </b> &nbsp <span> <a href="mailto:'. $email .'">'. $email .'</a> </span> <br> <b> Enquiry Source: </b> &nbsp <span> ' . $formattedType . ' </span> <br> <p> To know more details <a href="'.$hostURL.'/login" > Click here </a> </p>  <br> </p> <br><br> <p> Best regards, <br> Automatic Mail Generator by HYPLAP <br> Choice Accountants Pty Ltd  </p>  </body></html>';
        }  else {
            $name = "Welcome To Choice Accountants Pty. Ltd.";
            $subject = 'Welcome To Choice Accountants Pty. Ltd.';
            $body = '<html><head></head><body><p>Hello</body></html>';
        }

        $data = array(
            "sender" => array(
                "email" => 'enquiry@choice.accountants',
                "name" => 'Choice Accountants Pty. Ltd.'
            ),
            "to" => array(
                array(
                    "email" => $receiverEmail,
                    "name" => $receiverName
                )
            ),
            "name" => $name,
            "subject" => $subject,
            "htmlContent" => $body
        );
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sendinblue.com/v3/smtp/email',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Content-Type: application/json',
                'Api-Key: ' . env('SENDINBLUE_API_KEY')
            ),
        ));
        // $response = curl_exec($curl);
        $result = curl_exec($curl);
        if (curl_errno($curl)) {
            echo 'Error:' . curl_error($curl);
        }
        error_log('this comes ->' . $result);
        curl_close($curl);
    }
}

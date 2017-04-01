<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6; margin: 0; padding: 0;">
  <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h1><?php echo $title; ?></h1>
        <!-- body -->
        <p> <?php echo $content ?> </p><br>
        <table>
            <tr>
                <td>First Name:</td>
                <td><?php echo $fName; ?></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><?php echo $lName; ?></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><?php echo $telNum; ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><?php echo $dateOfBirth; ?></td>
            </tr>
            <tr>
                <td>School:</td>
                <td><?php echo $school; ?></td>
            </tr>
            <tr>
                <td>Program:</td>
                <td><?php echo $program; ?></td>
            </tr>
            <tr>
                <td>Year:</td>
                <td><?php echo $year; ?></td>
            </tr>
            <tr>
                <td>Move in Date:</td>
                <td><?php echo $moveInDate; ?></td>
            </tr>
            <tr>
                <td>Budget:</td>
                <td><?php echo $budget; ?></td>
            </tr>
            <tr>
                <td>Contract:</td>
                <td><?php echo $contract; ?></td>
            </tr>
            <tr>
                <td>Emergency Contact</td>
                <td><?php echo $nextOfKin; ?></td>
            </tr>
            <tr>
                <td>Emergency Contact Number:</td>
                <td><?php echo $telKin; ?></td>
            </tr>
            <tr>
                <td>Comment:</td>
                <td><?php echo $comment; ?></td>
            </tr>
        </table>
    </body>
</html>

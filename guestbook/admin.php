<?php

//Start a session
session_start();


//If user is not logged in, reroute them to the login page
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap and Pizza CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <title>Admin</title>

</head>
<body>
<div class="container">

    <?php

    // Turn on error reporting -- this is critical!
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    echo "<h3>GuestBook Summary </h3>";

    require('/home/agrigore/connect.php');

    //Define the query
    $sql = 'SELECT guestbook_id, first, last, title, company, linkedIn, email, date, comment, list, format, meet 
        FROM guestbook
        ORDER BY date DESC';

    //Send the query to the Database
    $result = mysqli_query($cnxn, $sql);
    //var_dump($result)
    ?>

    <table id="guestbook-table" class="display">
        <thead>
        <tr>
            <th>Date</th>
            <th>Name</th>
            <th>Title</th>
            <th>Company</th>
            <th>LinkedIn</th>
            <th>E-mail</th>
            <th>Comment</th>
            <th>Mailing List</th>
            <th>Email Format</th>
            <th>How We Meet</th>
        </tr>
        </thead>
        <tbody>
        <?php
        //Print the results
        while($row = mysqli_fetch_assoc($result)){
            $date = $row['date'];
            $first = $row['first'];
            $last = $row['last'];
            $title = $row['title'];
            $company = $row['company'];
            $linkedIn = $row['linkedIn'];
            $email = $row['email'];
            $comment = $row['comment'];
            $list = $row['list'];
            $format = $row['format'];
            $meet = $row['meet'];

            echo "<tr>
                        <td>$date</td>
                        <td>$title</td>
                        <td>$first, $last</td>
                        <td>$company</td>
                        <td>$linkedIn</td>
                        <td>$email</td>
                        <td>$comment</td>
                        <td>$list</td>
                        <td>$format</td>
                        <td>$meet</td>
                    </tr>";
        }
        ?>

        </tbody>

    </table>

</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>



<script>
    //$('#student-table').DataTable();

    $('#guestbook-table').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );
</script>

<p><a href="http://agrigorenko.greenriverdev.com/305/guestbook/index.php">GuestBook Form</a></p>

<?php include 'nav.php'; ?>

</body>
</html>

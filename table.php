<html>
<table border="1">
    <thead>
    <thead>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
        </tr>
    </thead>
</html>	
<?php
$students = array(
    array('Christopher' , 'Male' , '20' ),
    array('Lucy' , 'Female' , '21' ),
    array('Scott' , 'Male ' , '23' ),
    array('Ted' , 'Male' , '22' ),
    array('Mindy' , 'Female' , '20' ),
);


foreach( $students as $student ){
    echo '<tr>';
    foreach( $student as $key )
    {
        echo '<td>'.$key.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
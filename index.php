<?php
/**
*?author malopa
*/


/**
 * ?make sure you have created database called results and scores table
 * ?score table will have two columns score id and score;
 * ?score id will be the primary key and set it to autoincreament
 */

$conn = mysqli_connect("localhost", "root", "", "results");


$student_score = [];
if (isset($_POST['save']) ) {
    $student_score = ($_POST['items']);

    foreach($student_score as $score){
        $sql = "INSERT INTO scores(score) VALUES('$score')";
        $result = mysqli_query($conn,$sql);
    }
}



?>

<html>
<head>

<style>

table{
    width:100%;
    border-collapse:collapse;
}

table ,tr, td,th{
    text-align:center;
    border:1px solid grey;
    text-align:left;
}


td,th{
    padding:.3rem .4rem;
}
tbody tr > td{
    color:#777;
}

form{
    width:60vw;
}
    form > div{
        display:flex;
        
    }


    input[type=text]{
        border:1px solid #666;
        /* width:20rem; */
        border-radius:2px;
        padding:.2rem .2rem;
    }

    #button{
        margin:1rem 0;
        padding:.3rem .8rem;
        background:indigo;
        color:#fff;
        border:none;
        cursor:pointer;
    }
</style>
</head>

<body>

    <div>
        <h1>
            Students Score Form
        </h1>
    </div>
    <form action="" method="POST">

        <table>
            <thead>
            <tr>
            <th>Sn</th>
            <th>Student Name</th>
            <th>Score</th>
            </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Juma hasssan</td>
                    <td><input type='text' value='' class='items' name='items[]' /></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Juma hasssan</td>
                    <td><input type='text' value='' class='items' name='items[]' /></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Khasim Ally</td>
                    <td><input type='text' value='' class='items' name='items[]' /></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Zena Hamisi</td>
                    <td><input type='text' value='' class='items' name='items[]' /></td>
                </tr>
            </tbody>
        </table> 

        <button type='submit' id='button' name='save' value='save' >Save</button>
    </form>    
</body>
</html>
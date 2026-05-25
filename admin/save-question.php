<?php
// $conn = mysqli_connect(
//     "localhost",
//     "root",
//     "",
//     "devops_hub"
// );

$conn = mysqli_connect(
    "mysql",
    "root",
    "root",
    "devops_hub"
);
if(!$conn){

    die("DB Connection Failed");

}


/* Form Data */

$tool_name = $_POST['tool_name'];

$question_type = $_POST['question_type'];

$question = $_POST['question'];

$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];

$correct_answer = $_POST['correct_answer'];


/* Correct Answer Logic */

if($correct_answer == "option1"){

    $final_answer = $option1;

}
elseif($correct_answer == "option2"){

    $final_answer = $option2;

}
elseif($correct_answer == "option3"){

    $final_answer = $option3;

}
else{

    $final_answer = $option4;

}


/* Insert Query */

$sql = "INSERT INTO mcq_questions(

    tool_name,
    question_type,
    question,

    option1,
    option2,
    option3,
    option4,

    correct_answer

)

VALUES(

    '$tool_name',
    '$question_type',
    '$question',

    '$option1',
    '$option2',
    '$option3',
    '$option4',

    '$final_answer'

)";


if(mysqli_query($conn, $sql)){

    echo "
        <h2>
            Question Saved Successfully ✅
        </h2>
    ";

}
else{

    echo mysqli_error($conn);

}

?>
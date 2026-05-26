<?php include "../config/db.php"; ?>
<?php


$answers = $_POST['answer'];

$score = 0;
$total = count($answers);

foreach($answers as $id => $userAns){

    $sql = "SELECT correct_answer FROM mcq_questions WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row['correct_answer'] == $userAns){
        $score++;
    }
}

/* Save Result */
mysqli_query($conn,
"INSERT INTO exam_results(score,total) VALUES('$score','$total')"
);

echo "<h2>Exam Submitted Successfully</h2>";
echo "<h3>Your Score: $score / $total</h3>";

?>
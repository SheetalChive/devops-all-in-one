
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Interview Questions</title>

<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/qna.css">

</head>

<body>

<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"devops_hub"
);

/* GET TOOL NAME */

$tool = $_GET['tool'];

?>

<?php include "../navbar.php" ?>

<section class="details-page"
style="display:block; padding-top:120px;">

<div class="details-box">

<a href="../index.php"
class="back-home-btn">

← Back To Home

</a>

<h1>
<?php echo $tool." "; ?>
Interview Questions
</h1>

<p>
Top
<?php echo $tool." ";  ?>
interview questions and answers.
</p>

<!-- BUTTONS -->

<div class="question-buttons">

<button onclick="showQuestions('basic')">
Basic Questions
</button>

<button onclick="showQuestions('advanced')">
Advanced Questions
</button>

<button onclick="showQuestions('scenario')">
Scenario Based Questions
</button>

</div>

<!-- BASIC -->

<div id="basic"
class="question-section active">

<?php

$sql = "SELECT * FROM questions

WHERE tool_name='$tool'

AND question_type='Basic'";

$result = mysqli_query($conn,$sql);

$count = 1;

while($row = mysqli_fetch_assoc($result)){

?>

<div class="qa-item">

<h3 onclick="toggleAnswer(this)">

<span class="question-text">

<?php
echo $count.". ".$row['question'];
?>

</span>

<span class="done-icon">
✓
</span>

</h3>

<p class="answer">

<?php
echo $row['answer'];
?>

</p>

</div>

<?php $count++; ?>

<?php } ?>

</div>

<!-- ADVANCED -->

<div id="advanced"
class="question-section">

<?php

$sql = "SELECT * FROM questions

WHERE tool_name='$tool'

AND question_type='Advanced'";

$result = mysqli_query($conn,$sql);

$count = 1;

while($row = mysqli_fetch_assoc($result)){

?>

<div class="qa-item">

<h3 onclick="toggleAnswer(this)">

<span class="question-text">

<?php
echo $count.". ".$row['question'];
?>

</span>

<span class="done-icon">
✓
</span>

</h3>

<p class="answer">

<?php
echo $row['answer'];
?>

</p>

</div>

<?php $count++; ?>

<?php } ?>

</div>

<!-- SCENARIO -->

<div id="scenario"
class="question-section">

<?php

$sql = "SELECT * FROM questions

WHERE tool_name='$tool'

AND question_type='Scenario Based'";

$result = mysqli_query($conn,$sql);

$count = 1;

while($row = mysqli_fetch_assoc($result)){

?>

<div class="qa-item">

<h3 onclick="toggleAnswer(this)">

<span class="question-text">

<?php
echo $count.". ".$row['question'];
?>

</span>

<span class="done-icon">
✓
</span>

</h3>

<p class="answer">

<?php
echo $row['answer'];
?>

</p>

</div>

<?php $count++; ?>

<?php } ?>

</div>

</div>

</section>

<script>

function showQuestions(sectionId){

const sections =
document.querySelectorAll('.question-section');

sections.forEach(section => {

section.classList.remove('active');

});

document.getElementById(sectionId)
.classList.add('active');

}

function toggleAnswer(element){

let answer =
element.nextElementSibling;

let icon =
element.querySelector('.done-icon');

if(answer.style.display === "block"){

answer.style.display = "none";

}
else{

answer.style.display = "block";

icon.classList.add("done");

}

}

</script>

</body>
</html>


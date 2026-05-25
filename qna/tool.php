<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Interview Questions</title>

<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/qna.css">

</head>

<body>

<?php
// $conn = mysqli_connect(
// "localhost",
// "root",
// "",
// "devops_hub"
// );

$conn = mysqli_connect(
    "mysql",
    "root",
    "root",
    "devops_hub"
);

/* GET TOOL NAME */

$tool = $_GET['tool'];

?>

<?php include "../navbar.php" ?>

<section class="details-page" style="display:block; padding-top:120px;">

<div class="details-box">

<a href="../index.php" class="back-home-btn">
← Back To Home
</a>

<h1>
<?php echo $tool." "; ?> Interview Questions
</h1>

<p>
Top <?php echo $tool." "; ?> interview questions and answers.
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

<button onclick="showQuestions('basic-mcq')">
Basic MCQ
</button>

<button onclick="showQuestions('advanced-mcq')">
Advanced MCQ
</button>

</div>

<!-- BASIC -->

<div id="basic" class="question-section active">

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
<?php echo $count.". ".$row['question']; ?>
</span>

<span class="done-icon">✓</span>
</h3>

<p class="answer">
<?php echo $row['answer']; ?>
</p>

</div>

<?php $count++; } ?>

</div>

<!-- ADVANCED -->

<div id="advanced" class="question-section">

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
<?php echo $count.". ".$row['question']; ?>
</span>

<span class="done-icon">✓</span>
</h3>

<p class="answer">
<?php echo $row['answer']; ?>
</p>

</div>

<?php $count++; } ?>

</div>

<!-- SCENARIO -->

<div id="scenario" class="question-section">

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
<?php echo $count.". ".$row['question']; ?>
</span>

<span class="done-icon">✓</span>
</h3>

<p class="answer">
<?php echo $row['answer']; ?>
</p>

</div>

<?php $count++; } ?>

</div>

</div>

<!-- ================= BASIC MCQ ================= -->

<div id="basic-mcq" class="question-section">

<h2>Basic MCQ</h2>

<form method="POST" action="save_exam.php">

<?php
$sql = "SELECT * FROM mcq_questions
WHERE tool_name='$tool'
AND question_type='Basic'";

$result = mysqli_query($conn,$sql);

$count = 1;

while($row = mysqli_fetch_assoc($result)){
?>

<div class="qa-item">

<h3>
<?php echo $count.". ".$row['question']; ?>
</h3>

<div class="mcq-options">

<label>
<input type="radio" name="answer[<?php echo $row['id']; ?>]" value="<?php echo $row['option1']; ?>">
A. <?php echo $row['option1']; ?>
</label><br>

<label>
<input type="radio" name="answer[<?php echo $row['id']; ?>]" value="<?php echo $row['option2']; ?>">
B. <?php echo $row['option2']; ?>
</label><br>

<label>
<input type="radio" name="answer[<?php echo $row['id']; ?>]" value="<?php echo $row['option3']; ?>">
C. <?php echo $row['option3']; ?>
</label><br>

<label>
<input type="radio" name="answer[<?php echo $row['id']; ?>]" value="<?php echo $row['option4']; ?>">
D. <?php echo $row['option4']; ?>
</label><br>

</div>

</div>

<?php $count++; } ?>

<input type="hidden" name="tool_name" value="<?php echo $tool; ?>">
<input type="hidden" name="question_type" value="MCQ">

<button type="submit" style="padding:10px 20px; background:green; color:white; border:none; border-radius:6px; margin-top:20px;">
Save Exam
</button>

</form>

</div>

<!-- ================= ADVANCED MCQ ================= -->

<div id="advanced-mcq" class="question-section">

<h2>Advanced MCQ</h2>

<form method="POST" action="save_exam.php">

<?php
$sql = "SELECT * FROM mcq_questions
WHERE tool_name='$tool'
AND question_type='Advanced'";

$result = mysqli_query($conn,$sql);

$all = [];

while($r = mysqli_fetch_assoc($result)){
    $all[] = $r;
}

$total = count($all);
?>

<?php for($i=0; $i<$total; $i++){ ?>

<div class="qa-item">

<h3>
<?php echo ($i+1).". ".$all[$i]['question']; ?>
</h3>

<div class="mcq-options">

<label>
<input type="radio" name="answer[<?php echo $all[$i]['id']; ?>]" value="<?php echo $all[$i]['option1']; ?>">
A. <?php echo $all[$i]['option1']; ?>
</label><br>

<label>
<input type="radio" name="answer[<?php echo $all[$i]['id']; ?>]" value="<?php echo $all[$i]['option2']; ?>">
B. <?php echo $all[$i]['option2']; ?>
</label><br>

<label>
<input type="radio" name="answer[<?php echo $all[$i]['id']; ?>]" value="<?php echo $all[$i]['option3']; ?>">
C. <?php echo $all[$i]['option3']; ?>
</label><br>

<label>
<input type="radio" name="answer[<?php echo $all[$i]['id']; ?>]" value="<?php echo $all[$i]['option4']; ?>">
D. <?php echo $all[$i]['option4']; ?>
</label><br>

</div>

</div>

<?php } ?>

<input type="hidden" name="tool_name" value="<?php echo $tool; ?>">
<input type="hidden" name="question_type" value="MCQ">

<button type="submit" style="padding:10px 20px; background:green; color:white; border:none; border-radius:6px; margin-top:20px;">
Save Exam
</button>

</form>

</div>

</section>

<script>

function showQuestions(sectionId){

const sections =
document.querySelectorAll('.question-section');

sections.forEach(section => {
section.classList.remove('active');
});

document.getElementById(sectionId).classList.add('active');

}

function toggleAnswer(element){

let answer = element.nextElementSibling;

if(answer.style.display === "block"){
answer.style.display = "none";
}else{
answer.style.display = "block";
}

}

</script>

</body>
</html>
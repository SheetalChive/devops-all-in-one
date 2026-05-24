<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"devops_hub"
);

if(isset($_POST['submit'])){

$tool =
$_POST['tool'];

$type =
$_POST['question_type'];

$question =
$_POST['question'];

$answer =
$_POST['answer'];

$sql = "INSERT INTO questions
(tool_name,question_type,question,answer)

VALUES
('$tool','$type','$question','$answer')";

mysqli_query($conn,$sql);

echo "
<script>
alert('Question Added Successfully');
</script>
";

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Add Questions</title>

<link rel="stylesheet" href="../css/main.css">

<link rel="stylesheet" href="../css/qna.css">

</head>

<body>

<?php include "../navbar.php"; ?>

<div class="form-box">

<h1>Add Interview Question</h1>

<form method="POST">

<div class="form-group">

<label>Select Tool</label>

<select name="tool" required>

<option value="">Choose Tool</option>

<option>Docker</option>
<option>Kubernetes</option>
<option>Jenkins</option>
<option>Terraform</option>
<option>AWS</option>

</select>

</div>

<div class="form-group">

<label>Question Type</label>

<select name="question_type" required>

<option>Basic</option>
<option>Advanced</option>
<option>Scenario Based</option>

</select>

</div>

<div class="form-group">

<label>Question</label>

<textarea
name="question"
required>
</textarea>

</div>

<div class="form-group">

<label>Answer</label>

<textarea
name="answer"
required>
</textarea>

</div>

<button
type="submit"
name="submit"
class="submit-btn">

Save Question

</button>

</form>

</div>

</body>
</html>
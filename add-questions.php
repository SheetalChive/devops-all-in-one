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

<link rel="stylesheet" href="css/main.css">

<style>

.form-box{
max-width:700px;
margin:120px auto;
background:#0f172a;
padding:40px;
border-radius:20px;
box-shadow:0 0 20px rgba(0,0,0,0.5);
}

.form-box h1{
margin-bottom:30px;
text-align:center;
}

.form-group{
margin-bottom:20px;
}

.form-group label{
display:block;
margin-bottom:10px;
font-weight:600;
}

.form-group select,
.form-group textarea{
width:100%;
padding:15px;
border:none;
border-radius:10px;
background:#1e293b;
color:white;
font-size:15px;
}

.form-group textarea{
height:140px;
resize:none;
}

.submit-btn{
width:100%;
padding:15px;
border:none;
border-radius:10px;
background:linear-gradient(90deg,#06b6d4,#2563eb);
color:white;
font-size:16px;
font-weight:600;
cursor:pointer;
transition:0.3s;
}

.submit-btn:hover{
transform:translateY(-3px);
}

</style>

</head>

<body>

<?php include "navbar.php"; ?>

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
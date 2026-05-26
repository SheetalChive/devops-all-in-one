<?php include "../config/db.php"; ?>
<?php

// Save Question

if(isset($_POST['submit'])) {

    $tool =addslashes($_POST['tool']);

    $type = addslashes($_POST['question_type']);

    $question = addslashes($_POST['question']);

    // $answer = addslashes($_POST['answer']);
$answer = mysqli_real_escape_string(
    $conn,
    $_POST['answer']
);

    $sql = "INSERT INTO questions
    (
        tool_name,
        question_type,
        question,
        answer
    )

    VALUES
    (
        '$tool',
        '$type',
        '$question',
        '$answer'
    )";

    $run = mysqli_query($conn, $sql);

    if ($run) {

        echo "
        <script>
        alert('Question Added Successfully');

        window.location.href='';

        </script>
        ";

    } else {

        echo "
        <script>
        alert('Failed To Save Question');
        </script>
        ";

        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta
name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Add Questions</title>

<link rel="stylesheet" href="../css/main.css">

<link rel="stylesheet" href="../css/qna.css">

<!-- CKEditor -->

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<!-- CKEditor Fix -->

<style>

/* CKEditor Typing Area */

.ck-editor__editable {

    background: #ffffff !important;

    color: #000000 !important;

    min-height: 300px;

}

/* Toolbar */

.ck.ck-toolbar {

    background: #f3f4f6 !important;

}

/* Border */

.ck.ck-editor__main>.ck-editor__editable {

    border: 1px solid #d1d5db !important;

}

/* Placeholder */

.ck.ck-editor__main>.ck-editor__editable.ck-placeholder::before {

    color: #6b7280 !important;

}

</style>

</head>

<body>

<?php include "../navbar.php"; ?>

<div class="form-box">

<h1>Add Interview Question</h1>

<form method="POST" enctype="multipart/form-data">
<!-- Tool -->

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
<!-- Question Type -->

<div class="form-group">

<label>Question Type</label>

<select name="question_type" required>

<option>Basic</option>
<option>Advanced</option>
<option>Scenario Based</option>

</select>

</div>

<!-- Question -->

<div class="form-group">

<label>Question</label>

<textarea
name="question"
required></textarea>

</div>
<!-- Answer -->

<div class="form-group">

<label>Answer</label>

<textarea
id="editor"
name="answer"></textarea>

</div>
<!-- Submit -->

<button
type="submit"
name="submit"
class="submit-btn">

Save Question

</button>

</form>

</div>

<!-- CKEditor Script -->

<script>

let editorInstance;

ClassicEditor
.create(document.querySelector('#editor'), {

    toolbar: [

        'heading',

        '|',

        'bold',
        'italic',
        'underline',

        '|',

        'bulletedList',
        'numberedList',

        '|',

        'link',
        'blockQuote',
        'insertTable',

        '|',

        'undo',
        'redo'

    ]

})

.then(editor => {

    editorInstance = editor;

    console.log('CKEditor Loaded Successfully');

})

.catch(error => {

    console.error(error);

});

// Form Submit Fix

document.querySelector('form').addEventListener('submit', function() {

    document.querySelector('#editor').value =
    editorInstance.getData();

});

</script>

</body>
</html>
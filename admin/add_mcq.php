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

        <form action="save-question.php" method="POST">

            <!-- Tool Selection -->
            <div class="form-group">

                <label>Select Tool</label>

                <select name="tool_name" required>

                    <option value="">Select Tool</option>

                    <option value="Docker">Docker</option>
                    <option value="Kubernetes">Kubernetes</option>
                    <option value="Jenkins">Jenkins</option>
                    <option value="Terraform">Terraform</option>

                </select>

            </div>


            <!-- Question Type -->
            <div class="form-group">

                <label>Select Question Type</label>

                <select name="question_type" required>

                    <option value="">Select Type</option>

                    <option value="Basic">Basic</option>
                    <option value="Advanced">Advanced</option>
                    <option value="Scenario Based">Scenario Based</option>

                </select>

            </div>


            <!-- Question -->
            <div class="form-group">

                <label>Question</label>

                <textarea name="question" rows="5" required></textarea>

            </div>


            <!-- Option 1 -->
            <div class="form-group">

                <label>Option 1</label>

                <input type="text" name="option1" required>

            </div>


            <!-- Option 2 -->
            <div class="form-group">

                <label>Option 2</label>

                <input type="text" name="option2" required>

            </div>


            <!-- Option 3 -->
            <div class="form-group">

                <label>Option 3</label>

                <input type="text" name="option3" required>

            </div>


            <!-- Option 4 -->
            <div class="form-group">

                <label>Option 4</label>

                <input type="text" name="option4" required>

            </div>


            <!-- Correct Answer -->
            <div class="form-group">

                <label>Correct Answer</label>

                <select name="correct_answer" required>

                    <option value="">Select Correct Answer</option>

                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                    <option value="option4">Option 4</option>

                </select>

            </div>


            <!-- Submit Button -->
            <button type="submit" class="submit-btn">

                Save Question

            </button>

        </form>

    </div>

</body>
</html>


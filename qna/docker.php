<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Docker Interview Questions</title>

<link rel="stylesheet" href="../css/main.css">

<style>

.question-buttons{
display:flex;
gap:15px;
flex-wrap:wrap;
margin:30px 0;
}

.question-buttons button{
padding:12px 22px;
border:none;
border-radius:10px;
cursor:pointer;
font-size:15px;
font-weight:600;
background:linear-gradient(90deg,#06b6d4,#2563eb);
color:white;
transition:0.3s;
}

.question-buttons button:hover{
transform:translateY(-3px);
box-shadow:0 0 20px rgba(6,182,212,0.5);
}

.question-section{
display:none;
animation:fade 0.5s ease;
}

.question-section.active{
display:block;
}

@keyframes fade{
from{
opacity:0;
transform:translateY(20px);
}
to{
opacity:1;
transform:translateY(0);
}
}

</style>

</head>

<body>

<?php include "../navbar.php" ?>

<section class="details-page" style="display:block; padding-top:120px;">

<div class="details-box">

<a href="../index.php" class="back-home-btn">
← Back To Home
</a>

<h1>Docker Interview Questions</h1>

<p>
Top Docker interview questions and answers for DevOps Engineers.
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

<!-- BASIC QUESTIONS -->

<div id="basic" class="question-section active">

<div class="qa-item">

<h3>1. What is Docker?</h3>

<p>
Docker is a platform used to build, package and run applications using containers.
</p>

</div>

<div class="qa-item">

<h3>2. What is Docker Image?</h3>

<p>
Docker image is a read-only template used to create containers.
</p>

</div>

<div class="qa-item">

<h3>3. What is Docker Container?</h3>

<p>
Container is a running instance of Docker image.
</p>

</div>

<div class="qa-item">

<h3>4. What is Dockerfile?</h3>

<p>
Dockerfile contains instructions to build Docker images.
</p>

</div>

</div>

<!-- ADVANCED QUESTIONS -->

<div id="advanced" class="question-section">

<div class="qa-item">

<h3>1. What is Multi-stage Build in Docker?</h3>

<p>
Multi-stage build helps reduce Docker image size by separating build and runtime stages.
</p>

</div>

<div class="qa-item">

<h3>2. What is Docker Swarm?</h3>

<p>
Docker Swarm is Docker’s native clustering and orchestration tool.
</p>

</div>

<div class="qa-item">

<h3>3. Explain Docker Networking.</h3>

<p>
Docker networking allows containers to communicate using bridge, host and overlay networks.
</p>

</div>

<div class="qa-item">

<h3>4. What are Docker Volumes?</h3>

<p>
Volumes are used for persistent data storage in Docker containers.
</p>

</div>

</div>

<!-- SCENARIO QUESTIONS -->

<div id="scenario" class="question-section">

<div class="qa-item">

<h3>1. Container keeps stopping automatically. How will you troubleshoot?</h3>

<p>
Check container logs using docker logs command and inspect container status.
</p>

</div>

<div class="qa-item">

<h3>2. Docker image size is too large. How will you optimize it?</h3>

<p>
Use Alpine images, multi-stage builds and remove unnecessary packages.
</p>

</div>

<div class="qa-item">

<h3>3. Application inside container is not accessible. What will you check?</h3>

<p>
Check port mapping, firewall rules and container status.
</p>

</div>

<div class="qa-item">

<h3>4. How will you persist database data in Docker?</h3>

<p>
Use Docker volumes or bind mounts for persistent storage.
</p>

</div>

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

</script>

</body>
</html>
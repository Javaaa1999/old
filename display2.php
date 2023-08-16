<?php

include('connect.php');

session_start();

?>
<!DOCTYPE html>
<link rel="shortcut icon" href="web-programming.png" type="image/x-icon">
<html>
<head>
  <title>StudConnect</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #2E4F4F;
      margin: 0;
      padding: 0;
    }

    #header {
      background-color: #577D86;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    #navbar {
      background-color: #B9EDDD;
      padding: 10px;
    }

    #navbar ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    #navbar li {
      display: inline-block;
      margin-right: 10px;
    }

    #navbar a {
      color: #333;
      text-decoration: none;
      padding: 5px 10px;
      border-radius: 4px;
    }

    #navbar a:hover {
      background-color: #333;
      color: #fff;
    }

    #content {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      border-radius: 5%;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #footer {
      background-color: #577D86;
      color: #fff;
      padding: 10px;
      text-align: center;
    }
    button[type="logout"] {
    padding: 10px 10px;
    margin-left: 1010px;
    background-color: #569DAA;
    color: black;
    border: none;
    border-radius: 5px;
    cursor: pointer;
        }
  </style>
</head>
<body>
  <div id="header">
    <h1>Welcome to Our StudConnect</h1>
  </div>

  <div id="navbar">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <a href="logintest.php"><button type="logout" class="btn btn-outline-info">Log Out</button></a>


  <div id="content">
    <h2>About StudConnect</h2>
    <p>Student Connect is a comprehensive platform designed to facilitate communication, collaboration, and support among students in educational settings. It serves as a digital hub where students can connect with their peers, teachers, and administrators to enhance their learning experience and foster a sense of community.</p>
    <p>At its core, Student Connect provides a secure online space where students can interact with each other and engage in various activities. It offers features such as discussion forums, chat rooms, and social networking functionalities, enabling students to exchange ideas, ask questions, and share resources. These tools encourage collaboration, enabling students to work together on projects, assignments, or study groups.</p>
    <p>Furthermore, Student Connect offers seamless integration with the school's learning management system (LMS) or educational platforms, allowing students to access course materials, submit assignments, and receive feedback from their instructors. It also provides a centralized repository for important announcements, event calendars, and academic resources, ensuring that students stay informed and organized.</p>
    <p>Student Connect also promotes student support and well-being. It may include features such as virtual counseling services, access to academic resources and tutoring, and avenues for reporting concerns or seeking assistance. Through the platform, students can connect with counselors, mentors, or student advisors, who can provide guidance, mentorship, and address any personal or academic challenges they may face.</p>
    <p>In summary, Student Connect is a comprehensive online platform that empowers students by providing a virtual community, fostering collaboration, and offering academic and emotional support. It aims to enhance the overall educational experience and create a connected learning environment where students can thrive.</p>

  </div>

  <div id="footer">
    &copy; 2023 Our StudConnect. All rights reserved.
  </div>
</body>
</html>
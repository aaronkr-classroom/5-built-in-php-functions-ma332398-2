<?php
// echo $_SERVER['SCRIPT_NAME'];
// phpinfo();
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<h1>5장 - 내장 함수</h1>

<h2 id><code>var_dump()</code> 함수 </h2>
<?php include '0_var_dump.php'; ?>
<a href="#">Top &uarr;</a>
<hr>

<h2 id="1"><code>다소문자와 문자개수 함수 </h2>
<?php include '1_case-and-character-count.php'; ?>
<a href="#">Top &uarr;</a>
<hr>

<h2 id="2"><code>문자 찾기 함수 </h2>
<?php include '2_finding-characters.php'; ?>
<a href="#">Top &uarr;</a>
<hr>

<h2 id="3"><code>문자 변경이나 삭제 함수 </h2>
<?php include '3_removing-and-replacing-characters.php'; ?>
<a href="#">Top &uarr;</a>
<hr>

<h2 id="4"><code>멀티바이트 문자 함수 </h2>
<?php include '4_multibyte-string-functions.php'; ?>
<a href="#">Top &uarr;</a>
<hr>

<h2 id="5"><code>정규화 함수</h2>
<?php include '5_regular-expression-functions.php'; ?>
<a href="#">Top &uarr;</a>
<hr>

<?php include 'includes/footer.php'; ?>
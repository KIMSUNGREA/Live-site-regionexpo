<?php include_once('../../_head.php'); ?>

<!-- 서브 상단 -->
<div class="content-header s65">
	<div class="header-wrap">
		<h1 class="title">2023 지방시대 엑스포  <strong>사진관</strong></h1>
	</div>
	<div class="tab-wrap col-3">
		<a href="/page/s6/s1.php" class="btn link">공지사항</a>
		<a href="/page/s6/s2.php" class="btn link">보도자료</a>
		<a href="/page/s6/s3.php" class="btn link">콘텐츠관</a>
		<a href="/page/s6/s4.php" class="btn link">영상관</a>
		<a href="/page/s6/s5.php" class="btn link current">사진관</a>
	</div>
</div>
<!-- 서브 상단 -->

<!-- 서브 본문 -->
<div class="content-primary">
    <!-- 서브 breadcrumb -->
    <section class="navigation">
        <div class="w1280"><img src="/assets/images/sub/home_ico.png" alt="home"> &nbsp; &gt; &nbsp; 프레스관 &nbsp; &gt; &nbsp; <strong>사진관</strong></div>
    </section>
    <!-- 서브 breadcrumb -->
	<section class="section-1">
		<div class="title-wrap">
			<h2 class="title">사진관</h2>
		</div>
	</section>
</div>
<!-- // 서브 본문 -->

<div class="board_wrap">
	<div class="w1100">
		<?php rt_app("rtboard","display",array("dxphoto"));?>
	</div>
</div>

<?php include_once('../../_tail.php');?>
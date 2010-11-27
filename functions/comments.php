<?php
require_once('/home/life/public_html/classes/comments.php');

$comments = new Comments;

if (isset($_POST['post_comment'])) {

	if (!$auth) {
		die('cannot auth');
	}

	if (!$auth->isLoggedIn()) {
		$msg = "Sorry, you're not logged in, so you can't post a new comment.";
		return;
	}
	
	$userid = (int)$_SESSION['userid'];
	$pageid = (int)$_POST['page_id'];
	$content = $_POST['content']; // secure

	$add = $comments->add($userid, $pageid, $content);
	echo $add;
}

?>

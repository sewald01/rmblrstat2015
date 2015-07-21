$(document).ready(function() {
	$(".questions").click(showAnswers);
});

function showAnswers() {
	var $this = $(this);
	var href = $this.attr("href");
	var answers = $(href);
	answers.slideToggle();
	return false;
}
	$(document).ready(function() {
	   var referrer =  document.referrer,
	       professionalProfiles = "http://www.west-inc.com/professional-profiles/",
	       teamPage = "http://www.west-inc.com/team/";

	   if (referrer == professionalProfiles) {
	   	var container = $("#main-wrapper-personnel");
	   	container.before( '<div class="backBTN"><a href="http://www.west-inc.com/professional-profiles/"><img src="http://www.west-inc.com/wp-content/themes/west_theme/images/backBTN_up.png" alt="Back to Professional Profiles" id="Back to Personnel"></a></div>' );
	   } else if (referrer == teamPage) {
	   	var container = $("#main-wrapper-personnel");
	   	container.before( '<div class="backBTN"><a href="http://www.west-inc.com/team/"><img src="http://www.west-inc.com/wp-content/themes/west_theme/images/backBTN_up.png" alt="Back to Professional Profiles" id="Back to Personnel"></a></div>' );
	   }

		 $('.email-before-download-container .pbi--right a.pdf-icon').on('click', function (e) {
			 e.preventDefault();
			 $(this).parent().parent().toggleClass('active');
		 });

		 // $('.ssc-subnav-toggle').on('click', function (e) {
			//  e.preventDefault();
			//  $('.ssc-subnav').toggleClass('active');
		 // });
	});

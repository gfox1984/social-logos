<?php

/**
 * Globally registers the 'social logos' plugin
 *
 * This ensures plugin using it is on the latest version of Social Logos, and helps to avoid conflicts.
 */

/* !!!


IF YOU ARE EDITING THIS FILE, THEN YOU ARE EDITING A FILE THAT GETS OUTPUT FROM THE SOCIAL LOGOS REPO!

https://github.com/Automattic/social-logos

DO NOT EDIT THIS FILE! 

If you need to edit this file, edit index-header.php and index-footer.php in the Social Logos repo instead
OR if you're looking to change how SVGs get output, you'll need to edit strings in the Gruntfile :)

!!! */


function get_social_logo( $social_logo ) {
	$svg = "";

	switch ( $social_logo ) {
		case 'amazon':
			$svg = '<svg class="social-logo social-logo-amazon" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M13.582 8.182c-1.648.185-3.802.308-5.344.984-1.781.769-3.03 2.337-3.03 4.644 0 2.953 1.86 4.429 4.253 4.429 2.02 0 3.125-.477 4.685-2.065.516.747.685 1.109 1.629 1.894a.589.589 0 00.672-.066l.006.006c.567-.505 1.599-1.401 2.18-1.888.231-.188.19-.496.009-.754-.52-.718-1.072-1.303-1.072-2.634V8.305c0-1.876.133-3.599-1.249-4.891C15.23 2.369 13.422 2 12.04 2 9.336 2 6.318 3.01 5.686 6.351c-.068.355.191.542.423.594l2.754.298c.258-.013.445-.266.494-.523.236-1.151 1.2-1.706 2.284-1.706.584 0 1.249.215 1.595.738.398.584.346 1.384.346 2.061v.369zm-.533 5.906c-.451.8-1.169 1.291-1.967 1.291-1.09 0-1.728-.83-1.728-2.061 0-2.42 2.171-2.86 4.227-2.86v.615c.001 1.108.027 2.031-.532 3.015zm7.634 5.251C18.329 21.076 14.917 22 11.979 22c-4.118 0-7.826-1.522-10.632-4.057-.22-.199-.024-.471.241-.317 3.027 1.762 6.771 2.823 10.639 2.823 2.608 0 5.476-.541 8.115-1.66.397-.169.73.262.341.55zm.653 1.704c-.194.163-.379.076-.293-.139.284-.71.92-2.298.619-2.684-.301-.386-1.99-.183-2.749-.092-.23.027-.266-.173-.059-.319 1.348-.946 3.555-.673 3.811-.356.26.32-.066 2.533-1.329 3.59z"/></g></svg>';
			break;
		case 'behance':
			$svg = '<svg class="social-logo social-logo-behance" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M7.799 5.698c.589 0 1.12.051 1.606.156.482.102.894.273 1.241.507.344.235.612.546.804.938.188.387.281.871.281 1.443 0 .619-.141 1.137-.421 1.551-.284.413-.7.751-1.255 1.014.756.218 1.317.601 1.689 1.146.374.549.557 1.205.557 1.975 0 .623-.12 1.161-.359 1.612a3.144 3.144 0 01-.973 1.114c-.408.288-.876.5-1.399.637A6.144 6.144 0 017.963 18H2V5.698h5.799m-.35 4.97c.481 0 .878-.114 1.192-.345.311-.228.463-.603.463-1.119 0-.286-.051-.523-.152-.707a1.123 1.123 0 00-.416-.427 1.733 1.733 0 00-.596-.216 3.616 3.616 0 00-.697-.06H4.709v2.874h2.74zm.151 5.237c.267 0 .521-.024.759-.077.243-.053.457-.137.637-.261.182-.12.332-.283.441-.491.11-.206.163-.474.163-.798 0-.633-.18-1.084-.533-1.357-.356-.27-.83-.404-1.413-.404H4.709v3.388H7.6zm8.562-.041c.367.358.897.538 1.583.538.493 0 .92-.125 1.277-.374.354-.248.571-.514.654-.79h2.155c-.347 1.072-.872 1.838-1.589 2.299-.708.463-1.572.693-2.58.693-.701 0-1.332-.113-1.899-.337a4.041 4.041 0 01-1.439-.958 4.364 4.364 0 01-.904-1.484 5.433 5.433 0 01-.32-1.899c0-.666.11-1.288.329-1.863a4.36 4.36 0 01.933-1.492c.406-.42.885-.751 1.444-.994a4.63 4.63 0 011.857-.363c.754 0 1.414.145 1.98.44a3.941 3.941 0 011.389 1.181 4.82 4.82 0 01.783 1.69c.16.632.217 1.292.171 1.983h-6.428c-.001.706.237 1.372.604 1.73m2.811-4.68c-.291-.321-.783-.496-1.384-.496-.39 0-.714.066-.973.2a1.972 1.972 0 00-.621.491 1.772 1.772 0 00-.328.628 2.695 2.695 0 00-.111.587h3.98c-.058-.625-.271-1.085-.563-1.41zm-3.916-3.446h4.985V6.524h-4.985v1.214z"/></g></svg>';
			break;
		case 'blogger-alt':
			$svg = '<svg class="social-logo social-logo-blogger-alt" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M19.779 9.904h-.981l-.021.001a1.163 1.163 0 01-1.16-1.079l-.001-.013A5.813 5.813 0 0011.803 3H8.871a5.813 5.813 0 00-5.813 5.813v6.375a5.813 5.813 0 005.813 5.813h6.257a5.814 5.814 0 005.813-5.813l.002-4.121a1.164 1.164 0 00-1.164-1.163zM8.726 7.713h3.291a1.117 1.117 0 110 2.234H8.726a1.117 1.117 0 110-2.234zm6.601 8.657H8.72a1.057 1.057 0 110-2.114h6.607a1.057 1.057 0 110 2.114z"/></g></svg>';
			break;
		case 'blogger':
			$svg = '<svg class="social-logo social-logo-blogger" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M14.722 14.019a.654.654 0 01-.654.654H9.977a.654.654 0 010-1.308h4.091c.361 0 .654.293.654.654zm-4.741-3.321h2.038a.692.692 0 000-1.384H9.981a.692.692 0 000 1.384zM21 5v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2zm-3.456 6.39a.72.72 0 00-.72-.72h-.607l-.013.001a.72.72 0 01-.718-.668l-.001-.008a3.599 3.599 0 00-3.599-3.599H10.07a3.599 3.599 0 00-3.599 3.599v3.947a3.6 3.6 0 003.599 3.599h3.874a3.599 3.599 0 003.599-3.599l.001-2.552z"/></g></svg>';
			break;
		case 'codepen':
			$svg = '<svg class="social-logo social-logo-codepen" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M22.016 8.84l-.007-.037c-.005-.025-.008-.048-.015-.072-.003-.015-.01-.028-.013-.042l-.023-.062-.02-.042a.391.391 0 00-.03-.057.357.357 0 00-.025-.038l-.035-.052-.03-.037c-.015-.017-.028-.032-.043-.045-.01-.012-.022-.023-.035-.035a.442.442 0 00-.048-.04l-.037-.03-.015-.012-9.161-6.096a.864.864 0 00-.955 0L2.359 8.237l-.015.012-.038.028-.048.04a.638.638 0 00-.078.082c-.012.013-.022.023-.03.037-.011.017-.025.035-.035.052a.498.498 0 01-.025.038c-.011.022-.021.039-.03.059a.39.39 0 01-.02.041 1.184 1.184 0 00-.034.106c-.007.023-.011.046-.016.071-.001.014-.005.025-.006.037a.73.73 0 00-.009.114v6.093c0 .037.003.075.008.112l.007.038c.005.023.008.047.015.072a.209.209 0 00.013.04c.007.022.013.042.022.063l.02.04a.4.4 0 00.055.096l.035.052.03.037a.603.603 0 00.042.045l.035.035c.015.013.032.028.048.04l.038.03.013.01 9.163 6.095a.858.858 0 00.959.004l9.163-6.095.015-.01c.013-.01.027-.02.037-.03a.534.534 0 00.048-.04c.013-.012.025-.023.035-.035.017-.015.03-.032.043-.045l.03-.037a.678.678 0 00.035-.052l.025-.038a.4.4 0 00.03-.058l.02-.04.023-.063c.003-.013.01-.027.013-.04.007-.025.01-.048.015-.072l.007-.037c.003-.042.007-.079.007-.117V8.954a.625.625 0 00-.008-.114zm-9.154-4.376l6.751 4.49-3.016 2.013-3.735-2.492V4.464zm-1.724 0v4.009l-3.735 2.494-3.014-2.013 6.749-4.49zm-7.439 6.098L5.853 12l-2.155 1.438v-2.876zm7.439 8.974l-6.749-4.491 3.015-2.011 3.735 2.492v4.01zM12 14.035L8.953 12 12 9.966 15.047 12 12 14.035zm.862 5.501v-4.009l3.735-2.492 3.016 2.011-6.751 4.49zm7.441-6.098L18.147 12l2.156-1.438v2.876z"/></g></svg>';
			break;
		case 'dribbble':
			$svg = '<svg class="social-logo social-logo-dribbble" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12 22C6.486 22 2 17.514 2 12S6.486 2 12 2s10 4.486 10 10-4.486 10-10 10zm8.434-8.631c-.292-.092-2.644-.794-5.32-.365 1.117 3.07 1.572 5.57 1.659 6.09a8.56 8.56 0 003.661-5.725zm-5.098 6.507c-.127-.749-.623-3.361-1.822-6.477l-.056.019c-4.818 1.679-6.547 5.02-6.701 5.334A8.5 8.5 0 0012 20.555a8.488 8.488 0 003.336-.679zm-9.682-2.152c.193-.331 2.538-4.213 6.943-5.637.111-.036.224-.07.337-.102a29.017 29.017 0 00-.692-1.45c-4.266 1.277-8.405 1.223-8.778 1.216a8.497 8.497 0 002.19 5.973zm-2.015-7.46c.382.005 3.901.02 7.897-1.041a54.477 54.477 0 00-3.167-4.94 8.572 8.572 0 00-4.73 5.981zm6.359-6.555a45.7 45.7 0 013.187 5c3.037-1.138 4.323-2.867 4.477-3.085a8.508 8.508 0 00-7.664-1.915zm8.614 2.903c-.18.243-1.612 2.078-4.77 3.367a27.028 27.028 0 01.751 1.678c2.842-.357 5.666.215 5.948.275a8.503 8.503 0 00-1.929-5.32z"/></g></svg>';
			break;
		case 'dropbox':
			$svg = '<svg class="social-logo social-logo-dropbox" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12 6.134L6.069 9.797 2 6.54l5.883-3.843L12 6.134zm-10 6.92l5.883 3.843L12 13.459 6.069 9.797 2 13.054zm10 .405l4.116 3.439L22 13.054l-4.069-3.257L12 13.459zM22 6.54l-5.884-3.843L12 6.134l5.931 3.663L22 6.54zm-9.989 7.66l-4.129 3.426-1.767-1.153v1.291l5.896 3.539 5.897-3.539v-1.291l-1.769 1.153-4.128-3.426z"/></g></svg>';
			break;
		case 'eventbrite':
			$svg = '<svg class="social-logo social-logo-eventbrite" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M18.041 3.931L5.959 3A2.96 2.96 0 003 5.959v12.083A2.96 2.96 0 005.959 21l12.083-.931C19.699 19.983 21 18.744 21 17.11V6.89c0-1.634-1.259-2.863-2.959-2.959zM16.933 8.17c-.082.215-.192.432-.378.551-.188.122-.489.132-.799.132-1.521 0-3.062-.048-4.607-.048-.152.708-.304 1.416-.451 2.128.932-.004 1.873.005 2.81.005.726 0 1.462-.069 1.586.525.04.189-.001.426-.052.615-.105.38-.258.676-.625.783-.185.054-.408.058-.646.058-1.145 0-2.345.017-3.493.02-.169.772-.328 1.553-.489 2.333 1.57-.005 3.067-.041 4.633-.058.627-.007 1.085.194 1.009.85a2.17 2.17 0 01-.211.725c-.102.208-.248.376-.488.452-.237.075-.541.064-.862.078-.304.014-.614.008-.924.016-.309.009-.619.022-.919.022-1.253 0-2.429.08-3.683.073-.603-.004-1.014-.249-1.124-.757-.059-.273-.018-.58.036-.841a3542.51 3542.51 0 011.629-7.763c.056-.265.114-.511.225-.714a1.24 1.24 0 01.79-.62c.368-.099.883-.047 1.344-.047.305 0 .612.008.914.016.925.026 1.817.03 2.747.053.304.007.615.016.915.016.621 0 1.17.073 1.245.614.039.288-.051.567-.132.783z" fill-rule="evenodd" clip-rule="evenodd"/></g></svg>';
			break;
		case 'facebook':
			$svg = '<svg class="social-logo social-logo-facebook" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z"/></g></svg>';
			break;
		case 'feed':
			$svg = '<svg class="social-logo social-logo-feed" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M2 8.667V12c5.515 0 10 4.485 10 10h3.333c0-7.363-5.97-13.333-13.333-13.333zM2 2v3.333c9.19 0 16.667 7.477 16.667 16.667H22C22 10.955 13.045 2 2 2zm2.5 15a2.5 2.5 0 100 5 2.5 2.5 0 000-5z"/></g></svg>';
			break;
		case 'flickr':
			$svg = '<svg class="social-logo social-logo-flickr" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M6.5 7c-2.75 0-5 2.25-5 5s2.25 5 5 5 5-2.25 5-5-2.25-5-5-5zm11 0c-2.75 0-5 2.25-5 5s2.25 5 5 5 5-2.25 5-5-2.25-5-5-5z"/></g></svg>';
			break;
		case 'foursquare':
			$svg = '<svg class="social-logo social-logo-foursquare" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M17.573 2H6.905C5.434 2 5 3.107 5 3.805v16.948c0 .785.422 1.077.66 1.172.238.097.892.177 1.285-.275 0 0 5.035-5.843 5.122-5.93.132-.132.132-.132.262-.132h3.26c1.368 0 1.588-.977 1.732-1.552.078-.318.692-3.428 1.225-6.122l.675-3.368C19.56 2.893 19.14 2 17.573 2zm-1.078 5.22c-.053.252-.372.518-.665.518h-4.157c-.467 0-.802.318-.802.787v.508c0 .467.337.798.805.798h3.528c.331 0 .655.362.583.715-.072.353-.407 2.102-.448 2.295-.04.193-.262.523-.655.523h-2.88c-.523 0-.683.068-1.033.503-.35.437-3.505 4.223-3.505 4.223-.032.035-.063.027-.063-.015V4.852c0-.298.26-.648.648-.648h8.562c.315 0 .61.297.528.683l-.446 2.333z"/></g></svg>';
			break;
		case 'ghost':
			$svg = '<svg class="social-logo social-logo-ghost" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M10.203 20.997H3.005v-3.599h7.198v3.599zm10.792-3.599h-7.193v3.599h7.193v-3.599zm.003-7.198H3v3.599h17.998V10.2zm-7.195-7.197H3.005v3.599h10.798V3.003zm7.197 0h-3.599v3.599H21V3.003z"/></g></svg>';
			break;
		case 'github':
			$svg = '<svg class="social-logo social-logo-github" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12 2C6.477 2 2 6.477 2 12c0 4.419 2.865 8.166 6.839 9.489.5.09.682-.218.682-.484 0-.236-.009-.866-.014-1.699-2.782.602-3.369-1.34-3.369-1.34-.455-1.157-1.11-1.465-1.11-1.465-.909-.62.069-.608.069-.608 1.004.071 1.532 1.03 1.532 1.03.891 1.529 2.341 1.089 2.91.833.091-.647.349-1.086.635-1.337-2.22-.251-4.555-1.111-4.555-4.943 0-1.091.39-1.984 1.03-2.682-.103-.254-.447-1.27.097-2.646 0 0 .84-.269 2.75 1.025A9.548 9.548 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.748-1.025 2.748-1.025.546 1.376.202 2.394.1 2.646.64.699 1.026 1.591 1.026 2.682 0 3.841-2.337 4.687-4.565 4.935.359.307.679.917.679 1.852 0 1.335-.012 2.415-.012 2.741 0 .269.18.579.688.481A9.997 9.997 0 0022 12c0-5.523-4.477-10-10-10z"/></g></svg>';
			break;
		case 'google-alt':
			$svg = '<svg class="social-logo social-logo-google-alt" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm-.05 16c-3.312 0-6-2.688-6-6s2.688-6 6-6c1.62 0 2.976.594 4.014 1.566L14.26 9.222c-.432-.408-1.188-.888-2.31-.888-1.986 0-3.606 1.65-3.606 3.672 0 2.022 1.62 3.672 3.606 3.672 2.298 0 3.144-1.59 3.3-2.532h-3.306v-2.238h5.616c.084.378.15.732.15 1.23 0 3.426-2.298 5.862-5.76 5.862z"/></g></svg>';
			break;
		case 'google-plus-alt':
			$svg = '<svg class="social-logo social-logo-google-plus-alt" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M8 11h6.61c.06.35.11.7.11 1.16 0 4-2.68 6.84-6.72 6.84-3.87 0-7-3.13-7-7s3.13-7 7-7c1.89 0 3.47.69 4.69 1.83l-1.9 1.83c-.52-.5-1.43-1.08-2.79-1.08-2.39 0-4.34 1.98-4.34 4.42S5.61 16.42 8 16.42c2.77 0 3.81-1.99 3.97-3.02H8V11zm15 0h-2V9h-2v2h-2v2h2v2h2v-2h2"/></g></svg>';
			break;
		case 'google-plus':
			$svg = '<svg class="social-logo social-logo-google-plus" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm-1.919 14.05a4.051 4.051 0 010-8.1c1.094 0 2.009.401 2.709 1.057l-1.15 1.118a2.229 2.229 0 00-1.559-.599c-1.341 0-2.434 1.114-2.434 2.479s1.094 2.479 2.434 2.479c1.551 0 2.122-1.073 2.227-1.709h-2.232v-1.511h3.791c.057.255.101.494.101.83.001 2.312-1.55 3.956-3.887 3.956zM19 12.75h-1.25V14h-1.5v-1.25H15v-1.5h1.25V10h1.5v1.25H19v1.5z"/></g></svg>';
			break;
		case 'google':
			$svg = '<svg class="social-logo social-logo-google" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12.02 10.18v3.73h5.51c-.26 1.57-1.67 4.22-5.5 4.22-3.31 0-6.01-2.75-6.01-6.12s2.7-6.12 6.01-6.12c1.87 0 3.13.8 3.85 1.48l2.84-2.76C16.99 2.99 14.73 2 12.03 2c-5.52 0-10 4.48-10 10s4.48 10 10 10c5.77 0 9.6-4.06 9.6-9.77 0-.83-.11-1.42-.25-2.05h-9.36z"/></g></svg>';
			break;
		case 'instagram':
			$svg = '<svg class="social-logo social-logo-instagram" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12 4.622c2.403 0 2.688.009 3.637.052.877.04 1.354.187 1.671.31.42.163.72.358 1.035.673.315.315.51.615.673 1.035.123.317.27.794.31 1.671.043.949.052 1.234.052 3.637s-.009 2.688-.052 3.637c-.04.877-.187 1.354-.31 1.671-.163.42-.358.72-.673 1.035-.315.315-.615.51-1.035.673-.317.123-.794.27-1.671.31-.949.043-1.233.052-3.637.052s-2.688-.009-3.637-.052c-.877-.04-1.354-.187-1.671-.31a2.786 2.786 0 01-1.035-.673 2.786 2.786 0 01-.673-1.035c-.123-.317-.27-.794-.31-1.671-.043-.949-.052-1.234-.052-3.637s.009-2.688.052-3.637c.04-.877.187-1.354.31-1.671.163-.42.358-.72.673-1.035.315-.315.615-.51 1.035-.673.317-.123.794-.27 1.671-.31.949-.043 1.234-.052 3.637-.052M12 3c-2.444 0-2.751.01-3.711.054-.958.044-1.612.196-2.184.418a4.401 4.401 0 00-1.594 1.039c-.5.5-.808 1.002-1.038 1.594-.223.572-.375 1.226-.419 2.184C3.01 9.249 3 9.556 3 12s.01 2.751.054 3.711c.044.958.196 1.612.418 2.185.23.592.538 1.094 1.038 1.594s1.002.808 1.594 1.038c.572.222 1.227.375 2.185.418.96.044 1.267.054 3.711.054s2.751-.01 3.711-.054c.958-.044 1.612-.196 2.185-.418a4.411 4.411 0 001.594-1.038c.5-.5.808-1.002 1.038-1.594.222-.572.375-1.227.418-2.185.044-.96.054-1.267.054-3.711s-.01-2.751-.054-3.711c-.044-.958-.196-1.612-.418-2.185A4.411 4.411 0 0019.49 4.51c-.5-.5-1.002-.808-1.594-1.038-.572-.222-1.227-.375-2.185-.418C14.751 3.01 14.444 3 12 3zm0 4.378a4.622 4.622 0 100 9.244 4.622 4.622 0 000-9.244zM12 15a3 3 0 110-6 3 3 0 010 6zm4.804-8.884a1.08 1.08 0 10.001 2.161 1.08 1.08 0 00-.001-2.161z"/></g></svg>';
			break;
		case 'linkedin':
			$svg = '<svg class="social-logo social-logo-linkedin" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M19.7 3H4.3A1.3 1.3 0 003 4.3v15.4A1.3 1.3 0 004.3 21h15.4a1.3 1.3 0 001.3-1.3V4.3A1.3 1.3 0 0019.7 3zM8.339 18.338H5.667v-8.59h2.672v8.59zM7.004 8.574a1.548 1.548 0 11-.002-3.096 1.548 1.548 0 01.002 3.096zm11.335 9.764H15.67v-4.177c0-.996-.017-2.278-1.387-2.278-1.389 0-1.601 1.086-1.601 2.206v4.249h-2.667v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.779 3.203 4.092v4.711z"/></g></svg>';
			break;
		case 'mail':
			$svg = '<svg class="social-logo social-logo-mail" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4.236l-8 4.882-8-4.882V6h16v2.236z"/></g></svg>';
			break;
		case 'medium':
			$svg = '<svg class="social-logo social-logo-medium" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M20.962 7.257l-5.457 8.867-3.923-6.375 3.126-5.08a.621.621 0 01.79-.225l5.43 2.715.006.003.011.008a.067.067 0 01.017.087zM9.86 8.592v5.783l5.14 2.57-5.14-8.353zm5.912 8.739l4.231 2.115c.551.275.997.083.997-.43V8.835l-5.228 8.496zM8.968 7.178L3.665 4.527a.608.608 0 00-.27-.071c-.232 0-.395.18-.395.482v11.45a.99.99 0 00.498.806l4.671 2.335c.12.06.234.088.337.088.29 0 .494-.225.494-.602V7.231a.058.058 0 00-.032-.053z"/></g></svg>';
			break;
		case 'patreon':
			$svg = '<svg class="social-logo social-logo-patreon" height="24" width="24" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path fill-rule="evenodd" clip-rule="evenodd" d="M13.975 5a5.05 5.05 0 00-5.041 5.046c0 2.774 2.261 5.03 5.04 5.03A5.034 5.034 0 0019 10.047C19 7.264 16.746 5 13.975 5zM5 18.44h2.461V5H5v13.44z"/></g></svg>';
			break;
		case 'pinterest-alt':
			$svg = '<svg class="social-logo social-logo-pinterest-alt" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12.289 2C6.617 2 3.606 5.648 3.606 9.622c0 1.846 1.025 4.146 2.666 4.878.25.111.381.063.439-.169.044-.175.267-1.029.365-1.428a.365.365 0 00-.091-.362c-.54-.63-.975-1.791-.975-2.873 0-2.777 2.194-5.464 5.933-5.464 3.23 0 5.49 2.108 5.49 5.122 0 3.407-1.794 5.768-4.13 5.768-1.291 0-2.257-1.021-1.948-2.277.372-1.495 1.089-3.112 1.089-4.191 0-.967-.542-1.775-1.663-1.775-1.319 0-2.379 1.309-2.379 3.059 0 1.115.394 1.869.394 1.869s-1.302 5.279-1.54 6.261c-.405 1.666.053 4.368.094 4.604.021.126.167.169.25.063.129-.165 1.699-2.419 2.142-4.051.158-.59.817-2.995.817-2.995.43.784 1.681 1.446 3.013 1.446 3.963 0 6.822-3.494 6.822-7.833C20.394 5.112 16.849 2 12.289 2"/></g></svg>';
			break;
		case 'pinterest':
			$svg = '<svg class="social-logo social-logo-pinterest" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12 2C6.477 2 2 6.477 2 12c0 4.236 2.636 7.855 6.356 9.312-.087-.791-.166-2.005.035-2.869.182-.78 1.173-4.971 1.173-4.971s-.299-.599-.299-1.484c0-1.39.806-2.429 1.809-2.429.853 0 1.265.641 1.265 1.409 0 .858-.546 2.141-.828 3.329-.236.996.499 1.807 1.481 1.807 1.777 0 3.144-1.874 3.144-4.579 0-2.394-1.72-4.068-4.177-4.068-2.845 0-4.515 2.134-4.515 4.34 0 .859.331 1.781.744 2.282a.297.297 0 01.069.287c-.077.316-.246.995-.279 1.134-.044.183-.145.222-.334.134-1.249-.581-2.03-2.407-2.03-3.874 0-3.154 2.292-6.051 6.607-6.051 3.469 0 6.165 2.472 6.165 5.775 0 3.446-2.173 6.22-5.189 6.22-1.013 0-1.966-.526-2.292-1.148l-.623 2.377c-.226.869-.835 1.957-1.243 2.622.936.289 1.93.445 2.961.445 5.523 0 10-4.477 10-10S17.523 2 12 2z"/></g></svg>';
			break;
		case 'pocket':
			$svg = '<svg class="social-logo social-logo-pocket" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M21.927 4.194A1.82 1.82 0 0020.222 3H3.839a1.823 1.823 0 00-1.813 1.814v6.035l.069 1.2c.29 2.73 1.707 5.115 3.899 6.778l.119.089.025.018a9.897 9.897 0 003.91 1.727 10.06 10.06 0 004.049-.014.261.261 0 00.064-.023 9.906 9.906 0 003.753-1.691l.025-.018c.04-.029.08-.058.119-.089 2.192-1.664 3.609-4.049 3.898-6.778l.069-1.2V4.814a1.792 1.792 0 00-.098-.62zm-4.235 6.287l-4.704 4.512a1.372 1.372 0 01-1.898 0l-4.705-4.512a1.371 1.371 0 111.898-1.979l3.756 3.601 3.755-3.601a1.372 1.372 0 011.898 1.979z"/></g></svg>';
			break;
		case 'polldaddy':
			$svg = '<svg class="social-logo social-logo-polldaddy" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12 2C6.487 2 2 6.487 2 12c0 5.514 4.487 10 10 10 5.514 0 10-4.486 10-10 0-5.513-4.486-10-10-10zm.991 1.68c2.361.084 4.657 1.251 6.197 3.136.283.334.541.693.774 1.067a7.775 7.775 0 00-6.094-2.94 7.764 7.764 0 00-5.896 2.703c-.006.003-.01.01-.016.014l-.152.159-.031.032a6.122 6.122 0 00-1.633 4.165 6.15 6.15 0 006.143 6.143c.57 0 1.123-.081 1.649-.227-1.849.839-4.131.747-5.926-.324-1.841-1.089-3.171-3.111-3.433-5.313A7.386 7.386 0 016.69 6.137C8.294 4.5 10.634 3.563 12.991 3.68zm3.373 8.519c-.049-2.024-1.587-3.889-3.544-4.174-1.927-.343-3.917.857-4.451 2.661a3.673 3.673 0 00.2 2.653c.39.8 1.067 1.451 1.894 1.759 1.664.654 3.63-.27 4.173-1.863.593-1.58-.396-3.423-1.94-3.776-1.52-.407-3.161.757-3.204 2.243a2.362 2.362 0 00.753 1.879c.501.476 1.23.667 1.871.529a2.067 2.067 0 001.469-1.134 1.912 1.912 0 00-.087-1.767c-.297-.513-.859-.863-1.429-.881a1.698 1.698 0 00-1.437.679 1.525 1.525 0 00-.18 1.489c.004.011.01.021.016.03.193.634.774 1.1 1.467 1.117a1.618 1.618 0 01-.97-.183c-.466-.244-.809-.747-.893-1.29a1.8 1.8 0 01.499-1.539 2.016 2.016 0 011.58-.606c.593.04 1.159.35 1.517.859.364.496.51 1.156.383 1.773-.116.62-.529 1.174-1.093 1.514a2.515 2.515 0 01-1.914.286c-.65-.161-1.226-.606-1.584-1.206a2.825 2.825 0 01-.341-2.031c.143-.7.573-1.321 1.176-1.753 1.193-.883 3.056-.751 4.106.411 1.106 1.1 1.327 3.027.406 4.371-.877 1.376-2.74 2.086-4.374 1.594-1.639-.449-2.913-2.079-3.031-3.853-.07-.884.13-1.797.583-2.577.445-.777 1.155-1.432 1.972-1.862 1.64-.88 3.816-.743 5.349.424 1.251.924 2.083 2.42 2.236 4.009l.001.03c0 2.9-2.359 5.26-5.26 5.26a5.216 5.216 0 01-1.947-.376 5.01 5.01 0 002.613-.079 4.955 4.955 0 002.514-1.751c.618-.828.95-1.861.901-2.869zM12 21.113c-5.024 0-9.111-4.087-9.111-9.113 0-4.789 3.713-8.723 8.411-9.081a6.548 6.548 0 00-.397.06c-2.644.453-5.017 2.106-6.32 4.409-1.309 2.301-1.391 5.19-.3 7.527 1.056 2.34 3.253 4.156 5.776 4.553 2.497.44 5.133-.483 6.787-2.301 1.719-1.797 2.269-4.529 1.486-6.796-.583-1.81-1.976-3.331-3.7-4.046 3.417.594 6.174 3.221 6.174 6.781 0 1.004-.241 2.02-.657 2.966-1.498 2.984-4.586 5.041-8.149 5.041z"/></g></svg>';
			break;
		case 'print':
			$svg = '<svg class="social-logo social-logo-print" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M9 16h6v2H9v-2zm13 1h-3v3a2 2 0 01-2 2H7a2 2 0 01-2-2v-3H2V9a2 2 0 012-2h1V5a2 2 0 012-2h10a2 2 0 012 2v2h1a2 2 0 012 2v8zM7 7h10V5H7v2zm10 7H7v6h10v-6zm3-3.5a1.5 1.5 0 10-3.001.001A1.5 1.5 0 0020 10.5z"/></g></svg>';
			break;
		case 'reddit':
			$svg = '<svg class="social-logo social-logo-reddit" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M22 11.816a2.279 2.279 0 00-2.277-2.277c-.593 0-1.122.24-1.526.614-1.481-.965-3.455-1.594-5.647-1.69l1.171-3.702 3.18.748a1.878 1.878 0 001.876 1.862 1.88 1.88 0 001.877-1.878 1.88 1.88 0 00-1.877-1.877c-.769 0-1.431.466-1.72 1.13l-3.508-.826a.386.386 0 00-.46.261l-1.35 4.268c-2.316.038-4.411.67-5.97 1.671a2.24 2.24 0 00-1.492-.581A2.279 2.279 0 002 11.816c0 .814.433 1.523 1.078 1.925a4.056 4.056 0 00-.061.672c0 3.292 4.011 5.97 8.941 5.97s8.941-2.678 8.941-5.97c0-.214-.02-.424-.053-.632A2.259 2.259 0 0022 11.816zm-3.224-7.422a1.1 1.1 0 11-.001 2.199 1.1 1.1 0 01.001-2.199zM2.777 11.816c0-.827.672-1.5 1.499-1.5.313 0 .598.103.838.269-.851.676-1.477 1.479-1.812 2.36a1.482 1.482 0 01-.525-1.129zm9.182 7.79c-4.501 0-8.164-2.329-8.164-5.193S7.457 9.22 11.959 9.22s8.164 2.329 8.164 5.193-3.663 5.193-8.164 5.193zm8.677-6.605c-.326-.89-.948-1.701-1.797-2.384.248-.186.55-.301.883-.301.827 0 1.5.673 1.5 1.5.001.483-.23.911-.586 1.185zm-11.64 1.703c-.76 0-1.397-.616-1.397-1.376 0-.76.637-1.397 1.397-1.397s1.376.637 1.376 1.397-.616 1.376-1.376 1.376zm7.405-1.376c0 .76-.616 1.376-1.376 1.376-.76 0-1.399-.616-1.399-1.376 0-.76.639-1.397 1.399-1.397s1.376.637 1.376 1.397zm-1.172 3.38a.389.389 0 010 .55c-.674.674-1.727 1.002-3.219 1.002l-.011-.002-.011.002c-1.492 0-2.544-.328-3.218-1.002a.389.389 0 11.55-.55c.521.521 1.394.775 2.669.775l.011.002.011-.002c1.275 0 2.148-.253 2.669-.775a.387.387 0 01.549 0z"/></g></svg>';
			break;
		case 'share':
			$svg = '<svg class="social-logo social-logo-share" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M18 16c-.788 0-1.499.31-2.034.807L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.048 4.118A2.981 2.981 0 0015 19a3 3 0 103-3z"/></g></svg>';
			break;
		case 'skype':
			$svg = '<svg class="social-logo social-logo-skype" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M10.113 2.699l.1-.02c.033.017.066.033.098.051l-.198-.031zM2.72 10.223l-.017.103c.018.032.033.064.051.095l-.034-.198zm18.555 3.548c.007-.035.011-.071.018-.106-.018-.031-.033-.064-.052-.095l.034.201zm-7.712 7.428c.032.019.065.035.096.053l.105-.017-.201-.036zM22 16.386a5.55 5.55 0 01-1.637 3.953 5.548 5.548 0 01-3.953 1.637 5.575 5.575 0 01-2.75-.725l.105-.017-.202-.035c.032.019.065.035.096.053a9.524 9.524 0 01-1.654.147 9.375 9.375 0 01-3.676-.743 9.38 9.38 0 01-3.002-2.023 9.397 9.397 0 01-2.023-3.002 9.375 9.375 0 01-.743-3.676c0-.546.049-1.093.142-1.628.018.032.033.064.051.095l-.034-.199-.017.103A5.586 5.586 0 012 7.615c0-1.493.582-2.898 1.637-3.953A5.555 5.555 0 017.59 2.024c.915 0 1.818.228 2.622.655l-.1.02.199.031c-.032-.018-.066-.034-.098-.051l.004-.001a9.543 9.543 0 011.788-.169 9.41 9.41 0 016.678 2.766 9.4 9.4 0 012.024 3.002 9.375 9.375 0 01.743 3.676c0 .575-.054 1.15-.157 1.712-.018-.031-.033-.064-.052-.095l.034.201c.007-.035.011-.071.018-.106.461.829.707 1.767.707 2.721zm-5.183-2.248c0-1.331-.613-2.743-3.033-3.282l-2.209-.49c-.84-.192-1.807-.444-1.807-1.237 0-.794.679-1.348 1.903-1.348 2.468 0 2.243 1.696 3.468 1.696.645 0 1.209-.379 1.209-1.031 0-1.521-2.435-2.663-4.5-2.663-2.242 0-4.63.952-4.63 3.488 0 1.221.436 2.521 2.839 3.123l2.984.745c.903.223 1.129.731 1.129 1.189 0 .762-.758 1.507-2.129 1.507-2.679 0-2.307-2.062-3.743-2.062-.645 0-1.113.444-1.113 1.078 0 1.236 1.501 2.886 4.856 2.886 3.195 0 4.776-1.538 4.776-3.599z"/></g></svg>';
			break;
		case 'spotify':
			$svg = '<svg class="social-logo social-logo-spotify" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2m4.586 14.424a.622.622 0 01-.857.207c-2.348-1.435-5.304-1.76-8.785-.964a.622.622 0 11-.277-1.215c3.809-.871 7.077-.496 9.713 1.115a.623.623 0 01.206.857M17.81 13.7a.78.78 0 01-1.072.257c-2.687-1.652-6.785-2.131-9.965-1.166A.779.779 0 116.32 11.3c3.632-1.102 8.147-.568 11.234 1.328a.78.78 0 01.256 1.072m.105-2.835c-3.223-1.914-8.54-2.09-11.618-1.156a.935.935 0 11-.542-1.79c3.532-1.072 9.404-.865 13.115 1.338a.936.936 0 11-.955 1.608"/></g></svg>';
			break;
		case 'squarespace':
			$svg = '<svg class="social-logo social-logo-squarespace" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M20.87 9.271a3.86 3.86 0 00-5.458 0l-6.141 6.141a.964.964 0 101.365 1.364l6.14-6.14a1.929 1.929 0 112.729 2.729l-6.022 6.022a1.929 1.929 0 002.729 0l4.658-4.658a3.86 3.86 0 000-5.458zm-2.047 2.047a.965.965 0 00-1.365 0l-6.14 6.14a1.929 1.929 0 01-2.729 0 .964.964 0 10-1.364 1.364 3.86 3.86 0 005.458 0l6.14-6.14a.966.966 0 000-1.364zm-2.047-6.141a3.858 3.858 0 00-5.458 0l-6.14 6.14a.964.964 0 101.364 1.364l6.141-6.14a1.929 1.929 0 012.729 0 .965.965 0 101.364-1.364zm-2.047 2.047a.964.964 0 00-1.364 0l-6.14 6.141a1.929 1.929 0 11-2.729-2.729l6.022-6.022a1.929 1.929 0 00-2.729 0L3.13 9.271a3.86 3.86 0 005.458 5.458l6.14-6.141a.963.963 0 00.001-1.364z"/></g></svg>';
			break;
		case 'stumbleupon':
			$svg = '<svg class="social-logo social-logo-stumbleupon" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12 4.294a4.471 4.471 0 00-4.471 4.471v6.353a1.059 1.059 0 11-2.118 0v-2.824H2v2.941a4.471 4.471 0 008.942 0v-6.47a1.059 1.059 0 112.118 0v1.294l1.412.647 2-.647V8.765A4.473 4.473 0 0012 4.294zm1.059 8.059v2.882a4.471 4.471 0 008.941 0v-2.824h-3.412v2.824a1.059 1.059 0 11-2.118 0v-2.882l-2 .647-1.411-.647z"/></g></svg>';
			break;
		case 'telegram':
			$svg = '<svg class="social-logo social-logo-telegram" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm3.08 14.757s-.25.625-.936.325l-2.541-1.949-1.63 1.486s-.127.096-.266.036c0 0-.12-.011-.27-.486-.15-.475-.911-2.972-.911-2.972L6 12.349s-.387-.137-.425-.438c-.037-.3.437-.462.437-.462l10.03-3.934s.824-.362.824.238l-1.786 9.004z"/></g></svg>';
			break;
		case 'tumblr-alt':
			$svg = '<svg class="social-logo social-logo-tumblr-alt" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M16.749 17.396c-.357.17-1.041.319-1.551.332-1.539.041-1.837-1.081-1.85-1.896V9.847h3.861v-2.91h-3.847V2.039h-2.817c-.046 0-.127.041-.138.144-.165 1.499-.867 4.13-3.783 5.181v2.484h1.945v6.282c0 2.151 1.587 5.206 5.775 5.135 1.413-.024 2.982-.616 3.329-1.126l-.924-2.743z"/></g></svg>';
			break;
		case 'tumblr':
			$svg = '<svg class="social-logo social-logo-tumblr" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M19 3H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zm-5.569 14.265c-2.446.042-3.372-1.742-3.372-2.998v-3.668H8.923v-1.45c1.703-.614 2.113-2.15 2.209-3.025.007-.06.054-.084.081-.084h1.645V8.9h2.246v1.7H12.85v3.495c.008.476.182 1.131 1.081 1.107.298-.008.697-.094.906-.194l.54 1.601c-.205.296-1.121.641-1.946.656z"/></g></svg>';
			break;
		case 'twitch':
			$svg = '<svg class="social-logo social-logo-twitch" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M16.499 8.089h-1.636v4.91h1.636v-4.91zm-4.499 0h-1.637v4.91H12v-4.91zM4.228 3.178L3 6.451v13.092h4.499V22h2.456l2.454-2.456h3.681L21 14.636V3.178H4.228zm15.136 10.638L16.5 16.681H12l-2.453 2.453V16.68H5.863V4.814h13.501v9.002z"/></g></svg>';
			break;
		case 'twitter-alt':
			$svg = '<svg class="social-logo social-logo-twitter-alt" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M22.23 5.924a8.212 8.212 0 01-2.357.646 4.115 4.115 0 001.804-2.27 8.221 8.221 0 01-2.606.996 4.103 4.103 0 00-6.991 3.742 11.647 11.647 0 01-8.457-4.287 4.087 4.087 0 00-.556 2.063 4.1 4.1 0 001.825 3.415 4.09 4.09 0 01-1.859-.513v.052a4.104 4.104 0 003.292 4.023 4.099 4.099 0 01-1.853.07 4.11 4.11 0 003.833 2.85 8.236 8.236 0 01-5.096 1.756 8.33 8.33 0 01-.979-.057 11.617 11.617 0 006.29 1.843c7.547 0 11.675-6.252 11.675-11.675 0-.178-.004-.355-.012-.531a8.298 8.298 0 002.047-2.123z"/></g></svg>';
			break;
		case 'twitter':
			$svg = '<svg class="social-logo social-logo-twitter" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M19 3H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2zm-2.534 6.71c.004.099.007.198.007.298 0 3.045-2.318 6.556-6.556 6.556a6.52 6.52 0 01-3.532-1.035 4.626 4.626 0 003.412-.954 2.307 2.307 0 01-2.152-1.6 2.295 2.295 0 001.04-.04 2.306 2.306 0 01-1.848-2.259v-.029c.311.173.666.276 1.044.288a2.303 2.303 0 01-.713-3.076 6.54 6.54 0 004.749 2.407 2.305 2.305 0 013.926-2.101 4.602 4.602 0 001.463-.559 2.31 2.31 0 01-1.013 1.275c.466-.056.91-.18 1.323-.363-.31.461-.7.867-1.15 1.192z"/></g></svg>';
			break;
		case 'vimeo':
			$svg = '<svg class="social-logo social-logo-vimeo" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M22.396 7.164c-.093 2.026-1.507 4.799-4.245 8.32C15.322 19.161 12.928 21 10.97 21c-1.214 0-2.24-1.119-3.079-3.359l-1.68-6.159c-.623-2.239-1.29-3.36-2.005-3.36-.156 0-.701.328-1.634.98l-.978-1.261c1.027-.902 2.04-1.805 3.037-2.708C6.001 3.95 7.03 3.327 7.715 3.264c1.619-.156 2.616.951 2.99 3.321.404 2.557.685 4.147.841 4.769.467 2.121.981 3.181 1.542 3.181.435 0 1.09-.688 1.963-2.065.871-1.376 1.338-2.422 1.401-3.142.125-1.187-.343-1.782-1.401-1.782-.498 0-1.012.115-1.541.341 1.023-3.35 2.977-4.977 5.862-4.884 2.139.063 3.148 1.45 3.024 4.161z"/></g></svg>';
			break;
		case 'whatsapp':
			$svg = '<svg class="social-logo social-logo-whatsapp" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M2.048 22l1.406-5.136a9.894 9.894 0 01-1.323-4.955C2.133 6.446 6.579 2 12.042 2a9.848 9.848 0 017.011 2.906 9.85 9.85 0 012.9 7.011c-.002 5.464-4.448 9.91-9.91 9.91h-.004a9.913 9.913 0 01-4.736-1.206L2.048 22zm5.497-3.172l.301.179a8.214 8.214 0 004.193 1.148h.003c4.54 0 8.235-3.695 8.237-8.237a8.189 8.189 0 00-2.41-5.828 8.182 8.182 0 00-5.824-2.416c-4.544 0-8.239 3.695-8.241 8.237a8.222 8.222 0 001.259 4.384l.196.312-.832 3.04 3.118-.819zm9.49-4.554c-.062-.103-.227-.165-.475-.289-.248-.124-1.465-.723-1.692-.806-.227-.083-.392-.124-.557.124-.165.248-.64.806-.784.971-.144.165-.289.186-.536.062-.248-.124-1.046-.385-1.991-1.229-.736-.657-1.233-1.468-1.378-1.715-.144-.248-.015-.382.109-.505.111-.111.248-.289.371-.434.124-.145.165-.248.248-.413.083-.165.041-.31-.021-.434s-.557-1.343-.763-1.839c-.202-.483-.407-.417-.559-.425-.144-.007-.31-.009-.475-.009a.91.91 0 00-.66.31c-.226.248-.866.847-.866 2.066 0 1.219.887 2.396 1.011 2.562.124.165 1.746 2.666 4.23 3.739.591.255 1.052.408 1.412.522.593.189 1.133.162 1.56.098.476-.071 1.465-.599 1.671-1.177.206-.58.206-1.075.145-1.179z"/></g></svg>';
			break;
		case 'woocommerce':
			$svg = '<svg class="social-logo social-logo-woocommerce" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M19 2H5C3.3 2 2 3.3 2 5v11c0 1.7 1.3 3 3 3h4l6 3-1-3h5c1.7 0 3-1.3 3-3V5c0-1.7-1.3-3-3-3zm-1.6 4.5c-.4.8-.8 2.1-1 3.9-.3 1.8-.4 3.1-.3 4.1 0 .3 0 .5-.1.7s-.3.4-.6.4-.6-.1-.9-.4c-1-1-1.8-2.6-2.4-4.6-.7 1.4-1.2 2.4-1.6 3.1-.6 1.2-1.2 1.8-1.6 1.9-.3 0-.5-.2-.8-.7-.5-1.4-1.1-4.2-1.7-8.2 0-.3 0-.5.2-.7.1-.2.4-.3.7-.4.5 0 .9.2.9.8.3 2.3.7 4.2 1.1 5.7l2.4-4.5c.2-.4.4-.6.8-.6.5 0 .8.3.9.9.3 1.4.6 2.6 1 3.7.3-2.7.8-4.7 1.4-5.9.2-.3.4-.5.7-.5.2 0 .5.1.7.2.2.2.3.4.3.6s0 .4-.1.5z"/></g></svg>';
			break;
		case 'wordpress':
			$svg = '<svg class="social-logo social-logo-wordpress" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M12.158 12.786L9.46 20.625a8.984 8.984 0 005.526-.144.852.852 0 01-.065-.124l-2.763-7.571zM3.009 12a8.993 8.993 0 005.067 8.092L3.788 8.341A8.952 8.952 0 003.009 12zm15.06-.454c0-1.112-.399-1.881-.741-2.48-.456-.741-.883-1.368-.883-2.109 0-.826.627-1.596 1.51-1.596.04 0 .078.005.116.007A8.963 8.963 0 0012 3.009a8.982 8.982 0 00-7.512 4.052c.211.007.41.011.579.011.94 0 2.396-.114 2.396-.114.484-.028.541.684.057.741 0 0-.487.057-1.029.085l3.274 9.739 1.968-5.901-1.401-3.838c-.484-.028-.943-.085-.943-.085-.485-.029-.428-.769.057-.741 0 0 1.484.114 2.368.114.94 0 2.397-.114 2.397-.114.485-.028.542.684.057.741 0 0-.488.057-1.029.085l3.249 9.665.897-2.996c.456-1.169.684-2.137.684-2.907zm1.82-3.86c.039.286.06.593.06.924 0 .912-.171 1.938-.684 3.22l-2.746 7.94a8.984 8.984 0 004.47-7.771 8.922 8.922 0 00-1.1-4.313zM12 22C6.486 22 2 17.514 2 12S6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></g></svg>';
			break;
		case 'xanga':
			$svg = '<svg class="social-logo social-logo-xanga" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M9 9h6v6H9V9zM3 9h6V3H3v6zm12 0h6V3h-6v6zm0 12h6v-6h-6v6zM3 21h6v-6H3v6z"/></g></svg>';
			break;
		case 'youtube':
			$svg = '<svg class="social-logo social-logo-youtube" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M21.8 8.001s-.195-1.378-.795-1.985c-.76-.797-1.613-.801-2.004-.847-2.799-.202-6.997-.202-6.997-.202h-.009s-4.198 0-6.997.202c-.39.047-1.242.051-2.003.847-.6.607-.795 1.985-.795 1.985S2 9.62 2 11.238v1.517c0 1.618.2 3.237.2 3.237s.195 1.378.795 1.985c.761.797 1.76.771 2.205.855 1.6.153 6.8.201 6.8.201s4.203-.006 7.001-.209c.391-.047 1.243-.051 2.004-.847.6-.607.795-1.985.795-1.985s.2-1.618.2-3.237v-1.517c0-1.618-.2-3.237-.2-3.237zM9.935 14.594l-.001-5.62 5.404 2.82-5.403 2.8z"/></g></svg>';
			break;
		default: 
			$svg = 'Need to specify a social logo';
			break;
	}

	return $svg;
}

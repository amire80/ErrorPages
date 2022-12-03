<?php

global $wgCommandLineMode;

if ( !$wgCommandLineMode ) {
	require_once __DIR__ . '/getTranslations.php';

	$getLanguageCode = 'getLanguageCode';
	$getTranslation = 'getTranslation';

	http_response_code( 500 );

	echo <<<EOF
		<!DOCTYPE html>
		<html lang="{$getLanguageCode()}">
			<head>
				<meta charset="utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />
				<meta name="description" content="Action is required before this wiki can be restored" />
				<title>{$getTranslation( 'wiki-temporarily-unavailable' )}</title>
				<link rel="icon" type="image/x-icon" href="https://meta.miraheze.org/favicon.ico" />
				<link rel="apple-touch-icon" href="https://meta.miraheze.org/apple-touch-icon.png" />
				<!-- Bootstrap core CSS -->
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
				<style>
					/* Error Page Inline Styles */
					body {
						padding-top: 20px;
					}
					/* Layout */
					.jumbotron {
						font-size: 21px;
						font-weight: 200;
						line-height: 2.1428571435;
						color: inherit;
						padding: 10px 0px;
						text-align: center;
						background-color: transparent;
					}
					/* Everything but the jumbotron gets side spacing for mobile-first views */
					.body-content {
						padding-left: 15px;
						padding-right: 15px;
					}
					/* button */
					.jumbotron .btn {
						font-size: 19px;
						padding: 14px 24px;
						margin-bottom: 10px;
					}
					/* Fade-in */
					@keyframes fadein {
						from { opacity: 0; }
						to   { opacity: 1; }
					}
					/* Bottom links */
					.bottom-links {
						display: flex;
						justify-content: space-between;
						margin: 30px auto;
						max-width: 100%;
						text-align: center;
						width: 600px;
						line-height: 1;
					}
					/* Dark mode */
					@media (prefers-color-scheme: dark) {
						body {
							background-color: #282828;
						}
						h1, h2, p {
							color: white;
						}
					}
				</style>
			</head>
			<div class="container">
				<!-- Jumbotron -->
				<div class="jumbotron">
					<p style="font-align: center; animation: fadein 1s;"><svg xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" id="svg4206" version="1.1" inkscape:version="1.2.1 (9c6d41e410, 2022-07-14)" width="143.72888" height="134.98416" viewBox="0 0 143.72888 134.98416" sodipodi:docname="mhcriterr.svg"> <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1350" inkscape:window-height="1032" id="namedview4208" showgrid="true" fit-margin-top="0" fit-margin-left="0" fit-margin-right="0" fit-margin-bottom="0" inkscape:zoom="4.0163665" inkscape:cx="99.343524" inkscape:cy="88.014876" inkscape:window-x="352" inkscape:window-y="150" inkscape:window-maximized="0" inkscape:current-layer="svg4206" showborder="false" inkscape:showpageshadow="2" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1"> <inkscape:grid type="xygrid" id="grid4863" originx="-29.149001" originy="-23.271838"/> </sodipodi:namedview> <path style="fill:#8e7650;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 52.721681,48.525706 21.189606,0.06232 10.968739,18.946003 -10.84409,18.696711 H 52.659356 L 41.752943,67.471705 Z" id="path4756" inkscape:connector-curvature="0"/> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="M 52.7219,0 73.911507,0.06233 84.880246,19.008333 74.036156,37.705042 H 52.659576 L 41.753162,18.946004 Z" id="path4756-4" inkscape:connector-curvature="0"/> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 52.7219,97.279112 21.189607,0.06233 10.968739,18.946008 -10.84409,18.69671 H 52.659576 L 41.753162,116.22513 Z" id="path4756-4-7" inkscape:connector-curvature="0" inkscape:transform-center-x="23.96383" inkscape:transform-center-y="-86.164066"/> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 94.666356,24.313311 21.189604,0.06232 10.96874,18.946001 -10.84409,18.696715 H 94.604032 L 83.697618,43.259317 Z" id="path4756-4-7-0-4" inkscape:connector-curvature="0" inkscape:transform-center-x="23.963831" inkscape:transform-center-y="-86.164068"/> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 10.946578,24.313315 21.1464,0.06232 10.94636,18.945997 -10.821965,18.696715 H 10.884381 L 2.04e-4,43.259317 Z" id="path4756-4-7-0-4-0" inkscape:connector-curvature="0" inkscape:transform-center-x="23.914978" inkscape:transform-center-y="-86.164069"/> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="M 10.968739,72.678425 32.158346,72.740745 43.12708,91.686749 32.282994,110.38347 H 10.906415 L 0,91.624434 Z" id="path4756-4-7-0-4-5" inkscape:connector-curvature="0" inkscape:transform-center-x="23.96383" inkscape:transform-center-y="-86.16407"/> <path d="M 142.38446,119.20188 107.52504,52.489943 a 7.9518995,8.7778901 0 0 0 -6.57644,-5.171838 7.9518995,8.7778901 0 0 0 -6.533452,5.171838 L 59.512754,119.20188 c -3.610591,6.87998 -0.644748,12.52628 6.533452,12.52628 H 135.851 c 7.1782,0 10.14404,-5.6463 6.53346,-12.52628 z m -37.13753,-1.70812 h -8.59666 v -9.48961 h 8.59666 z m 0,-18.979195 H 96.65027 V 70.045724 h 8.59666 z" id="path30" style="fill:#dd3333;stroke-width:4.51604"/> </svg></p>
					<h1>{$getTranslation( 'wiki-temporarily-unavailable' )}</h1>
					<p class="lead">{$getTranslation( 'wiki-temporarily-unavailable-subtitle' )}</p>
					<p style="font-size: 80%;">{$getTranslation( 'wiki-temporarily-unavailable-more' )}</p>
					<p>
						<a href="https://meta.miraheze.org/wiki/Tech:Wiki_recreations" class="btn btn-lg btn-outline-primary" role="button">{$getTranslation( 'db141wiki-learnmore' )}</a>
						<a href="https://discord.gg/TVAJTE4CUn" class="btn btn-lg btn-outline-primary" role="button">{$getTranslation( 'db141wiki-join-discord' )}</a>
					</p>
				</div>
			</div>
			<div class="bottom-links">
				<a href="#" onClick="history.go(-1); return false;">&larr; {$getTranslation( 'wiki-not-found-goback' )}</a>
				<a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Miraheze">{$getTranslation( 'wiki-not-found-meta' )}</a>
			</div>
		</html>
	EOF;

	die( 1 );
} else {
	global $wgDBname;

	// $wgDBname will always be set to a string, even if the --wiki parameter was not passed to a script.
	exit( "The wiki database '{$wgDBname}' is on db141 and therefore is currently down." . PHP_EOL );
}
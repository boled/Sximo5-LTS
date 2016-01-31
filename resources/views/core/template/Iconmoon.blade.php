@extends('layouts.app')

@section('content')
	<div class="page-content row">
		<!-- Page header -->
		<div class="page-header">
			<div class="page-title">
				<h3> {{ $pageTitle }}
					<small>{{ $pageNote }}</small>
				</h3>
			</div>

			<ul class="breadcrumb">
				<li><a href="{{ URL::to('') }}">Home</a></li>
				<li> Config</li>
				<li class="active">{{ $pageTitle }}</li>
			</ul>
		</div>
		<div class="page-content-wrapper m-t">
			@include('core/template/Tab',array('active'=>$page))

			<div class="wrapper-container ">
				<!-- Icon classes -->
				<div class="widget icon-classes-showcase"><span><i class="icon-zoom-out2"></i>icon-zoom-out2</span><span><i class="icon-zoom-out"></i>icon-zoom-out</span><span><i
								class="icon-zoom-in2"></i>icon-zoom-in2</span><span><i class="icon-zoom-in"></i>icon-zoom-in</span><span><i class="icon-youtube2"></i>icon-youtube2</span><span><i
								class="icon-youtube"></i>icon-youtube</span><span><i class="icon-yin-yang"></i>icon-yin-yang</span><span><i class="icon-yelp"></i>icon-yelp</span><span><i
								class="icon-yahoo"></i>icon-yahoo</span><span><i class="icon-xing2"></i>icon-xing2</span><span><i class="icon-xing"></i>icon-xing</span><span><i
								class="icon-wrench2"></i>icon-wrench2</span><span><i class="icon-wrench"></i>icon-wrench</span><span><i class="icon-wordpress2"></i>icon-wordpress2</span><span><i
								class="icon-wordpress"></i>icon-wordpress</span><span><i class="icon-wondering2"></i>icon-wondering2</span><span><i
								class="icon-wondering"></i>icon-wondering</span><span><i class="icon-woman"></i>icon-woman</span><span><i class="icon-wink2"></i>icon-wink2</span><span><i
								class="icon-wink"></i>icon-wink</span><span><i class="icon-windy"></i>icon-windy</span><span><i class="icon-windows8"></i>icon-windows8</span><span><i
								class="icon-windows"></i>icon-windows</span><span><i class="icon-weather-snow"></i>icon-weather-snow</span><span><i
								class="icon-weather-rain"></i>icon-weather-rain</span><span><i class="icon-weather-lightning"></i>icon-weather-lightning</span><span><i class="icon-wave2"></i>icon-wave2</span><span><i
								class="icon-wave"></i>icon-wave</span><span><i class="icon-watch"></i>icon-watch</span><span><i class="icon-warning"></i>icon-warning</span><span><i
								class="icon-wand2"></i>icon-wand2</span><span><i class="icon-wand"></i>icon-wand</span><span><i class="icon-volume5"></i>icon-volume5</span><span><i
								class="icon-volume4"></i>icon-volume4</span><span><i class="icon-volume3"></i>icon-volume3</span><span><i class="icon-volume2"></i>icon-volume2</span><span><i
								class="icon-volume1"></i>icon-volume1</span><span><i class="icon-volume0"></i>icon-volume0</span><span><i class="icon-volume-mute6"></i>icon-volume-mute6</span><span><i
								class="icon-volume-mute5"></i>icon-volume-mute5</span><span><i class="icon-volume-mute4"></i>icon-volume-mute4</span><span><i class="icon-volume-mute3"></i>icon-volume-mute3</span><span><i
								class="icon-volume-mute2"></i>icon-volume-mute2</span><span><i class="icon-volume-mute"></i>icon-volume-mute</span><span><i class="icon-volume-medium2"></i>icon-volume-medium2</span><span><i
								class="icon-volume-medium"></i>icon-volume-medium</span><span><i class="icon-volume-low2"></i>icon-volume-low2</span><span><i class="icon-volume-low"></i>icon-volume-low</span><span><i
								class="icon-volume-increase2"></i>icon-volume-increase2</span><span><i class="icon-volume-increase"></i>icon-volume-increase</span><span><i
								class="icon-volume-high2"></i>icon-volume-high2</span><span><i class="icon-volume-high"></i>icon-volume-high</span><span><i class="icon-volume-decrease2"></i>icon-volume-decrease2</span><span><i
								class="icon-volume-decrease"></i>icon-volume-decrease</span><span><i class="icon-vimeo3"></i>icon-vimeo3</span><span><i class="icon-vimeo2"></i>icon-vimeo2</span><span><i
								class="icon-vimeo"></i>icon-vimeo</span><span><i class="icon-vector"></i>icon-vector</span><span><i class="icon-vcard"></i>icon-vcard</span><span><i
								class="icon-users2"></i>icon-users2</span><span><i class="icon-users"></i>icon-users</span><span><i class="icon-user4"></i>icon-user4</span><span><i
								class="icon-user3"></i>icon-user3</span><span><i class="icon-user2"></i>icon-user2</span><span><i class="icon-user"></i>icon-user</span><span><i
								class="icon-user-plus3"></i>icon-user-plus3</span><span><i class="icon-user-plus2"></i>icon-user-plus2</span><span><i
								class="icon-user-plus"></i>icon-user-plus</span><span><i class="icon-user-minus3"></i>icon-user-minus3</span><span><i
								class="icon-user-minus2"></i>icon-user-minus2</span><span><i class="icon-user-minus"></i>icon-user-minus</span><span><i class="icon-user-cancel2"></i>icon-user-cancel2</span><span><i
								class="icon-user-cancel"></i>icon-user-cancel</span><span><i class="icon-user-block2"></i>icon-user-block2</span><span><i
								class="icon-user-block"></i>icon-user-block</span><span><i class="icon-upload5"></i>icon-upload5</span><span><i class="icon-upload4"></i>icon-upload4</span><span><i
								class="icon-upload3"></i>icon-upload3</span><span><i class="icon-upload2"></i>icon-upload2</span><span><i class="icon-upload"></i>icon-upload</span><span><i
								class="icon-unlocked2"></i>icon-unlocked2</span><span><i class="icon-unlocked"></i>icon-unlocked</span><span><i class="icon-undo2"></i>icon-undo2</span><span><i
								class="icon-undo"></i>icon-undo</span><span><i class="icon-underline"></i>icon-underline</span><span><i class="icon-umbrella"></i>icon-umbrella</span><span><i
								class="icon-twitter3"></i>icon-twitter3</span><span><i class="icon-twitter2"></i>icon-twitter2</span><span><i class="icon-twitter"></i>icon-twitter</span><span><i
								class="icon-tv"></i>icon-tv</span><span><i class="icon-tux"></i>icon-tux</span><span><i class="icon-tumblr2"></i>icon-tumblr2</span><span><i class="icon-tumblr"></i>icon-tumblr</span><span><i
								class="icon-truck"></i>icon-truck</span><span><i class="icon-trophy2"></i>icon-trophy2</span><span><i class="icon-trophy"></i>icon-trophy</span><span><i
								class="icon-trophy-star"></i>icon-trophy-star</span><span><i class="icon-tree3"></i>icon-tree3</span><span><i class="icon-tree2"></i>icon-tree2</span><span><i
								class="icon-tree"></i>icon-tree</span><span><i class="icon-transmission2"></i>icon-transmission2</span><span><i
								class="icon-transmission"></i>icon-transmission</span><span><i class="icon-tools"></i>icon-tools</span><span><i class="icon-tongue2"></i>icon-tongue2</span><span><i
								class="icon-tongue"></i>icon-tongue</span><span><i class="icon-ticket"></i>icon-ticket</span><span><i class="icon-thumbs-up4"></i>icon-thumbs-up4</span><span><i
								class="icon-thumbs-up3"></i>icon-thumbs-up3</span><span><i class="icon-thumbs-up2"></i>icon-thumbs-up2</span><span><i
								class="icon-thumbs-up"></i>icon-thumbs-up</span><span><i class="icon-thumbs-down2"></i>icon-thumbs-down2</span><span><i
								class="icon-thumbs-down"></i>icon-thumbs-down</span><span><i class="icon-text-width"></i>icon-text-width</span><span><i
								class="icon-text-height"></i>icon-text-height</span><span><i class="icon-text-color"></i>icon-text-color</span><span><i
								class="icon-target3"></i>icon-target3</span><span><i class="icon-target2"></i>icon-target2</span><span><i class="icon-target"></i>icon-target</span><span><i
								class="icon-tags2"></i>icon-tags2</span><span><i class="icon-tags"></i>icon-tags</span><span><i class="icon-tag5"></i>icon-tag5</span><span><i class="icon-tag4"></i>icon-tag4</span><span><i
								class="icon-tag3"></i>icon-tag3</span><span><i class="icon-tag2"></i>icon-tag2</span><span><i class="icon-tag"></i>icon-tag</span><span><i class="icon-tablet"></i>icon-tablet</span><span><i
								class="icon-table2"></i>icon-table2</span><span><i class="icon-table"></i>icon-table</span><span><i class="icon-tab"></i>icon-tab</span><span><i
								class="icon-switch"></i>icon-switch</span><span><i class="icon-support"></i>icon-support</span><span><i class="icon-superscript2"></i>icon-superscript2</span><span><i
								class="icon-superscript"></i>icon-superscript</span><span><i class="icon-sun2"></i>icon-sun2</span><span><i class="icon-sun"></i>icon-sun</span><span><i
								class="icon-sun-glasses"></i>icon-sun-glasses</span><span><i class="icon-subscript2"></i>icon-subscript2</span><span><i class="icon-subscript"></i>icon-subscript</span><span><i
								class="icon-stumbleupon2"></i>icon-stumbleupon2</span><span><i class="icon-stumbleupon"></i>icon-stumbleupon</span><span><i class="icon-strikethrough"></i>icon-strikethrough</span><span><i
								class="icon-storage2"></i>icon-storage2</span><span><i class="icon-storage"></i>icon-storage</span><span><i class="icon-stopwatch"></i>icon-stopwatch</span><span><i
								class="icon-stop2"></i>icon-stop2</span><span><i class="icon-stop"></i>icon-stop</span><span><i class="icon-steps"></i>icon-steps</span><span><i
								class="icon-steam2"></i>icon-steam2</span><span><i class="icon-steam"></i>icon-steam</span><span><i class="icon-stats3"></i>icon-stats3</span><span><i
								class="icon-stats2"></i>icon-stats2</span><span><i class="icon-stats"></i>icon-stats</span><span><i class="icon-stats-up"></i>icon-stats-up</span><span><i
								class="icon-stats-down"></i>icon-stats-down</span><span><i class="icon-star6"></i>icon-star6</span><span><i class="icon-star5"></i>icon-star5</span><span><i
								class="icon-star4"></i>icon-star4</span><span><i class="icon-star3"></i>icon-star3</span><span><i class="icon-star2"></i>icon-star2</span><span><i
								class="icon-star"></i>icon-star</span><span><i class="icon-stackoverflow"></i>icon-stackoverflow</span><span><i class="icon-stack"></i>icon-stack</span><span><i
								class="icon-spinner8"></i>icon-spinner8</span><span><i class="icon-spinner7"></i>icon-spinner7</span><span><i class="icon-spinner6"></i>icon-spinner6</span><span><i
								class="icon-spinner5"></i>icon-spinner5</span><span><i class="icon-spinner4"></i>icon-spinner4</span><span><i class="icon-spinner3"></i>icon-spinner3</span><span><i
								class="icon-spinner2"></i>icon-spinner2</span><span><i class="icon-spinner"></i>icon-spinner</span><span><i class="icon-spell-check"></i>icon-spell-check</span><span><i
								class="icon-spam"></i>icon-spam</span><span><i class="icon-spades"></i>icon-spades</span><span><i class="icon-soundcloud2"></i>icon-soundcloud2</span><span><i
								class="icon-soundcloud"></i>icon-soundcloud</span><span><i class="icon-sort2"></i>icon-sort2</span><span><i class="icon-sort"></i>icon-sort</span><span><i
								class="icon-smiley2"></i>icon-smiley2</span><span><i class="icon-smiley"></i>icon-smiley</span><span><i class="icon-skype"></i>icon-skype</span><span><i
								class="icon-skull2"></i>icon-skull2</span><span><i class="icon-skull"></i>icon-skull</span><span><i class="icon-signup"></i>icon-signup</span><span><i
								class="icon-sigma"></i>icon-sigma</span><span><i class="icon-shuffle2"></i>icon-shuffle2</span><span><i class="icon-shuffle"></i>icon-shuffle</span><span><i
								class="icon-shocked2"></i>icon-shocked2</span><span><i class="icon-shocked"></i>icon-shocked</span><span><i class="icon-shield2"></i>icon-shield2</span><span><i
								class="icon-shield"></i>icon-shield</span><span><i class="icon-share3"></i>icon-share3</span><span><i class="icon-share2"></i>icon-share2</span><span><i
								class="icon-share"></i>icon-share</span><span><i class="icon-settings"></i>icon-settings</span><span><i class="icon-search3"></i>icon-search3</span><span><i
								class="icon-search2"></i>icon-search2</span><span><i class="icon-search"></i>icon-search</span><span><i class="icon-screen2"></i>icon-screen2</span><span><i
								class="icon-screen"></i>icon-screen</span><span><i class="icon-scissors2"></i>icon-scissors2</span><span><i class="icon-scissors"></i>icon-scissors</span><span><i
								class="icon-safari"></i>icon-safari</span><span><i class="icon-sad2"></i>icon-sad2</span><span><i class="icon-sad"></i>icon-sad</span><span><i class="icon-rulers"></i>icon-rulers</span><span><i
								class="icon-rotate2"></i>icon-rotate2</span><span><i class="icon-rotate"></i>icon-rotate</span><span><i class="icon-rocket"></i>icon-rocket</span><span><i
								class="icon-rock"></i>icon-rock</span><span><i class="icon-road"></i>icon-road</span><span><i class="icon-right-to-left"></i>icon-right-to-left</span><span><i
								class="icon-reply2"></i>icon-reply2</span><span><i class="icon-reply"></i>icon-reply</span><span><i class="icon-remove5"></i>icon-remove5</span><span><i
								class="icon-remove4"></i>icon-remove4</span><span><i class="icon-remove3"></i>icon-remove3</span><span><i class="icon-remove2"></i>icon-remove2</span><span><i
								class="icon-remove"></i>icon-remove</span><span><i class="icon-redo2"></i>icon-redo2</span><span><i class="icon-redo"></i>icon-redo</span><span><i
								class="icon-reddit"></i>icon-reddit</span><span><i class="icon-rating3"></i>icon-rating3</span><span><i class="icon-rating2"></i>icon-rating2</span><span><i
								class="icon-rating"></i>icon-rating</span><span><i class="icon-radio"></i>icon-radio</span><span><i class="icon-radio-unchecked"></i>icon-radio-unchecked</span><span><i
								class="icon-radio-checked"></i>icon-radio-checked</span><span><i class="icon-quotes-right3"></i>icon-quotes-right3</span><span><i class="icon-quotes-right2"></i>icon-quotes-right2</span><span><i
								class="icon-quotes-right"></i>icon-quotes-right</span><span><i class="icon-quotes-left"></i>icon-quotes-left</span><span><i
								class="icon-quill2"></i>icon-quill2</span><span><i class="icon-quill"></i>icon-quill</span><span><i class="icon-question5"></i>icon-question5</span><span><i
								class="icon-question4"></i>icon-question4</span><span><i class="icon-question3"></i>icon-question3</span><span><i class="icon-question2"></i>icon-question2</span><span><i
								class="icon-question"></i>icon-question</span><span><i class="icon-queen"></i>icon-queen</span><span><i class="icon-qrcode"></i>icon-qrcode</span><span><i
								class="icon-pyramid"></i>icon-pyramid</span><span><i class="icon-puzzle4"></i>icon-puzzle4</span><span><i class="icon-puzzle3"></i>icon-puzzle3</span><span><i
								class="icon-puzzle2"></i>icon-puzzle2</span><span><i class="icon-puzzle"></i>icon-puzzle</span><span><i class="icon-pushpin"></i>icon-pushpin</span><span><i
								class="icon-profile"></i>icon-profile</span><span><i class="icon-print2"></i>icon-print2</span><span><i class="icon-print"></i>icon-print</span><span><i
								class="icon-previous"></i>icon-previous</span><span><i class="icon-power2"></i>icon-power2</span><span><i class="icon-power"></i>icon-power</span><span><i
								class="icon-power-cord"></i>icon-power-cord</span><span><i class="icon-popout"></i>icon-popout</span><span><i class="icon-point-up"></i>icon-point-up</span><span><i
								class="icon-point-right"></i>icon-point-right</span><span><i class="icon-point-left"></i>icon-point-left</span><span><i
								class="icon-point-down"></i>icon-point-down</span><span><i class="icon-podium"></i>icon-podium</span><span><i class="icon-podcast"></i>icon-podcast</span><span><i
								class="icon-plus"></i>icon-plus</span><span><i class="icon-plus-circle2"></i>icon-plus-circle2</span><span><i class="icon-plus-circle"></i>icon-plus-circle</span><span><i
								class="icon-playlist"></i>icon-playlist</span><span><i class="icon-play3"></i>icon-play3</span><span><i class="icon-play2"></i>icon-play2</span><span><i
								class="icon-play"></i>icon-play</span><span><i class="icon-pinterest2"></i>icon-pinterest2</span><span><i class="icon-pinterest"></i>icon-pinterest</span><span><i
								class="icon-pilcrow"></i>icon-pilcrow</span><span><i class="icon-pie4"></i>icon-pie4</span><span><i class="icon-pie3"></i>icon-pie3</span><span><i
								class="icon-pie2"></i>icon-pie2</span><span><i class="icon-pie"></i>icon-pie</span><span><i class="icon-picassa2"></i>icon-picassa2</span><span><i
								class="icon-picassa"></i>icon-picassa</span><span><i class="icon-piano"></i>icon-piano</span><span><i class="icon-phone5"></i>icon-phone5</span><span><i
								class="icon-phone4"></i>icon-phone4</span><span><i class="icon-phone3"></i>icon-phone3</span><span><i class="icon-phone2"></i>icon-phone2</span><span><i
								class="icon-phone"></i>icon-phone</span><span><i class="icon-phone-hang-up2"></i>icon-phone-hang-up2</span><span><i
								class="icon-phone-hang-up"></i>icon-phone-hang-up</span><span><i class="icon-people"></i>icon-people</span><span><i class="icon-pencil4"></i>icon-pencil4</span><span><i
								class="icon-pencil3"></i>icon-pencil3</span><span><i class="icon-pencil2"></i>icon-pencil2</span><span><i class="icon-pencil"></i>icon-pencil</span><span><i
								class="icon-pen3"></i>icon-pen3</span><span><i class="icon-pen2"></i>icon-pen2</span><span><i class="icon-pen"></i>icon-pen</span><span><i class="icon-peace"></i>icon-peace</span><span><i
								class="icon-paypal3"></i>icon-paypal3</span><span><i class="icon-paypal2"></i>icon-paypal2</span><span><i class="icon-paypal"></i>icon-paypal</span><span><i
								class="icon-pawn"></i>icon-pawn</span><span><i class="icon-paw"></i>icon-paw</span><span><i class="icon-pause2"></i>icon-pause2</span><span><i class="icon-pause"></i>icon-pause</span><span><i
								class="icon-patch"></i>icon-patch</span><span><i class="icon-paste3"></i>icon-paste3</span><span><i class="icon-paste2"></i>icon-paste2</span><span><i
								class="icon-paste"></i>icon-paste</span><span><i class="icon-paragraph-right2"></i>icon-paragraph-right2</span><span><i class="icon-paragraph-right"></i>icon-paragraph-right</span><span><i
								class="icon-paragraph-left2"></i>icon-paragraph-left2</span><span><i class="icon-paragraph-left"></i>icon-paragraph-left</span><span><i
								class="icon-paragraph-justify2"></i>icon-paragraph-justify2</span><span><i class="icon-paragraph-justify"></i>icon-paragraph-justify</span><span><i
								class="icon-paragraph-center2"></i>icon-paragraph-center2</span><span><i class="icon-paragraph-center"></i>icon-paragraph-center</span><span><i
								class="icon-paper-plane"></i>icon-paper-plane</span><span><i class="icon-paint-format"></i>icon-paint-format</span><span><i
								class="icon-pagebreak"></i>icon-pagebreak</span><span><i class="icon-page-break2"></i>icon-page-break2</span><span><i class="icon-page-break"></i>icon-page-break</span><span><i
								class="icon-pacman"></i>icon-pacman</span><span><i class="icon-opera"></i>icon-opera</span><span><i class="icon-omega"></i>icon-omega</span><span><i
								class="icon-office"></i>icon-office</span><span><i class="icon-numbered-list"></i>icon-numbered-list</span><span><i
								class="icon-notification"></i>icon-notification</span><span><i class="icon-notebook"></i>icon-notebook</span><span><i class="icon-next"></i>icon-next</span><span><i
								class="icon-newspaper"></i>icon-newspaper</span><span><i class="icon-new"></i>icon-new</span><span><i class="icon-new-tab2"></i>icon-new-tab2</span><span><i
								class="icon-new-tab"></i>icon-new-tab</span><span><i class="icon-neutral2"></i>icon-neutral2</span><span><i class="icon-neutral"></i>icon-neutral</span><span><i
								class="icon-nbsp"></i>icon-nbsp</span><span><i class="icon-music3"></i>icon-music3</span><span><i class="icon-music2"></i>icon-music2</span><span><i
								class="icon-music"></i>icon-music</span><span><i class="icon-mug"></i>icon-mug</span><span><i class="icon-movie2"></i>icon-movie2</span><span><i class="icon-movie"></i>icon-movie</span><span><i
								class="icon-move"></i>icon-move</span><span><i class="icon-mouse2"></i>icon-mouse2</span><span><i class="icon-mouse"></i>icon-mouse</span><span><i
								class="icon-moon"></i>icon-moon</span><span><i class="icon-mobile2"></i>icon-mobile2</span><span><i class="icon-mobile"></i>icon-mobile</span><span><i
								class="icon-minus"></i>icon-minus</span><span><i class="icon-minus-circle2"></i>icon-minus-circle2</span><span><i class="icon-minus-circle"></i>icon-minus-circle</span><span><i
								class="icon-mic4"></i>icon-mic4</span><span><i class="icon-mic3"></i>icon-mic3</span><span><i class="icon-mic2"></i>icon-mic2</span><span><i class="icon-mic"></i>icon-mic</span><span><i
								class="icon-meter2"></i>icon-meter2</span><span><i class="icon-meter"></i>icon-meter</span><span><i class="icon-meter-slow"></i>icon-meter-slow</span><span><i
								class="icon-meter-medium"></i>icon-meter-medium</span><span><i class="icon-meter-fast"></i>icon-meter-fast</span><span><i class="icon-menu5"></i>icon-menu5</span><span><i
								class="icon-menu4"></i>icon-menu4</span><span><i class="icon-menu3"></i>icon-menu3</span><span><i class="icon-menu2"></i>icon-menu2</span><span><i
								class="icon-menu"></i>icon-menu</span><span><i class="icon-megaphone"></i>icon-megaphone</span><span><i class="icon-medal5"></i>icon-medal5</span><span><i
								class="icon-medal4"></i>icon-medal4</span><span><i class="icon-medal3"></i>icon-medal3</span><span><i class="icon-medal2"></i>icon-medal2</span><span><i
								class="icon-medal"></i>icon-medal</span><span><i class="icon-marker"></i>icon-marker</span><span><i class="icon-map3"></i>icon-map3</span><span><i
								class="icon-map2"></i>icon-map2</span><span><i class="icon-map"></i>icon-map</span><span><i class="icon-man"></i>icon-man</span><span><i class="icon-male"></i>icon-male</span><span><i
								class="icon-mail4"></i>icon-mail4</span><span><i class="icon-mail3"></i>icon-mail3</span><span><i class="icon-mail2"></i>icon-mail2</span><span><i
								class="icon-mail"></i>icon-mail</span><span><i class="icon-mail-send"></i>icon-mail-send</span><span><i class="icon-magnet"></i>icon-magnet</span><span><i
								class="icon-loop5"></i>icon-loop5</span><span><i class="icon-loop4"></i>icon-loop4</span><span><i class="icon-loop3"></i>icon-loop3</span><span><i
								class="icon-loop2"></i>icon-loop2</span><span><i class="icon-loop"></i>icon-loop</span><span><i class="icon-lock3"></i>icon-lock3</span><span><i class="icon-lock2"></i>icon-lock2</span><span><i
								class="icon-lock"></i>icon-lock</span><span><i class="icon-location4"></i>icon-location4</span><span><i class="icon-location3"></i>icon-location3</span><span><i
								class="icon-location2"></i>icon-location2</span><span><i class="icon-location"></i>icon-location</span><span><i class="icon-list2"></i>icon-list2</span><span><i
								class="icon-list"></i>icon-list</span><span><i class="icon-linkedin"></i>icon-linkedin</span><span><i class="icon-link22"></i>icon-link22</span><span><i
								class="icon-link6"></i>icon-link6</span><span><i class="icon-link5"></i>icon-link5</span><span><i class="icon-link4"></i>icon-link4</span><span><i
								class="icon-link3"></i>icon-link3</span><span><i class="icon-link2"></i>icon-link2</span><span><i class="icon-link"></i>icon-link</span><span><i
								class="icon-lightning"></i>icon-lightning</span><span><i class="icon-libreoffice"></i>icon-libreoffice</span><span><i class="icon-library"></i>icon-library</span><span><i
								class="icon-left-to-right"></i>icon-left-to-right</span><span><i class="icon-leaf"></i>icon-leaf</span><span><i class="icon-lastfm2"></i>icon-lastfm2</span><span><i
								class="icon-lastfm"></i>icon-lastfm</span><span><i class="icon-last"></i>icon-last</span><span><i class="icon-laptop"></i>icon-laptop</span><span><i
								class="icon-lanyrd"></i>icon-lanyrd</span><span><i class="icon-lamp3"></i>icon-lamp3</span><span><i class="icon-lamp2"></i>icon-lamp2</span><span><i
								class="icon-lamp"></i>icon-lamp</span><span><i class="icon-ladder"></i>icon-ladder</span><span><i class="icon-lab"></i>icon-lab</span><span><i class="icon-knight"></i>icon-knight</span><span><i
								class="icon-king"></i>icon-king</span><span><i class="icon-keyboard"></i>icon-keyboard</span><span><i class="icon-key2"></i>icon-key2</span><span><i
								class="icon-key"></i>icon-key</span><span><i class="icon-joomla"></i>icon-joomla</span><span><i class="icon-italic"></i>icon-italic</span><span><i
								class="icon-instagram"></i>icon-instagram</span><span><i class="icon-insert-template"></i>icon-insert-template</span><span><i class="icon-inject"></i>icon-inject</span><span><i
								class="icon-info2"></i>icon-info2</span><span><i class="icon-info"></i>icon-info</span><span><i class="icon-indent-increase"></i>icon-indent-increase</span><span><i
								class="icon-indent-decrease"></i>icon-indent-decrease</span><span><i class="icon-images"></i>icon-images</span><span><i class="icon-image5"></i>icon-image5</span><span><i
								class="icon-image4"></i>icon-image4</span><span><i class="icon-image3"></i>icon-image3</span><span><i class="icon-image2"></i>icon-image2</span><span><i
								class="icon-image"></i>icon-image</span><span><i class="icon-IE"></i>icon-IE</span><span><i class="icon-icon"></i>icon-icon</span><span><i class="icon-html52"></i>icon-html52</span><span><i
								class="icon-html5"></i>icon-html5</span><span><i class="icon-home7"></i>icon-home7</span><span><i class="icon-home6"></i>icon-home6</span><span><i
								class="icon-home5"></i>icon-home5</span><span><i class="icon-home4"></i>icon-home4</span><span><i class="icon-home3"></i>icon-home3</span><span><i
								class="icon-home2"></i>icon-home2</span><span><i class="icon-home"></i>icon-home</span><span><i class="icon-history"></i>icon-history</span><span><i
								class="icon-heart6"></i>icon-heart6</span><span><i class="icon-heart5"></i>icon-heart5</span><span><i class="icon-heart4"></i>icon-heart4</span><span><i
								class="icon-heart3"></i>icon-heart3</span><span><i class="icon-heart2"></i>icon-heart2</span><span><i class="icon-heart"></i>icon-heart</span><span><i
								class="icon-heart-broken3"></i>icon-heart-broken3</span><span><i class="icon-heart-broken2"></i>icon-heart-broken2</span><span><i class="icon-heart-broken"></i>icon-heart-broken</span><span><i
								class="icon-headphones2"></i>icon-headphones2</span><span><i class="icon-headphones"></i>icon-headphones</span><span><i class="icon-happy2"></i>icon-happy2</span><span><i
								class="icon-happy"></i>icon-happy</span><span><i class="icon-hanger"></i>icon-hanger</span><span><i class="icon-hammer2"></i>icon-hammer2</span><span><i
								class="icon-hammer"></i>icon-hammer</span><span><i class="icon-gun"></i>icon-gun</span><span><i class="icon-gun-ban"></i>icon-gun-ban</span><span><i
								class="icon-grin2"></i>icon-grin2</span><span><i class="icon-grin"></i>icon-grin</span><span><i class="icon-grid4"></i>icon-grid4</span><span><i class="icon-grid3"></i>icon-grid3</span><span><i
								class="icon-grid2"></i>icon-grid2</span><span><i class="icon-grid"></i>icon-grid</span><span><i class="icon-google"></i>icon-google</span><span><i
								class="icon-google-plus4"></i>icon-google-plus4</span><span><i class="icon-google-plus3"></i>icon-google-plus3</span><span><i class="icon-google-plus2"></i>icon-google-plus2</span><span><i
								class="icon-google-plus"></i>icon-google-plus</span><span><i class="icon-google-drive"></i>icon-google-drive</span><span><i
								class="icon-globe2"></i>icon-globe2</span><span><i class="icon-globe"></i>icon-globe</span><span><i class="icon-glasses3"></i>icon-glasses3</span><span><i
								class="icon-glasses2"></i>icon-glasses2</span><span><i class="icon-glasses"></i>icon-glasses</span><span><i class="icon-glass2"></i>icon-glass2</span><span><i
								class="icon-glass"></i>icon-glass</span><span><i class="icon-github5"></i>icon-github5</span><span><i class="icon-github4"></i>icon-github4</span><span><i
								class="icon-github3"></i>icon-github3</span><span><i class="icon-github2"></i>icon-github2</span><span><i class="icon-github"></i>icon-github</span><span><i
								class="icon-gift"></i>icon-gift</span><span><i class="icon-gas-pump"></i>icon-gas-pump</span><span><i class="icon-foursquare2"></i>icon-foursquare2</span><span><i
								class="icon-foursquare"></i>icon-foursquare</span><span><i class="icon-forward3"></i>icon-forward3</span><span><i class="icon-forward2"></i>icon-forward2</span><span><i
								class="icon-forward"></i>icon-forward</span><span><i class="icon-forrst2"></i>icon-forrst2</span><span><i class="icon-forrst"></i>icon-forrst</span><span><i
								class="icon-food2"></i>icon-food2</span><span><i class="icon-food"></i>icon-food</span><span><i class="icon-font"></i>icon-font</span><span><i
								class="icon-font-size"></i>icon-font-size</span><span><i class="icon-folder8"></i>icon-folder8</span><span><i class="icon-folder3"></i>icon-folder3</span><span><i
								class="icon-folder2"></i>icon-folder2</span><span><i class="icon-folder"></i>icon-folder</span><span><i class="icon-folder-upload2"></i>icon-folder-upload2</span><span><i
								class="icon-folder-upload"></i>icon-folder-upload</span><span><i class="icon-folder-remove"></i>icon-folder-remove</span><span><i class="icon-folder-plus3"></i>icon-folder-plus3</span><span><i
								class="icon-folder-plus2"></i>icon-folder-plus2</span><span><i class="icon-folder-plus"></i>icon-folder-plus</span><span><i class="icon-folder-open2"></i>icon-folder-open2</span><span><i
								class="icon-folder-open"></i>icon-folder-open</span><span><i class="icon-folder-minus3"></i>icon-folder-minus3</span><span><i class="icon-folder-minus2"></i>icon-folder-minus2</span><span><i
								class="icon-folder-minus"></i>icon-folder-minus</span><span><i class="icon-folder-download2"></i>icon-folder-download2</span><span><i class="icon-folder-download"></i>icon-folder-download</span><span><i
								class="icon-flower"></i>icon-flower</span><span><i class="icon-flip2"></i>icon-flip2</span><span><i class="icon-flip"></i>icon-flip</span><span><i
								class="icon-flickr4"></i>icon-flickr4</span><span><i class="icon-flickr3"></i>icon-flickr3</span><span><i class="icon-flickr2"></i>icon-flickr2</span><span><i
								class="icon-flickr"></i>icon-flickr</span><span><i class="icon-flattr"></i>icon-flattr</span><span><i class="icon-flag4"></i>icon-flag4</span><span><i
								class="icon-flag3"></i>icon-flag3</span><span><i class="icon-flag2"></i>icon-flag2</span><span><i class="icon-flag"></i>icon-flag</span><span><i class="icon-first"></i>icon-first</span><span><i
								class="icon-firefox"></i>icon-firefox</span><span><i class="icon-fire"></i>icon-fire</span><span><i class="icon-finder"></i>icon-finder</span><span><i
								class="icon-filter4"></i>icon-filter4</span><span><i class="icon-filter3"></i>icon-filter3</span><span><i class="icon-filter2"></i>icon-filter2</span><span><i
								class="icon-filter"></i>icon-filter</span><span><i class="icon-film3"></i>icon-film3</span><span><i class="icon-film2"></i>icon-film2</span><span><i
								class="icon-film"></i>icon-film</span><span><i class="icon-file7"></i>icon-file7</span><span><i class="icon-file6"></i>icon-file6</span><span><i class="icon-file5"></i>icon-file5</span><span><i
								class="icon-file4"></i>icon-file4</span><span><i class="icon-file3"></i>icon-file3</span><span><i class="icon-file2"></i>icon-file2</span><span><i
								class="icon-file"></i>icon-file</span><span><i class="icon-file-zip"></i>icon-file-zip</span><span><i class="icon-file-xml"></i>icon-file-xml</span><span><i
								class="icon-file-word"></i>icon-file-word</span><span><i class="icon-file-upload"></i>icon-file-upload</span><span><i
								class="icon-file-remove"></i>icon-file-remove</span><span><i class="icon-file-powerpoint"></i>icon-file-powerpoint</span><span><i class="icon-file-plus"></i>icon-file-plus</span><span><i
								class="icon-file-pdf"></i>icon-file-pdf</span><span><i class="icon-file-openoffice"></i>icon-file-openoffice</span><span><i class="icon-file-minus"></i>icon-file-minus</span><span><i
								class="icon-file-excel"></i>icon-file-excel</span><span><i class="icon-file-download"></i>icon-file-download</span><span><i
								class="icon-file-css"></i>icon-file-css</span><span><i class="icon-file-check"></i>icon-file-check</span><span><i class="icon-female"></i>icon-female</span><span><i
								class="icon-feed4"></i>icon-feed4</span><span><i class="icon-feed3"></i>icon-feed3</span><span><i class="icon-feed2"></i>icon-feed2</span><span><i
								class="icon-feed"></i>icon-feed</span><span><i class="icon-fan"></i>icon-fan</span><span><i class="icon-factory"></i>icon-factory</span><span><i
								class="icon-facebook3"></i>icon-facebook3</span><span><i class="icon-facebook2"></i>icon-facebook2</span><span><i class="icon-facebook"></i>icon-facebook</span><span><i
								class="icon-eyedropper"></i>icon-eyedropper</span><span><i class="icon-eye7"></i>icon-eye7</span><span><i class="icon-eye6"></i>icon-eye6</span><span><i
								class="icon-eye5"></i>icon-eye5</span><span><i class="icon-eye4"></i>icon-eye4</span><span><i class="icon-eye3"></i>icon-eye3</span><span><i class="icon-eye2"></i>icon-eye2</span><span><i
								class="icon-eye"></i>icon-eye</span><span><i class="icon-eye-blocked2"></i>icon-eye-blocked2</span><span><i class="icon-eye-blocked"></i>icon-eye-blocked</span><span><i
								class="icon-expand2"></i>icon-expand2</span><span><i class="icon-expand"></i>icon-expand</span><span><i class="icon-exit4"></i>icon-exit4</span><span><i
								class="icon-exit3"></i>icon-exit3</span><span><i class="icon-exit2"></i>icon-exit2</span><span><i class="icon-exit"></i>icon-exit</span><span><i class="icon-evil2"></i>icon-evil2</span><span><i
								class="icon-evil"></i>icon-evil</span><span><i class="icon-esc"></i>icon-esc</span><span><i class="icon-equalizer3"></i>icon-equalizer3</span><span><i
								class="icon-equalizer2"></i>icon-equalizer2</span><span><i class="icon-equalizer"></i>icon-equalizer</span><span><i class="icon-envelop2"></i>icon-envelop2</span><span><i
								class="icon-envelop"></i>icon-envelop</span><span><i class="icon-enter5"></i>icon-enter5</span><span><i class="icon-enter4"></i>icon-enter4</span><span><i
								class="icon-enter3"></i>icon-enter3</span><span><i class="icon-enter2"></i>icon-enter2</span><span><i class="icon-enter"></i>icon-enter</span><span><i
								class="icon-embed"></i>icon-embed</span><span><i class="icon-eject"></i>icon-eject</span><span><i class="icon-earth"></i>icon-earth</span><span><i
								class="icon-dumbbell"></i>icon-dumbbell</span><span><i class="icon-droplet2"></i>icon-droplet2</span><span><i class="icon-droplet"></i>icon-droplet</span><span><i
								class="icon-dribbble3"></i>icon-dribbble3</span><span><i class="icon-dribbble2"></i>icon-dribbble2</span><span><i class="icon-dribbble"></i>icon-dribbble</span><span><i
								class="icon-drawer3"></i>icon-drawer3</span><span><i class="icon-drawer2"></i>icon-drawer2</span><span><i class="icon-drawer"></i>icon-drawer</span><span><i
								class="icon-download5"></i>icon-download5</span><span><i class="icon-download4"></i>icon-download4</span><span><i class="icon-download3"></i>icon-download3</span><span><i
								class="icon-download2"></i>icon-download2</span><span><i class="icon-download"></i>icon-download</span><span><i class="icon-disk"></i>icon-disk</span><span><i
								class="icon-direction"></i>icon-direction</span><span><i class="icon-dice"></i>icon-dice</span><span><i class="icon-diamonds"></i>icon-diamonds</span><span><i
								class="icon-diamond"></i>icon-diamond</span><span><i class="icon-deviantart2"></i>icon-deviantart2</span><span><i
								class="icon-deviantart"></i>icon-deviantart</span><span><i class="icon-delicious"></i>icon-delicious</span><span><i
								class="icon-database2"></i>icon-database2</span><span><i class="icon-database"></i>icon-database</span><span><i class="icon-dashboard"></i>icon-dashboard</span><span><i
								class="icon-cursor2"></i>icon-cursor2</span><span><i class="icon-cursor"></i>icon-cursor</span><span><i class="icon-cube2"></i>icon-cube2</span><span><i
								class="icon-cube"></i>icon-cube</span><span><i class="icon-css3"></i>icon-css3</span><span><i class="icon-crown"></i>icon-crown</span><span><i class="icon-crop"></i>icon-crop</span><span><i
								class="icon-credit"></i>icon-credit</span><span><i class="icon-copy4"></i>icon-copy4</span><span><i class="icon-copy3"></i>icon-copy3</span><span><i
								class="icon-copy2"></i>icon-copy2</span><span><i class="icon-copy"></i>icon-copy</span><span><i class="icon-cool2"></i>icon-cool2</span><span><i class="icon-cool"></i>icon-cool</span><span><i
								class="icon-contrast"></i>icon-contrast</span><span><i class="icon-contract2"></i>icon-contract2</span><span><i class="icon-contract"></i>icon-contract</span><span><i
								class="icon-contact-remove2"></i>icon-contact-remove2</span><span><i class="icon-contact-remove"></i>icon-contact-remove</span><span><i class="icon-contact-add2"></i>icon-contact-add2</span><span><i
								class="icon-contact-add"></i>icon-contact-add</span><span><i class="icon-construction"></i>icon-construction</span><span><i class="icon-console"></i>icon-console</span><span><i
								class="icon-connection2"></i>icon-connection2</span><span><i class="icon-connection"></i>icon-connection</span><span><i class="icon-confused2"></i>icon-confused2</span><span><i
								class="icon-confused"></i>icon-confused</span><span><i class="icon-cone"></i>icon-cone</span><span><i class="icon-compass2"></i>icon-compass2</span><span><i
								class="icon-compass"></i>icon-compass</span><span><i class="icon-command"></i>icon-command</span><span><i class="icon-coin"></i>icon-coin</span><span><i
								class="icon-cogs"></i>icon-cogs</span><span><i class="icon-cog4"></i>icon-cog4</span><span><i class="icon-cog3"></i>icon-cog3</span><span><i class="icon-cog2"></i>icon-cog2</span><span><i
								class="icon-cog"></i>icon-cog</span><span><i class="icon-code"></i>icon-code</span><span><i class="icon-clubs"></i>icon-clubs</span><span><i class="icon-cloud"></i>icon-cloud</span><span><i
								class="icon-cloud-upload"></i>icon-cloud-upload</span><span><i class="icon-cloud-download"></i>icon-cloud-download</span><span><i
								class="icon-close"></i>icon-close</span><span><i class="icon-clock4"></i>icon-clock4</span><span><i class="icon-clock3"></i>icon-clock3</span><span><i
								class="icon-clock2"></i>icon-clock2</span><span><i class="icon-clock"></i>icon-clock</span><span><i class="icon-clipboard"></i>icon-clipboard</span><span><i
								class="icon-clear-formatting"></i>icon-clear-formatting</span><span><i class="icon-chrome"></i>icon-chrome</span><span><i
								class="icon-checkmark4"></i>icon-checkmark4</span><span><i class="icon-checkmark3"></i>icon-checkmark3</span><span><i class="icon-checkmark2"></i>icon-checkmark2</span><span><i
								class="icon-checkmark"></i>icon-checkmark</span><span><i class="icon-checkmark-circle2"></i>icon-checkmark-circle2</span><span><i class="icon-checkmark-circle"></i>icon-checkmark-circle</span><span><i
								class="icon-checkbox-unchecked"></i>icon-checkbox-unchecked</span><span><i class="icon-checkbox-partial"></i>icon-checkbox-partial</span><span><i
								class="icon-checkbox-checked"></i>icon-checkbox-checked</span><span><i class="icon-certificate"></i>icon-certificate</span><span><i
								class="icon-cc"></i>icon-cc</span><span><i class="icon-cart5"></i>icon-cart5</span><span><i class="icon-cart4"></i>icon-cart4</span><span><i class="icon-cart3"></i>icon-cart3</span><span><i
								class="icon-cart2"></i>icon-cart2</span><span><i class="icon-cart"></i>icon-cart</span><span><i class="icon-cart-remove2"></i>icon-cart-remove2</span><span><i
								class="icon-cart-remove"></i>icon-cart-remove</span><span><i class="icon-cart-plus"></i>icon-cart-plus</span><span><i class="icon-cart-minus"></i>icon-cart-minus</span><span><i
								class="icon-cart-checkout"></i>icon-cart-checkout</span><span><i class="icon-cart-add"></i>icon-cart-add</span><span><i class="icon-car"></i>icon-car</span><span><i
								class="icon-cancel"></i>icon-cancel</span><span><i class="icon-cancel-circle2"></i>icon-cancel-circle2</span><span><i class="icon-cancel-circle"></i>icon-cancel-circle</span><span><i
								class="icon-camera7"></i>icon-camera7</span><span><i class="icon-camera6"></i>icon-camera6</span><span><i class="icon-camera5"></i>icon-camera5</span><span><i
								class="icon-camera4"></i>icon-camera4</span><span><i class="icon-camera3"></i>icon-camera3</span><span><i class="icon-camera2"></i>icon-camera2</span><span><i
								class="icon-camera"></i>icon-camera</span><span><i class="icon-call-outgoing"></i>icon-call-outgoing</span><span><i
								class="icon-call-incoming"></i>icon-call-incoming</span><span><i class="icon-calendar4"></i>icon-calendar4</span><span><i
								class="icon-calendar3"></i>icon-calendar3</span><span><i class="icon-calendar2"></i>icon-calendar2</span><span><i class="icon-calendar"></i>icon-calendar</span><span><i
								class="icon-calculate2"></i>icon-calculate2</span><span><i class="icon-calculate"></i>icon-calculate</span><span><i class="icon-cake"></i>icon-cake</span><span><i
								class="icon-cabinet"></i>icon-cabinet</span><span><i class="icon-busy3"></i>icon-busy3</span><span><i class="icon-busy2"></i>icon-busy2</span><span><i
								class="icon-busy"></i>icon-busy</span><span><i class="icon-bus"></i>icon-bus</span><span><i class="icon-bullhorn"></i>icon-bullhorn</span><span><i
								class="icon-bug2"></i>icon-bug2</span><span><i class="icon-bug"></i>icon-bug</span><span><i class="icon-bubbles6"></i>icon-bubbles6</span><span><i
								class="icon-bubbles5"></i>icon-bubbles5</span><span><i class="icon-bubbles4"></i>icon-bubbles4</span><span><i class="icon-bubbles3"></i>icon-bubbles3</span><span><i
								class="icon-bubbles2"></i>icon-bubbles2</span><span><i class="icon-bubbles"></i>icon-bubbles</span><span><i class="icon-bubble6"></i>icon-bubble6</span><span><i
								class="icon-bubble5"></i>icon-bubble5</span><span><i class="icon-bubble4"></i>icon-bubble4</span><span><i class="icon-bubble3"></i>icon-bubble3</span><span><i
								class="icon-bubble2"></i>icon-bubble2</span><span><i class="icon-bubble"></i>icon-bubble</span><span><i class="icon-bubble-video-chat"></i>icon-bubble-video-chat</span><span><i
								class="icon-bubble-user"></i>icon-bubble-user</span><span><i class="icon-bubble-up"></i>icon-bubble-up</span><span><i
								class="icon-bubble-trash"></i>icon-bubble-trash</span><span><i class="icon-bubble-star"></i>icon-bubble-star</span><span><i class="icon-bubble-right"></i>icon-bubble-right</span><span><i
								class="icon-bubble-reply"></i>icon-bubble-reply</span><span><i class="icon-bubble-replu"></i>icon-bubble-replu</span><span><i class="icon-bubble-quote"></i>icon-bubble-quote</span><span><i
								class="icon-bubble-plus"></i>icon-bubble-plus</span><span><i class="icon-bubble-paperclip"></i>icon-bubble-paperclip</span><span><i
								class="icon-bubble-notification2"></i>icon-bubble-notification2</span><span><i class="icon-bubble-notification"></i>icon-bubble-notification</span><span><i
								class="icon-bubble-minus"></i>icon-bubble-minus</span><span><i class="icon-bubble-locked"></i>icon-bubble-locked</span><span><i class="icon-bubble-link"></i>icon-bubble-link</span><span><i
								class="icon-bubble-left"></i>icon-bubble-left</span><span><i class="icon-bubble-last"></i>icon-bubble-last</span><span><i class="icon-bubble-heart"></i>icon-bubble-heart</span><span><i
								class="icon-bubble-forward2"></i>icon-bubble-forward2</span><span><i class="icon-bubble-forward"></i>icon-bubble-forward</span><span><i class="icon-bubble-first"></i>icon-bubble-first</span><span><i
								class="icon-bubble-down"></i>icon-bubble-down</span><span><i class="icon-bubble-dots2"></i>icon-bubble-dots2</span><span><i class="icon-bubble-dots"></i>icon-bubble-dots</span><span><i
								class="icon-bubble-check"></i>icon-bubble-check</span><span><i class="icon-bubble-cancel"></i>icon-bubble-cancel</span><span><i class="icon-bubble-blocked"></i>icon-bubble-blocked</span><span><i
								class="icon-brightness-medium"></i>icon-brightness-medium</span><span><i class="icon-brightness-low"></i>icon-brightness-low</span><span><i
								class="icon-brightness-high"></i>icon-brightness-high</span><span><i class="icon-brightness-contrast"></i>icon-brightness-contrast</span><span><i
								class="icon-briefcase3"></i>icon-briefcase3</span><span><i class="icon-briefcase2"></i>icon-briefcase2</span><span><i
								class="icon-briefcase"></i>icon-briefcase</span><span><i class="icon-box-remove"></i>icon-box-remove</span><span><i class="icon-box-add"></i>icon-box-add</span><span><i
								class="icon-bottle2"></i>icon-bottle2</span><span><i class="icon-bottle"></i>icon-bottle</span><span><i class="icon-books"></i>icon-books</span><span><i
								class="icon-bookmarks"></i>icon-bookmarks</span><span><i class="icon-bookmark3"></i>icon-bookmark3</span><span><i class="icon-bookmark2"></i>icon-bookmark2</span><span><i
								class="icon-bookmark"></i>icon-bookmark</span><span><i class="icon-book2"></i>icon-book2</span><span><i class="icon-book"></i>icon-book</span><span><i
								class="icon-bold"></i>icon-bold</span><span><i class="icon-boat"></i>icon-boat</span><span><i class="icon-blogger2"></i>icon-blogger2</span><span><i
								class="icon-blogger"></i>icon-blogger</span><span><i class="icon-blog"></i>icon-blog</span><span><i class="icon-blocked"></i>icon-blocked</span><span><i
								class="icon-bishop"></i>icon-bishop</span><span><i class="icon-binoculars"></i>icon-binoculars</span><span><i class="icon-bell"></i>icon-bell</span><span><i
								class="icon-bed2"></i>icon-bed2</span><span><i class="icon-bed"></i>icon-bed</span><span><i class="icon-basket2"></i>icon-basket2</span><span><i
								class="icon-basket"></i>icon-basket</span><span><i class="icon-bars3"></i>icon-bars3</span><span><i class="icon-bars2"></i>icon-bars2</span><span><i
								class="icon-bars"></i>icon-bars</span><span><i class="icon-barcode2"></i>icon-barcode2</span><span><i class="icon-barcode"></i>icon-barcode</span><span><i
								class="icon-balloon"></i>icon-balloon</span><span><i class="icon-balance"></i>icon-balance</span><span><i class="icon-backward2"></i>icon-backward2</span><span><i
								class="icon-backward"></i>icon-backward</span><span><i class="icon-backspace3"></i>icon-backspace3</span><span><i
								class="icon-backspace2"></i>icon-backspace2</span><span><i class="icon-backspace"></i>icon-backspace</span><span><i class="icon-attachment2"></i>icon-attachment2</span><span><i
								class="icon-attachment"></i>icon-attachment</span><span><i class="icon-arrow4"></i>icon-arrow4</span><span><i class="icon-arrow3"></i>icon-arrow3</span><span><i
								class="icon-arrow2"></i>icon-arrow2</span><span><i class="icon-arrow"></i>icon-arrow</span><span><i class="icon-arrow-up11"></i>icon-arrow-up11</span><span><i
								class="icon-arrow-up10"></i>icon-arrow-up10</span><span><i class="icon-arrow-up9"></i>icon-arrow-up9</span><span><i
								class="icon-arrow-up8"></i>icon-arrow-up8</span><span><i class="icon-arrow-up7"></i>icon-arrow-up7</span><span><i class="icon-arrow-up6"></i>icon-arrow-up6</span><span><i
								class="icon-arrow-up5"></i>icon-arrow-up5</span><span><i class="icon-arrow-up4"></i>icon-arrow-up4</span><span><i class="icon-arrow-up3"></i>icon-arrow-up3</span><span><i
								class="icon-arrow-up2"></i>icon-arrow-up2</span><span><i class="icon-arrow-up"></i>icon-arrow-up</span><span><i
								class="icon-arrow-up-right5"></i>icon-arrow-up-right5</span><span><i class="icon-arrow-up-right4"></i>icon-arrow-up-right4</span><span><i
								class="icon-arrow-up-right3"></i>icon-arrow-up-right3</span><span><i class="icon-arrow-up-right2"></i>icon-arrow-up-right2</span><span><i
								class="icon-arrow-up-right"></i>icon-arrow-up-right</span><span><i class="icon-arrow-up-left5"></i>icon-arrow-up-left5</span><span><i class="icon-arrow-up-left4"></i>icon-arrow-up-left4</span><span><i
								class="icon-arrow-up-left3"></i>icon-arrow-up-left3</span><span><i class="icon-arrow-up-left2"></i>icon-arrow-up-left2</span><span><i class="icon-arrow-up-left"></i>icon-arrow-up-left</span><span><i
								class="icon-arrow-right12"></i>icon-arrow-right12</span><span><i class="icon-arrow-right11"></i>icon-arrow-right11</span><span><i class="icon-arrow-right10"></i>icon-arrow-right10</span><span><i
								class="icon-arrow-right9"></i>icon-arrow-right9</span><span><i class="icon-arrow-right8"></i>icon-arrow-right8</span><span><i class="icon-arrow-right7"></i>icon-arrow-right7</span><span><i
								class="icon-arrow-right6"></i>icon-arrow-right6</span><span><i class="icon-arrow-right5"></i>icon-arrow-right5</span><span><i class="icon-arrow-right4"></i>icon-arrow-right4</span><span><i
								class="icon-arrow-right3"></i>icon-arrow-right3</span><span><i class="icon-arrow-right2"></i>icon-arrow-right2</span><span><i class="icon-arrow-right"></i>icon-arrow-right</span><span><i
								class="icon-arrow-left11"></i>icon-arrow-left11</span><span><i class="icon-arrow-left10"></i>icon-arrow-left10</span><span><i class="icon-arrow-left9"></i>icon-arrow-left9</span><span><i
								class="icon-arrow-left8"></i>icon-arrow-left8</span><span><i class="icon-arrow-left7"></i>icon-arrow-left7</span><span><i class="icon-arrow-left6"></i>icon-arrow-left6</span><span><i
								class="icon-arrow-left5"></i>icon-arrow-left5</span><span><i class="icon-arrow-left4"></i>icon-arrow-left4</span><span><i class="icon-arrow-left3"></i>icon-arrow-left3</span><span><i
								class="icon-arrow-left2"></i>icon-arrow-left2</span><span><i class="icon-arrow-left"></i>icon-arrow-left</span><span><i
								class="icon-arrow-first"></i>icon-arrow-first</span><span><i class="icon-arrow-down11"></i>icon-arrow-down11</span><span><i class="icon-arrow-down10"></i>icon-arrow-down10</span><span><i
								class="icon-arrow-down9"></i>icon-arrow-down9</span><span><i class="icon-arrow-down8"></i>icon-arrow-down8</span><span><i class="icon-arrow-down7"></i>icon-arrow-down7</span><span><i
								class="icon-arrow-down6"></i>icon-arrow-down6</span><span><i class="icon-arrow-down5"></i>icon-arrow-down5</span><span><i class="icon-arrow-down4"></i>icon-arrow-down4</span><span><i
								class="icon-arrow-down3"></i>icon-arrow-down3</span><span><i class="icon-arrow-down2"></i>icon-arrow-down2</span><span><i
								class="icon-arrow-down"></i>icon-arrow-down</span><span><i class="icon-arrow-down-right5"></i>icon-arrow-down-right5</span><span><i class="icon-arrow-down-right4"></i>icon-arrow-down-right4</span><span><i
								class="icon-arrow-down-right3"></i>icon-arrow-down-right3</span><span><i class="icon-arrow-down-right2"></i>icon-arrow-down-right2</span><span><i
								class="icon-arrow-down-right"></i>icon-arrow-down-right</span><span><i class="icon-arrow-down-left5"></i>icon-arrow-down-left5</span><span><i
								class="icon-arrow-down-left4"></i>icon-arrow-down-left4</span><span><i class="icon-arrow-down-left3"></i>icon-arrow-down-left3</span><span><i
								class="icon-arrow-down-left2"></i>icon-arrow-down-left2</span><span><i class="icon-arrow-down-left"></i>icon-arrow-down-left</span><span><i class="icon-archive"></i>icon-archive</span><span><i
								class="icon-apple"></i>icon-apple</span><span><i class="icon-apple-fruit"></i>icon-apple-fruit</span><span><i class="icon-angry2"></i>icon-angry2</span><span><i
								class="icon-angry"></i>icon-angry</span><span><i class="icon-android"></i>icon-android</span><span><i class="icon-anchor"></i>icon-anchor</span><span><i
								class="icon-alarm2"></i>icon-alarm2</span><span><i class="icon-alarm"></i>icon-alarm</span><span><i class="icon-airplane2"></i>icon-airplane2</span><span><i
								class="icon-airplane"></i>icon-airplane</span><span><i class="icon-aid"></i>icon-aid</span><span><i class="icon-address-book"></i>icon-address-book</span><span><i
								class="icon-accessibility2"></i>icon-accessibility2</span><span><i class="icon-accessibility"></i>icon-accessibility</span></div>
				<!-- /icon classes -->

			</div>
		</div>
	</div>
@stop  	
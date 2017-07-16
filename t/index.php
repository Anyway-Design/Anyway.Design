<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cmn-Hans">
	<head>
		<title>Anyway.页面跳转</title>
		<meta charset="UTF-8">
		<meta name="robots" content="noodp"/>
		<meta name="author" content="JJ Ying" />
		<meta name="description" content="★"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />			
		<style>
			*{
				margin: 0;
				padding: 0;
				border: 0;
				vertical-align: baseline;
				outline: none;
				box-sizing: border-box;
				-webkit-tap-highlight-color: transparent;
			}
			body{
				font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",sans-serif;
				background: #f5f5f5;
				color: #444;
			}
			main{
				width: 70rem;
				max-width: 70%;
				height: auto;
				margin: 8% auto 0;
				display: block;
			}
			section{
				margin: 20% auto 0;
				text-align: center;
			}
			h1,
			h2{
				font-size: 1.6rem;
				font-weight: 700;
				text-align: center;
				line-height: 1;
				color: #666;
			}
			h2{
				font-size: .875rem;
				font-weight: 300;
				color: #aaa;
				margin: 1em 0 0;
			}
			h2 a{
				color: #aaa;
			}
			@media screen and (max-width: 1000px) {
				body{
					font-size: .5em;
				}
				.main{
					max-width: 95%;
				}
			}
		</style>
	</head>
	<body>
	
	<script>
		function getString(name){
			var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)")
			var r = window.location.search.substr(1).match(reg)			
			url = encodeURI(r[2])
			if(r!=null)
				{
					return unescape(url)
				}
			return null
		}
		
		var newUrl = getString("t")		
		setTimeout(function(){window.location.href=newUrl},0)
		
	</script>
	<section class="loader">
	  <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	     width="40px" height="40px" viewBox="0 0 40 40" xml:space="preserve">
	    <path opacity="1" fill="#666" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
	      s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
	      c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"/>
	    <path fill="#ffe324" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
	      C22.32,8.481,24.301,9.057,26.013,10.047z">
	      <animateTransform attributeType="xml"
	        attributeName="transform"
	        type="rotate"
	        from="0 20 20"
	        to="360 20 20"
	        dur="0.8s"
	        repeatCount="indefinite"/>
	      </path>
	    </svg>
	</section>	
	<main>
		<h1>跳转到以下页面中...</h1>
		<h2><a href='<?php echo($_GET['t']); ?>'><?php echo($_GET['t']); ?></a></h2>
	</main>
	



	
	
	<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "https://hm.baidu.com/hm.js?e504a84b35d39da2620d74bea38d9ef3";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>

	</body>
</html>
			
	
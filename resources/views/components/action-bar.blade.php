
<header x-data="{menus:@js($menus)}" class="appbar">
	<div class="brand">
		<img src="{{ asset('images/logo.png') }}"/>
	</div>
	
	<nav>
		<template x-for="(menu, idx) in menus" :key="idx">
			<a class="button transparent"><i class="fa-brands fa-square-facebook"></i></a>
		<a class="button transparent">最新消息</a>
		<a class="button transparent">品牌故事</a>
		<a class="button transparent">美味餐點</a>
		<a class="button transparent">線上訂餐</a>
		<a class="button transparent">加入我們</a>
		<a class="button transparent">加盟合作</a>
		</template>
	</nav>
</header>
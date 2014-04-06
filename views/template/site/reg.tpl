{extends file="base.tpl"}
{block name="header"}
	<div data-role="header">	
		<h3>{#registration#}</h3>
	</div>	
{/block}
{block name="page"}
	<center>
		<form action="registration.php" method="POST" style="width: 30%;">
			<input type="text" name="email" value="" placeholder="{#e_mail#}">
			<input type="password" name="password" value="" placeholder="{#password#}">
			<input type="password" name="password_c" value="" placeholder="{#password_c#}">
			<input type="submit" value="{#registration#}">
		</form>
		<a href="login.php" class="page-30 ui-btn ui-btn-b" style="width: 30%;">{#into_index#}</a>
	</center>
{/block}
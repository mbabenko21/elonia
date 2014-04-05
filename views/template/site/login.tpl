{extends file="base.tpl"}
{block name="page_title"}{#base_page_title#}{/block}
{block name="page"}
	<center>
			<form action="login.php" method="POST">
				<fieldset data-role="controlgroup" style="width: 30%;">
					<input type="text" name="email" value="" placeholder="{#e_mail#}">
					<input type="password" name="password" value="" placeholder="{#password#}">
					<input type="checkbox" name="remember" id="checkbox-1a" value="1" checked/> 
					<label for="checkbox-1a">{#remember_me#}</label>
					<input type="submit" value="{#sign_in#}">
				</fieldset>
			</form>
			<a href="registration.php" class="page-30 ui-btn ui-btn-b" style="width: 30%;">{#registration#}</a>
	</center>
{/block}
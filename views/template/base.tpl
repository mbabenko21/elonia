{config_load file="views.conf"}
{config_load file="lang_ru.conf"}
<!DOCTYPE html>
	<html>
		<head>
			<title>{block name="page_title"}Page Title{/block}</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="{$smarty.config.jquery_mobile_css_structure}">
			<link rel="stylesheet" type="text/css" href="{$smarty.config.jquery_mobile_css_theme}">
			<link rel="stylesheet" type="text/css" href="{$smarty.config.jquery_mobile_css_icons}">
			<script type="text/javascript" src="{$smarty.config.jquery_js}"></script>
			<script type="text/javascript" src="{$smarty.config.jquery_mobile_js}"></script>
		</head>
		<body>
			<div data-role="page">
				{block name="header"}
					<div data-role="header">
						<h3>{#base_page_title#}</h3>
					</div>
				{/block}
				{block name="page"}{/block}
				{block name="footer"}
					<div data-role="footer">
						<h3>&copy; Elonia team, 2014</h3>
					</div>
				{/block}
			</div>
		</body>
	</html>
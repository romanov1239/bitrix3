<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'js' =>[
		'/bitrix/js/ui/vue/components/audioplayer/dist/audioplayer.bundle.js',
	],
	'css' => [
		'/bitrix/js/ui/vue/components/audioplayer/dist/audioplayer.bundle.css',
	],
	'rel' => [
		'main.polyfill.core',
		'ui.fonts.opensans',
		'main.polyfill.intersectionobserver',
		'ui.vue',
		'main.core.events',
	],
	'skip_core' => true,
];
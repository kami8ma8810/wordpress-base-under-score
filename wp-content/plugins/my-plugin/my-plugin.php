<?php
/*
 * Plugin Name: マイプラグイン
 * Description: 自作プラグイン
 * Version: 1.0
 * Author: Hayato Kamiyama
*/

/*
フィルターフックの登録
※必ずreturnで返す
※管理画面の編集などはフィルターフックを使うことが多い
 */
// add_filter('the_title',function($title){
// 	return '■' . $title;
// });

/*
ショートコードの登録
 */
add_shortcode( 'sum', function($atts){
	// デフォルト値の設定
	$atts = shortcode_atts(['x'=>0, 'y'=>0], $atts, 'sum');
	return $atts['x'] + $atts['y'];
});

add_shortcode('date',function(){
	return date('Y年n月j日');
});

// ブロックエディタにJavaScriptを読み込む
//myeditor-script（ハンドル名）は任意の名前
//__FILE__は同階層にある場合の記述。別の場合は相対パス
add_action('enqueue_block_editor_assets',function(){
	wp_enqueue_script('myeditor-script',
	plugins_url('myeditor.js',__FILE__),
	['wp-blocks']);
});
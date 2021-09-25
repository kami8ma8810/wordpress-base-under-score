<p>商品名：<?php the_title(); ?>
</p>

<!-- カスタムフィールドの表示 -->
<?php $price = get_post_meta(get_the_ID(), '価格', true); ?>
<?php $publisher = get_post_meta(get_the_ID(), '出版社', true); ?>
<!-- 配列として取得する場合は$singleをfalse -->
<?php $writer = get_post_meta(get_the_ID(), '著者', false); ?>
<dl>
	<?php if ($price !==''): ?>
	<dt>価格</dt>
	<!--3桁ごとにカンマ：number_format()-->
	<!-- 入力がある場合のみ出力 -->
	<dd><?php echo esc_html(number_format($price)); ?>円</dd>
	<?php endif; ?>
	<?php if ($publisher !== ''): ?>
	<dt>出版社</dt>
	<dd><?php echo esc_html($publisher); ?>
	</dd>
	<?php endif; ?>
	<?php if ($writer): ?>
	<dt>著者</dt>
	<?php foreach ($writer as $w): ?>
	<dd><?php echo esc_html($w); ?>
	</dd>
	<?php endforeach; ?>
	<?php endif; ?>
</dl>

<?php

use yii\helpers\Html;
use humhub\modules\socialshare\assets\Assets;

Assets::register($this);
?>
<span class="shareLinkContainer">
	<div class="pull-right" id="">
		<?php
		$option = "
			var width = 575,
				height = 400,
				left = ($(window).width() - width) / 2,
				top = ($(window).height() - height) / 2,
				url = this.href;
				opts = 'status=1' +
	                ',width=' + width +
	                ',height=' + height +
	                ',top=' + top +
	                ',left=' + left;

	            window.open(url, 'share', opts);

	            return false;

			";
		?>
    	<?= Html::a('<i class="fa fa-facebook" style="font-size:16px;color:#3a5795">&nbsp;</i>', 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode((string)$permalink) . '&description=' . urlencode((string)$object->getContentDescription()), ['onclick' => $option]); ?>
    	<?= Html::a('<i class="fa fa-x" style="font-size:16px;color:#newColor">&nbsp;</i>', 'https://twitter.com/intent/tweet?text=' . urlencode((string)$object->getContentDescription()) . '&url=' . urlencode((string)$permalink), ['onclick' => $option]); ?>
    	<?= Html::a('<i class="fa fa-linkedin-square" style="font-size:16px;color:#0177b5">&nbsp;</i>', 'https://www.linkedin.com/shareArticle?summary=&mini=true&source=&title=' . urlencode((string)$object->getContentDescription()) . '&url=' . urlencode((string)$permalink) . '&ro=false', ['onclick' => $option]); ?>

    	<?= Html::a('<i class="fa fa-threads" style="font-size:16px;color:#threadsColor">&nbsp;</i>', 'https://threads.com/share?text=' . urlencode((string)$object->getContentDescription()) . '&url=' . urlencode((string)$permalink), ['onclick' => $option]); ?>
    	<?= Html::a('<i class="fa fa-instagram" style="font-size:16px;color:#instagramColor">&nbsp;</i>', 'https://www.instagram.com/share?text=' . urlencode((string)$object->getContentDescription()) . '&url=' . urlencode((string)$permalink), ['onclick' => $option]); ?>
    	<?= Html::a('<i class="fa fa-bluesky" style="font-size:16px;color:#blueskyColor">&nbsp;</i>', 'https://bluesky.com/share?text=' . urlencode((string)$object->getContentDescription()) . '&url=' . urlencode((string)$permalink), ['onclick' => $option]); ?>
    	<?= Html::a('<i class="fa fa-mastodon" style="font-size:16px;color:#mastodonColor">&nbsp;</i>', 'https://mastodon.social/share?text=' . urlencode((string)$object->getContentDescription()) . '&url=' . urlencode((string)$permalink), ['onclick' => $option]); ?>
	</div>
</span>


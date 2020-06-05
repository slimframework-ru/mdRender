<?php
/**
 * @var array $googleAds
 * @var bool $googleAdsShow
 * @var string $googleAdsFormat
 * @var string $googleAdsLayout
 * @var string $googleAdsClient
 * @var string $googleAdsSlot
 */
extract($googleAds);
?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle" style="display:block" data-ad-format="<?=$googleAdsFormat;?>" data-ad-layout-key="<?=$googleAdsLayout;?>" data-ad-client="<?=$googleAdsClient;?>" data-ad-slot="<?=$googleAdsSlot;?>"></ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>

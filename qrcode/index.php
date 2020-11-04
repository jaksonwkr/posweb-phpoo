<?php
    require_once "vendor/autoload.php";

    use BaconQrCode\Renderer\ImageRenderer;
    use BaconQrCode\Renderer\Image\SvgImageBackEnd;
    use BaconQrCode\Renderer\RendererStyle\RendererStyle;
    use BaconQrCode\Writer;

    $renderer = new ImageRenderer(
        new RendererStyle(400),
        new SvgImageBackEnd()
    );
    $writer = new Writer($renderer);
    $writer->writeFile('https://packagist.org/packages/bacon/bacon-qr-code', 'qrcode.svg');

    echo '<img src="/qrcode.svg"></img>';
?>
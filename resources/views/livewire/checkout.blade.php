<div>
  @if ($qrCodePix)
    <h2>Pagamento via Pix</h2>
    <img src="https://api.qrserver.com/v1/create-qr-code/?data={{ urlencode($qrCodePix) }}&size=250x250" alt="QR Code Pix">
    <p>Escaneie com o app do seu banco</p>
  @endif
</div>

<?php
echo $rc->dni_cliente;

// echo $rc->Clase_plaza->get()->nombre_clase;
?>

<a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=24449250-4ac0f40a-2998-457c-a211-2203ac9f0324" 
		name="MP-payButton" class='green-ar-l-rn-none'>Pagar</a>
<script type="text/javascript">
(function(){function $MPBR_load(){window.$MPBR_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = ("https:"==document.location.protocol?"https://www.mercadopago.com/org-img/jsapi/mptools/buttons/":"http://mp-tools.mlstatic.com/buttons/")+"render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPBR_loaded = true;})();}window.$MPBR_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPBR_load) : window.addEventListener('load', $MPBR_load, false)) : null;})();
</script>


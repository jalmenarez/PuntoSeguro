<div class="grid_10 push_1 formStyleGeoSearch formRegLocal">
<section role="main">
    <h3>Registro de nuevo Punto Seguro</h3>
    <?php include_partial('form', array('form' => $form)) ?>
</section>
</div>



<script type="text/javascript">
$().ready(function() {
GeoSearch.autoFormStyle($('form'));
Local.initFormCreateNew();
});
</script>